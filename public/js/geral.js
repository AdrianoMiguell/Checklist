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

            dateValue.push(listDateValue.split("-")[0]);
            dateValue.push(listDateValue.split("-")[1]);
            dateValue.push(listDateValue.split("-")[2]);

            let checkDate = `${dateValue[2]}-${dateValue[1]}-${dateValue[0]}`;

            checkDate = checkDate.trim();

            let listDateValueFormat = Date.parse(checkDate);
            let checkListDate = new Date(listDateValueFormat);

            if (checkListDate < date) {
                checklistCard[i].classList.add("datePassed");
            } else if (checkListDate > date) {
                if (checklistCard[i].classList.contains("datePassed")) {
                    checklistCard[i].classList.remove("datePassed");
                }
            }
        }
    }
}
