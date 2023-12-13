<?php
session_start();
if($_SESSION['user']['UserType'] == 'Admin'){
        include('../controller/adminsession.php');
    }
    else{
        include('../controller/sessioncheck.php');
    }
    include('../model/guestModel.php');
    $guests = getallguest();
    $userid = AutoGuestIdGenerate();
?>


<html lang="en">

<head>
    <title> Guest Profile </title>
    <link rel="stylesheet" href="../assets/css/draft.css">
    <link rel="stylesheet" href="../assets/css/body.css">
    <script src="../assets/js/guestRegistrationCheck.js"></script>
</head>

<body>
    <?php include('dashboard_menu.php'); ?>
    <section class="container">
        <div class="">
            <?php
            
                if($_SESSION['user']['UserType'] == 'Receptionist'){
                    include('side_menu.php'); 
                }else if($_SESSION['user']['UserType'] == 'Admin'){
                    include('admin_menu.php');
                } 
            ?>
        </div>
        <div class="info">
            <div>
                <form method="" action="" enctype="">
                    <fieldset align = "center">
                        <legend> Add Guest </legend>
                        <div class="inputbox">
                            <div>
                                <input type="text" id="userid" name="userid" value="<?=$userid?>" placeholder = "Enter User ID" readonly />
                                <input type="text" id="name" name="name" value="" placeholder = "Enter Name" /> <span id="nameError"> </span>
                                <input type="email" id="email" name="email" value="" placeholder = "Enter Email" /> <span id="emailError"> </span>
                                <input type="tel" id="number" name="number" value="" placeholder = "Enter Mobile Number" /> <span id="numberError"> </span>
                                User Type: Guest
                            </div> <br>
                            <div>
                                Gender:
                                <select id="gender" name="gender">
                                    <option value="Male"> Male </option>         
                                    <option value="Female"> Female </option>
                                    <option value="Other"> Other </option>            
                                </select> <span id="genderError"> </span>
                                <input type="text" id="username" name="username" value="" placeholder = "Enter Username" onblur="checkUsername()"/> <span id="unameError"> </span>
                                <input type="password" id="password" name="password" value="" placeholder = "Enter Password" /> <span id="passwordError"> </span>
                                <input type="password" id="confirmpassword" name="confirmpassword" value="" placeholder = "Enter Confirm Password" /> <span id="cpasswordError"> </span>
                            </div> <br>
                        </div>
                        <hr>
                        <input type="button" name="submit" value="Insert" class="btnn" onclick="validGuestRegistration()" />
                    </fieldset>
                </form>

                    <form method="post" action="" enctype="" align = "center">
                       <input type="text"  id="guestusername" name="guestusername" value="" placeholder = "Enter Username" />
                       <input type="button" name="Submit" value="Search" class="btnn" onclick="searchGuest()"/>
                    </form>
                    <div id="info"> </div>
                    <table border=1 align = "center" width = '80%' id="searchResults">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Gender</th>
                            <th>Username</th>
                            <th>Option</th>
                        </tr>
                        <?php for($i=0; $i<count($guests); $i++){ ?>
                        <tr>
                            <td><?=$guests[$i]['GuestId']?></td>
                            <td><?=$guests[$i]['GuestName']?></td>
                            <td><?=$guests[$i]['GuestEmail']?></td>
                            <td><?=$guests[$i]['GuestNumber']?></td>
                            <td><?=$guests[$i]['Gender']?></td>
                            <td><?=$guests[$i]['GuestUserName']?></td>
                            <td>
                                <a href='guestUpdate.php?username=<?=$guests[$i]['GuestUserName']?>'> Update </a> |
                                <a href='../controller/guestDelete.php?username=<?=$guests[$i]['GuestUserName']?>'> Delete </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
            </div>
        </div>
    </section>
</body>
</html>