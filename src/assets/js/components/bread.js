// const btnsHome = document.querySelectorAll(".home");
const category = document.querySelectorAll(".taxonomy.category_menu")
const spans = document.querySelectorAll(".current-item");

category.forEach(item => {
    item.classList.add("infoTorts__home");
});



spans.forEach(item => {
    item.classList.add("infoTorts__next");
});


// infoTorts__home