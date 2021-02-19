try {
    const checkbox = document.querySelector(".modal__checkbox");
    const btnSubmit = document.querySelector(".modal__button");
    const applicationCheckBox = document.querySelector(".application__checkbox-bad");
    const applicationSubmit = document.querySelector(".application__submit");

    try {
        checkbox.addEventListener("change", () => {
            if (checkbox.checked) {
                btnSubmit.classList.remove("modal__disabled");
                btnSubmit.classList.add("modal__submit");
            } else {
                btnSubmit.classList.add("modal__disabled");
                btnSubmit.classList.remove("modal__submit");
            }
        })
    } catch{}
    try {
        applicationCheckBox.addEventListener("change", (e) => {
            if (applicationCheckBox.checked) {
                applicationSubmit.classList.remove("modal__disabled");
                applicationSubmit.classList.add("modal__submit");
            } else {
                applicationSubmit.classList.add("modal__disabled");
                applicationSubmit.classList.remove("modal__submit");
            }
        })
    } catch {}
} catch {}


