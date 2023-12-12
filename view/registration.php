<?php
include_once("../controller/registrationCheck.php");

?>
<html>

<head>
    <title>Registration</title>
    <link rel="stylesheet" href="../assets/css/body.css">
</head>

<body>
    <?php include_once("home_menu.php");?>
        <form action="" method="POST" enctype="">
            <h3 class="page_title">REGISTRATION</h3>
            <hr>
            <div class="form">
            <fieldset>                
                <div class="input_box">
                    <label for="name"><b>Name: </b></label>
                    <input type="text" id="name" name="name" value="<?php echo $name ?>" onblur="validateName()"><span id="nameErr"></span>  
                    <?= $nameError ?> <br> <br>

                    <label for="number"><b>Number: </b></label> </td>
                    <input type="text" id="number" name="number" value="<?php echo $number ?>" ><span id="numberErr"></span> 
                    <?= $numberError ?> <br> <br> 

                    <label for="gender"><b>Gender: </b></label> 
                        <input type="radio" name="gender" value="Male" <?= ($gender && $gender == "Male") ?
                        'checked="checked"' : ""; 
                        ?> /> Male
                        <input type="radio" name="gender" value="Female" <?= ($gender && $gender == "Female") ?
                        'checked="checked"' : "";
                        ?> /> Female
                        <input type="radio" name="gender" value="Other" <?= ($gender && $gender == "Other") ?
                        'checked="checked"' : "";
                        ?> /> Other

                    <span id="genderErr"></span><?= $genderError ?> <br> <br>

                    <label for="email"><b>Email: </b></label> 
                    <input type="email" id="email" name="email" value="<?php echo $email ?>" > <span id="emailErr"></span>
                    <?= $emailError ?> <br> <br>

                    <br><hr><br>

                    <label for="username"><b>Username: </b></label>
                    <input type="text" id="username" name="username" value="<?php echo $username ?>" > <span id="usernameErr"></span>
                    <?= $usernameError ?> <br> <br>

                    <label for="password"><b>Password: </b></label>  
                    <input type="password" id="passwoed" name="password" value="<?php echo $password ?>" > <span id="passwordErr"></span>
                    <?= $passwordError ?> <br> <br>

                    <label for="confirmPassword"><b>Confirm Password: </b></label>
                    <input type="password" id="confirmPassword" name="confirmPassword" value="<?php echo $confirmPassword ?>" > <span id="confirmpassErr"></span>
                    <?= $confirmPasswordError ?> <br>        

                    <br><hr><br>

                    <label for="ques1"><b>Where did you born? </b></label>
                    <input type="text" id="ques1" name="question1" value="<?php echo $question1 ?>" > <span id="quetion1Err"></span> <br>
                    <?= $question1Error ?> <br>

                    <label for="ques2"><b>What is your Birthplace? </b></label>
                    <input type="text" id="ques2" name="question2" value="<?php echo $question2 ?>" > <span id="quetion2Err"></span> <br>
                    <?= $question2Error ?> <br>  

                    <?= $error ?>
                </div>
                
                <div>
                    <input onclick="return validate()"  class="submit_btn" type="submit" name="submit" value="Sign Up" >
                </div>                
            </fieldset>
        </form>
        <p class="links"> <b> Already have an Account? </b> <a href='login.php'>Login Now </a></p>
    </div>

<h6>Copyright @ 2017</h6>
    <script src="../assets/js/register.js"></script>
</body>

</html>