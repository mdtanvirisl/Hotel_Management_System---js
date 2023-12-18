<?php 
 
 include("../controller/logincheck.php");


?>

<html lang="en">

<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="../assets/css/body.css">
</head>

<body>
    <?php include_once("home_menu.php");?>
    <div class="form">
        <form action="" method="post" enctype="" novalidate>
            <fieldset>
                <legend>Login: </legend>
        
                <?= $error ?> <br><br>
                
                <div class="input_box">
                    User Name: <input type="text" name="username" value="" /> <br><br>
                    Password: <input type="password" name="password" value="" /> <br><br>
                </div>

                <hr>

                <input type="checkbox" name="remember_me" id="checkbox"> 
                <label for="checkbox">Remember Me? </label> <br><br>
                
                <input class="submit_btn" type="submit" name="submit" value="Login" />
            
            </fieldset>
        </form>
    </div>
        
    <p class="links"> <b> Forget Password? </b> <a href='forgetPassword.php'> Click Here </a></p>
    <p class="links"> <b> Don't have an Account? </b> <a href='registration.php'> Register Now </a></p>
    
</body>

</html>