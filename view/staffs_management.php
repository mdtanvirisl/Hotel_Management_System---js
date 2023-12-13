<?php
session_start();
include('../controller/adminsession.php');
    include('../model/staffModel.php');
    $staffs = getallstaff();
    $userid = AutoIdGenerate();
?>


<html lang="en">

<head>
    <title> Staff Profile </title>
    <link rel="stylesheet" href="../assets/css/draft.css">
    <link rel="stylesheet" href="../assets/css/body.css">
    <script src="../assets/js/staffRegistrationCheck.js"></script>
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
                        <legend> Add Staff </legend>
                        <div class="inputbox">
                            <div>
                                <input type="text" id="userid" name="userid" value="<?=$userid?>" placeholder = "Enter User ID" readonly />
                                <input type="text" id="name" name="name" value="" placeholder = "Enter Name" /> <span id="nameError"> </span>
                                <input type="email" id="email" name="email" value="" placeholder = "Enter Email" /> <span id="emailError"> </span>
                                <input type="tel" id="number" name="number" value="" placeholder = "Enter Mobile Number" /> <span id="numberError"> </span>
                                Gender:
                                <select id="gender" name="gender">
                                    <option value="Male"> Male </option>         
                                    <option value="Female"> Female </option>
                                    <option value="Other"> Other </option>            
                                </select> <span id="genderError"> </span>
                            </div> <br>
                            <div>
                                <input type="text" id="address" name="address" value="" placeholder = "Enter Address" /> <span id="addressError"> </span>
                                User Type:  <select id="usertype" name="usertype">
                                                <option value="Admin"> Admin </option>         
                                                <option value="Receptionist"> Receptionist </option>         
                                            </select> <span id="usertypeError"> </span>
                                <input type="text" id="username" name="username" value="" placeholder = "Enter Username" onblur="checkUsername()"/> <span id="unameError"> </span>
                                <input type="password" id="password" name="password" value="" placeholder = "Enter Password" /> <span id="passwordError"> </span>
                                <input type="password" id="confirmpassword" name="confirmpassword" value="" placeholder = "Enter Confirm Password" /> <br> <span id="cpasswordError"> </span>
                            </div> <br>
                        </div>
                        <hr>
                        <input type="button" name="submit" value="Insert" class="btnn" onclick="validStaffRegistration()" />
                    </fieldset>
                </form>

                <form method="" action="" enctype="" align = "center">
                    <input type="text" id="staffusername" name="staffusername" value="" placeholder = "Enter Username" />
                    <input type="button" name="Submit" value="Search" class="btnn" onclick="searchStaff()" />
                </form>
                <table border=1 align = "center" width = '80%' id="searchResults">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile Number</th>
                        <th>Gender</th>
                        <th>Username</th>
                        <th>Position</th>
                        <th>Address</th>
                        <th>Option</th>
                    </tr>
                    <?php  for($i=0; $i<count($staffs); $i++){ ?>
                    <tr>
                        <td><?=$staffs[$i]['StaffId']?></td>
                        <td><?=$staffs[$i]['StaffName']?></td>
                        <td><?=$staffs[$i]['StaffEmail']?></td>
                        <td><?=$staffs[$i]['StaffNumber']?></td>
                        <td><?=$staffs[$i]['Gender']?></td>
                        <td><?=$staffs[$i]['StaffUserName']?></td>
                        <td><?=$staffs[$i]['StaffType']?></td>
                        <td><?=$staffs[$i]['StaffAddress']?></td>
                        <td>
                            <a href='staffUpdate.php?username=<?=$staffs[$i]['StaffUserName']?>'> Update </a> |
                            <a href='../controller/staffDelete.php?username=<?=$staffs[$i]['StaffUserName']?>'> Delete </a>
                        </td>
                    </tr>
                    <?php } ?>
                </table> <br/>
            </div>
        </div>
    </section>
</body>
</html>