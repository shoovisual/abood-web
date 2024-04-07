(function() {
  "use strict";

  let forms = document.querySelectorAll('.php-email-form');

  forms.forEach(function(e) {
    e.addEventListener('submit', function(event) {
      event.preventDefault();

      let thisForm = this;

      // ... rest of the code ...

      .then(data => {
        thisForm.querySelector('.loading').classList.remove('d-block');
        if (data.trim() == 'OK') { // Check for successful response
          thisForm.querySelector('.sent-message').classList.add('d-block');
          thisForm.reset(); // Clear the form here
        } else {
          // ... handle error ...
        }
      })
      .catch((error) => {
        // ... handle error ...
      });
    });
  });

  // ... rest of the code ...
})();
