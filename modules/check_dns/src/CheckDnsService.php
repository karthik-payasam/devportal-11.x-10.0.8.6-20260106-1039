<?php

namespace Drupal\check_dns;

/**
 * Defines the CheckDns service.
 */
class CheckDnsService {

  /**
   * Constructs a new CheckDnsService.
   */
  public function __construct() {
  }

  /**
   * Validate email id and its DNS record.
   *
   * @param string $mail
   *   A mail to check.
   *
   * @return bool
   *   TRUE if email is valid and any records are found, FALSE otherwise.
   */
  public function validateEmail($mail) {
    // Validate e-mail.
    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
      $mail = explode('@', $mail);
      return $this->validateHost(end($mail));
    }
    else {
      return FALSE;
    }
  }

  /**
   * Validate whether a domain name exists or not.
   *
   * @param string $host
   *   A host to check.
   *
   * @return bool
   *   TRUE if any records are found, FALSE otherwise.
   */
  public function validateHost(string $host) {
    // Check the DNS records corresponding to the hostname or IP address.
    $result = dns_check_record($host);
    return $result;
  }

}
