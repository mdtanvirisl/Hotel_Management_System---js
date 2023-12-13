function validStaffUpdate(){
    let name = document.getElementById("name").value;
    name = name.trim();
    let words = name.split(' ');
    let email = document.getElementById("email").value;
    let number = document.getElementById("number").value;
    let gender = document.getElementById("gender").value;
    let address = document.getElementById("address").value;
    let username = document.getElementById("username").value;
    let flag = 0;

    // Name validation
    if (!name){
        document.getElementById("nameError").innerHTML = "Please enter name";
    }else if(words.length <= 1){
        document.getElementById("nameError").innerHTML = "Please write your name with atleast 2 words";
    }else{
        for (let i = 0; i < name.length; i++) {
            let char = name[i];

            if(char >= '0' && char <= '9' || char == '_' || char == '!' || char == '`' || char == '~' || char == '@' || char == '#' || char == '$' || char == '%' || char == '^' || char == '&' || char == '*' || char == '(' || char == ')' || char == '{' || char == '}' || char == '[' || char == ']' || char == '=' || char == '/' || char == '+' || char == '<' || char == '>' || char == ',' || char == '"' || char == ':' || char == ';' || char == '|' || char == '?'){
                document.getElementById("nameError").innerHTML = "Name can not contain numaric numbers & special characters just use . & -";
                flag = 1;
                break;
            }
        }
        if(flag != 1){
            flag = 2;
            document.getElementById("nameError").innerHTML = "";
        }
    }

    // Email validation
    if(flag == 2){
        if(!email){
            document.getElementById("emailError").innerHTML = "Please enter your email address";
        }else if(email.indexOf('@') != -1){
            let emailparts = email.split('@');
            emailName = emailparts[0];
            emailDomain = emailparts[1];
            if (emailDomain.length != 0 && emailName.length != 0) {
                if (emailDomain.indexOf('.') != -1) {
                    if (!emailName.startsWith('.') || !emailName.endsWith('.') || !emailDomain.startsWith('.') || !emailDomain.endsWith('.')) {
                        flag = 3;
                        document.getElementById("emailError").innerHTML = "";
                    }
                }else{
                    document.getElementById("emailError").innerHTML = "Invalid email address";
                }
            }
        }else{
            document.getElementById("emailError").innerHTML = "Please enter your valid email address"
        }
    }

    // Mobile number validation
    if(flag == 3){
        if(!number){
            document.getElementById("numberError").innerHTML = "Please enter your mobile number";
        }
        else if(number.length != 11){
            document.getElementById("numberError").innerHTML = "Mobile number must be 11 digit.";
        }
        else if(number[0] != '0' || number[1] != '1'){
            document.getElementById("numberError").innerHTML = "Mobile number start with 0 & 1.";
        }
        else{
            for (let i = 0; i < number.length; i++){
                let char = number[i];
                if(char >= '0' && char <= '9'){
                   flag = 4;
                   document.getElementById("numberError").innerHTML = "";
                }else{
                   document.getElementById("numberError").innerHTML = "Invalid Phone Number.";
                   break;
                }
            }
        }
    }

    // Gender validation
    if(flag == 4){
        if(!gender){
            document.getElementById("genderError").innerHTML = "Please select your gender.";
        }else{
            flag = 5;
            document.getElementById("genderError").innerHTML = "";
        }
    }

    // Address validation
    if(flag == 5){
        if(!address){
            document.getElementById("addressError").innerHTML = "Please write your address.";
        }else{
            flag = 6;
            document.getElementById("addressError").innerHTML = "";
        }
    }

    if(name != "" && email != "" && number != "" && address != "" && gender != "" && flag == 6){
           
        update(name, email, number, address, gender, username);

    }
}

function update(name, email, number, address, gender, username){
    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controller/staffUpdateCheck.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    let data = {
        'name': name,
        'email': email,
        'number': number,
        'address': address,
        'gender': gender,
        'username': username
    }
    let dataToSend = JSON.stringify(data);
    console.log(dataToSend);
    xhttp.send("data=" + dataToSend);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let response = JSON.parse(this.responseText);
            if (response){
                window.location.replace("../view/staffs_management.php");
            }
        }
    }
}