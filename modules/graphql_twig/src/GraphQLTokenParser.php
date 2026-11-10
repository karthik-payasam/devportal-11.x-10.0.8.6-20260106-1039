<?php

namespace Drupal\graphql_twig;

use GraphQL\Error\SyntaxError;
use Twig\TokenParser\AbstractTokenParser;
use Twig\Error\SyntaxError as Twig_Error_Syntax;
use Twig\Token;
use Twig\Node\TextNode;

/**
 * Parse the `graphql` twig tag.
 *
 * Parses the `{% graphql %}` twig tag. Only allowed on template root level.
 */
class GraphQLTokenParser extends AbstractTokenParser {

  /**
   * {@inheritdoc}
   */
  public function parse(Token $token) {
    $stream = $this->parser->getStream();
    if (!$this->parser->isMainScope()) {
      throw new Twig_Error_Syntax(
        'GraphQL queries cannot be defined in blocks.',
        $token->getLine(),
        $stream->getSourceContext()
      );
    }

    $stream->expect(Token::BLOCK_END_TYPE);
    $values = $this->parser->subparse([$this, 'decideBlockEnd'], TRUE);
    $stream->expect(Token::BLOCK_END_TYPE);
    if ($values instanceof TextNode) {
      try {
        return new GraphQLFragmentNode($values->getAttribute('data'));
      }
      catch (SyntaxError $error) {
        throw new Twig_Error_Syntax(
          $error->getMessage(),
          $token->getLine(),
          $stream->getSourceContext()
        );
      }
    }

    return NULL;
  }

  /**
   * {@inheritdoc}
   */
  public function decideBlockEnd(Token $token) {
    return $token->test('endgraphql');
  }

  /**
   * {@inheritdoc}
   */
  public function getTag() {
    return 'graphql';
  }

}
