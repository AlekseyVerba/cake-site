$('form').on('submit', function(e) {
    e.preventDefault();
    var form = $(this).serializeArray();
    var action = $(this).attr('action');
    let radioButtons = document.querySelectorAll(".application__checkbox");
    let hasRadio = false;
    radioButtons.forEach(item => {
      if (item.checked) {
        hasRadio = true
      } 
    })
    if (hasRadio) {
      $.post (
        myajax.url,
        {
          form: form,
          action: action
        },
        function(data) {
          for (var i = 0; i < $('form').length; i++) {
            $('form')[i].reset();
            document.querySelectorAll(".placeholder").forEach(item => {
              item.style.display = "block";
            })
          }
  
          if (action === "application_fun") {
              const el = document.createElement("div");
              el.classList.add("goodFetch");
              el.textContent = "Успешно.Ваша заявка отправлена";
              document.querySelector(".application__form").append(el);
              setTimeout(() => {
                el.remove();
              }, 4000)
          } else if (action === "page-cont") {
            document.querySelector(".modal__content").style.display = "none";
            const el = document.createElement("div");
            el.classList.add("goodFetch");
            el.textContent = "Успешно.Ваша заявка отправлена"
            document.querySelector(".modal__dialog").append(el);
            setTimeout(() => {
              el.remove();
              document.querySelector(".modal__content").style.display = "block";
            }, 4000)
          }
  
        }
      )
    } else {
      alert("Выберите скидку")
    }
  });