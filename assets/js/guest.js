function guestProfile() {
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/guestProfileCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send()
    xhttp.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {
            // alert(this.responseText);
            let details = JSON.parse(this.responseText);
            console.log(details);

            let infoDiv = document.getElementById('info');
            infoDiv.innerHTML = ``;

            let table = document.createElement('table');
            table.setAttribute("id", "table");
            infoDiv.appendChild(table);

            let headerRow = ["Name", "Email", "Mobile Number", "Gender", "Username"];
            for (let i = 0; i < headerRow.length; i++) {
                let headerCell = document.createElement('th');
                headerCell.textContent = headerRow[i];
                document.getElementById('table').appendChild(headerCell);
            }


            details.forEach(details => {
                let tr = document.createElement('tr');
                tr.innerHTML = `<tr>
                    <td>
                        ${details.GuestName}
                    </td>
                    <td>
                        ${details.GuestEmail}
                    </td>
                    <td>
                        ${details.GuestNumber}
                    </td>
                    <td>
                        ${details.Gender}
                    </td>
                    <td>
                        ${details.GuestUserName}
                    </td>
                </tr>`

                document.getElementById('table').appendChild(tr);

            });

        }
    }
}

guestProfile();