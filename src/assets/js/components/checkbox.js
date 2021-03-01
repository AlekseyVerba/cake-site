try {
    const checbox = document.querySelector(".application__label-checkbox");
    const button = document.querySelector(".application__submit");

    checbox.addEventListener("click", (e) => {
        const oldCheckBox = checbox.querySelector(".application__checkbox-bad");
        const newCheckBox = checbox.querySelector(".application__checkbox-bad-block");

        if (oldCheckBox.checked) {
            oldCheckBox.checked = false;
            newCheckBox.classList.remove("application__checkbox-bad-block-active");
            button.classList.add("modal__disabled");
            button.classList.remove("modal__submit");
        } else {
            oldCheckBox.checked = true;
            newCheckBox.classList.add("application__checkbox-bad-block-active");
            button.classList.remove("modal__disabled");
            button.classList.add("modal__submit");
        }
    })
} catch {}