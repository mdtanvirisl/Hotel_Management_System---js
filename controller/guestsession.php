<?php 
    // session_start();
    if(!isset($_COOKIE['Guest'])){
        header('location: ../view/login.php');
    }
?>