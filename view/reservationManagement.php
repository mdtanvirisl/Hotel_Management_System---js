<?php
    include('../controller/sessioncheck.php');
    include('../model/reserveModel.php');
    include("../controller/ReservationCheck.php");

    $details = reservation();
?>

<html>
<head>
    <title>Reservation</title>
</head>
<body>
    <table border = '1' width = 100%>
        <tr>
            <?php include('header.php'); ?>
        </tr>
        <tr>
            <td>
                <?php include('account.php'); ?>
            </td>
            <td width = 85%>
                <form method="post" action="" enctype="">
                    <fieldset>
                        <legend> Make a Reservation </legend>
                        <input type="text" name="name" value="" placeholder = "Enter Name" /><span><?= $nameError ?></span><br>
                        <input type="text" name="username" value="" placeholder = "Enter Username" /> <span><?= $usernameError ?></span><br>
                        <input type="text" name="roomno" value="" placeholder = "Enter Room No"/><span><?= $roomNoError?></span><br>
                        Check In: <input type="date" name="checkin" value="" /><span><?= $dateinError?></span><br>
                        Check Out: <input type="date" name="checkout" value="" /><span><?= $dateoutError?></span><br>
                        
                        <hr>
                        <input type="submit" name="submit" value="Reserved" /><br>
                    </fieldset>
                </form><hr>
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
                        <td>
                            <a href='../controller/delete.php?username=<?=$details[$i]['UserName']?>'> DELETE </a> 
                            <a href='../controller/confirm.php?username=<?=$details[$i]['UserName']?>'> CONFIRM </a> 
                        </td>
                    </tr>
                <?php } ?> 
                </table>
            </td>
        </tr>
        <tr>
            <td colspan = "2" align = "center">
                <h6>Copyright &copy 2017</h6>
            </td>
        </tr>
    </table>
</body>
</html>