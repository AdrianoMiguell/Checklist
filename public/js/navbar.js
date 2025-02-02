const navbarToggle = document.querySelector(".navbar-toggler");

if (navbarToggle != undefined) {
    navbarToggle.addEventListener("click", () => {
        let spanOpen = document.querySelector(".navbar-toggler .open");
        let spanCloused = document.querySelector(".navbar-toggler .cloused");

        btnClicked(spanOpen, spanCloused);
    });

    function btnClicked(eOpen, eCloused) {
        if (eOpen.classList.contains("block")) {
            eOpen.classList.remove("block");
            eCloused.classList.add("block");
        } else {
            eOpen.classList.add("block");
            eCloused.classList.remove("block");
        }
    }
}
