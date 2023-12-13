<?php
session_start();
if($_SESSION['user']['UserType'] == 'Admin'){
        include('../controller/adminsession.php');
    }
    else{
        include('../controller/sessioncheck.php');
    }
    include('../model/guestModel.php');

    if(isset($_REQUEST['username'])){
        $username = $_REQUEST['username'];
        $guest = viewprofile($username);
    }
?>


<html lang="en">

<head>
    <title> Guest Update </title>
    <link rel="stylesheet" href="../assets/css/draft.css">
    <script src="../assets/js/guestUpdateCheck.js"></script>
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
                        <legend> Update Guest </legend>
                        <div class="inputbox">
                            <div>
                                Name: <input type="text" id="name" name="name" value="<?=$guest['GuestName']?>" /> <span id="nameError"> </span>
                                Email: <input type="email" id="email" name="email" value="<?=$guest['GuestEmail']?>" /> <span id="emailError"> </span>
                                Mobile Number: <input type="tel" id="number" name="number" value="<?=$guest['GuestNumber']?>" /> <span id="numberError"> </span>
                            </div> <br>
                            <div>
                                User Type: Guest
                                Gender:
                                    <select id="gender" name="gender">
                                        <option value="Male"> Male </option>         
                                        <option value="Female"> Female </option>
                                        <option value="Other"> Other </option>            
                                    </select> <span id="genderError"> </span>
                                Username: <input type="text" id="username" name="username" value="<?=$guest['GuestUserName']?>" readonly />
                            </div> <br>
                        </div>
                            <input type="button" name="submit" value="Update" class="btnn" onclick="validGuestUpdate()" />
                    </fieldset>
                </form>
            </div>
        </div>
    </section>
</body>
</html>