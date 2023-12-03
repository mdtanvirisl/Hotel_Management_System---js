<?php 
    session_start();
    require_once("../model/userModel.php");
    $username = isset($_REQUEST['username']) ? $_REQUEST['username'] : "";
    $password = isset($_REQUEST['password']) ? $_REQUEST['password'] : "";
    
    $error = "";
    $status = login($username, $password);
    if (isset($_POST["submit"])){
        if(!$username && !$password){
            $error = "please enter all required information";
        }else if($status){
            $_SESSION['flag'] = 'true';
            header('location: ../view/dashboard.php');
        }else{
            $error =  "invalid username/password!";
        }
    }
?>