const footer = document.querySelector("footer");
const inputDate = document.querySelectorAll(".date");
const listDate = document.querySelectorAll(".listDate");

if (inputDate != undefined) {
    const date = new Date();
    let day = date.getDate();
    let mounth = Number(date.getMonth()) + 1;
    let year = date.getFullYear();

    if (mounth < 10) {
        mounth = "0" + mounth;
    }

    for (let i = 0; i < inputDate.length; i++) {
        inputDate[i].setAttribute("min", `${year}-${mounth}-${day}`);
    }

    // listDate.length

    if (listDate != undefined) {
        let checklistCard = document.querySelectorAll(".checklist-card");

        for (let i = 0; i < listDate.length; i++) {
            let listDateValue = listDate[i].textContent.trim();
            let dateValue = [];

            // dia
            dateValue.push(listDateValue.split("-")[0]);
            // mês
            dateValue.push(listDateValue.split("-")[1]);
            // ano
            dateValue.push(listDateValue.split("-")[2]);

            // format : ano-mes-dia
            let checkDate = `${dateValue[2]}-${dateValue[1]}-${dateValue[0]}`;

            checkDate = checkDate.trim();

            let listDateValueFormat = Date.parse(checkDate);
            let checkListDate = new Date(listDateValueFormat);

            // ajuste no dia, devido ao fuso horário
            let ajuste = checkListDate.getDate();
            if (checkListDate.getTimezoneOffset() > 0) {
                ajuste = checkListDate.getDate() + 1;
            } else if (checkListDate.getTimezoneOffset() < 0) {
                ajuste = checkListDate.getDate() + 1;
            }

            checkListDate.setDate(ajuste);

            if (
                checkListDate.getDate() == date.getDate() &&
                checkListDate.getMonth() == date.getMonth() &&
                checkListDate.getFullYear() == date.getFullYear()
            ) {
                checklistCard[i].classList.add("dateAgo");
            } else if (checkListDate < date) {
                if (checklistCard[i].classList.contains("dateAgo")) {
                    checklistCard[i].classList.remove("dateAgo");
                }
                checklistCard[i].classList.add("datePassed");
            } else if (checkListDate > date) {
                if (checklistCard[i].classList.contains("datePassed")) {
                    checklistCard[i].classList.remove("datePassed");
                } else if (checklistCard[i].classList.contains("dateAgo")) {
                    checklistCard[i].classList.remove("dateAgo");
                }
            }
        }
    }
}