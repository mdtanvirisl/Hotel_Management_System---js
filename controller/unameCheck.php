<?php

    include('../model/userModel.php');
 
    if(isset($_REQUEST['uname'])){

        $username=$_REQUEST['uname'];
        $checkuser = searchUser($username);
        if($checkuser)
        {
            echo "Please give unique username";
        }
        else{
            echo " ";
        }
       
    }

?>
    
    
    
    
    
    
    
    