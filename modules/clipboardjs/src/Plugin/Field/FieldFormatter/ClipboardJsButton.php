<?php

namespace Drupal\clipboardjs\Plugin\Field\FieldFormatter;

/**
 * Plugin implementation of the 'clipboard' formatter.
 *
 * @FieldFormatter(
 *   id = "clipboard_button",
 *   label = @Translation("Clipboard.js Button"),
 *   field_types = {
 *     "email",
 *     "link",
 *     "string",
 *     "slug",
 *     "slug_path",
 *     "integer",
 *     "decimal",
 *     "float"
 *   }
 * )
 */
class ClipboardJsButton extends ClipboardJsBase {

  const TEMPLATE = 'clipboardjs_button';

}
