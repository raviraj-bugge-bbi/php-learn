`use strict`;

function fetchData(usr, pass) {

    if (usr == "" && pass == "") {
        document.getElementById("msg").innerHTML = '<p style="color: orange;">Please fill all details</p>';
        return;
    } else {
        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200) {
                document.getElementById("msg").innerHTML = request.responseText;
            }
        };
        request.open("POST", "login.php?userName=" + usr + "&" + "password=" + pass, true);
        request.send();
    }
}