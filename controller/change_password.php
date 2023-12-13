<?php

    include('../model/userModel.php');
    session_start();
    $password = getpassword($_SESSION['user']['username']);

    $currentpassword = $_REQUEST['cpassword'];
    $newpassword = $_REQUEST['npassword'];
    $retypenewpassword = $_REQUEST['rnpassword'];

    if($currentpassword == "" || $newpassword == "" || $retypenewpassword == ""){
        echo "null value";
    }
    elseif(strlen($currentpassword) < 8 || strlen($newpassword) < 8 || strlen($retypenewpassword) < 8) {
        echo "Password must not be less than eight characters.";
    }
    elseif($currentpassword != $password['Password']){
        echo "current password not matched.";
    }  
    elseif($currentpassword != $newpassword){
        
        if($newpassword == $retypenewpassword){
            passwordupdate($_SESSION['user']['username'], $newpassword);
            echo "Password Changed";
        }
        else{
           echo "Password not Changed";
        }
    }
    else{
        echo "Invalid password";
    }

?>