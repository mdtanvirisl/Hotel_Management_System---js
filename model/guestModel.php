<?php

    require_once('db.php');

    function addguest($user){
        $con = getConnection();
        $sql = "insert into guestinfo (GuestId, GuestName, GuestEmail, GuestNumber, Gender, GuestUserName) values('{$user[0]}', '{$user[1]}', '{$user[2]}', '{$user[3]}', '{$user[4]}', '{$user[5]}')";
        $result = mysqli_query($con, $sql);

        if ($result){
            return true;
        }else{
    
            return false;
        }
    }

    function deleteguest($guestusername){
        $con = getConnection();
        $sql = "delete from guestinfo where GuestUserName  = '{$guestusername}'";
        $result = mysqli_query($con, $sql);

    }

    function updateguest($user){
        $con = getConnection();
        $sql = "update guestinfo set GuestName = '{$user[0]}', GuestEmail = '{$user[1]}', GuestNumber = '{$user[2]}', Gender = '{$user[3]}' where GuestUserName  = '{$user[4]}'";
        $result = mysqli_query($con, $sql);

        if ($result){
            return true;
        }else{
    
            return false;
        }
        
    }

    function viewprofile($username){
        $con = getConnection();
        $sql = "select * from guestinfo where GuestUserName='{$username}'";
        $result = mysqli_query($con, $sql);
        $users = mysqli_fetch_assoc($result);
                
        return $users;
    }

    function guestsearch($searchguest){
        $con = getConnection();
        $sql = "select * from guestinfo where GuestUserName='{$searchguest}'";
        $result = mysqli_query($con, $sql);
        
        return $result;
    }

    function getallguest(){
        $con = getConnection();
        $sql = "select * from guestinfo";
        $result = mysqli_query($con, $sql);
        $guests = [];
        
        while($guest = mysqli_fetch_assoc($result)){
            array_push($guests, $guest);
        }
        
        return $guests;
        
    }

    function AutoGuestIdGenerate(){
        $con = getConnection();
        $sql = "select * from guestinfo order by GuestId desc";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        $id = $row['GuestId'];
        if($id == ""){
            
            $userid = "G-1";
            return $userid;
        }
        else{
            $userid = substr($id, 2);
            $userid = intval($userid);
            $userid = "G-" . ($userid + 1);
            return $userid;
        }
        
    }

?>