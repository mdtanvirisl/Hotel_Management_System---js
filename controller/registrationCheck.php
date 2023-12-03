<?php

include_once("../model/guestModel.php");
include_once("../model/registrationFunction.php");

$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : "";
$username = isset($_REQUEST['username']) ? $_REQUEST['username'] : "";
$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : "";
$number = isset($_REQUEST['number']) ? $_REQUEST['number'] : "";
$gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : "";
$question1 = isset($_REQUEST['question1']) ? $_REQUEST['question1'] : "";
$question2 = isset($_REQUEST['question2']) ? $_REQUEST['question2'] : "";
$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : "";
$confirmPassword = isset($_REQUEST['confirmPassword']) ? $_REQUEST['confirmPassword'] : "";


$nameError = $usernameError = $emailError = $numberError = $genderError = $question1Error = $question2Error = $passwordError = $confirmPasswordError = "";

$error = "";

if (isset($_POST["submit"])) {

    if (!$name) {
        $nameError = "Please enter your name";
    }
    if (!$username) {
        $usernameError = "Please enter a username";
    }
    if (!$email) {
        $emailError = "Please enter your email";
    }
    if (!$number) {
        $numberError = "Please enter your number";
    }
    if (!$gender) {
        $genderError = "Please select your gender";
    }
    if (!$password) {
        $passwordError = "Please enter password";
    }
    if ($password && strlen($password) < 6) {
        $passwordError = "Password must be at least 6 characters";
    }
    if (!$confirmPassword) {
        $confirmPasswordError = "Please enter confirmPassword";
    }
    if ($confirmPassword != $password) {
        $confirmPasswordError = "passwords did not match";
    }
    if (!$question1) {
        $question1Error = "Please answer this question";
    }
    if (!$question2) {
        $question2Error = "Please answer this question";
    }
    if ($name && $username && $email && $number && $gender && $question1 && $question2 && $password && $password == $confirmPassword) {
        $flag = true;
        if (!nameCheck($name)) {
            $nameError = "Please enter your name at least two words";
            $flag = false;
        }
        if (!usernameChaeck($username)) {
            $usernameError = "username must contains num & alpha ";
            $flag = false;
        }
        if (!numberCheck($number)) {
            $numberError = "number must start with 0 & 1 & must be 11 digits";
            $flag = false;
        }

        if($flag){
            $guest = ['name'=>$name, 'username'=>$username, 'email'=>$email, 'number'=>$number, 'gender'=>$gender, 'password'=>$password, 'question1'=>$question1, 'question2'=>$question2,  'userType'=>"Guest"];
            $error = register($guest);
        }
    }
}
