(function (Drupal, once) {

    Drupal.behaviors.sidebarLeft = {

        attach: function (context) {

            /*
             * Handle active Products / APIs tab
             */
            once(
                'sidebarleft-tabs',
                '.sidebarleft-wrapper .tab-btn',
                context
            ).forEach(function (tab) {

                const path = window.location.pathname;

                if (path.includes('api')) {

                    if (tab.getAttribute('href') === '/devcustportal/csb-portal/api') {
                        tab.classList.add('active');
                    }

                }
                else {

                    if (tab.getAttribute('href') === '/devcustportal/csb-portal/product') {
                        tab.classList.add('active');
                    }

                }

            });


            /*
             * Handle product API expand/collapse
             */
            once(
                'sidebarleft-product-toggle',
                '.sidebarleft-wrapper .product-toggle',
                context
            ).forEach(function (toggle) {

                toggle.addEventListener('click', function (e) {

                    e.preventDefault();

                    const currentItem = this.parentElement;
                    const currentSubmenu =
                        currentItem.querySelector('.thirdSubmenu');
                    /*
                     * Close other product submenus
                     */
                    currentItem
                        .closest('.sidebarleft-wrapper')
                        .querySelectorAll('.product-item')
                        .forEach(function (item) {

                            const submenu =
                                item.querySelector('.thirdSubmenu');

                            const toggleBtn =
                                item.querySelector('.product-toggle');

                            if (submenu && submenu !== currentSubmenu) {

                                submenu.classList.add('sidebarleft-hide');

                                if (toggleBtn) {

                                    toggleBtn.classList.remove('active');

                                    const icon =
                                        toggleBtn.querySelector('.toggle-icon');

                                    if (icon) {
                                        icon.classList.remove('open');
                                    }

                                }

                            }

                        });


                    /*
                     * Toggle current submenu
                     */
                    if (currentSubmenu) {
                        currentSubmenu.classList.toggle('sidebarleft-hide');
                    }

                    this.classList.toggle('active');


                    const icon =
                        this.querySelector('.toggle-icon');

                    if (icon) {
                        icon.classList.toggle('open');
                    }

                });

            });


            /*
             * Automatically open the current product
             */
            const currentUrl = window.location.href;

            console.log('Sidebar Left URL:', currentUrl);


            if (currentUrl.includes('/product/')) {

                const productId =
                    currentUrl
                        .split('/product/')[1]
                        ?.split('/')[0];


                if (productId) {

                    const targetProduct =
                        document.querySelector(
                            `.sidebarleft-wrapper .product-${productId}`
                        );


                    console.log(
                        'Sidebar Left Target Product:',
                        targetProduct
                    );


                    if (targetProduct) {

                        const toggle =
                            targetProduct.querySelector('.product-toggle');

                        const submenu =
                            targetProduct.querySelector('.thirdSubmenu');


                        if (toggle && submenu) {

                            /*
                             * Expand submenu
                             */
                            submenu.classList.remove(
                                'sidebarleft-hide'
                            );


                            /*
                             * Active product
                             */
                            toggle.classList.add('active');


                            const icon =
                                toggle.querySelector('.toggle-icon');

                            if (icon) {
                                icon.classList.add('open');
                            }

                        }

                    }

                }

            }

        }

    };

})(Drupal, once);
