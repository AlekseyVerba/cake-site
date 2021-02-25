try {
    const checbox = document.querySelector(".application__label-checkbox");

    checbox.addEventListener("click", (e) => {
        const oldCheckBox = checbox.querySelector(".application__checkbox-bad");
        const newCheckBox = checbox.querySelector(".application__checkbox-bad-block");

        if (oldCheckBox.checked) {
            oldCheckBox.checked = false;
            newCheckBox.classList.remove("application__checkbox-bad-block-active");
        } else {
            oldCheckBox.checked = true;
            newCheckBox.classList.add("application__checkbox-bad-block-active");
        }
    })
} catch {}