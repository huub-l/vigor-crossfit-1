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

    // Newsletter Subscription
    if(document.querySelector('.newsletter-subscription')) {
      const form = document.getElementById('subscribe-form')

      form.addEventListener('submit', (evt) => {
        evt.preventDefault();
        
        const email_field = document.getElementById('email');

        if( emailIsValid(email_field.value) ) {
          // Fade Out Form
          $('#subscribe-form').fadeOut();

          setTimeout(() => {
            $('.loading-container').fadeIn();
          }, 400)
          
          setTimeout(() => {
            $('.loading-container').fadeOut();
          }, 1500)

          // Fade In Message
          setTimeout(() => {
            $('.success').fadeIn();
          }, 2000)
        }
      })
    }

    /* eslint-disable */
    // Helper function to validate an email address
    function emailIsValid (email) {
      return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
    }
  },
};
