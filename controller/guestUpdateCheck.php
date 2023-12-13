<?php

    include('../model/guestModel.php');
    
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
                $flag = 3;;
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


        if(!empty($user->name) && !empty($user->email) && !empty($user->number) && !empty($user->gender) && $flag == 5){
            $user = [$user->name, $user->email, $user->number, $user->gender, $user->username];

            echo json_encode(updateguest($user));
        }
    }
?>