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