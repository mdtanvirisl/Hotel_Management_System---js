<?php 
    // session_start();
    if(!isset($_COOKIE['Receptionist'])){
        header('location: ../view/login.php');
    }
?>