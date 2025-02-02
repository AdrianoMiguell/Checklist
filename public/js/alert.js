const divAlert = document.querySelector(".alert");

if(divAlert != undefined) {
    
    setTimeout(() => {
        divAlert.classList.add("alert-remove");
    }, 1500)

    console.log("Nenhuma mensagem: " + divAlert.textContent.trim());    

}