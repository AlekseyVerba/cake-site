document.querySelectorAll("form").forEach(item => {
    item.addEventListener("submit", (e) => {
        e.preventDefault();
    })
})