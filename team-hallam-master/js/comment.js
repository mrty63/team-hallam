function make_comment() {
    var x = document.getElementById("comment_body");
    x.style.display = "block";
    make_date();
}

function make_date() {
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear();

    if (dd < 10) {
        dd = '0' + dd
    }

    if (mm < 10) {
        mm = '0' + mm
    }

    today = dd + '/' + mm + '/' + yyyy;
    today = yyyy + '-' + mm + '-' + dd;
    console.log(today);
    var lol = document.getElementById("today");
    lol.value = today;
}