<?php

    require_once('db.php');
    function login($username, $password){
        $con = getConnection();
        $sql = "select * from login where UserName='{$username}' and Password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        $user = mysqli_fetch_array($result);
        
        if($count == 1){
            session_start();
            $_SESSION['user'] = ['username' => $user['UserName'], 'password' => $user['Password'], 'UserType' => $user['UserType']];
            return true;
        }else{
            return false;
        }
    }

    function addAuth($auth){
        $con = getConnection();
        $sql = "insert into login (UserName, UserType, Password) values('{$auth['username']}', '{$auth['userType']}', '{$auth['password']}')";
        $result = mysqli_query($con, $sql);
        return $result;
    }
    
    function updateProfile($user){
        $name = $user["name"];
        $email = $user["email"];
        $number = $user["number"];
        $address = $user["address"];
        $username = $user["username"];
        $con = getConnection();
        $sql = "update staffinfo set StaffName='{$name}', StaffEmail='{$email}', StaffNumber= '{$number}', StaffAddress= '{$address}' where StaffUserName = '{$username}'";
        $result = mysqli_query($con, $sql);
        
        if($result){
            return true;
        }
        else{
            return false;
        }
    }

    function getUser($username){
        $con = getConnection();
        $sql = "select * from staffinfo where StaffUserName = '{$username}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        return $user;
    }
    

    function updatePassword($username, $password){
        $con = getConnection();
        $sql = "update login set Password='{$password}' where UserName = '{$username}'";
        $result = mysqli_query($con, $sql);
       
        if($result){
            return true;
        }
        else{
            return false;
        }
    }

    function getAuth($username){
        $con = getConnection();
        $sql = "select * from login where UserName = '{$username}'";
        $result = mysqli_query($con, $sql);
        $auth = mysqli_fetch_array($result);
        return $auth['Password'];
    }

    function updateImage($username, $image)
    {
        $con = getConnection();
        $sql = "update staffinfo set StaffImg='{$image}' where StaffUserName = '{$username}'";
        mysqli_query($con, $sql);
        return true;
    }
    function usernameCheck($username) 
    {
        $con = getConnection();
        $sql = "select * from guestinfo where GuestUserName='{$username}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            return true; //if email is taken
        }
        else{
            return false; //if email not taken
        }
    }

    
?>