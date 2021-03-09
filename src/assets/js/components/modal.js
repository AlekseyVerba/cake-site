try {
    const btns = document.querySelector(".tort__items");
    const modal = document.querySelector(".modal");
    const dialog = document.querySelector(".modal__dialog");
    const block = document.querySelector(".modal__block");



    // btns.forEach(item => {
        btns.addEventListener("click", (e) => {
           if ( e.target.closest(".tort__item")) {
            document.body.style.overflow = "hidden";
            modal.style.transition = "all 1s";
            modal.style.overflow = "auto";
            modal.classList.add("modal-active");
            const target = e.target.closest(".tort__item");
            const element = document.createElement("div");
            element.classList.add("modal__infoTort");
            element.innerHTML = `
                <h2 class="modal__title">Онлайн заказ торта</h2>
                <div class="modal__info">
                    <div class="modal__img-block">
                        <img src="${target.dataset.img}" alt="tort" class="modal__img">
                    </div>
                    <div class="modal__description">
                        <h5 class="modal__name">${target.dataset.nameTort}</h5>
                        <p class="modal__text">
                            ${target.dataset.description}
                        </p>
                    </div>
                </div>
                <div class="modal__bottom">
                    <div class="modal__line"></div>
                    <div class="modal__opis">
                        <div class="modal__gram">${target.dataset.kg} кг.</div>
                        <div class="modal__price">${target.dataset.rub} ₽</div>
                    </div>
                </div>
            `;
            block.append(element);
            const inputTort = document.createElement("input");
            inputTort.classList.add("input__hidden");
            inputTort.value = target.dataset.nameTort;
            document.querySelector(".hidden__label").append(inputTort);
           }

        })
    // })

    modal.addEventListener("click", (e) => {
        if (e.target.classList.contains("modal")) {
            document.body.style.overflow = "";
            modal.style.transition = "none";
            modal.classList.remove("modal-active");
            modal.querySelector(".modal__infoTort").remove();
            document.querySelector(".hidden__label").querySelector(".input__hidden").remove();
        }
    })
} catch {}