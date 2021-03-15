try {
    const checkbox = document.querySelector(".modal__checkbox");
    const btnSubmit = document.querySelector(".modal__button");

    try {
        checkbox.addEventListener("change", () => {
            if (checkbox.checked) {
                btnSubmit.classList.remove("modal__disabled");
                btnSubmit.classList.add("modal__submit");
                btnSubmit.removeAttribute("disabled");
            } else {
                btnSubmit.classList.add("modal__disabled");
                btnSubmit.setAttribute("disabled", "true");
                btnSubmit.classList.remove("modal__submit");
            }
        })
    } catch { }
} catch { }


