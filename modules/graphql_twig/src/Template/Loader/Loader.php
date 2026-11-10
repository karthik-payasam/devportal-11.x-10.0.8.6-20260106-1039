<?php

namespace Drupal\graphql_twig\Template\Loader;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ThemeExtensionList;
use Drupal\Core\File\Exception\FileException;
use Drupal\Core\File\FileSystemInterface;
use Drupal\Core\Logger\LoggerChannelFactoryInterface;
use Drupal\Core\Theme\ThemeManagerInterface;
use Twig\Loader\FilesystemLoader;
use Twig\Error\LoaderError;

/**
 * Filesystem loader that will search for fractal component shortnames.
 */
class Loader extends FilesystemLoader {

  /**
   * Provides high level access to the active theme and methods to use it.
   *
   * @var \Drupal\Core\Theme\ThemeManagerInterface
   */
  protected $themeManager;

  /**
   * Static component lookup cache.
   *
   * @var array
   */
  protected $components = NULL;

  /**
   * Defines an interface for cache implementations.
   *
   * @var \Drupal\Core\Cache\CacheBackendInterface
   */
  protected $cacheBackend;

  /**
   * @var array
   */
  protected $twigConfig;

  /**
   * Provides an interface for helpers that operate on files and stream wrappers.
   *
   * @var \Drupal\Core\File\FileSystemInterface
   */
  protected $fileSystem;

  /**
   * Provides a list of available themes.
   *
   * @var \Drupal\Core\Extension\ThemeExtensionList
   */
  protected $themeExtensionList;

  /**
   * The logger.
   *
   * @var \Drupal\Core\Logger\LoggerChannelFactoryInterface
   */
  protected $logger;

  /**
   * Constructor.
   */
  public function __construct(
    ThemeManagerInterface $themeManager,
    array $twigConfig,
    CacheBackendInterface $cacheBackend,
    $paths,
    FileSystemInterface $fileSystem,
    ThemeExtensionList $themeExtensionList,
    LoggerChannelFactoryInterface $logger,
    $rootPath = NULL
  ) {
    parent::__construct($paths, $rootPath);
    $this->cacheBackend = $cacheBackend;
    $this->twigConfig = $twigConfig;
    $this->themeManager = $themeManager;
    $this->fileSystem = $fileSystem;
    $this->themeExtensionList = $themeExtensionList;
    $this->logger = $logger->get('graphql_twig');
  }

  /**
   * List all components found within a specific path.
   *
   * @param string $path
   *   The directory to scan for.
   *
   * @return string[]
   *   Map of component filenames keyed by component handle.
   */
  protected function listComponents($path) {
    if (isset($this->twigConfig['cache']) && $cache = $this->cacheBackend->get($path)) {
      return $cache->data;
    }

    try {
      foreach ($this->fileSystem->scanDirectory($path, '/.*\.twig$/') as $file) {
        $this->components[$file->name] = $file->uri;
      }
    }
    catch (FileException $exception) {
      $this->logger->error($exception->getMessage());
    }

    if (isset($this->twigConfig['cache'])) {
      $this->cacheBackend->set($path, $this->components);
    }

    return $this->components;

  }

  /**
   * {@inheritdoc}
   * @throws \Twig\Error\LoaderError
   */
  protected function findTemplate($name, $throw = TRUE) {
    if ($name[0] === '#') {
      if (is_null($this->components)) {
        // Scan the directory for any twig files and register them.
        // TODO: inherit components from base theme.
        $activeTheme = $this->themeManager->getActiveTheme();
        $info = $this->themeExtensionList->getExtensionInfo($activeTheme->getName());
        $componentsDirectory = array_key_exists('components', $info)
          ? $info['components']
          : $activeTheme->getPath() . '/components';

        if (is_string($componentsDirectory) && is_dir($componentsDirectory)) {
          $this->components = $this->listComponents($componentsDirectory);
        }
      }

      $component = substr($name, 1);
      if (array_key_exists($component, $this->components)) {
        return $this->components[$component];
      }
    }

    if (!$throw) {
     return null;
    }

    throw new LoaderError($this->errorCache[$name]);
  }

}
