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
        }
        if($status){
            if($status['UserType'] == 'Admin'){
                // $_SESSION['flag'] = 'true';
                setcookie('Admin', 'true', time()+3600, '/');
                header('location: ../view/admin_dashboard.php');
            }else if($status['UserType'] == 'Receptionist'){
                // $_SESSION['flag'] = 'true';
                setcookie('Receptionist', 'true', time()+3600, '/');
                header('location: ../view/dashboard.php');
            }else if($status['UserType'] == 'Guest'){
                // $_SESSION['flag'] = 'true';
                setcookie('Guest', 'true', time()+3600, '/');
                header('location: ../view/guest_dashboard.php');
            }
        }else{
            $error =  "invalid username/password!";
        }
    }
?>