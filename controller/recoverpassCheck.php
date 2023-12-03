<?php
include_once("../model/guestModel.php");

$newpassword = isset($_REQUEST['newpassword']) ? $_REQUEST['newpassword'] : "";
$retypepassword = isset($_REQUEST['retypepassword']) ? $_REQUEST['retypepassword'] : "";

$newpasswordError = $retypepasswordError = "";

if (isset($_POST["submit"])) {

    if (!$newpassword) {
        $newpasswordError = "Please enter new password";
    }
    if (!$retypepassword) {
        $retypepasswordError = "Please retype new password";
    }
    if ($newpassword && strlen($newpassword) < 6) {
        $newpasswordError = "Password must be at least 6 characters";
    }
    if ($retypepassword != $newpassword) {
        $retypepasswordError = "passwords did not match";
    }
    if($newpassword && $retypepassword){
        session_start();
        $username = $_SESSION['username'];
        $status = updatePassword($username, $newpassword);

        if($status){
            header("Location: ../view/login.php");
        }
        else{
            $error = "Passwords did not updatred";
        }
    }
}
?>