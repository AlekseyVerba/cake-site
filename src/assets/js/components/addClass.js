

try {
    function addClass(selector, classLi, classLine) {
        document.querySelectorAll(selector).forEach(item => {
            item.classList.add(classLi);
            if (classLine) {
                const line = document.createElement("div");
                line.classList.add(classLine);
                item.append(line);
            }
        })
    }
    
    addClass(".footer li", "footer__item", "footer__line");
    addClass(".header .header__list li", "header__item", "header__line");
    addClass(".header__list-hamburger li", "header__item-hamburger", false);
    
   try {
    const burgerActive = document.createElement("div");
    burgerActive.classList.add("burger-line");
    document.querySelector(".burger-active").append(burgerActive);
   } catch{}
} catch {}