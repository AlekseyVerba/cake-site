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
          el.classList.add("cake__info", tranClass);
          console.log(el);
          el.innerHTML = "\n                <h3 class=\"cake__title\">".concat(body.dataset.name, "</h3>\n                <p class=\"cake__description\">").concat(body.dataset.info, "</p>\n                <div class=\"cake__footer\">\n                <span class=\"cake__gram\">").concat(body.dataset.gramm, "\u0433.</span>\n                <span class=\"cake__price\">").concat(body.dataset.price, "\u0420</span>\n                ");
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
} catch (_unused2) {}

try {
  var checbox = document.querySelector(".application__label-checkbox");
  var button = document.querySelector(".application__submit");
  checbox.addEventListener("click", function (e) {
    var oldCheckBox = checbox.querySelector(".application__checkbox-bad");
    var newCheckBox = checbox.querySelector(".application__checkbox-bad-block");

    if (oldCheckBox.checked) {
      oldCheckBox.checked = false;
      newCheckBox.classList.remove("application__checkbox-bad-block-active");
      button.classList.add("modal__disabled");
      button.classList.remove("modal__submit");
    } else {
      oldCheckBox.checked = true;
      newCheckBox.classList.add("application__checkbox-bad-block-active");
      button.classList.remove("modal__disabled");
      button.classList.add("modal__submit");
    }
  });
} catch (_unused3) {} //   $('#btn-menu-mob').click(function(e) {
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
      } else {
        btnSubmit.classList.add("modal__disabled");
        btnSubmit.classList.remove("modal__submit");
      }
    });
  } catch (_unused4) {}

  try {
    applicationCheckBox.addEventListener("change", function (e) {
      if (applicationCheckBox.checked) {
        applicationSubmit.classList.remove("modal__disabled");
        applicationSubmit.classList.add("modal__submit");
      } else {
        applicationSubmit.classList.add("modal__disabled");
        applicationSubmit.classList.remove("modal__submit");
      }
    });
  } catch (_unused5) {}
} catch (_unused6) {}

try {
  document.querySelector(".menu-icon").addEventListener("click", function (e) {
    e.target.closest(".menu-icon").classList.toggle("clicked");

    if (document.querySelector(".menu-icon").classList.contains("clicked")) {
      document.querySelector(".header__list-hamburger").classList.add("active-list", "header__list-hamburger-animate");
    } else {
      document.querySelector(".header__list-hamburger").classList.remove("active-list");
    }
  });
} catch (_unused7) {}

try {
  var iframe = document.createElement("iframe"); // https://yandex.ru/map-widget/v1/?um=constructor%3A92636b349eb06f0cc5b9d4323ea0f1eb031d6399924e0e0c172886b57b5c1a79&amp;source=constructor
} catch (_unused8) {}

try {
  var btns = document.querySelectorAll(".tort__click");
  var modal = document.querySelector(".modal");
  var dialog = document.querySelector(".modal__dialog");

  var _block = document.querySelector(".modal__block");

  btns.forEach(function (item) {
    item.addEventListener("click", function (e) {
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
      document.querySelector(".hidden__label").append(inputTort);
    });
  });
  modal.addEventListener("click", function (e) {
    if (e.target.classList.contains("modal")) {
      document.body.style.overflow = "";
      modal.style.transition = "none";
      modal.classList.remove("modal-active");
      modal.querySelector(".modal__infoTort").remove();
      document.querySelector(".hidden__label").querySelector(".input__hidden").remove();
    }
  });
} catch (_unused9) {}

try {
  var conts = document.querySelectorAll(".cont");
  var inputs = document.querySelector(".application").querySelectorAll(".application-input");
  conts.forEach(function (item) {
    item.addEventListener("click", function (e) {
      var target = e.target.closest(".cont");
      target.querySelector("input").focus();
      target.querySelector(".placeholder").style.display = "none";
    });
  });
  inputs.forEach(function (item) {
    item.addEventListener("blur", function (e) {
      if (e.target.value.trim() == '') e.target.nextElementSibling.style.display = "block";
    });
  });
} catch (_unused10) {}

try {
  var labels = document.querySelectorAll(".application__label");
  labels.forEach(function (item) {
    item.addEventListener("click", function (e) {
      var oldCheckBoxs = e.target.closest(".application__label").querySelector(".application__checkbox");
      var newCheckBoxs = e.target.closest(".application__label").querySelector(".application__checkbox-block");

      if (!oldCheckBoxs.checked) {
        document.querySelectorAll(".application__checkbox").forEach(function (element) {
          element.previousElementSibling.classList.remove("application__checkbox-block-active");
        });
        newCheckBoxs.classList.add("application__checkbox-block-active");
      } // if (oldCheckBoxs.checked) {
      //     oldCheckBoxs.checked = false;
      //     newCheckBoxs.classList.remove("application__checkbox-block-active")
      // } else {
      //     oldCheckBoxs.checked = true;
      //     newCheckBoxs.classList.add("application__checkbox-block-active")
      // }

    });
  });
} catch (_unused11) {}

if (window.NodeList && !NodeList.prototype.forEach) {
  NodeList.prototype.forEach = function (callback, thisArg) {
    thisArg = thisArg || window;

    for (var i = 0; i < this.length; i++) {
      callback.call(thisArg, this[i], i, this);
    }
  };
}

try {
  var addDots = function addDots() {
    var dots = document.createElement("div");
    dots.classList.add("slider__dots");
    elements.forEach(function (el, index) {
      var dot = document.createElement("div");
      dot.classList.add("slider__dot");
      dot.setAttribute("data-count", index + 1);

      if (index === 0) {
        dot.classList.add("slider__dot-active");
      }

      dots.appendChild(dot);
    }); // for (let index = 0; index < elements.length; i++) {
    // }

    document.querySelector(".slider").appendChild(dots);
  };

  var startInterval = function startInterval() {
    interval = setInterval(goNext, 6000);
  };

  var changeDots = function changeDots(e, color) {
    if (e) {
      slider.querySelectorAll(".slider__dot").forEach(function (element) {
        element.classList.remove("slider__dot-active");
      });
      e.target.classList.add("slider__dot-active");
      var index = e.target.getAttribute("data-count");
      count = index;
      var result = count * parseInt(width) - parseInt(width);
      content.style.transform = "translateX(-".concat(result, "px)");
    }

    if (color) {
      slider.querySelectorAll(".slider__dot").forEach(function (item, index) {
        item.classList.remove("slider__dot-active");

        if (index + 1 === count) {
          item.classList.add("slider__dot-active");
        }
      });
    }
  };

  var goNext = function goNext() {
    if (count === elements.length) {
      content.style.transform = "translateX(0)";
      count = 1;
    } else {
      count++;
      var result = (count - 1) * parseInt(width);
      content.style.transform = "translateX(-".concat(result, "px)");
    }

    changeDots(null, "changeColor");
  };

  var goPrev = function goPrev() {
    if (count === 1) {
      var result = (elements.length - 1) * parseInt(width) + "px";
      content.style.transform = "translateX(-".concat(result, ")");
      count = elements.length;
    } else {
      count--;

      var _result = count * parseInt(width) - parseInt(width);

      content.style.transform = "translateX(-".concat(_result, "px)");
    }

    changeDots(null, "changeColor");
  };

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
  })(Element.prototype);

  var width = window.getComputedStyle(document.querySelector(".slider__wrapper")).width;
  var wrapper = document.querySelector(".slider__wrapper");
  var elements = document.querySelectorAll(".slider__item");
  var content = document.querySelector(".slider__content");
  var prev = document.querySelector(".slider__left");
  var next = document.querySelector(".slider__right");
  var slider = document.querySelector(".slider");
  var count = 1;
  addDots();
  content.style.width = elements.length * parseInt(width) + "px";
  next.addEventListener("click", goNext);
  prev.addEventListener("click", goPrev);
  var interval;
  startInterval();
  wrapper.addEventListener("mouseenter", function () {
    clearInterval(interval);
  });
  wrapper.addEventListener("mouseleave", function () {
    startInterval();
  });
  slider.querySelectorAll(".slider__dot").forEach(function (item) {
    item.addEventListener("click", function (e) {
      return changeDots(e, null);
    });
  });
} catch (_unused12) {}