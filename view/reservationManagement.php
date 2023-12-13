<?php
session_start();
    include('../controller/sessioncheck.php');
    include('../model/reserveModel.php');

    $details = reservation();
?>

<html>
<head>
    <title>Reservation</title>
    <link rel="stylesheet" href="../assets/css/draft.css">
    <script src="../assets/js/reservation.js"></script>
</head>
<body>
    <?php include('dashboard_menu.php'); ?>
    <section class="container">
        <div class="">
            <?php include('side_menu.php'); ?>
        </div>
        <div class="info">
            <div>
                <form method="post" action="" enctype="">
                    <fieldset>
                        <legend> Make a Reservation </legend>
                        <input type="text" id="name" name="name" value="" placeholder = "Enter Name" onblur="namecheck()"/><span id="nameErr"></span><br>
                        <input type="text" id="username" name="username" value="" placeholder = "Enter Username" onblur="usernamecheck()"/> <span id="usernameErr"></span><br>
                        <input type="text" id="roomno" name="roomno" value="" placeholder = "Enter Room No"/><span id="roomErr"></span><br>
                        Check In: <input id="checkin" type="date" name="checkin" value="" /><span id="checkinErr"></span><br>
                        Check Out: <input id="checkout" type="date" name="checkout" value="" /><span id="checkoutErr"></span><br>
                        <span id="error"></span>
                        <hr>
                        <input onclick="reserve()" type="button" name="submit" value="Reserved" /><br>
                    </fieldset>
                </form><hr>
            </div>
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
                        <td>
                            <a href='../controller/delete.php?username=<?=$details[$i]['UserName']?>'> DELETE </a> 
                            <a href='../controller/confirm.php?username=<?=$details[$i]['UserName']?>'> CONFIRM </a> 
                        </td>
                    </tr>
                <?php } ?> 
                </table>
            </div>
        </div>
    </section>
</body>
</html>