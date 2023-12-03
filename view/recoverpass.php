<?php
include_once('../controller/recoverpassCheck.php');

?>
<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
    <table border = "1" width=100%>
        <tr>
            <td width=70%>
                <img src="../image/hotel_management.jpg" alt="" width="100" height="100">
            </td>
            <td align = "center">
                <a href="home.php">Home</a>
                | <a href="login.php">login</a>
                | <a href="registration.php">Registration</a>
            </td>
        </tr>
        <tr>
            <td colspan = "2">
                <form method="post" action="" enctype="">
                    <fieldset>
                        <legend>PASSWORD CHANGE</legend>
                        New Password: <input type="password" name="newpassword" value="<?php echo $newpassword ?>" /> <span><?= $newpasswordError ?></span> <br><br>
                        Retype New Password: <input type="password" name="retypepassword" value="<?php echo $retypepassword ?>" /> <span><?= $retypepasswordError ?></span><br>
                        <hr>
                        <input type="submit" name="submit" value="Submit" />
                    </fieldset>
                </form>
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