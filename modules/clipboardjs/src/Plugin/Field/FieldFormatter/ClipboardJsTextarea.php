<?php

namespace Drupal\clipboardjs\Plugin\Field\FieldFormatter;

/**
 * Plugin implementation of the 'clipboard' formatter.
 *
 * @FieldFormatter(
 *   id = "clipboard_textarea",
 *   label = @Translation("Clipboard.js Textarea"),
 *   field_types = {
 *     "email",
 *     "link",
 *     "string",
 *     "string_long",
 *     "slug",
 *     "slug_path"
 *   }
 * )
 */
class ClipboardJsTextarea extends ClipboardJsBase {

  const TEMPLATE = 'clipboardjs_textarea';

}
