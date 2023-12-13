<?php
session_start();
include('../controller/adminsession.php');
    include('../model/userModel.php');
   
    if(isset($_REQUEST['username'])){
        $username = $_REQUEST['username'];
        $staff = staffviewprofile($username);
    }
?>


<html lang="en">

<head>
    <title> Staff Update </title>
    <link rel="stylesheet" href="../assets/css/draft.css">
    <script src="../assets/js/staffUpdateCheck.js"></script>
</head>

<body>
    <?php include('dashboard_menu.php'); ?>
    <section class="container">
        <div class="">
            <?php include('admin_menu.php'); ?>
        </div>
        <div class="info">
            <div>
                <form method="" action="" enctype="">
                    <fieldset align = "center">
                        <legend> Update Staff </legend>
                        <div class="inputbox">
                            <div>
                                Name: <input type="text" id="name" name="name" value="<?=$staff['StaffName']?>" placeholder = "Enter Name" /> <span id="nameError"> </span>
                                Email: <input type="email" id="email" name="email" value="<?=$staff['StaffEmail']?>" placeholder = "Enter Email" /> <span id="emailError"> </span>
                                Mobile Number: <input type="tel" id="number" name="number" value="<?=$staff['StaffNumber']?>" placeholder = "Enter Mobile Number" /> <span id="numberError"> </span>
                            </div> <br>
                            <div>
                                Address: <input type="text" id="address" name="address" value="<?=$staff['StaffAddress']?>" placeholder = "Enter Address" />  <span id="addressError"> </span>
                                Gender:
                                    <select id="gender" name="gender">
                                        <option value="Male"> Male </option>         
                                        <option value="Female"> Female </option>
                                        <option value="Other"> Other </option>            
                                    </select> <span id="genderError"> </span>
                                Username: <input type="text" id="username" name="username" value="<?=$staff['StaffUserName']?>" placeholder = "Enter Username" readonly />
                            </div> <br>
                        </div>
                        <input type="button" name="submit" value="Update" class="btnn" onclick="validStaffUpdate()" /> <br>
                    </fieldset>
                </form>
            </div>
        </div>
    </section>
    
</body>

</html>