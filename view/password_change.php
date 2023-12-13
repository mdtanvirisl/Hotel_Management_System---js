<?php
session_start();
if($_SESSION['user']['UserType'] == 'Admin'){
    include('../controller/adminsession.php');
}
else{
    include('../controller/sessioncheck.php');
}
?>
<html lang="en">
<head>
    <title>Password Change</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/body.css">
    <link rel="stylesheet" href="../assets/css/draft.css">
    <script src="../assets/js/changepassword.js"></script>
</head>

<body>
    <?php include('dashboard_menu.php'); ?>
    <section class="container">
        <div class="">
            <?php
                if($_SESSION['user']['UserType'] == 'Receptionist'){
                    include('side_menu.php'); 
                }else if($_SESSION['user']['UserType'] == 'Admin'){
                    include('admin_menu.php');
                } 
            ?>
        </div>
        <div class="info">
            <div class="form">
                <form method="" action="" enctype="">
                    <fieldset>
                        <legend>PASSWORD CHANGE</legend>
                        Current Password: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="password" id="currentpassword" name="currentpassword" value="" /> <br> <br>
                        New Password: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="password" id="newpassword" name="newpassword" value="" /> <br> <br>
                        Retype New Password: <input type="password" id="retypenewpassword" name="retypenewpassword" value="" /> <br> <br>
                        <hr>
                        <input type="button"  name="submit" value="Submit" class="submit_btn" onclick="changePassword()" />
                    </fieldset>
                </form>

                <h5 id="h5"> </h5>
            </div>
        </div>
    </section>
</body>
</html>