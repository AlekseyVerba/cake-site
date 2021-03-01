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
      (function(ELEMENT) {
        ELEMENT.matches = ELEMENT.matches || ELEMENT.mozMatchesSelector || ELEMENT.msMatchesSelector || ELEMENT.oMatchesSelector || ELEMENT.webkitMatchesSelector;
        ELEMENT.closest = ELEMENT.closest || function closest(selector) {
            if (!this) return null;
            if (this.matches(selector)) return this;
            if (!this.parentElement) {return null}
            else return this.parentElement.closest(selector)
          };
    }(Element.prototype));
    const width = window.getComputedStyle(document.querySelector(".slider__wrapper")).width;
    const wrapper = document.querySelector(".slider__wrapper");
    const elements = document.querySelectorAll(".slider__item");
    const content = document.querySelector(".slider__content");
    const prev = document.querySelector(".slider__left");
    const next = document.querySelector(".slider__right");
    const slider = document.querySelector(".slider");

let count = 1;
function addDots() {
    const dots = document.createElement("div");
    dots.classList.add("slider__dots");


    elements.forEach((el, index) => {
        const dot = document.createElement("div")
        dot.classList.add("slider__dot");
        dot.setAttribute("data-count", index + 1)
        if (index === 0) {
            dot.classList.add("slider__dot-active");  
        }
        dots.appendChild(dot);
    })

    // for (let index = 0; index < elements.length; i++) {
        
    // }


    document.querySelector(".slider").appendChild(dots);
}
addDots();


content.style.width = elements.length * parseInt(width) + "px";

next.addEventListener("click", goNext);
prev.addEventListener("click", goPrev);

let interval;

function startInterval() {
    interval = setInterval(goNext, 6000);
}
startInterval();

wrapper.addEventListener("mouseenter", () => {
    clearInterval(interval);
})

wrapper.addEventListener("mouseleave", () => {
    startInterval();
})

slider.querySelectorAll(".slider__dot").forEach(item => {
    item.addEventListener("click", (e) => changeDots(e, null))
})

function changeDots(e, color) {
    if (e) {
        slider.querySelectorAll(".slider__dot").forEach(element => {
            element.classList.remove("slider__dot-active");
        })
        e.target.classList.add("slider__dot-active");
        const index = e.target.getAttribute("data-count");

        count = index;
        const result = (count * parseInt(width)) - parseInt(width);
        content.style.transform = `translateX(-${result}px)`;
    }

    if (color) {
        slider.querySelectorAll(".slider__dot").forEach((item, index)=> {
            item.classList.remove("slider__dot-active");
            if (index+1 === count) {
                item.classList.add("slider__dot-active");
            }
        });
    }
}

function goNext() {
    if (count === elements.length) {
        content.style.transform = `translateX(0)`;
        count = 1;
    } else {
        count++;
        const result = (count - 1) * parseInt(width);
        content.style.transform = `translateX(-${result}px)`;
    }
    changeDots(null, "changeColor")
}

function goPrev() {
    if (count === 1) {
        const result =( (elements.length - 1) * parseInt(width)) + "px";
        content.style.transform = `translateX(-${result})`;
        count = elements.length;
    } else {
        count--;
        const result = (count * parseInt(width)) - parseInt(width);
        content.style.transform = `translateX(-${result}px)`;
    }
    changeDots(null, "changeColor")
}
}

catch {}