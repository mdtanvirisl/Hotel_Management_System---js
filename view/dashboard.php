<?php
    include('../controller/sessioncheck.php');
    include('../model/userModel.php');
    include("../controller/ReservationCheck.php");

    $details = reservation();
?>
<html lang="en">
<head>
    <title>Dashboard</title>
</head>
<body>
    <table border = "1" width=100%>
        <tr>
            <?php include('dashboard_menu.php'); ?>
        </tr>
        <tr>
            <td>
                <?php include('account.php'); ?>
            </td>
            <td width=80%>
                <table border='1' width='100%'>  
                    <tr>
                        <th>User Name</th>
                        <th>Name</th>
                        <th>Room No</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Status</th>
                    </tr>
                    <?php   for($i=0; $i<count($details); $i++){ ?>
                    <tr>
                        <td><?=$details[$i]['UserName']?></td>
                        <td><?=$details[$i]['Name']?></td>
                        <td><?=$details[$i]['RoomNo']?></td>
                        <td><?=$details[$i]['CheckIn']?></td>
                        <td><?=$details[$i]['CheckOut']?></td>
                        <td><?=$details[$i]['status']?></td>
                    </tr>
                <?php } ?> 
                </table>
            </td>
        </tr>
        <tr>
            <td colspan = "2" align = "center">
                <h6>Copyright @ 2017</h6>
            </td>
        </tr>
    </table>


</body>
</html>