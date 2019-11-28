import * as Map from '../util/maps';

export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS

    // Initialize slider
    if(document.querySelector('.sliders')) {
      $('.sliders').slick({
        dots: true,
      });
    }

    // Locations
    if(document.getElementById('map')) {
      Map.init();
    }

    // Shop
    if(document.querySelector('.products')) {
      const product_links = document.querySelectorAll('.woocommerce-loop-product__link');

      // Lets remove all of the product links
      product_links.forEach(link => {
        const product_img = link.children[0];

        // Remove product href
        link.href = '#';

        link.setAttribute('style', `background-image: url(${product_img.src})`);

        link.addEventListener('click', evt => evt.preventDefault() );
      });
    }
  },
};
