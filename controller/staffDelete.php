<?php
    include('../model/staffModel.php');
    include('../model/userModel.php');
    include('../model/salarysheetModel.php');
    if(isset($_REQUEST['username'])){
        $staffusername = $_REQUEST['username'];
        deletestaff($staffusername);
        deleteuser($staffusername);
        deletesalarysheet($staffusername);
        header('location: ../view/staffs_management.php');
    }
?>