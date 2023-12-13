<?php
session_start();
include('../controller/adminsession.php');
    include('../model/userModel.php');
    $users = getalluser();
?>

<html lang="en">
<head>
    <title>Setting</title>
    <link rel="stylesheet" href="../assets/css/draft.css">
    <link rel="stylesheet" href="../assets/css/body.css">
</head>

<body>
    <?php include('dashboard_menu.php'); ?>
    <section class="container">
        <div class="">
            <?php include('admin_menu.php'); ?>
        </div>
        <div class="info">
            <div>
                <a href = "password_change.php"> Change Password </a>
                <p align = "center"> View user </p>
                <table border=1 align = "center">
                    <tr>
                        <th>Username</th>
                        <th>Usertype</th>
                        <th>Password</th>
                    </tr>
                    <?php  for($i=0; $i<count($users); $i++){ ?>
                    <tr>
                        <td><?=$users[$i]['UserName']?></td>
                        <td><?=$users[$i]['UserType']?></td>
                        <td><?=$users[$i]['Password']?></td>
                    </tr>
                    <?php } ?>
                </table> <br/>
            </div>
        </div>
    </section>
</body>
</html>