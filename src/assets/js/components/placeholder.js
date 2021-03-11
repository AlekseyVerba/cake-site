try {
    const conts = document.querySelectorAll(".cont");

    const inputs = document.querySelector(".application").querySelectorAll(".application-input");



    // conts.forEach(item => {
    //     item.addEventListener("click", (e) => {
    //     const target = e.target.closest(".cont");
    //     target.querySelector("input").focus();
    //     target.querySelector(".placeholder").style.display = "none";
    //     })
    // })

    conts.forEach(item => {
        item.addEventListener("click", (e) => {
            if (e.target.classList.contains("placeholder")) {
                e.target.previousElementSibling.focus();
            }
            
        })
    })

    inputs.forEach(item => {

        item.addEventListener("focus", (e) => {
            e.target.nextElementSibling.style.display = "none";
        })

        item.addEventListener("blur", (e) => {
            if (e.target.value.trim() == '')
            e.target.nextElementSibling.style.display = "block";
        })
    })
} catch {}

