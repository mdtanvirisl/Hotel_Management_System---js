<?php

    require_once('db.php');


    function addstaff($user){
        $con = getConnection();
        $sql = "insert into staffinfo (StaffId, StaffName, StaffEmail, StaffNumber, StaffAddress, StaffType, Gender, StaffUserName) values('{$user[0]}', '{$user[1]}', '{$user[2]}', '{$user[3]}', '{$user[4]}', '{$user[5]}', '{$user[6]}', '{$user[7]}')";
        $result = mysqli_query($con, $sql);

        if ($result){
            return true;
        }else{
    
            return false;
        }

    }

    function deletestaff($staffusername){
        $con = getConnection();
        $sql = "delete from staffinfo where StaffUserName  = '{$staffusername}'";
        $result = mysqli_query($con, $sql);

    }

    function updatestaff($user){
        $con = getConnection();
        $sql = "update staffinfo set StaffName = '{$user[0]}', StaffEmail = '{$user[1]}', StaffNumber = '{$user[2]}', StaffAddress = '{$user[3]}', Gender = '{$user[4]}' where StaffUserName  = '{$user[5]}'";
        $result = mysqli_query($con, $sql);

        if ($result){
            return true;
        }else{
    
            return false;
        }
        
    }

    function staffsearch($searchstaff){
        $con = getConnection();
        $sql = "select * from staffinfo where StaffUserName='{$searchstaff}'";
        $result = mysqli_query($con, $sql);
                
        return $result;
    }

    function getallstaff(){
        $con = getConnection();
        $sql = "select * from staffinfo";
        $result = mysqli_query($con, $sql);
        $staffs = [];
        
        while($staff = mysqli_fetch_assoc($result)){
            array_push($staffs, $staff);
        }
        
        return $staffs;
        
    }

    function AutoIdGenerate(){
        $con = getConnection();
        $sql = "select * from staffinfo order by StaffId desc";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        $id = $row['StaffId'];
        if($id == ""){
            
            $userid = "S-1";
            return $userid;
        }
        else{
            $userid = substr($id, 2);
            $userid = intval($userid);
            $userid = "S-" . ($userid + 1);
            return $userid;
        }
        
    }

?>