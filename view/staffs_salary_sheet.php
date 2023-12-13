<?php
session_start();
include('../controller/adminsession.php');
    include('../model/salarysheetModel.php');
    include('../model/salaryModel.php');
    $salarysheet = getallstaffsalary();
    $salary = getstaffsalary();
?>


<html lang="en">

<head>
    <title> Salary Sheet </title>
    <link rel="stylesheet" href="../assets/css/draft.css">
    <script src="../assets/js/salarySheet.js"></script>
</head>

<body>
    <?php include('dashboard_menu.php'); ?>
    <section class="container">
        <div class="">
            <?php include('admin_menu.php'); ?>
        </div>
        <div class="info">
            <div>
                <form method="post" action="" enctype="">
                    <fieldset>
                        <legend> Salary Sheet </legend>
                        Select Staff Type  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Admin Salary <br>
                        <select id="stafftype" name="stafftype">
                            <option value="Admin"> Admin </option>         
                            <option value="Receptionist"> Receptionist </option>         
                        </select> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <input type="text" name="" value="<?=$salary[0]['StaffSalary']?>" placeholder = "Salary" /> <br/> <br/> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        Receptionist Salary <br>
                        <input type="text" id="salary" name="salary" value="" placeholder = "Enter Salary" /> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <input type="text" name="" value="<?=$salary[1]['StaffSalary']?>" placeholder = "Salary" /> <br/>
                        <span id="inputError"> </span> <br>
                        <hr>
                        <input type="button" name="update" value="Update" class="btnn" onclick="validSalarySheet()" /> <br/>
                    </fieldset>
                </form>

                <table border=1 align = "center">
                            <tr>
                              <th>Staff Id</th>
                              <th>Staff Name</th>
                              <th>Position</th>
                              <th>Staff Salary</th>
                            </tr>
                            <?php  for($i=0; $i<count($salarysheet); $i++){ ?>
                            <tr>
                              <td><?=$salarysheet[$i]['StaffId']?></td>
                              <td><?=$salarysheet[$i]['StaffName']?></td>
                              <td><?=$salarysheet[$i]['StaffType']?></td>
                              <td><?=$salarysheet[$i]['StaffSalary']?></td>
                            </tr>
                         <?php } ?>
                </table> <br/>
            </div>
        </div>
    </section>
    
</body>

</html>