<?php
include_once('../controller/forgetpassCheck.php');

?>

<html lang="en">

<head>
    <title>Forget Password</title>
    <link rel="stylesheet" href="../assets/css/body.css">
</head>

<body>
    <?php include_once("home_menu.php");?>

    <div class="form">
        <form method="post" action="" enctype="" novalidate>            
            <fieldset>
            <legend>Forget Password: </legend>
                
            <div class="input_box">
                <p><b>Enter Username: </b></p> 
                
                <input type="text" name="username" value="" /> 
                <span><?= $usernameError ?> </span> 

                <p><b>Where did you born? </b></p>

                <input type="text" name="question1" value="<?php echo $question1 ?>"/> 
                <span><?= $question1Error ?></span> 

                <p><b>What is your birth year? </b></p>
                <input type="text" name="question2" value="<?php echo $question2 ?>"/> 
                <span><?= $question2Error ?></span>
            </div>

            <input class="submit_btn" type="submit" name="submit" value="Submit" />
            
            </fieldset>
        </form>
    </div>

    <p class="links"> <b> Don't have an Account? </b> <a href='registration.php'>Register Now </a> </p>


    <h6>Copyright @ 2017</h6>
            
    
</body>

</html>