(function ($, Drupal) {

  Drupal.behaviors.productApiRedirect = {
    attach: function (context) {

      $('.list-group-item1[data-redirect-url]', context)
        .each(function () {

          var item = $(this);

          // Prevent duplicate click handlers.
          if (item.data('product-api-redirect-attached')) {
            return;
          }

          item.data('product-api-redirect-attached', true);

          item.on('click', function (event) {

            // If user clicks an existing <a>,
            // allow its normal href to work.
            if ($(event.target).closest('a').length) {
              return;
            }

            var url = $(this).attr('data-redirect-url');

            if (url) {
              window.location.href = url;
            }

          });

        });

    }
  };

})(jQuery, Drupal);
