export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS

    if(document.querySelector('.sliders')) {
      $('.sliders').slick({
        dots: true,
      });
    }
  },
};
