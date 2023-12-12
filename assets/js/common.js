function checkUserName() {
    let username = document.getElementById('username').value;

    if (username === '') {
        document.getElementById('usernameError').innerHTML = 'Username cannot be empty.';
    } else {
        for (let i = 0; i < username.length; i++) {
            if (!checkChar(username[i])) {
                document.getElementById('usernameError').innerHTML = 'Username can only contain letters, numbers, dots, or spaces.';
                break;
            }
        }

        if (username.split(' ').length > 1) {
            document.getElementById('usernameError').innerHTML = 'Username cannot contain more than one word.';
        } else if (username.length > 15) {
            document.getElementById('usernameError').innerHTML = 'Username cannot exceed 15 characters.';
        } else {
            document.getElementById('usernameError').innerHTML = '';
        }
    }
    checkFormValidity();
}

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

function validateName(userName) {
    // userName = document.getElementById("name").value;

    userName = userName.trim();

    const words = userName.split(' ');

    if (words.length >= 2) {
        for (const word of words) {
            if (!valid(word)) {
                return false;
            }
        }
    }
    else {
        return true;// true for valid name.
    }
}

//email validation functions

function validateEmail(email) {
    // email = document.getElementById("email").value;

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
// document.getElementById('btn').addEventListener('click', function () {
//     validate();
// });

//mobile number validation functions
function validateNumber(number) {
    // number = document.getElementById("number").value;
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
    picture = document.getElementById('image');
    if (picture.files.length > 0) {
        return true;//for valid image
    }
    else {
        return false;
    }
}