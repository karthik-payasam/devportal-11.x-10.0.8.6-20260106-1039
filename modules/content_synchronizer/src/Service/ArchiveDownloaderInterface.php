<?php

namespace Drupal\content_synchronizer\Service;

/**
 * Archive downloader interface.
 */
interface ArchiveDownloaderInterface {

  const SERVICE_NAME = 'content_synchronizer.archive_downloader';

  /**
   * Donwload archive by adding js library.
   *
   * @param array $vars
   *   Preprocess data.
   */
  public function donwloadArchive(array &$vars);

  /**
   * Return true if the current page is admin.
   *
   * @see https://drupal.stackexchange.com/questions/219370/how-to-test-if-current-page-is-an-admin-page
   *
   * @return bool
   *   True if can download.
   */
  public function canDownload(): bool;

  /**
   * Redirect to the page with download.
   *
   * @param string $redirectUrl
   *   The url.
   * @param string $archiveUri
   *   The archiev url.
   */
  public function redirectWithArchivePath(string $redirectUrl, string $archiveUri);

}
