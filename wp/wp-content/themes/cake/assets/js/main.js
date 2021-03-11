"use strict";

if (window.NodeList && !NodeList.prototype.forEach) {
  NodeList.prototype.forEach = function (callback, thisArg) {
    thisArg = thisArg || window;

    for (var i = 0; i < this.length; i++) {
      callback.call(thisArg, this[i], i, this);
    }
  };
}

var items = document.querySelectorAll(".cake__item");

(function (arr) {
  arr.forEach(function (item) {
    if (item.hasOwnProperty('append')) {
      return;
    }

    Object.defineProperty(item, 'append', {
      configurable: true,
      enumerable: true,
      writable: true,
      value: function append() {
        var argArr = Array.prototype.slice.call(arguments),
            docFrag = document.createDocumentFragment();
        argArr.forEach(function (argItem) {
          var isNode = argItem instanceof Node;
          docFrag.appendChild(isNode ? argItem : document.createTextNode(String(argItem)));
        });
        this.appendChild(docFrag);
      }
    });
  });
})([Element.prototype, Document.prototype, DocumentFragment.prototype]);

(function () {
  var arr = [window.Element, window.CharacterData, window.DocumentType];
  var args = [];
  arr.forEach(function (item) {
    if (item) {
      args.push(item.prototype);
    }
  }); // from:https://github.com/jserz/js_piece/blob/master/DOM/ChildNode/remove()/remove().md

  (function (arr) {
    arr.forEach(function (item) {
      if (item.hasOwnProperty('remove')) {
        return;
      }

      Object.defineProperty(item, 'remove', {
        configurable: true,
        enumerable: true,
        writable: true,
        value: function remove() {
          this.parentNode.removeChild(this);
        }
      });
    });
  })(args);
})();

try {
  var btn = document.querySelector(".menu__menu");
  var block = document.querySelector(".menu__list");
  btn.addEventListener("click", function () {
    btn.classList.toggle("menu__menu-active");

    if (btn.classList.contains("menu__menu-active")) {
      block.style.display = "block";
    } else {
      block.style.display = "none";
    }
  });
} catch (_unused) {}

try {
  var addClass = function addClass(selector, classLi, classLine) {
    document.querySelectorAll(selector).forEach(function (item) {
      item.classList.add(classLi);

      if (classLine) {
        var line = document.createElement("div");
        line.classList.add(classLine);
        item.append(line);
      }
    });
  };

  addClass(".footer li", "footer__item", "footer__line");
  addClass(".header .header__list li", "header__item", "header__line");
  addClass(".header__list-hamburger li", "header__item-hamburger", false);

  try {
    var burgerActive = document.createElement("div");
    burgerActive.classList.add("burger-line");
    document.querySelector(".burger-active").append(burgerActive);
  } catch (_unused2) {}
} catch (_unused3) {} // const btnsHome = document.querySelectorAll(".home");


var category = document.querySelectorAll(".taxonomy.category_menu");
var spans = document.querySelectorAll(".current-item");
category.forEach(function (item) {
  item.classList.add("infoTorts__home");
});
spans.forEach(function (item) {
  item.classList.add("infoTorts__next");
}); // infoTorts__home

try {
  items.forEach(function (item) {
    item.addEventListener("mouseover", function (e) {
      var body = e.target.closest(".cake__item");

      if (body) {
        var tranClass;

        if (!body.querySelector(".cake__info")) {
          switch (body.dataset.element) {
            case "1":
              {
                tranClass = "cake__goRight";
                break;
              }

            case "2":
              {
                tranClass = "cake__goCenter";
                break;
              }

            case "3":
              {
                tranClass = "cake__goLeft";
                break;
              }
          }

          var el = document.createElement("div");
          el.classList.add("cake__info");
          el.classList.add(tranClass);
          console.log(el);
          el.innerHTML = "\n                <h3 class=\"cake__title\">".concat(body.dataset.name, "</h3>\n                <p class=\"cake__description\">").concat(body.dataset.info, "</p>\n                <div class=\"cake__footer\">\n                <span class=\"cake__gram\">").concat(body.dataset.gramm, " \u0433.</span>\n                <span class=\"cake__price\">").concat(body.dataset.price, " \u0440.</span>\n                ");
          body.append(el);
        }
      }
    });
  });
  items.forEach(function (item) {
    item.addEventListener("mouseleave", function (e) {
      // const img = e.target.classList.containc("cake__item-img");
      document.querySelector(".cake__info").remove();
    });
  });
} catch (_unused4) {}

try {
  // const  = document.querySelector(".application__label-checkbox");
  // const button = document.querySelector(".application__submit");
  var changeCheckBox = function changeCheckBox(selectorLabel, selectorCheckOld, selectorCheckNew, buttonSelector) {
    var checboxBlock = document.querySelector(selectorLabel);
    var button = document.querySelector(buttonSelector);
    checboxBlock.addEventListener("click", function (e) {
      var oldCheckBox = checboxBlock.querySelector(selectorCheckOld);
      var newCheckBox = checboxBlock.querySelector(selectorCheckNew);

      if (oldCheckBox.checked) {
        oldCheckBox.checked = false;
        newCheckBox.classList.remove("application__checkbox-bad-block-active");
        button.classList.add("modal__disabled");
        button.classList.remove("modal__submit");
        button.setAttribute("disabled", "true");
      } else {
        oldCheckBox.checked = true;
        newCheckBox.classList.add("application__checkbox-bad-block-active");
        button.classList.remove("modal__disabled");
        button.classList.add("modal__submit");
        button.removeAttribute("disabled");
      }
    });
  };

  try {
    changeCheckBox(".application__label-checkbox", ".application__checkbox-bad", ".application__checkbox-bad-block", ".application__submit");
  } catch (_unused5) {}

  try {
    changeCheckBox(".modal__label", ".modal__checkbox", ".application__checkbox-bad-block", ".modal__button");
  } catch (_unused6) {} // checbox.addEventListener("click", (e) => {
  //     // const oldCheckBox = checbox.querySelector(".application__checkbox-bad");
  //     // const newCheckBox = checbox.querySelector(".application__checkbox-bad-block");
  //     if (oldCheckBox.checked) {
  //         oldCheckBox.checked = false;
  //         newCheckBox.classList.remove("application__checkbox-bad-block-active");
  //         button.classList.add("modal__disabled");
  //         button.classList.remove("modal__submit");
  //         button.setAttribute("disabled", "true")
  //     } else {
  //         oldCheckBox.checked = true;
  //         newCheckBox.classList.add("application__checkbox-bad-block-active");
  //         button.classList.remove("modal__disabled");
  //         button.classList.add("modal__submit");
  //         button.removeAttribute("disabled")
  //     }
  // })
  // try {
  // }

} catch (_unused7) {} //   $('#btn-menu-mob').click(function(e) {
//       e.preventDefault();
//       $('.header__svg-mob').addClass('is-active');
//       $('#menu-mobile').animate({ 
//         right: '0px' 
//         }, 300);
//       $('#menu-mobile').animate({ 
//         right: '0px' 
//         }, 300);
//     $('body').css('overflow', 'hidden');
//     $('.page').animate({ 
//         right: '190px' 
//     }, 200); 
// });
// $('.menu-mobile__svg-close').click(function(e) {
//     e.preventDefault();
//     $('.header__svg-mob').removeClass('is-active');
//     $('#menu-mobile').animate({ 
//       right: '-207px' 
//   }, 300);
//   $('body').css('overflow', 'auto');
//   $('.page').animate({ 
//       right: '0px' 
//   }, 200); 
// });
// // header-swiper
// var swiper = new Swiper('#main-swiper', {
//   fadeEffect: {
//     crossFade: true
//   },
//   navigation: {
//     nextEl: '.swiper-button-next--header',
//     prevEl: '.swiper-button-prev--header',
//   },
//   pagination: {
//     el: '.swiper-pagination',
//     type: 'bullets',
//     clickable: true,
//   },
//   loop: true,
//   // autoplay: {
//   //   delay: 2300,
//   // },
//   fadeEffect: {
//     crossFade: true
//   },
//   speed: 800,
//   watchSlidesProgress: true,
//   watchVisibility: true,
//   disableOnInteraction: true,
// });


$('form').on('submit', function (e) {
  e.preventDefault();
  var form = $(this).serializeArray();
  var action = $(this).attr('action');
  var hasRadio = true;

  if (action === "application_fun") {
    var radioButtons = document.querySelectorAll(".application__checkbox");
    radioButtons.forEach(function (item) {
      if (item.checked) {
        hasRadio = true;
      } else {
        hasRadio = false;
      }
    });
  }

  if (hasRadio) {
    $.post(myajax.url, {
      form: form,
      action: action
    }, function (data) {
      for (var i = 0; i < $('form').length; i++) {
        $('form')[i].reset();
        document.querySelectorAll(".placeholder").forEach(function (item) {
          item.style.display = "block";
        });
      }

      if (action === "application_fun") {
        var el = document.createElement("div");
        el.classList.add("goodFetch");
        el.textContent = "Успешно.Ваша заявка отправлена";
        document.querySelector(".application__form").append(el);
        setTimeout(function () {
          el.remove();
        }, 4000);
      } else if (action === "page-cont") {
        document.querySelector(".modal__content").style.display = "none";

        var _el = document.createElement("div");

        _el.classList.add("goodFetch");

        _el.textContent = "Успешно.Ваша заявка отправлена";
        document.querySelector(".modal__dialog").append(_el);
        setTimeout(function () {
          _el.remove();

          document.querySelector(".modal__content").style.display = "block";
        }, 4000);
      }
    });
  } else {
    alert("Выберите скидку");
  }
});

try {
  var checkbox = document.querySelector(".modal__checkbox");
  var btnSubmit = document.querySelector(".modal__button");
  var applicationCheckBox = document.querySelector(".application__checkbox-bad");
  var applicationSubmit = document.querySelector(".application__submit");

  try {
    checkbox.addEventListener("change", function () {
      if (checkbox.checked) {
        btnSubmit.classList.remove("modal__disabled");
        btnSubmit.classList.add("modal__submit");
        btnSubmit.removeAttribute("disabled");
      } else {
        btnSubmit.classList.add("modal__disabled");
        btnSubmit.setAttribute("disabled", "true");
        btnSubmit.classList.remove("modal__submit");
      }
    });
  } catch (_unused8) {} // try {
  //     applicationCheckBox.addEventListener("change", (e) => {
  //         if (applicationCheckBox.checked) {
  //             applicationSubmit.classList.remove("modal__disabled");
  //             btnSubmit.removeAttribute("disabled");
  //             applicationSubmit.classList.add("modal__submit");
  //         } else {
  //             applicationSubmit.classList.add("modal__disabled");
  //             applicationSubmit.classList.remove("modal__submit");
  //         }
  //     })
  // } catch {}

} catch (_unused9) {}

try {
  document.querySelector(".menu-icon").addEventListener("click", function (e) {
    e.target.closest(".menu-icon").classList.toggle("clicked");

    if (document.querySelector(".menu-icon").classList.contains("clicked")) {
      document.querySelector(".header__list-hamburger").classList.add("active-list", "header__list-hamburger-animate");
    } else {
      document.querySelector(".header__list-hamburger").classList.remove("active-list");
    }
  });
} catch (_unused10) {}

try {
  var iframe = document.createElement("iframe"); // https://yandex.ru/map-widget/v1/?um=constructor%3A92636b349eb06f0cc5b9d4323ea0f1eb031d6399924e0e0c172886b57b5c1a79&amp;source=constructor
} catch (_unused11) {}

try {
  // jQuery(function($){
  $(window).scroll(function () {
    var bottomOffset = 1100; // console.log("top : " + $(document).scrollTop())
    // console.log("height : " + $(document).height())
    // console.log("minus: " + $(document).height() - bottomOffset)
    // console.log(bottomOffset)

    if ($(document).scrollTop() > $(document).height() - bottomOffset && !$('body').hasClass('loading')) {
      if (typeof true_posts !== "undefined") {
        console.log(true_posts);
        $('body').addClass('loading');
        $.post(myajax.url, {
          action: 'news_loadmore',
          query: true_posts || "",
          page: current_page || "" //     beforeSend: function( xhr){
          //     	$('body').addClass('loading');
          //  },

        }, function (data) {
          if (data) {
            // $('.menu__foods').append(data); // вставляем новые посты
            current_page++; // увеличиваем номер страницы на единицу

            $('.menu__loading').before(data);
            $('body').removeClass('loading'); // 						current_page++;
          } else {
            // $('#news_loadmore').remove(); // если мы дошли до последней страницы постов, скроем кнопку
            $('.menu__loading').remove();
          }
        });
      }
    }
  }); // });
} catch (_unused12) {} // jQuery(function($){
// 	$(window).scroll(function(){
// 		var bottomOffset = 400; // отступ от нижней границы сайта, до которого должен доскроллить пользователь, чтобы подгрузились новые посты
// 		var data = {
// 			'action': 'loadmore',
// 			'query': true_posts,
// 			'page' : current_page
// 		};
//         // console.log($(document).scrollTop())
//         // console.log($(document).height())
// 		if( $(document).scrollTop() > ($(document).height() - bottomOffset) && !$('body').hasClass('loading')){
// 			$.ajax({
// 				url:ajaxurl,
// 				data:data,
// 				type:'POST',
// 				beforeSend: function( xhr){
// 					$('body').addClass('loading');
// 				},
// 				success:function(data){
// 					if( data ) { 
// 						$('#true_loadmore').before(data);
// 						$('body').removeClass('loading');
// 						current_page++;
// 					}
// 				}
// 			});
// 		}
// 	});
// });


try {
  var btns = document.querySelector(".tort__items");
  var modal = document.querySelector(".modal");
  var dialog = document.querySelector(".modal__dialog");

  var _block = document.querySelector(".modal__block"); // btns.forEach(item => {


  btns.addEventListener("click", function (e) {
    if (e.target.closest(".tort__item")) {
      document.body.style.overflow = "hidden";
      modal.style.transition = "all 1s";
      modal.style.overflow = "auto";
      modal.classList.add("modal-active");
      var target = e.target.closest(".tort__item");
      var element = document.createElement("div");
      element.classList.add("modal__infoTort");
      element.innerHTML = "\n                <h2 class=\"modal__title\">\u041E\u043D\u043B\u0430\u0439\u043D \u0437\u0430\u043A\u0430\u0437 \u0442\u043E\u0440\u0442\u0430</h2>\n                <div class=\"modal__info\">\n                    <div class=\"modal__img-block\">\n                        <img src=\"".concat(target.dataset.img, "\" alt=\"tort\" class=\"modal__img\">\n                    </div>\n                    <div class=\"modal__description\">\n                        <h5 class=\"modal__name\">").concat(target.dataset.nameTort, "</h5>\n                        <p class=\"modal__text\">\n                            ").concat(target.dataset.description, "\n                        </p>\n                    </div>\n                </div>\n                <div class=\"modal__bottom\">\n                    <div class=\"modal__line\"></div>\n                    <div class=\"modal__opis\">\n                        <div class=\"modal__gram\">").concat(target.dataset.kg, " \u043A\u0433.</div>\n                        <div class=\"modal__price\">").concat(target.dataset.rub, " \u20BD</div>\n                    </div>\n                </div>\n            ");

      _block.append(element);

      var inputTort = document.createElement("input");
      inputTort.classList.add("input__hidden");
      inputTort.value = target.dataset.nameTort;
      inputTort.setAttribute("name", "tort");
      document.querySelector(".hidden__label").append(inputTort);
    }
  }); // })

  modal.addEventListener("click", function (e) {
    if (e.target.classList.contains("modal") || e.target.classList.contains("modal_close")) {
      document.body.style.overflow = "";
      modal.style.transition = "none";
      modal.classList.remove("modal-active");
      modal.querySelector(".modal__infoTort").remove();
      document.querySelector(".hidden__label").querySelector(".input__hidden").remove();
    }
  });
} catch (_unused13) {}

try {
  var conts = document.querySelectorAll(".cont");
  var inputs = document.querySelector(".application").querySelectorAll(".application-input"); // conts.forEach(item => {
  //     item.addEventListener("click", (e) => {
  //     const target = e.target.closest(".cont");
  //     target.querySelector("input").focus();
  //     target.querySelector(".placeholder").style.display = "none";
  //     })
  // })

  conts.forEach(function (item) {
    item.addEventListener("click", function (e) {
      if (e.target.classList.contains("placeholder")) {
        e.target.previousElementSibling.focus();
      }
    });
  });
  inputs.forEach(function (item) {
    item.addEventListener("focus", function (e) {
      e.target.nextElementSibling.style.display = "none";
    });
    item.addEventListener("blur", function (e) {
      if (e.target.value.trim() == '') e.target.nextElementSibling.style.display = "block";
    });
  });
} catch (_unused14) {}

try {
  var labels = document.querySelectorAll(".application__label");
  labels.forEach(function (item) {
    item.addEventListener("click", function (e) {
      var oldCheckBoxs = e.target.closest(".application__label").querySelector(".application__checkbox");
      var newCheckBoxs = e.target.closest(".application__label").querySelector(".application__checkbox-block");

      if (!oldCheckBoxs.checked) {
        console.log("true");
        document.querySelectorAll(".application__checkbox-block").forEach(function (element) {
          element.classList.remove("application__checkbox-block-active");
        });
        document.querySelectorAll(".application__checkbox").forEach(function (el) {
          el.checked = false;
        });
        newCheckBoxs.classList.add("application__checkbox-block-active");
        oldCheckBoxs.checked = true;
      } // if (oldCheckBoxs.checked) {
      //     oldCheckBoxs.checked = false;
      //     newCheckBoxs.classList.remove("application__checkbox-block-active")
      // } else {
      //     oldCheckBoxs.checked = true;
      //     newCheckBoxs.classList.add("application__checkbox-block-active")
      // }

    });
  });
} catch (_unused15) {}

if (window.NodeList && !NodeList.prototype.forEach) {
  NodeList.prototype.forEach = function (callback, thisArg) {
    thisArg = thisArg || window;

    for (var i = 0; i < this.length; i++) {
      callback.call(thisArg, this[i], i, this);
    }
  };
}

try {
  // if (!Array.prototype.forEach) {
  //     Array.prototype.forEach = function (callback, thisArg) {
  //       var T, k;
  //       if (this == null) {
  //         throw new TypeError(' this is null or not defined');
  //       }
  //       // 1. Положим O равным результату вызова ToObject passing the |this| value as the argument.
  //       var O = Object(this);
  //       // 2. Положим lenValue равным результату вызова внутреннего метода Get объекта O с аргументом "length".
  //       // 3. Положим len равным ToUint32(lenValue).
  //       var len = O.length >>> 0;
  //       // 4. Если IsCallable(callback) равен false, выкинем исключение TypeError.
  //       // Смотрите: http://es5.github.com/#x9.11
  //       if (typeof callback !== 'function') {
  //           throw new TypeError(callback + ' is not a function');
  //       }
  //       // 5. Если thisArg присутствует, положим T равным thisArg; иначе положим T равным undefined.
  //       if (arguments.length > 1) {
  //         T = thisArg;
  //       }
  //       // 6. Положим k равным 0
  //       k = 0;
  //       // 7. Пока k < len, будем повторять
  //       while (k < len) {
  //         var kValue;
  //         // a. Положим Pk равным ToString(k).
  //         //   Это неявное преобразование для левостороннего операнда в операторе in
  //         // b. Положим kPresent равным результату вызова внутреннего метода HasProperty объекта O с аргументом Pk.
  //         //   Этот шаг может быть объединён с шагом c
  //         // c. Если kPresent равен true, то
  //         if (k in O) {
  //           // i. Положим kValue равным результату вызова внутреннего метода Get объекта O с аргументом Pk.
  //           kValue = O[k];
  //           // ii. Вызовем внутренний метод Call функции callback с объектом T в качестве значения this и
  //           // списком аргументов, содержащим kValue, k и O.
  //           callback.call(T, kValue, k, O);
  //         }
  //         // d. Увеличим k на 1.
  //         k++;
  //       }
  //       // 8. Вернём undefined.
  //     };
  //   }
  (function (ELEMENT) {
    ELEMENT.matches = ELEMENT.matches || ELEMENT.mozMatchesSelector || ELEMENT.msMatchesSelector || ELEMENT.oMatchesSelector || ELEMENT.webkitMatchesSelector;

    ELEMENT.closest = ELEMENT.closest || function closest(selector) {
      if (!this) return null;
      if (this.matches(selector)) return this;

      if (!this.parentElement) {
        return null;
      } else return this.parentElement.closest(selector);
    };
  })(Element.prototype); //   var mySwiper = new Swiper ('.swiper-container', {
  //     // направление: «вертикальное», // опция вертикального переключения (по умолчанию переключение по горизонтали, если не установлено)
  //     loop: true, // опция режима петли
  //     // Если нужен пейджер
  // pagination: {
  //  el: '.swiper-pagination',
  // },
  //     // Если вам нужно двигаться вперед и назад
  // navigation: {
  //  nextEl: '.swiper-button-next',
  //  prevEl: '.swiper-button-prev',
  // },
  //     // Если вам нужна полоса прокрутки
  // scrollbar: {
  //  el: '.swiper-scrollbar',
  // },
  // })
  // const swiper = new Swiper('.swiper-container', {
  //     navigation: {
  //         nextEl: '.swiper-button-next',
  //         prevEl: '.swiper-button-prev',
  //       },
  //   });


  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    }
  }); //   swiper.slideNext();
  // const width = window.getComputedStyle(document.querySelector(".slider__wrapper")).width;
  // const wrapper = document.querySelector(".slider__wrapper");
  // const elements = document.querySelectorAll(".slider__item");
  // const content = document.querySelector(".slider__content");
  // const prev = document.querySelector(".slider__left");
  // const next = document.querySelector(".slider__right");
  // const slider = document.querySelector(".slider");
  // let count = 1;
  // function addDots() {
  //     const dots = document.createElement("div");
  //     dots.classList.add("slider__dots");
  //     elements.forEach((el, index) => {
  //         const dot = document.createElement("div")
  //         dot.classList.add("slider__dot");
  //         dot.setAttribute("data-count", index + 1)
  //         if (index === 0) {
  //             dot.classList.add("slider__dot-active");  
  //         }
  //         dots.appendChild(dot);
  //     })
  //     // for (let index = 0; index < elements.length; i++) {
  //     // }
  //     document.querySelector(".slider").appendChild(dots);
  // }
  // addDots();
  // content.style.width = elements.length * parseInt(width) + "px";
  // next.addEventListener("click", goNext);
  // prev.addEventListener("click", goPrev);
  // let interval;
  // function startInterval() {
  //     interval = setInterval(goNext, 6000);
  // }
  // startInterval();
  // wrapper.addEventListener("mouseenter", () => {
  //     clearInterval(interval);
  // })
  // wrapper.addEventListener("mouseleave", () => {
  //     startInterval();
  // })
  // slider.querySelectorAll(".slider__dot").forEach(item => {
  //     item.addEventListener("click", (e) => changeDots(e, null))
  // })
  // function changeDots(e, color) {
  //     if (e) {
  //         slider.querySelectorAll(".slider__dot").forEach(element => {
  //             element.classList.remove("slider__dot-active");
  //         })
  //         e.target.classList.add("slider__dot-active");
  //         const index = e.target.getAttribute("data-count");
  //         count = index;
  //         const result = (count * parseInt(width)) - parseInt(width);
  //         content.style.transform = `translateX(-${result}px)`;
  //     }
  //     if (color) {
  //         slider.querySelectorAll(".slider__dot").forEach((item, index)=> {
  //             item.classList.remove("slider__dot-active");
  //             if (index+1 === count) {
  //                 item.classList.add("slider__dot-active");
  //             }
  //         });
  //     }
  // }
  // function goNext() {
  //     if (count === elements.length) {
  //         content.style.transform = `translateX(0)`;
  //         count = 1;
  //     } else {
  //         count++;
  //         const result = (count - 1) * parseInt(width);
  //         content.style.transform = `translateX(-${result}px)`;
  //     }
  //     changeDots(null, "changeColor")
  // }
  // function goPrev() {
  //     if (count === 1) {
  //         const result =( (elements.length - 1) * parseInt(width)) + "px";
  //         content.style.transform = `translateX(-${result})`;
  //         count = elements.length;
  //     } else {
  //         count--;
  //         const result = (count * parseInt(width)) - parseInt(width);
  //         content.style.transform = `translateX(-${result}px)`;
  //     }
  //     changeDots(null, "changeColor")
  // }
  // document.querySelector(".slider__buttons").addEventListener("pointermove", e => {
  //     const el = e.target.nextElementSibling.querySelector(".slider__content");
  //     // el.pointermove(() => {
  //     //     console.log("fff")
  //     // })
  //     console.log(e);
  //     console.log(el);
  //     // document.onpointermove = () => {
  //     //     console.log("[f[f[f")
  //     // };
  //     document.onpointerup = () => {
  //         console.log("fff");
  //     }
  // });
} catch (_unused16) {}