<?php
include_once("../model/userModel.php");

 $password = getAuth($_SESSION['user']['username']);

    $currentpassword = $_REQUEST['cpassword'];
    $newpassword = $_REQUEST['npassword'];
    $retypenewpassword = $_REQUEST['rnpassword'];

    if($currentpassword == "" || $newpassword == "" || $retypenewpassword == ""){
        echo "null value";
    }
    if(strlen($newpassword) < 6 || strlen($retypenewpassword) < 6) {
        echo "Password must not be less than six characters.";
    }
    if($currentpassword != $password['Password']){
        echo "current password not matched.";
    }  
        
    if($newpassword == $retypenewpassword){
        updatePassword($_SESSION['user']['username'], $newpassword);
        echo "Password Changed";
    }
    else{
        echo "Password not Changed";
    }
    


?>