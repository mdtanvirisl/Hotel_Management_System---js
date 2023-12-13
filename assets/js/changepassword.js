function changePassword(){

    let currentpassword = document.getElementById('currentpassword').value;
    let newpassword = document.getElementById('newpassword').value;
    let retypenewpassword = document.getElementById('retypenewpassword').value;
    let xhttp = new XMLHttpRequest();

    let requestdata = 'cpassword=' + currentpassword + '&npassword=' + newpassword + '&rnpassword=' + retypenewpassword;

    //xhttp.open('GET', '../controller/change_password.php?cpassword=' + currentpassword + 'npassword=' + newpassword + 'rnpassword=' + retypenewpassword, true);
    xhttp.open('POST', '../controller/change_password.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){
            document.getElementById('h5').innerHTML = this.responseText;
        }
    }

    xhttp.send(requestdata);
}