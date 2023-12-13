<?php
    session_start();
    if($_SESSION['user']['UserType'] == 'Admin'){
        include('../controller/adminsession.php');
    }
    else{
        include('../controller/sessioncheck.php');
    }
    include('../model/userModel.php');
    include('../controller/editprofileCheck.php');

    $user = getUser($_SESSION['user']['username']);
?>

<html lang="en">
<head>
    <title>Edit Profile</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/body.css">
    <link rel="stylesheet" href="../assets/css/draft.css">
    
</head>
<body>
    <?php include('dashboard_menu.php'); ?>
    <section class="container">
        <div class="">
            <?php if($_SESSION['user']['UserType'] == 'Receptionist'){
                    include('side_menu.php'); 
                }else if($_SESSION['user']['UserType'] == 'Admin'){
                    include('admin_menu.php');
                } ?>
        </div>
        <div class="info">
            <div class="form">
                <form action="" method="post" novalidate> 
                    <fieldset> 
                        <legend align="center">Update Profile</legend> 
                        
                        <br><b>General Informations: </b> <br> <br>

                        Name: <input id="name" type="text" name="name" value="<?php echo $user['StaffName']?>" /><span id="nameErr"></span> <?= $nameError ?> <br>
                        Email: <input id="email" type="email" name="email" value="<?php echo $user['StaffEmail']?>" /><span id="emailErr"></span><?= $emailError ?> <br>
                        Phone Number: <input id="number" type="text" name="number" value="<?php echo $user['StaffNumber']?>" /><span id="numberErr"></span> <?= $numberError ?> <br>
                        Address: <input id="address" type="text" name="address" value="<?php echo $user['StaffAddress']?>" /><span id="addressErr"></span> <?php echo $addressError; ?><br>
                        
                        <input onclick="return editProfile()" class="submit_btn" type="submit" name="submit" value="Update" />
                    </fieldset> 
                </form>
            </div>
        </div>
    </section>

    <script src="../assets/js/script.js"></script>
</body>
</html>