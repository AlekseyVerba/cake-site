const items = document.querySelectorAll(".cake__item");

items.forEach(item => {
    item.addEventListener("mouseover", e => {
        const body = e.target.closest(".cake__item");
        if (body) {
            if (!body.querySelector(".cake__info")) {
                const el = document.createElement("div");
                el.classList.add("cake__info");
                el.innerHTML = `
                <h3 class="cake__title">${body.dataset.name}</h3>
                <p class="cake__description">${body.dataset.info}</p>
                <div class="cake__footer">
                <span class="cake__gram">${body.dataset.gramm}Г</span>
                <span class="cake__price">${body.dataset.price}Р</span>
                `;
                body.append(el);
            }
        }
    });
});
items.forEach(item => {
    item.addEventListener("mouseleave", e => { 
        // const img = e.target.classList.containc("cake__item-img");
        document.querySelector(".cake__info").remove()

    })
})

