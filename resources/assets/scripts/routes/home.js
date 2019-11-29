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
        autoplay: true,
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
        const buy_now_buttons = document.querySelectorAll('a.button');

        // Remove product href
        link.href = '#';
        
        link.setAttribute('style', `background-image: url(${product_img.src})`);

        link.addEventListener('click', evt => evt.preventDefault() );

        // Loop through each buy_now_buttons and next it's text in a span so it
        // follows all button styles
        buy_now_buttons.forEach(buy_now_button => {
          add_span_text(buy_now_button);
        });
      });
    } // Shop

    function add_span_text(dom_element) {
      const span = `<span class="text">${dom_element.innerText}</span>`;

      dom_element.innerText = '';
      dom_element.innerHTML = span;
    }
  },
};
