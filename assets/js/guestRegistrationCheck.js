function validGuestRegistration(){
    let userid = document.getElementById("userid").value;
    let name = document.getElementById("name").value;
    name = name.trim();
    let words = name.split(' ');
    let email = document.getElementById("email").value;
    let number = document.getElementById("number").value;
    let gender = document.getElementById("gender").value;
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let confirmpassword = document.getElementById("confirmpassword").value;
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

    // Username validation
    if(flag == 5){
        if(!username){
            document.getElementById("unameError").innerHTML = "Please enter your username";
        }
        else{
            for (let i = 0; i < username.length; i++){
                let char = username[i];

                if(!(char >= '0' && char <= '9' || char >= 'A' && char <= 'Z' || char >= 'a' && char <= 'z')){
                    document.getElementById("unameError").innerHTML = "Username must contain alpha numaric characters";
                    flag = 6;
                    break;
                }
            }
            if(flag != 6){
                flag = 7;
                document.getElementById("unameError").innerHTML = "";
            }
        }
    }

    // Password validation
    if(flag == 7){
        if(!password){
            document.getElementById("passwordError").innerHTML = "Please enter your password";
        }
        else if(password.length < 8){
            document.getElementById("passwordError").innerHTML = "Password must not be less than eight characters.";
        }else{
            let flagg = 0;
            if(password[0] >= '0' && password[0] <= '9' || password[0] >= 'A' && password[0] <= 'Z' || password[0] >= 'a' && password[0] <= 'z'){
                for (let i = 1; i < password.length; i++){
                    let char = password[i];
        
                    if(char == '_' || char == '!' || char == '`' || char == '~' || char == '@' || char == '#' || char == '$' || char == '%' || char == '^' || char == '&' || char == '*' || char == '(' || char == ')' || char == '{' || char == '}' || char == '[' || char == ']' || char == '=' || char == '/' || char == '+' || char == '<' || char == '>' || char == ',' || char == '"' || char == ':' || char == ';' || char == '|' || char == '.' || char == '-' || char == '?'){
                       flagg = 1;
                       break;
                    }
                }
            }
            
            if(flagg == 0){
                document.getElementById("passwordError").innerHTML = "Password write start with letter or numeric characters and must be with atleast one special characters.";
            }else{
               flag = 8;
               document.getElementById("passwordError").innerHTML = "";
            }
        }
    }

    // Confirm password validation
    if(flag == 8){
        if(!confirmpassword){
            document.getElementById("cpasswordError").innerHTML = "Please confirm your password.";
        }
        else if(password != confirmpassword){
            document.getElementById("cpasswordError").innerHTML = "Password do not match.";
        }else{
            flag = 9;
            document.getElementById("cpasswordError").innerHTML = "";
        }
    }

    if(name != "" && email != "" && number != "" && gender != "" && username != "" && password != "" && confirmpassword != "" && flag == 9){
           
        register(userid, name, email, number, gender, username, password, confirmpassword);

    }
}

function register(userid, name, email, number, gender, username, password, confirmpassword){
    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controller/guestRegistrationCheck.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    let data = {
        'userid': userid,
        'name': name,
        'email': email,
        'number': number,
        'gender': gender,
        'username': username,
        'password': password,
        'confirmpassword': confirmpassword
    }
    let dataToSend = JSON.stringify(data);
    xhttp.send("data=" + dataToSend);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let response = JSON.parse(this.responseText);
            if (response){
                window.location.replace("../view/guests_profile_management.php");
            }
        }
    }
}

function checkUsername(){
    let username = document.getElementById("username").value;
    let xhttp = new XMLHttpRequest();
    console.log(username);
    xhttp.open('POST', '../controller/unameCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){
            document.getElementById('unameError').innerHTML = this.responseText;
        }
    }

    xhttp.send('uname='+username);
}

function searchGuest(){
    let guestusername = document.getElementById('guestusername').value;
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/guestSearch.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('search='+guestusername);
    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){
            console.log(this.responseText);
            displayResults(JSON.parse(this.responseText));
            

        }
    };
}

function displayResults(results) {
    let table = document.getElementById('searchResults');
    table.innerHTML = '';

    if (results.length > 0) {
        // header row
        let headerRow = table.insertRow(0);
        headerRow.innerHTML = '<th>Id</th><th>Name</th><th>Email</th><th>Mobile Number</th><th>Gender</th><th>Username</th>';

        // rows with results
        for (let i = 0; i < results.length; i++) {
            let row = table.insertRow(i + 1);
            row.innerHTML = `<td>${results[i].GuestId}</td><td>${results[i].GuestName}</td><td>${results[i].GuestEmail}</td><td>${results[i].GuestNumber}</td><td>${results[i].Gender}</td><td>${results[i].GuestUserName}</td>`;
        }
    } else {
        let messageRow = table.insertRow(0);
        messageRow.innerHTML = '<td colspan="5">No results found.</td>';
    }
}