/**
 * @file
 * Defines Javascript behaviors for the permissionspolicy module admin form.
 */

(function ($, Drupal) {
  /**
   * Sets summary of policy tabs.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches summary behavior for policy form tabs.
   */
  Drupal.behaviors.permissionspolicyPolicySummary = {
    attach(context) {
      $(context)
        .find('[data-drupal-selector="edit-policies"] > details')
        .each(function () {
          const $details = $(this);
          const elementPrefix = $details.data('drupal-selector');
          const createPolicyElementSelector = function (name) {
            return `[data-drupal-selector="${elementPrefix}-${name}"]`;
          };

          $details.drupalSetSummary(function () {
            if (
              $details
                .find(createPolicyElementSelector('enable'))
                .prop('checked')
            ) {
              const enabledSelector = `${createPolicyElementSelector('features')} [name$="[enable]"]:checked`;
              const featureCount = $details.find(enabledSelector).length;
              return Drupal.formatPlural(
                featureCount,
                'Enabled, @featureCount feature',
                'Enabled, @featureCount features',
                { '@featureCount': featureCount },
              );
            }

            return Drupal.t('Disabled');
          });
        });
    },
  };
})(jQuery, Drupal);
