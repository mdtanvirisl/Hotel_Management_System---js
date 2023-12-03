<?php
include_once("../model/guestModel.php");

$username = isset($_REQUEST['username']) ? $_REQUEST['username'] : "";
$question1 = isset($_REQUEST['question1']) ? $_REQUEST['question1'] : "";
$question2 = isset($_REQUEST['question2']) ? $_REQUEST['question2'] : "";

$usernameError = $question1Error = $question2Error = $error ="";

if (isset($_POST["submit"])) {
    if (!$username) {
        $usernameError = "Please enter a username";
    }
    if (!$question1) {
        $question1Error = "Please answer this question";
    }
    if (!$question2) {
        $question2Error = "Please answer this question";
    }
    if($username && $question1 && $question2){
        $user = getGuest($username);

        if(!$user){
            $error = "user not found";
        }
        else{
            if($user['Question1'] == $question1 && $user['Question2'] == $question2){
                session_start();
                $_SESSION['pass'] = true;
                $_SESSION['username'] = $username;
                header("Location: ../view/recoverpass.php");
            }
        }
    }
}
 

?>