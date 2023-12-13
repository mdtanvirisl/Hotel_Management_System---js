<?php
    session_start();
    if($_SESSION['user']['UserType'] == 'Admin'){
        setcookie('Admin', 'true', time()-3600, '/');
    }
    else{
        setcookie('Receptionist', 'true', time()-3600, '/');
    }
    header('location: ../view/login.php');
?>