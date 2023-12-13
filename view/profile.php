<?php
    include('../controller/sessioncheck.php');
    include('../model/userModel.php');
    include('../model/staffModel.php');

    
    $user = getUser($_SESSION['user']['username']);
?>

<html lang="en">
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/body.css">
    <link rel="stylesheet" href="../assets/css/draft.css">
    <link rel="stylesheet" href="../assets/css/profile.css">
</head>
<body>
    <?php include('dashboard_menu.php'); ?>
    <section class="container">
        <div class="">
            <?php include('side_menu.php'); ?>
        </div>
        <div class="info">
            <div id="form">
                <div class="profile">
                    <div id="p_pic">
                        <form action="../controller/imageCheck.php" method="post" enctype="multipart/form-data" novalidate>
                            <fieldset>
                                <legend>Profile Picture: </legend>

                                <div class="input_box">
                                    <img id="profile_pic" src="../assets/image/<?php echo $user['StaffImg']; ?>" alt="" > <br>
                                    <input id="p_pic" type="file" name="myfile" value=""> <br> <br>
                                </div>
                                <a id="p_pic" class="submit_btn" href="eprofile.php">Upload</a>
                            </fieldset>
                        </form>
                    </div>

                    <div class="p_info">
                        <fieldset>
                            <legend>User Information: </legend>
                            <br>
                            
                            <div id="p_info">
                                <b>Name: </b> <?php echo $user['StaffName']; ?> <br>
                                <b>Email: </b> <?php echo $user['StaffEmail']; ?> <br>
                                <b>Mobile: </b> <?php echo $user['StaffNumber']; ?> <br>
                                <b>Gender: </b> <?php echo $user['Gender']; ?> <br>
                                <b>Address: </b> <?php echo $user['StaffAddress']; ?> <br>

                                <br><br>
                                <a class="submit_btn" href="eprofile.php">Edit Profile</a>    
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script src="../assets/js/script.js"></script>
</body>
</html>