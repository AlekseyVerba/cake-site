$('form').on('submit', function(e) {
    e.preventDefault();
    var form = $(this).serializeArray();
    var action = $(this).attr('action');
    $.post (
      myajax.url,
      {
        form: form,
        action: action
      },
      function(data) {
        for (var i = 0; i < $('form').length; i++) {
          $('form')[i].reset();
        }

        console.log(data)
        $(this).find('.form__btn').toggleClass('is-disabled', true);
      }
    )
  });