if (window.NodeList && !NodeList.prototype.forEach) {
    NodeList.prototype.forEach = function (callback, thisArg) {
        thisArg = thisArg || window;
        for (var i = 0; i < this.length; i++) {
            callback.call(thisArg, this[i], i, this);
        }
    };
}
const items = document.querySelectorAll(".cake__item");
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
  (function() {
    var arr = [window.Element, window.CharacterData, window.DocumentType];
    var args = [];
  
    arr.forEach(function (item) {
      if (item) {
        args.push(item.prototype);
      }
    });
  
    // from:https://github.com/jserz/js_piece/blob/master/DOM/ChildNode/remove()/remove().md
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
    const btn = document.querySelector(".menu__menu")
    const block = document.querySelector(".menu__list");

    btn.addEventListener("click", () => {
        btn.classList.toggle("menu__menu-active");
        if (btn.classList.contains("menu__menu-active")) {
            block.style.display = "block";
        } else {
            block.style.display = "none";
        }
    });
} catch {}