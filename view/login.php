<?php 
 
 include("../controller/logincheck.php");


?>

<html lang="en">

<head>
    <title>LOGIN</title>
</head>

<body>
    <table border = "1" width= 100%>
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
                        <legend>LOGIN</legend>
                        User Name: <input type="text" name="username" value="" /> <br>
                        Password: <input type="password" name="password" value="" /> <br>
                        <p><?= $error ?></p>
                        <hr>
                        <input type="checkbox" name="remember_me" id="checkbox">
                        <label for="checkbox"> Remember Me</label><br>
                        <input type="submit" name="submit" value="Submit" />
                        <a href="forgetPassword.php">Forget Password?</a>
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