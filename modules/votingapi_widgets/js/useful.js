/**
 * @file
 * Attaches is useful rating.
 */

(function ($, Drupal, once) {
  Drupal.behaviors.usefulRating = {
    attach(context, settings) {
      $('body')
        .find('.useful')
        .each(function () {
          const $this = $(this);
          $(once('processed', 'select', this)).each(function () {
            $this.find('[type=submit]').hide();
            const $select = $(this);
            const isPreview = $select.data('is-edit');
            $select
              .after(
                '<div class="useful-rating"><a href="#"><i class="fa fa-thumbs-down"></i></a><a href="#"><i class="fa fa-thumbs-up"></a></i></div>',
              )
              .hide();
            $this
              .find('.useful-rating a')
              .eq(0)
              .each(function () {
                $(this).on('click', function (e) {
                  if (isPreview) {
                    return;
                  }
                  e.preventDefault();
                  $select.get(0).selectedIndex = 0;
                  $this.find('[type=submit]').trigger('click');
                  $this.find('a').addClass('disabled');
                  $this.find('.vote-result').html();
                });
              });
            $this
              .find('.useful-rating a')
              .eq(1)
              .each(function () {
                $(this).on('click', function (e) {
                  if (isPreview) {
                    return;
                  }
                  e.preventDefault();
                  $select.get(0).selectedIndex = 1;
                  $this.find('[type=submit]').trigger('click');
                  $this.find('a').addClass('disabled');
                  $this.find('.vote-result').html();
                });
              });
          });
        });
    },
  };
})(jQuery, Drupal, once);
