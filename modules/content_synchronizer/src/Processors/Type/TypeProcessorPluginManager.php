<?php

namespace Drupal\content_synchronizer\Processors\Type;

use Drupal\Core\Plugin\DefaultPluginManager;
use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * The type processor manager.
 */
class TypeProcessorPluginManager extends DefaultPluginManager {
  const SERVICE_NAME = 'plugin.manager.content_synchronizer.type_processor';
  const PACKAGE_NAME = 'type_processor';

  /**
   * Instances.
   *
   * @var array
   */
  private static $instances = [];

  /**
   * Service container.
   *
   * @var \Drupal\Component\DependencyInjection\ContainerInterface
   */
  protected ContainerInterface $container;

  /**
   * {@inheritdoc}
   */
  public function __construct(
    \Traversable $namespaces,
    CacheBackendInterface $cache_backend,
    ModuleHandlerInterface $module_handler,
    ContainerInterface $container
  ) {
    parent::__construct(
      'Plugin/content_synchronizer/' . self::PACKAGE_NAME,
      $namespaces,
      $module_handler,
      'Drupal\content_synchronizer\Processors\Type\TypeProcessorInterface',
      'Drupal\content_synchronizer\Annotation\TypeProcessor');

    $this->alterInfo('content_synchronizer_type_processor_info');
    $this->setCacheBackend($cache_backend, 'content_synchronizer_type_processor_info');
    $this->container = $container;

  }

  /**
   * Return the plugin by field type.
   */
  public function getInstanceByFieldType($fieldType) {
    foreach ($this->getDefinitions() as $pluginId => $definition) {
      if ($definition['fieldType'] == $fieldType) {
        return self::createInstance($pluginId, []);
      }
    }

    return DefaultTypeProcessor::create($this->container, [], 'type_processor_default', []);
  }

  /**
   * {@inheritdoc}
   */
  public function createInstance($plugin_id, array $configuration = []) {
    if (!array_key_exists($plugin_id, static::$instances)) {
      static::$instances[$plugin_id] = parent::createInstance($plugin_id, $configuration);
    }
    return static::$instances[$plugin_id];
  }

}
