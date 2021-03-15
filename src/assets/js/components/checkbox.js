try {


    function changeDisabled(checkBtnSelector, buttonSelector) {
        console.log("fff")
        const check = document.querySelector(checkBtnSelector)
        const button = document.querySelector(buttonSelector)
        check.addEventListener("change", () => {
            if (check.checked) {
                button.removeAttribute("disabled")
                button.classList.add("modal__submit")
                button.classList.remove("modal__disabled")
            } else {
                button.setAttribute("disabled", "true")
                button.classList.remove("modal__submit")
                button.classList.add("modal__disabled")
            }
        })
    }
    try {
        changeDisabled(".application-checkbox", ".application__submit")
    } catch { }
    try {
        changeDisabled(".torts__checkbox", ".modal__tort")
    } catch { }
} catch { }




