<?php
    include('../model/salarysheetModel.php');
    include('../model/salaryModel.php'); 
    if(isset($_REQUEST['data'])){
        $data = json_decode($_REQUEST['data']);
                       
        if(empty($data->salary)){
            echo "Please input amount.";
        }else{
            $user = [$data->stafftype, $data->salary];

                       
            updatesalary($user);
            echo json_encode(updatesalarysheet($user));
        }
    }

?>