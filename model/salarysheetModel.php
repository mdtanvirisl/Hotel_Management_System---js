<?php

    require_once('db.php');

    function addsalarysheet($user){
        $con = getConnection();
        if($user[5] == "Admin"){
        $sql1 = "select * from salary where StaffType='{$user[5]}'";
        $result1 = mysqli_query($con, $sql1);
        $admin = mysqli_fetch_assoc($result1);
        $sql2 = "insert into salarysheet (StaffId, StaffName, StaffType, StaffUserName, StaffSalary) values('{$user[0]}', '{$user[1]}', '{$user[5]}', '{$user[7]}', '{$admin['StaffSalary']}')";
        $result2 = mysqli_query($con, $sql2);
        }elseif($user[5] == "Receptionist"){
         $sql3 = "select * from salary where StaffType='{$user[5]}'";
         $result3 = mysqli_query($con, $sql3);
         $receptionist = mysqli_fetch_assoc($result3);
         $sql4 = "insert into salarysheet (StaffId, StaffName, StaffType, StaffUserName, StaffSalary) values('{$user[0]}', '{$user[1]}', '{$user[5]}', '{$user[7]}', '{$receptionist['StaffSalary']}')";
         $result4 = mysqli_query($con, $sql4);
        }
    }

    function updatesalarysheet($user){
        $con = getConnection();
        $sql = "update salarysheet set StaffSalary = '{$user[1]}' where StaffType = '{$user[0]}'";
        $result = mysqli_query($con, $sql);

        if ($result){
            return true;
        }else{
    
            return false;
        }
        
    }

    function UpdateSalaryTableInformation($user){
        $con = getConnection();
        $sql = "update salarysheet set StaffName = '{$user[0]}' where StaffUserName = '{$user[5]}'";
        $result = mysqli_query($con, $sql);
        
    }

    function deletesalarysheet($staffusername){
        $con = getConnection();
        $sql = "delete from salarysheet where StaffUserName  = '{$staffusername}'";
        $result = mysqli_query($con, $sql);
        
    }

    function getallstaffsalary(){
        $con = getConnection();
        $sql = "select * from salarysheet";
        $result = mysqli_query($con, $sql);
        $staffs_salary = [];
        
        while($staff_salary = mysqli_fetch_assoc($result)){
            array_push($staffs_salary, $staff_salary);
        }
        
        return $staffs_salary;
        
    }

?>
