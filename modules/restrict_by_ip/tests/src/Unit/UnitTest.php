<?php

namespace Drupal\Tests\restrict_by_ip\Unit;

use Drupal\Tests\UnitTestCase;
use Drupal\restrict_by_ip\IPTools;
use Drupal\restrict_by_ip\Exception\InvalidIPException;

/**
 * Test the restrict by ip module.
 *
 * @group restrict_by_ip
 */
class UnitTest extends UnitTestCase {

  /**
   * Invalid IPs.
   *
   * @return array
   *   Invalid IPs and reason.
   */
  public function invalidIpProvider() {
    return [
      // IPv4 invalid addresses
      ['string', 'Not an IP address'],
      ['127.0.0.1', 'Missing CIDR mask'],
      ['127.0.1', 'Not enough octets'],
      ['127.0.0.1/8', 'Invalid /8'],
      ['127.0.0.1/16', 'Invalid /16'],
      ['127.0.0.1/24', 'Invalid /24'],
      ['not.an.ip.address/8', 'Invalid octets'],
      ['192.168.256.1/32', 'Out of range octet'],
      ['192.168.-1.1/32', 'Out of range octet'],
      ['127.0.0.1/octet', 'Invalid CIDR mask'],
      ['127.0.0.1/33', 'Out of range CIDR mask'],
      ['127.0.0.1/-1', 'Out of range CIDR mask'],
      // IPv6 invalid addresses
      ['2001:db8', 'Missing CIDR mask for IPv6'],
      ['2001:db8::/129', 'Out of range CIDR mask for IPv6'],
      ['2001:db8::/-1', 'Negative CIDR mask for IPv6'],
      ['2001:db8::/octet', 'Invalid CIDR mask for IPv6'],
      ['2001:zzzz::/64', 'Invalid hexadecimal in IPv6'],
      ['2001::db8::1/64', 'Too many :: in IPv6'],
      ['2001:db8:1:2:3:4:5:6:7/64', 'Too many segments in IPv6'],
      ['2001:db8:1:2:3:4:5:6:7:8/64', 'Too many segments in IPv6'],
      ['2001:db8:1:2:3:4:5:6:7:8:9/64', 'Too many segments in IPv6'],
      ['2001:db8:1:2:3:4:5:6:7:8:9:10/64', 'Too many segments in IPv6'],
    ];
  }

  /**
   * Valid IPs.
   *
   * @return array
   *   Valid IPs and reason.
   */
  public function validIpProvider() {
    return [
      // IPv4 addresses
      ['127.0.0.0/8', 'Valid /8'],
      ['127.1.0.0/16', 'Valid /16'],
      ['127.1.1.0/24', 'Valid /24'],
      ['127.0.0.1/32', 'Valid /32'],
      // IPv6 addresses
      ['2001:db8::/32', 'Valid IPv6 /32'],
      ['2001:db8:1::/48', 'Valid IPv6 /48'],
      ['2001:db8:1:2::/64', 'Valid IPv6 /64'],
      ['2001:db8:1:2:3:4:5:6/128', 'Valid IPv6 /128'],
      ['::1/128', 'IPv6 loopback'],
      ['::/128', 'IPv6 unspecified address'],
      ['fe80::/10', 'IPv6 link-local'],
      ['fc00::/7', 'IPv6 unique local'],
    ];
  }

  /**
   * Tests IP fail validation.
   *
   * @param string $ip
   *   IP address to be tested.
   *
   * @dataProvider invalidIpProvider
   */
  public function testIpFailValidation($ip) {
    $this->expectException(InvalidIPException::class);
    IPTools::validateIP($ip);
  }

  /**
   * Tests IP valid validation.
   *
   * @param string $ip
   *   IP address to be tested.
   *
   * @dataProvider validIpProvider
   */
  public function testIpPassValidation($ip) {
    $this->assertNull(IPTools::validateIP($ip));
  }

}
