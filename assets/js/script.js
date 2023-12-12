//Name validation functions

function valid(name) {
    upperCaseName = name.toUpperCase();
    for (let i = 0; i < upperCaseName.length; i++) {
        let charCode = upperCaseName.charCodeAt(i);
        let char = name.charAt(i);

        if (charCode < 65 || charCode > 90) {
            if (char !== '-' && char !== '.') {
                return false;
            }
        }
    }
    return true;
}

function validateName() {
    userName = document.getElementById("name").value;

    userName = userName.trim();

    const words = userName.split(' ');

    if (words.length >= 2) {
        for (const word of words) {
            if (!valid(word)) {
                document.getElementById('nameErr').innerHTML = "Please enter name";
            }
        }
    }
    else {
        document.getElementById('nameErr').innerHTML = "";
        return true;// true for valid name.
    }
}

//email validation functions

function validateEmail() {
    email = document.getElementById("email").value;

    if (email.indexOf('@') !== -1) {
        const emailparts = email.split('@');
        //console.log(emailparts[0] + " " + emailparts[1]);
        emailName = emailparts[0];
        emailDomain = emailparts[1];
        if (emailDomain.length !== 0 && emailName.length !== 0) {
            if (emailDomain.indexOf('.') !== -1) {
                if (!emailName.startsWith('.') || !emailName.endsWith('.') || !emailDomain.startsWith('.') || !emailDomain.endsWith('.')) {
                    return true;// true for valid email.
                }
            }
        }
    }
    else {
        return false;
    }
}

//mobile number validation functions
function validateNumber() {
    number = document.getElementById("number").value;
    flag = false;
    if (number.length == 11) {
        if (number[0] == 0 && number[1] == 1) {
            for (i = 2; i < number.length; i++) {
                if (isNaN(number[i])) {
                    $flag = true;
                }
            }
        }
    }
    if ($flag) {
        return true;// true for valid number.
    }
    else {
        return false;
    }
}

//pictures validation functions

function validatePicture() {
    userId = document.getElementById('userId');
    picture = document.getElementById('image');

    userId = userId.value;

    if (parseInt(userId) > 0) {
        if (picture.files.length > 0) {
            return true;//for valid image
        }
    }
    else {
        return false;
    }
}


function ajax() {

    let currentpassword = document.getElementById('currentpassword').value;
    let newpassword = document.getElementById('newpassword').value;
    let retypenewpassword = document.getElementById('retypenewpassword').value;
    let xhttp = new XMLHttpRequest();

    let data = 'cpassword=' + currentpassword + '&npassword=' + newpassword + '&rnpassword=' + retypenewpassword;

    xhttp.open('POST', '../controller/changepassCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('h5').innerHTML = this.responseText;
        }
    }

    xhttp.send(data);
}

function room() {
    let roomType = document.getElementById('roomType').value;
    let bedding = document.getElementById('bedding').value;

    if (!roomType) {
        alert('Please select a room type');
        return false;
    }
    if (!bedding) {
        alert('Please select a bedding');
        return false;
    } if (roomType && bedding) {
        let xhttp = new XMLHttpRequest();
        xhttp.open('POST', '../controller/roomCheck.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        let data = {
            'roomType': roomType,
            'bedding': bedding
        };
        let dataToSend = JSON.stringify(data);
        xhttp.send("data=" + dataToSend);
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let response = this.responseText;
                console.log(response);
                if (response) {
                    window.location.href = "../view/roomInfo.php";
                }
            }
        }

    }



}