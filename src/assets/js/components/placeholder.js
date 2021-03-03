try {
    const conts = document.querySelectorAll(".cont");
    const inputs = document.querySelector(".application").querySelectorAll(".application-input");



    conts.forEach(item => {
        item.addEventListener("click", (e) => {
        const target = e.target.closest(".cont");
        target.querySelector("input").focus();
        target.querySelector(".placeholder").style.display = "none";
        })
    })

    inputs.forEach(item => {
        item.addEventListener("blur", (e) => {
            if (e.target.value.trim() == '')
            e.target.parentElement.nextElementSibling.style.display = "block";
        })
    })
} catch {}

