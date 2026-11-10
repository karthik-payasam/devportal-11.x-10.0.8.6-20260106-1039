<?php

namespace Drupal\graphql_twig;

use Twig\Extension\AbstractExtension;

/**
 * Simple Twig extension to integrate GraphQL.
 */
class GraphQLTwigExtension extends AbstractExtension {

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return get_class($this);
  }

  /**
   * {@inheritdoc}
   */
  public function getTokenParsers() {
    return [new GraphQLTokenParser()];
  }

  /**
   * {@inheritdoc}
   */
  public function getNodeVisitors() {
    return [new GraphQLNodeVisitor()];
  }

}
