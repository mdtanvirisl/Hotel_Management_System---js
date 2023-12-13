function validSalarySheet(){
    let stafftype = document.getElementById("stafftype").value;
    let salary = document.getElementById("salary").value;

    if(!salary){
        document.getElementById("inputError").innerHTML = "Please input amount.";
    }else{
        document.getElementById("inputError").innerHTML = "";
        salarySheet(stafftype, salary);
    }
}

function salarySheet(stafftype, salary){
    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controller/salarySheet.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    let data = {
        'stafftype': stafftype,
        'salary': salary
    }
    let dataToSend = JSON.stringify(data);
    console.log(dataToSend);
    xhttp.send("data=" + dataToSend);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let response = JSON.parse(this.responseText);
            if (response){
                window.location.replace("../view/staffs_salary_sheet.php");
            }
        }
    }
}