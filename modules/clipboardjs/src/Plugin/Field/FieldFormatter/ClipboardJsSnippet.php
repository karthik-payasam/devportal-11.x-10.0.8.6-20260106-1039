<?php

namespace Drupal\clipboardjs\Plugin\Field\FieldFormatter;

/**
 * Plugin implementation of the 'clipboard' formatter.
 *
 * @FieldFormatter(
 *   id = "clipboard_snippet",
 *   label = @Translation("Clipboard.js Snippet"),
 *   field_types = {
 *     "email",
 *     "link",
 *     "string",
 *     "string_long",
 *     "slug",
 *     "slug_path",
 *     "integer",
 *     "decimal",
 *     "float"
 *   }
 * )
 */
class ClipboardJsSnippet extends ClipboardJsBase {

  const TEMPLATE = 'clipboardjs_snippet';

}
