<?php

    require_once("../model/userModel.php");

    function addguest($user){
        $con = getConnection();
        $sql = "insert into guestinfo (GuestName, GuestEmail, GuestNumber, Gender, GuestUserName, UserType, Question1, Question2) values('{$user['name']}', '{$user['email']}', '{$user['number']}', '{$user['gender']}', '{$user['username']}', '{$user['userType']}', '{$user['question1']}','{$user['question2']}' )";
        $result = mysqli_query($con, $sql);
        return $result;
    }

    function getAllGuest(){
        $con = getConnection();
        $sql = "select * from guestinfo";
        $result = mysqli_query($con, $sql);
        $guests = [];
        
        while($user = mysqli_fetch_assoc($result)){
            array_push($guests, $user);
        }
        
        return $guests;
    }
    function getGuest($username){
        $con = getConnection();
        $sql = "select * from guestinfo where GuestUserName = '{$username}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        $count = mysqli_num_rows($result);
        if($count == 1){
            return $user;
        }
        else{
            return false;
        }
    }
    
    function register($guest) 
    {
        $con = getConnection();
        $sql = "select * from guestinfo where GuestUserName='{$guest['username']}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            return "Username is already taken";
        }
        $auth = ['username' => $guest['username'], 'password'=>$guest['password'], 'userType'=>$guest['userType']];

        $result = addguest($guest);
        $login = addAuth($auth);

        if ($result && $login) {
            header('location: ../view/login.php');
        } else {
            return "Database error!";
        }
    }

    // function updatePassword($username, $password){
    //     $con = getConnection();
    //     $sql = "update login set Password='{$password}' where UserName = '{$username}'";
    //     $result = mysqli_query($con, $sql);
        
    //     if($result){
    //         return true;
    //     }
    //     else{
    //         return false;
    //     }
    // }

?>