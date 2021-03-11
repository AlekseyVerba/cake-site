try {
    // const  = document.querySelector(".application__label-checkbox");
    // const button = document.querySelector(".application__submit");


    function changeCheckBox(selectorLabel, selectorCheckOld, selectorCheckNew, buttonSelector) {
        const checboxBlock = document.querySelector(selectorLabel);
        const button = document.querySelector( buttonSelector);

    checboxBlock.addEventListener("click", e => {
        const oldCheckBox = checboxBlock.querySelector(selectorCheckOld);
        const newCheckBox = checboxBlock.querySelector(selectorCheckNew);


        if (oldCheckBox.checked) {
            oldCheckBox.checked = false;
            newCheckBox.classList.remove("application__checkbox-bad-block-active");
            button.classList.add("modal__disabled");
            button.classList.remove("modal__submit");
            button.setAttribute("disabled", "true")
        } else {
            oldCheckBox.checked = true;
            newCheckBox.classList.add("application__checkbox-bad-block-active");
            button.classList.remove("modal__disabled");
            button.classList.add("modal__submit");
            button.removeAttribute("disabled")
        }

    })

    }

    try {
        changeCheckBox(".application__label-checkbox", ".application__checkbox-bad", ".application__checkbox-bad-block", ".application__submit")
    } catch {}
    try {
        changeCheckBox(".modal__label", ".modal__checkbox", ".application__checkbox-bad-block", ".modal__button")
    } catch {}



    // checbox.addEventListener("click", (e) => {
    //     // const oldCheckBox = checbox.querySelector(".application__checkbox-bad");
    //     // const newCheckBox = checbox.querySelector(".application__checkbox-bad-block");

    //     if (oldCheckBox.checked) {
    //         oldCheckBox.checked = false;
    //         newCheckBox.classList.remove("application__checkbox-bad-block-active");
    //         button.classList.add("modal__disabled");
    //         button.classList.remove("modal__submit");
    //         button.setAttribute("disabled", "true")
    //     } else {
    //         oldCheckBox.checked = true;
    //         newCheckBox.classList.add("application__checkbox-bad-block-active");
    //         button.classList.remove("modal__disabled");
    //         button.classList.add("modal__submit");
    //         button.removeAttribute("disabled")
    //     }
    // })




    // try {
        
    // }
} catch {}