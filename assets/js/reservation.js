function namecheck() {
    let name = document.getElementById('name').value;

    if (name === "") {
        document.getElementById('nameErr').innerHTML = "Please enter name";
    }
    else {
        document.getElementById('nameErr').innerHTML = "";
    }
}

function usernamecheck() {
    let username = document.getElementById('username').value;
    if (!username) {
        document.getElementById('usernameErr').innerHTML = "please enter username";
    } else {
        let xhttp = new XMLHttpRequest();
        xhttp.open('POST', '../controller/usernameCheck.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("username=" + username);
        xhttp.onreadystatechange = function () {

            if (this.readyState == 4 && this.status == 200) {
                // alert(this.responseText);
                if (this.responseText) {
                    document.getElementById('usernameErr').innerHTML = "";
                } else {
                    document.getElementById('usernameErr').innerHTML = "user not found! please register first.";
                }
            }
        }
    }
}

function reserve() {
    let username = document.getElementById('username').value;
    let name = document.getElementById('name').value;
    let roomno = document.getElementById('roomno').value;
    let checkin = document.getElementById('checkin').value;
    let checkout = document.getElementById('checkout').value;
    if (!name) {
        document.getElementById('nameErr').innerHTML = "Please enter name";
        return false;
    }
    if (!username) {
        document.getElementById('usernameErr').innerHTML = "Please enter uisername";
        return false;
    }
    if (!roomno) {
        document.getElementById('roomErr').innerHTML = "Please enter room no";
        return false;
    }
    if (!checkin) {
        document.getElementById('checkin').innerHTML = "Please enter check in date";
        return false;
    }
    if (!checkout) {
        document.getElementById('checkout').innerHTML = "Please enter check out date";
        return false;
    }
    if (name && username && roomno && checkin && checkout) {
        let xhttp = new XMLHttpRequest();
        xhttp.open('POST', '../controller/ReservationCheck.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        let data = {
            'name': name,
            'username': username,
            'roomno': roomno,
            'checkin': checkin,
            'checkout': checkout
        };
        console.log(data);
        let dataToSend = JSON.stringify(data);
        xhttp.send("data=" + dataToSend);
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let response = this.responseText;
                console.log(response);
                if (response) {
                    window.location.href = "../view/reservationManagement.php";
                }
            }
        }
    }
}