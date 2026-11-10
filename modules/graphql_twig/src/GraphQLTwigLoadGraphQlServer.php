<?php

namespace Drupal\graphql_twig;

use Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException;
use Drupal\Component\Plugin\Exception\PluginNotFoundException;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\graphql\Entity\ServerInterface;

class GraphQLTwigLoadGraphQlServer {
  /**
   * The GraphQL server.
   *
   * @var \Drupal\graphql\Entity\ServerInterface
   */
  protected ServerInterface $graphQlServer;


  public function __construct(EntityTypeManagerInterface $entityTypeManager = NULL, ConfigFactoryInterface $configFactory = NULL,) {
    $this->graphQlServer = $this->loadGraphQlServer($entityTypeManager, $configFactory);
  }

  /**
   * Retrieve the GraphQL server.
   *
   * @return \Drupal\graphql\Entity\ServerInterface
   *   The GraphQL server.
   */
  public function getGraphQlServer(): ServerInterface {
    return $this->graphQlServer;
  }

  /**
   * Loads a GraphQL server to be used with GraphQL Twig.
   *
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entityTypeManager
   * @param \Drupal\Core\Config\ConfigFactoryInterface $configFactory
   *
   * @return \Drupal\graphql\Entity\ServerInterface
   *   In fact, it can return NULL. See the last return statement.
   */
  public function loadGraphQlServer(
    EntityTypeManagerInterface $entityTypeManager,
    ConfigFactoryInterface $configFactory
  ): ?ServerInterface {
    $server = NULL;
    $serverId = $configFactory->get('graphql_twig.settings')->get('graphql_server_id');
    if ($serverId) {
      try {
        $server = $entityTypeManager->getStorage('graphql_server')->load($serverId);
      } catch (InvalidPluginDefinitionException|PluginNotFoundException $e) {
        trigger_error("Error loading 'graphql_server' with '$serverId'.", E_USER_ERROR);
      }
      if (!$server) {
        trigger_error("GraphQL server '$serverId' was not found. A first found server will be used.", E_USER_WARNING);
      }
    }
    else {
      trigger_error("'graphql_server_id' is not set in 'graphql_twig.settings' config. A first found server will be used.", E_USER_WARNING);
    }
    if (!$server) {
      try {
        $servers = $entityTypeManager->getStorage('graphql_server')->loadMultiple();
        $server = reset($servers);
      } catch (InvalidPluginDefinitionException|PluginNotFoundException $e) {
        trigger_error("Error loading 'graphql_server' with multiple.", E_USER_ERROR);
      }

      if (!$server) {
        trigger_error('No GraphQL servers found. GraphQL Twig will not work.', E_USER_ERROR);
      }
    }
    if ($server instanceof ServerInterface) {
      return $server;
    }
    // Things will break. But at least there will be a chance to configure the
    // server.
    return NULL;
  }
}
