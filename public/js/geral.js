const footer = document.querySelector("footer");

if(footer != undefined) {
    if(document.body.clientHeight < screen.height - 25) {
        footer.classList.add("footerPosAbsolute");
    } else if(footer.classList.contains("footerPosAbsolute")) {
        footer.classList.remove("footerPosAbsolute");
    }
}
