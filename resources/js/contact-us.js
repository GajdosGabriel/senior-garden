$(function() {

  // Bezpečné vloženie hlásenia (text sa vkladá cez .text(), nie ako HTML)
  function showAlert(type, text) {
    var $alert = $('<div class="alert alert-dismissible">').addClass('alert-' + type);
    $('<button type="button" class="close" data-dismiss="alert" aria-label="Zavrieť">&times;</button>').appendTo($alert);
    $('<strong>').text(text).appendTo($alert);
    $('#success').empty().append($alert);
  }

  $("input,textarea").jqBootstrapValidation({
    preventSubmit: true,
    submitError: function($form, event, errors) {
      // additional error messages or events
    },
    submitSuccess: function($form, event) {
      event.preventDefault(); // prevent default submit behaviour

      var name    = $("input#name").val();
      var email   = $("input#email").val();
      var phone   = $("input#phone").val();
      var message = $("textarea#message").val();
      var $button = $form.find('button[type="submit"]').prop('disabled', true);

      $.ajax({
        url: "mail/contact-us.php",
        type: "POST",
        data: {
          name: name,
          phone: phone,
          email: email,
          message: message
        },
        cache: false,
        success: function() {
          showAlert('success', 'Vaša správa bola odoslaná. Ďakujeme!');
          $('#contactForm').trigger("reset");
        },
        error: function() {
          // Pri chybe necháme vyplnený formulár, aby sa dal odoslať znova
          showAlert('danger', 'Ospravedlňujeme sa, správu sa nepodarilo odoslať. Skúste to prosím neskôr.');
        },
        complete: function() {
          $button.prop('disabled', false);
        }
      });
    },
    filter: function() {
      return $(this).is(":visible");
    }
  });

  $("a[data-toggle=\"tab\"]").click(function(e) {
    e.preventDefault();
    $(this).tab("show");
  });

  /* Pri kliknutí do poľa Meno skryť hlásenie */
  $('#name').focus(function() {
    $('#success').html('');
  });
});
