// TODO: This code could likely all be converted to Form API #states
// (allowing us to remove this file entirely).
// https://api.drupal.org/api/drupal/includes!common.inc/function/drupal_process_states/8.2.x

Drupal.behaviors.seckit = {
  attach: function (context) {
    seckit_listener_hsts(context);
    seckit_listener_origin(context);
    seckit_listener_clickjacking_x_frame(context);
    seckit_listener_clickjacking_noscript(context);
    seckit_listener_various(context);
    (function ($) {
      $('#edit-seckit-ssl-hsts', context).click(function () {
        seckit_listener_hsts(context);
      });
      $('#edit-seckit-csrf-origin', context).click(function () {
        seckit_listener_origin(context);
      });
      $('#edit-seckit-clickjacking-x-frame', context).change(function () {
        seckit_listener_clickjacking_x_frame(context);
      });
      $('#edit-seckit-clickjacking-js-css-noscript', context).click(function () {
        seckit_listener_clickjacking_noscript(context);
      });
      $('#edit-seckit-various-from-origin', context).click(function () {
        seckit_listener_various(context);
      });
      $('#edit-seckit-various-referrer-policy', context).click(function () {
        seckit_listener_various(context);
      });
    })(jQuery);
  }
};

/**
 * Adds/removes attributes for input fields in
 * SSL/TLS fieldset for HTTP Strict Transport Security.
 */
function seckit_listener_hsts(context) {
  (function ($) {
    if ($('#edit-seckit-ssl-hsts').is(':checked')) {
      $('#edit-seckit-ssl-hsts-max-age', context).removeAttr('disabled');
      $('#edit-seckit-ssl-hsts-subdomains', context).removeAttr('disabled');
      $('#edit-seckit-ssl-hsts-preload', context).removeAttr('disabled');
      $('label[for="edit-seckit-ssl-hsts-max-age"]', context).append('<span title="' + Drupal.t('This field is required.') + '" class="form-required">*</span>');
    }
    else {
      $('#edit-seckit-ssl-hsts-max-age', context).attr('disabled', 'disabled');
      $('#edit-seckit-ssl-hsts-subdomains', context).attr('disabled', 'disabled');
      $('#edit-seckit-ssl-hsts-preload', context).attr('disabled', 'disabled');
      $('label[for="edit-seckit-ssl-hsts-max-age"] > span', context).remove();
    }
  })(jQuery);
}

/**
 * Adds/removes attributes for input fields in
 * Cross-site Request Forgery fieldset for HTTP Origin.
 */
function seckit_listener_origin(context) {
  (function ($) {
    if ($('#edit-seckit-csrf-origin').is(':checked')) {
      $('#edit-seckit-csrf-origin-whitelist', context).removeAttr('disabled');
    }
    else {
      $('#edit-seckit-csrf-origin-whitelist', context).attr('disabled', 'disabled');
    }
  })(jQuery);
}

/**
 * Adds/removes attributes for input fields in
 * Clickjacking "X-Frame-Options" fields.
 */
function seckit_listener_clickjacking_x_frame(context) {
  (function ($) {
    if ($('#edit-seckit-clickjacking-x-frame').find(":selected").text() == 'ALLOW-FROM') {
      $('#edit-seckit-clickjacking-x-frame-allow-from', context).removeAttr('disabled');
      $('label[for="edit-seckit-clickjacking-x-frame-allow-from"]', context).append('<span title="' + Drupal.t('This field is required.') + '" class="form-required">*</span>');
    }
    else {
      $('#edit-seckit-clickjacking-x-frame-allow-from', context).attr('disabled', 'disabled');
      $('label[for="edit-seckit-clickjacking-x-frame-allow-from"] > span', context).remove();
    }
  })(jQuery);
}

/**
 * Adds/removes attributes for input fields in
 * Clickjacking NoScript fields.
 */
function seckit_listener_clickjacking_noscript(context) {
  (function ($) {
    if ($('#edit-seckit-clickjacking-js-css-noscript').is(':checked')) {
      $('#edit-seckit-clickjacking-noscript-message', context).removeAttr('disabled');
    }
    else {
      $('#edit-seckit-clickjacking-noscript-message', context).attr('disabled', 'disabled');
    }
  })(jQuery);
}

/**
 * Adds/removes attributes for input fields in
 * Various fieldset.
 */
function seckit_listener_various(context) {
  (function ($) {
    if ($('#edit-seckit-various-from-origin').is(':checked')) {
      $('#edit-seckit-various-from-origin-destination', context).removeAttr('disabled');
    }
    else {
      $('#edit-seckit-various-from-origin-destination', context).attr('disabled', 'disabled');
    }
    if ($('#edit-seckit-various-referrer-policy').is(':checked')) {
      $('#edit-seckit-various-referrer-policy-policy', context).removeAttr('disabled');
    }
    else {
      $('#edit-seckit-various-referrer-policy-policy', context).attr('disabled', 'disabled');
    }
  })(jQuery);
}
