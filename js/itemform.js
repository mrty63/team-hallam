// Your code here!
function myFunction() {
    var x = document.getElementById("myFile").value;
    document.getElementById("img_preview").src = x;

}

function make_location() {

    //row input validation
    if (validate_row() == false) {
        alert("choose a row");
        return;
    }
    //col input validation
    if (validate_col() == false) {
        alert("choose a column");
        return;
    }
    //side input validation
    if (validate_side() == false) {
        alert("choose a side");
        return;
    }


    var row = document.getElementById("row").value;
    var col = document.getElementById("col").value;
    var side = "a";

    if (document.getElementById("l").checked == true) { side = document.getElementById("l").value; }
    if (document.getElementById("r").checked == true) { side = document.getElementById("r").value; }

    var n3w = row.concat(col);
    n3w = n3w.concat(side);
    alert(n3w);
    alter(n3w);
}

function validate_side() {
    var chosen;
    if ((document.getElementById("l").checked != true) &&
        (document.getElementById("r").checked != true)) { chosen = false }
    return chosen;
}

function validate_row() {
    var rw = false;
    //console.log(document.getElementById("row").value)
    if ((
            (document.getElementById("row").value) != "E")) {
        rw = true
    }
    return rw;
}

function validate_col() {
    var rw = false;
    //console.log(document.getElementById("row").value)
    if ((
            (document.getElementById("col").value) != "E")) {
        rw = true
    }
    return rw;
}
//location help
function show_loc_help() {
    var x = document.getElementById("loc_help");
    if (x.style.display == "none") {

        x.style.display = "block";
        return;
    }
    if (x.style.display == "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

function alter(n3w) {
    document.getElementById("itemloc").value = n3w;
    var x = document.getElementById("loc_help");
    x.style.display = "none";
}