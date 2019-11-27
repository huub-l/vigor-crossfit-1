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

    if(document.getElementById('map')) {
      Map.init();
    }
  },
};
