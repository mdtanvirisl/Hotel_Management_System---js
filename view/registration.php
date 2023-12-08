<?php
include_once("../controller/registrationCheck.php");

?>
<html>

<head>
    <title>Registration</title>
</head>

<body>
    <?php include_once("home_menu.php");?>
    <table border = '1' width= 100%>
        <tr>
            <td colspan = "2">
                <center>
                    <form action="" method="POST" enctype="">


                        <h3>REGISTRATION</h3>
                        <hr>
                        <table border="0" cellspacing="0" cellpadding="0">


                            <tr>
                                <td><label for="name">Name</label> </td>
                                <td> : <input type="text" name="name" value="<?php echo $name ?>"/> <span><?= $nameError ?></span> </td>
                            </tr>
                            <tr>
                                <td><label for="username">Username</label> </td>
                                <td> : <input type="text" name="username" value="<?php echo $username ?>"/> <span><?= $usernameError ?></span> </td>
                            </tr>
                            <tr>
                                <td><label for="email">Email</label> </td>
                                <td> : <input type="email" name="email" value="<?php echo $email ?>"/> <span><?= $emailError ?></span> </td>
                            </tr>
                            <tr>
                                <td><label for="number">Number</label> </td>
                                <td> : <input type="text" name="number" value="<?php echo $number ?>"/> <span><?= $numberError ?></span> </td>
                            </tr>
                            <tr>
                                <td><label for="password">Password</label> </td>
                                <td> : <input type="text" name="password" value="<?php echo $password ?>"/> <span><?= $passwordError ?></span> </td>
                            </tr>
                            <tr>
                                <td><label for="confirmPassword">Confirm Password</label> </td>
                                <td> : <input type="text" name="confirmPassword" value="<?php echo $confirmPassword ?>"/> <span><?= $confirmPasswordError ?></span> </td>
                            </tr>
                            <tr>
                                <td><label for="gender">Gender</label> </td>
                                <td> :
                                    <input type="radio" name="gender" value="Male" <?= ($gender && $gender == "Male") ?
                                                                                        'checked="checked"' : "";
                                                                                    ?> /> Male
                                    <input type="radio" name="gender" value="Female" <?= ($gender && $gender == "Female") ?
                                                                                            'checked="checked"' : "";
                                                                                        ?> /> Female
                                    <input type="radio" name="gender" value="Other" <?= ($gender && $gender == "Other") ?
                                                                                        'checked="checked"' : "";
                                                                                    ?> /> Other
                                                                                    <span><?= $genderError ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td><p>Where did you born?</p></td>
                                <td> : <input type="text" name="question1" value="<?php echo $question1 ?>"/> <span><?= $question1Error ?></span></td>
                            </tr>
                            <tr>
                                <td><p>What is your birth year?</p></td>
                                <td> : <input type="text" name="question2" value="<?php echo $question2 ?>"/> <span><?= $question2Error ?></span></td>
                            </tr>
                        </table>
                        <div>
                            <p><?= $error ?></p>
                            <br>
                            <input type="submit" value="Sign Up" name="submit" />
                        </div>
                    </form>
                </center>
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