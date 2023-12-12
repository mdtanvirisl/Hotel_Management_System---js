<?php
    include('../controller/sessioncheck.php');
    include_once('../controller/changepassCheck.php');
?>

<html lang="en">
<head>
    <title>Password Change</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/body.css">
    <link rel="stylesheet" href="../assets/css/draft.css">
    <script src="../js/script.js"></script>
</head>

<body>
    <?php include('dashboard_menu.php'); ?>
    <section class="container">
        <div class="">
            <?php include('side_menu.php'); ?>
        </div>
        <div class="info">
            <div class="form">    
                <form method="post" action="" enctype="" novalidate>
                    <fieldset>
                        <legend>Change Password: </legend>

                        <div class="input_box">
                            Current Password: <input type="password" name="currpassword" value="" /> 
                            <span><?= $currpasswordError ?></span> <br><br>

                            New Password: <input type="password" name="newpassword" value="" /> 
                            <span><?= $newpasswordError ?></span> <br><br>

                            Retype New Password: <input type="password" name="retypepassword" value="" /> 
                            <span><?= $retypepasswordError ?></span> 
                            <span><?= $confirmPasswordError ?></span> <br><br>
                            
                            <span><?= $error ?></span>
                        
                        </div>
                            
                        <input class="submit_btn" type="submit" name="submit" value="Submit" />
                    
                    </form>
                </fieldset>
            </div>
        </div>
    </section>
</body>

</html>