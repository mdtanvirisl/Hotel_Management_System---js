
function editProfile() {
    let name = document.getElementById("name").value;
    let contact = document.getElementById("number").value;
    let email = document.getElementById("email").value;
    let address = document.getElementById("address").value;
    let ques1 = document.getElementById("ques1").value;
    let ques2 = document.getElementById("ques2").value;

    if (!name) {
        document.getElementById('nameErr').innerHTML = "Please enter name";
        return false;
    }
    if (!contact) {
        document.getElementById('numberErr').innerHTML = "Please enter number";
        return false;
    }
    if (!email) {
        document.getElementById('emailErr').innerHTML = "Please enter email";
        return false;
    }
    if (!address) {
        document.getElementById('addressErr').innerHTML = "Please enter address";
        return false;
    }
    if (!ques1) {
        document.getElementById('ques1Err').innerHTML = "Please enter ques1 ans";
        return false;
    }
    if (!ques2) {
        document.getElementById('ques2Err').innerHTML = "Please enter que2 ans";
        return false;
    }
    if (name && contact && username && email && address) {
        if (validateName(name)) {
            document.getElementById('nameErr').innerHTML = "Please enter at least 2 word";
            return false;
        }
        if (validateNumber(contact)) {
            document.getElementById('numberErr').innerHTML = "Please enter valid 11 digit contact number starting with 0 & 1";
            return false;
        }
        if (validateEmail(email)) {
            document.getElementById('emailErr').innerHTML = "Please enter valid email";
            return false;
        }
    }
    //  else {
    //     document.getElementById("error").innerHTML = error;
    // }
}


