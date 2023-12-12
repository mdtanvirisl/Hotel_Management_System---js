<?php
include_once('../controller/recoverpassCheck.php');

?>
<html lang="en">
<head>
    <title>recover password</title>
    <link rel="stylesheet" href="../assets/css/body.css">
</head>
<body>
    <?php include_once("home_menu.php");?>

    <div class="form">
        <form method="post" action="" enctype="">
            <fieldset>
                <legend>PASSWORD CHANGE</legend>

                <div class="input_box">
                    New Password: <input type="password" name="newpassword" value="<?php echo $newpassword ?>" /> 
                    <span><?= $newpasswordError ?></span> <br><br>
                    
                    Retype New Password: <input type="password" name="retypepassword" value="<?php echo $retypepassword ?>" /> 
                    <span><?= $retypepasswordError ?></span><br>
                </div>

                <hr>
                <input class="submit_btn" type="submit" name="submit" value="Submit" />

            </fieldset>
        </form>
    </div>
    <h6>Copyright @ 2017</h6>

</body>
</html>