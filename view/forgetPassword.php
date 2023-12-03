<?php
include_once('../controller/forgetpassCheck.php');

?>

<html lang="en">

<head>
    <title>Forget Password</title>
</head>

<body>
    <table border = "1" width= 100%>
        <tr>
            <td width=70%>
                <img src="../image/hotel_management.jpg" alt="" width="100" height="100">
            </td>
            <td colspan="2">
                <a href="home.php">Home</a>
                | <a href="login.php">login</a>
                | <a href="registration.php">Registration</a>
            </td>
        </tr>
        <tr>
            <td colspan = "2">
                <form method="post" action="" enctype="">
                    <fieldset>
                        <legend>FORGET PASSWORD</legend>
                        Enter username: <br><input type="text" name="username" value="" /> <span><?= $usernameError ?> <br>
                        <hr>
                        <p>Where did you born?</p>
                        <input type="text" name="question1" value="<?php echo $question1 ?>"/> <span><?= $question1Error ?></span>
                        <hr>
                        <p>What is your birth year?</p>
                        <input type="text" name="question2" value="<?php echo $question2 ?>"/> <span><?= $question2Error ?></span>
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