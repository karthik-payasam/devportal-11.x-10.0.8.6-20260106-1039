<?php

namespace Drupal\restrict_by_ip;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\restrict_by_ip\Exception\InvalidIPException;
use Drupal\restrict_by_ip\Exception\IPOutOfRangeException;
use Symfony\Component\HttpFoundation\IpUtils;

/**
 * Class IPTools.
 *
 * @package Drupal\restrict_by_ip
 */
class IPTools implements IPToolsInterface {

  protected $config;

  public function __construct(ConfigFactoryInterface $config_factory) {
    $this->config = $config_factory->get('restrict_by_ip.settings');
  }

  /**
   * {@inheritdoc}
   */
  public function getUserIP() {
    $header = $this->config->get('header');
    $ip_address = '';

    if (!empty($_SERVER[$header])) {
      $ip_address = $_SERVER[$header];
    }

    return $ip_address;
  }

  /**
   * {@inheritdoc}
   */
  public static function validateIPv4($cidr) {
    $ipaddr = explode(".", $cidr[0]);

    // Check four octets entered.
    if (count($ipaddr) != 4) {
      throw new InvalidIPException('IP address must have four octets.');
    }

    // Check each octet is valid - numeric and 0 < value < 255.
    for ($i = 0; $i < count($ipaddr); $i++) {
      if ((!is_numeric($ipaddr[$i])) || ($ipaddr[$i] < 0) || ($ipaddr[$i] > 255)) {
        throw new InvalidIPException('Octet must be between 0 and 255.');
      }
    }

    // Check cidr mask value - numeric and 0 < value < 33.
    if ((!is_numeric($cidr[1])) || ($cidr[1] < 1) || ($cidr[1] > 32)) {
      throw new InvalidIPException('Routing prefix must be between 0 and 32.');
    }

    // For IPv4, check if the IP is a valid network address for the given
    // CIDR block.
    $ip_long = ip2long($cidr[0]);
    $mask = ~((1 << (32 - $cidr[1])) - 1);
    $network_address_long = $ip_long & $mask;

    // If the IP is not a network address, throw an exception.
    if ($ip_long !== $network_address_long) {
      throw new InvalidIPException('IP address and routing prefix are not a valid combination.');
    }
  }

  /**
   * {@inheritdoc}
   */
  public static function validateIPv6($ip) {
    // fast exit for localhost
    if (strlen($ip) < 3) return $ip == '::';

    // Check if part is in IPv4 format
    if (strpos($ip, '.')) {
      $lastcolon = strrpos($ip, ':');
      if (!$lastcolon) {
        throw new InvalidIPException('IPv6 Address in Incorrect Format.');
      }
      $ipv4 = substr($ip, $lastcolon + 1);
      if($ipv4 == long2ip(ip2long($ipv4))) {
        throw new InvalidIPException('IPv6 Address in Incorrect Format.');
      }

      // replace IPv4 part with dummy
      $ip = substr($ip, 0, $lastcolon) . ':0:0';
    }

    // check uncompressed
    if (strpos($ip, '::') === false) {
      if(preg_match('/^(?:[a-f0-9]{1,4}:){7}[a-f0-9]{1,4}$/i', $ip)) {
        return TRUE;
      }
      throw new InvalidIPException('IPv6 Address in Incorrect Format.');
    }

    // check colon-count for compressed format
    if (substr_count($ip, ':') < 8) {
      if(preg_match('/^(?::|(?:[a-f0-9]{1,4}:)+):(?:(?:[a-f0-9]{1,4}:)*[a-f0-9]{1,4})?$/i', $ip)) {
        return TRUE;
      }
      throw new InvalidIPException('IPv6 Address in Incorrect Format.');
    }

    throw new InvalidIPException('IPv6 Address in Incorrect Format.');
  }

  /**
   * {@inheritdoc}
   */
  public static function validateIP($ip) {
    // Separate in to address and CIDR mask.
    $cidr = explode("/", $ip);

    // Check address and cidr mask entered.
    if (count($cidr) !== 2) {
      throw new InvalidIPException('IP address must be in CIDR notation.');
    }

    // Check if address is IPv4 address.
    if (preg_match("/\./", $cidr[0])) {
      self::validateIPv4($cidr);
    }
    // Check if address is IPv6 address
    elseif  (preg_match("/:/", $cidr[0])) {
      self::validateIPv6($cidr[0]);
    } else {
      throw new InvalidIPException('IP Address in Incorrect Format.');
    }

    // Check the validity of the network address in the given CIDR block,
    // by ensuring that the network address part is valid within the
    // CIDR block itself. If it's not, the notation is invalid.
    try {
      self::validateCIDR($cidr[0], $ip);
    }
    catch (IPOutOfRangeException $e) {
      throw new InvalidIPException('IP address and routing prefix are not a valid combination.');
    }
  }

  /**
   * {@inheritdoc}
   */
  public static function validateCIDR($ip, $range) {
    if(IpUtils::checkIp($ip, $range)) {
      return TRUE;
    }

    // Only returns 1 if the valid network
    // and the subnet of the ip address
    // to check are the same.
    throw new IPOutOfRangeException('IP address and routing prefix are not a valid combination.');
  }

}
