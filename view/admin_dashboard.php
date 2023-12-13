<?php
    include('../controller/sessioncheck.php');
    include('../model/userModel.php');
    include("../controller/ReservationCheck.php");

    $details = reservation();
?>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/draft.css">
</head>
<body>
    <?php include('dashboard_menu.php'); ?>
    <section class="container">
        <div class="">
            <?php include('admin_menu.php'); ?>
        </div>
        <div class="info">
            <div>
                <table>  
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
            </div>
        </div>
    </section>
</body>
</html>