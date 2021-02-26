try {
    const labels = document.querySelectorAll(".application__label");

    labels.forEach(item => {
        item.addEventListener("click", (e) => {

            const oldCheckBoxs = e.target.closest(".application__label").querySelector(".application__checkbox")
            const newCheckBoxs = e.target.closest(".application__label").querySelector(".application__checkbox-block")

            if (!oldCheckBoxs.checked) {
                document.querySelectorAll(".application__checkbox").forEach(element => {
                    element.previousElementSibling.classList.remove("application__checkbox-block-active")
                })
                newCheckBoxs.classList.add("application__checkbox-block-active")
            }

            // if (oldCheckBoxs.checked) {
            //     oldCheckBoxs.checked = false;
            //     newCheckBoxs.classList.remove("application__checkbox-block-active")
            // } else {
            //     oldCheckBoxs.checked = true;
            //     newCheckBoxs.classList.add("application__checkbox-block-active")
            // }
        })
    })
} catch {}