<?php
    include('../model/guestModel.php');
    include('../model/userModel.php');
    if(isset($_REQUEST['username'])){
        $guestusername = $_REQUEST['username'];
        deleteguest($guestusername);
        deleteuser($guestusername);
        header('location: ../view/guests_profile_management.php');
    }
?>