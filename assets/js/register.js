
function validate() {
    let name = document.getElementById("name").value;
    let contact = document.getElementById("number").value;
    let gender = document.querySelector('input[name="gender"]:checked').value;
    let email = document.getElementById("email").value;
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirmPassword").value;
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
    if (!gender) {
        document.getElementById('genderErr').innerHTML = "Please select gender";
        return false;
    }
    if (!email) {
        document.getElementById('emailErr').innerHTML = "Please enter email";
        return false;
    }
    if (!username) {
        document.getElementById('usernameErr').innerHTML = "Please enter username";
        return false;
    }
    if (!password) {
        document.getElementById('passwordErr').innerHTML = "Please enter password";
        return false;
    }
    if (!confirmPassword) {
        document.getElementById('confirmpassErr').innerHTML = "Please retype password";
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
    if (name && contact && gender && username && email && password && confirmPassword) {
        let flag = true;
        if (validateName(name)) {
            document.getElementById('nameErr').innerHTML = "Please enter at least 2 word";
            flag = false;
            return false;
        }
        if (validateNumber(contact)) {
            document.getElementById('numberErr').innerHTML = "Please enter valid 11 digit contact number starting with 0 & 1";
            flag = false;
            return false;
        }
        if (validateEmail(email)) {
            document.getElementById('emailErr').innerHTML = "Please enter valid email";
            flag = false;
            return false;
        }
        if (confirmPassword !== password) {
            document.getElementById('confirmpassErr').innerHTML = "Passwords did not match";
            flag = false;
            return false;
        }
        // if (flag === true) {
        //     register(name, contact, gender, email, username, password, ques1, ques2);
        // }
        // else {
        //     return false;
        // }
    }
}

function register(name, contact, gender, email, username, password, ques1, ques2) {
    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controller/registrationCheck.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    let data = {
        name: name,
        contact: contact,
        gender: gender,
        email: email,
        username: username,
        password: password,
        ques1: ques1,
        ques2: ques2
    };
    let dataToSend = JSON.stringify(data);
    console.log(dataToSend);
    xhttp.send("data=" + dataToSend);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            let response = JSON.parse(this.responseText);
            if (response.success) {
            }
            if (response.error) {
                document.getElementById("error").innerHTML = response.error;
            }
        }
    };
}


