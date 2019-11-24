export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    // Control the hamburger
    $(document).ready(function(){
      $('#nav-icon1').click(function(){
        $(this).toggleClass('open');
        $('.nav-primary').toggleClass('-is-hidden');
      });
    });
  },
};
