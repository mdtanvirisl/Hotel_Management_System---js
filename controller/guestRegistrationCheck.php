<?php

    include('../model/guestModel.php');
    include('../model/userModel.php');
    
    if(isset($_REQUEST['data'])){
        $user = json_decode($_REQUEST['data']);
        $flag = 0;
        

        // Name validation
        if(empty($user->name)){
            echo "Please enter your name";
        }
        else if(str_word_count("$user->name") <= 1){
            echo "Please write your name with atleast 2 words";
        }else{
            for ($i = 0; $i < strlen($user->name); $i++) {
                $char = $user->name[$i];
    
                if($char >= '0' && $char <= '9' || $char == '_' || $char == '!' || $char == '`' || $char == '~' || $char == '@' || $char == '#' || $char == '$' || $char == '%' || $char == '^' || $char == '&' || $char == '*' || $char == '(' || $char == ')' || $char == '{' || $char == '}' || $char == '[' || $char == ']' || $char == '=' || $char == '/' || $char == '+' || $char == '<' || $char == '>' || $char == ',' || $char == '"' || $char == ':' || $char == ';' || $char == '|' || $char == '?'){
                    echo "Name can not contain numaric numbers & special characters just use . & -";
                    $flag = 1;
                    break;
                }
            }
            if($flag != 1){
                $flag = 2;
            }
        }
            

        // Email validation
        if($flag == 2){
            if(empty($user->email)){
               echo "Please enter your email address";
            }else{
                $flag = 3;
            }
        }

        // Mobile number validation
        if($flag == 3){
            if(empty($user->number)){
              echo "Please enter your mobile number";
            }
            else if(strlen($user->number) != 11){
               echo "Mobile number must be 11 digit.";
            }
            else if($user->number[0] != '0' || $user->number[1] != '1'){
                echo "Mobile number start with 0 & 1.";
            }
            else{
                for ($i = 0; $i < strlen($user->number); $i++){
                    $char = $user->number[$i];
                    if($char >= '0' && $char <= '9'){
                       $flag = 4;
                    }else{
                       echo "Invalid Phone Number.";
                       break;
                    }
                }
            }
        }

        // Gender validation
        if($flag == 4){
            if(empty($user->gender)){
               echo "Please select your gender.";
            }else{
                $flag = 5;
            }
        }

        // Username validation
        if($flag == 5){
            if(empty($user->username)){
               echo "Please enter your username";
            }
            else{
                for ($i = 0; $i < strlen($user->username); $i++) {
                    $char = $user->username[$i];
    
                    if(!ctype_alnum($char)){
                      echo "Username must contain alpha numaric characters";
                      $flag = 6;
                      break;
                    }
                }
                if($flag != 6){
                    $flag = 7;
                }
            }
        }

        // Password validation
        if($flag == 7){
            if(empty($user->password)){
               echo "Please enter your password";
            }
            else if(strlen($user->password) < 8){
               echo "Password must not be less than eight characters.";
            }else{
               $flagg = 0;
               if($user->password[0] >= '0' && $user->password[0] <= '9' || $user->password[0] >= 'A' && $user->password[0] <= 'Z' || $user->password[0] >= 'a' && $user->password[0] <= 'z'){
                    for ($i = 1; $i < strlen($user->password); $i++){
                        $char = $user->password[$i];
            
                        if($char == '_' || $char == '!' || $char == '`' || $char == '~' || $char == '@' || $char == '#' || $char == '$' || $char == '%' || $char == '^' || $char == '&' || $char == '*' || $char == '(' || $char == ')' || $char == '{' || $char == '}' || $char == '[' || $char == ']' || $char == '=' || $char == '/' || $char == '+' || $char == '<' || $char == '>' || $char == ',' || $char == '"' || $char == ':' || $char == ';' || $char == '|' || $char == '.' || $char == '-' || $char == '?'){
                           $flagg = 1;
                           break;
                        }
                    }
                }else{
                   echo "Password write start with letter or numeric characters.";
                }
            
                if($flagg != 1){
                    echo "Password must be with atleast one special characters.";  
                }else{
                   $flag = 8;
                }
            }
        }

        // Confirm password validation
        if($flag == 8){
            if($user->password != $user->confirmpassword){
               echo "Password do not match.";
            }else{
                $flag = 9;
            }
        }

        if(!empty($user->name) && !empty($user->email) && !empty($user->number) && !empty($user->gender) && !empty($user->username) && !empty($user->password) && !empty($user->confirmpassword) && $flag == 9){

            $guest = [$user->userid, $user->name, $user->email, $user->number, $user->gender, $user->username, $user->password];
            echo json_encode(addguest($guest));
            addguestuser($guest);
            
        }
    }
?>