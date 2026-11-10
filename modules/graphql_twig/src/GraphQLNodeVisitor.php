<?php

namespace Drupal\graphql_twig;

use Twig\NodeVisitor\AbstractNodeVisitor;
use Twig\Node\Node;
use Twig\Node\ModuleNode;
use Twig\Environment;
use Twig\Node\Expression\ConstantExpression;
use Twig\Node\EmbedNode;
use Twig\Node\IncludeNode;

/**
 * Scans a Twig template for query fragments and references to other templates.
 */
class GraphQLNodeVisitor extends AbstractNodeVisitor {

  /**
   * The query string.
   *
   * @var string
   */
  protected $query = '';

  /**
   * The parent template identifier.
   *
   * @var string
   */
  protected $parent = '';

  /**
   * A list of referenced templates (include, embed).
   *
   * @var string[][]
   */
  protected $includes = [];

  /**
   * {@inheritdoc}
   */
  public function getPriority() {
    return 0;
  }

  /**
   * {@inheritdoc}
   */
  protected function doEnterNode(Node $node, Environment $env) {

    if ($node instanceof ModuleNode) {

      // If there is a parent node (created by `extends` or `embed`),
      // store it's identifier.
      if ($node->hasNode('parent')) {
        $parent = $node->getNode('parent');
        if ($parent instanceof ConstantExpression) {
          $this->parent = $parent->getAttribute('value');
        }
      }

      // Recurse into embedded templates.
      foreach ($node->getAttribute('embedded_templates') as $embed) {
        $this->doEnterNode($embed, $env);
      }
    }

    // Store identifiers of any static includes.
    // There is no way to make this work for dynamic includes.
    if ($node instanceof IncludeNode && !($node instanceof EmbedNode)) {
      $ref = $node->getNode('expr');
      if ($ref instanceof ConstantExpression) {
        $this->includes[$node->getTemplateName()][] = $ref->getAttribute('value');
      }
    }

    // When encountering a GraphQL fragment, add it to the current query.
    if ($node instanceof GraphQLFragmentNode) {
      $this->query .= $node->fragment;
    }

    return $node;
  }

  /**
   * {@inheritdoc}
   */
  protected function doLeaveNode(Node $node, Environment $env) {
    if ($node instanceof ModuleNode) {
      // Store current query information to be compiled into the templates
      // `class_end`.
      $includes = isset($this->includes[$node->getTemplateName()]) ? $this->includes[$node->getTemplateName()] : [];
      $node->setNode('class_end', new Node([new GraphQLNode($this->query, $this->parent, $includes), $node->getNode('class_end')]));

      // Reset query information for the next module.
      $this->query = '';
      $this->parent = '';
    }
    return $node;
  }

}
