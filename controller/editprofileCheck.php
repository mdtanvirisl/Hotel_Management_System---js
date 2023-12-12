<?php
    include_once('../model/userModel.php');
    include_once('../model/registrationFunction.php');

    $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : "";
    $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : "";
    $number = isset($_REQUEST['number']) ? $_REQUEST['number'] : "";
    $address = isset($_REQUEST['address']) ? $_REQUEST['address'] : "";

    $nameError = $emailError = $numberError = $addressError = "";

    if (isset($_POST["submit"])) {
        $flag = true;
        if(!$name){
            $nameError = "Please enter your name at least two words";
            $flag = false;
        }
        if (!nameCheck($name)) {
            $nameError = "Please enter your name at least two words";
            $flag = false;
        }
        if (!$email) {
            $emailError = "Please enter your email";
            $flag = false;
        }
        if (!$number) {
            $emailError = "Please enter your number";
            $flag = false;
        }
        if (!numberCheck($number)) {
            $numberError = "number must start with 0 & 1 & must be 11 digits";
            $flag = false;
        }
        if (!$address) {
            $addressError = "This field cant be empty";
            $flag = false;
        }
        if($flag){
            session_start();
            $username = $_SESSION['user']['username'];
    
            $userInfo = ['name' => $name, 'email' => $email, 'number' => $number, 'address' => $address, 'username' => $username];
    
            $status = updateProfile($userInfo);
    
            if($status){
                header('Location:../view/eprofile.php');
            }
            else{
                echo 'Error updating!';
            }
        }

    }
?>