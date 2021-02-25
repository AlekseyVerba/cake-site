try {
    document.querySelector(".menu-icon").addEventListener("click", (e) => {
        e.target.closest(".menu-icon").classList.toggle("clicked");
        if (document.querySelector(".menu-icon").classList.contains("clicked")) {
            document.querySelector(".header__list-hamburger").classList.add("active-list", "header__list-hamburger-animate");
        } else {
            document.querySelector(".header__list-hamburger").classList.remove("active-list");
        }
    })
} catch {}