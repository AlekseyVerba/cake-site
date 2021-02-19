try {
    const checkbox = document.querySelector(".modal__checkbox");
    const btnSubmit = document.querySelector(".modal__button");

    checkbox.addEventListener("change", () => {
        if (checkbox.checked) {
            btnSubmit.classList.remove("modal__disabled");
            btnSubmit.classList.add("modal__submit");
        } else {
            btnSubmit.classList.add("modal__disabled");
            btnSubmit.classList.remove("modal__submit");
        }
    })
} catch {}


