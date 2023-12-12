function bookingInfo() {
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/dashboardCheck.php', true);
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

            let headerRow = ["User Name", "name", "Room no", "Check In", "Check out", "Status"];
            for (let i = 0; i < headerRow.length; i++) {
                let headerCell = document.createElement('th');
                headerCell.textContent = headerRow[i];
                document.getElementById('table').appendChild(headerCell);
            }


            details.forEach(detail => {
                let tr = document.createElement('tr');
                tr.innerHTML = `<tr>
                    <td>
                        ${detail.UserName}
                    </td>
                    <td>
                        ${detail.Name}
                    </td>
                    <td>
                        ${detail.RoomNo}
                    </td>
                    <td>
                        ${detail.CheckIn}
                    </td>
                    <td>
                        ${detail.CheckOut}
                    </td>
                    <td>
                        ${detail.status}
                    </td>
                </tr>`

                document.getElementById('table').appendChild(tr);

            });

        }
    }
}

bookingInfo();