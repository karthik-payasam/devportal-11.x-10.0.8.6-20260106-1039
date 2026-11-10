<?php

/**
 * @file
 * Post update functions for GraphQL Twig.
 */

/**
 * Rebuild caches to ensure that the constructor in the Loader class uses the
 * correct amount of arguments.
 */
function graphql_twig_post_update_add_arguments_to_loader_constructor() {
  // Empty update to cause a cache rebuild.
}
