try {
    const labels = document.querySelectorAll(".application__label");

    labels.forEach(item => {
        item.addEventListener("click", (e) => {

            const oldCheckBoxs = e.target.closest(".application__label").querySelector(".application__checkbox")
            const newCheckBoxs = e.target.closest(".application__label").querySelector(".application__checkbox-block")

            if (!oldCheckBoxs.checked) {
                console.log("true")
                document.querySelectorAll(".application__checkbox-block").forEach(element => {
                    element.classList.remove("application__checkbox-block-active")
                })
                document.querySelectorAll(".application__checkbox").forEach(el => {
                    el.checked = false;
                })
                newCheckBoxs.classList.add("application__checkbox-block-active")
                oldCheckBoxs.checked = true;

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