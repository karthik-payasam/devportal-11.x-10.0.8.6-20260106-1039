/**
 * @file
 * Attaches like rating.
 */

(function ($, Drupal, once) {
  Drupal.behaviors.likeRating = {
    attach(context, settings) {
      $('body')
        .find('.like')
        .each(function () {
          const $this = $(this);
          $(once('processed', 'select', this)).each(function () {
            $this.find('[type=submit]').hide();
            const $select = $(this);
            const isPreview = $select.data('is-edit');
            $select
              .after(
                '<div class="like-rating"><a href="#"><i class="fa fa-thumbs-up"></i></a></div>',
              )
              .hide();
            $this
              .find('.like-rating a')
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
                });
              });
          });
        });
    },
  };
})(jQuery, Drupal, once);
