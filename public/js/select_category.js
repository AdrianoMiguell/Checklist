let create_category = document.getElementById("create_category");

if (create_category != undefined) {
    console.log("Hello cheguei");

    create_category.oninput(() => {
        let selectCategory =
            create_category.options[create_category.selectIndex].value;

        console.log(selectCategory);
    });
}
