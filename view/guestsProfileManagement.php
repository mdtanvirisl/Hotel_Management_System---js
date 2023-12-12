<?php
    include('../controller/sessioncheck.php');
    include('../model/guestModel.php');

    $guests = getAllGuest();
?>


<html lang="en">

<head>
    <title> Guest Profile </title>
    <link rel="stylesheet" href="../assets/css/draft.css">
</head>

<body>

<?php include('dashboard_menu.php'); ?>
    <section class="container">
        <div class="">
            <?php include('side_menu.php'); ?>
        </div>
        <div class="info">
            <div>
                <div>
                    <form method="post" action="" enctype="">
                        <fieldset align = "center">
                            <legend> Add Guest </legend>
                            <input type="text" name="userid" value="" placeholder = "Enter User ID" />
                            <input type="text" name="name" value="" placeholder = "Enter Name" />
                            <input type="email" name="email" value="" placeholder = "Enter Email" />
                            <input type="tel" name="number" value="" placeholder = "Enter Mobile Number" />
                            User Type: Guest <br> <br>
                            Gender:
                            <select name="gender">
                                <option value="Male"> Male </option>         
                                <option value="Female"> Female </option>
                                <option value="Other"> Other </option>            
                            </select>
                            <input type="text" name="username" value="" placeholder = "Enter Username" /> 
                            <input type="password" name="password" value="" placeholder = "Enter Password" />
                            <input type="password" name="confirmpassword" value="" placeholder = "Enter Confirm Password" /> <br>
                            <hr>
                            <input type="submit" name="submit" value="Insert" />
                            <input type="submit" name="submit" value="Update" />
                        </fieldset>
                    </form>
                </div>
                <div>
                    <form method="post" action="" enctype="" align = "center">
                        <input type="text" name="guestusername" value="" placeholder = "Enter Username" />
                        <input type="submit" name="Submit" value="Search" />
                        <input type="submit" name="Submit" value="Remove" />
                    </form>
                </div>
                <div>
                    <table border=1 width = "100%">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Gender</th>
                            <th>Username</th>
                            <th>Image</th>
                        </tr>
                        <?php  for($i=0; $i<count($guests); $i++){ ?>
                        <tr>
                            <td><?=$guests[$i]['GuestId']?></td>
                            <td><?=$guests[$i]['GuestName']?></td>
                            <td><?=$guests[$i]['GuestEmail']?></td>
                            <td><?=$guests[$i]['GuestNumber']?></td>
                            <td><?=$guests[$i]['Gender']?></td>
                            <td><?=$guests[$i]['GuestUserName']?></td>
                            <td><?=$guests[$i]['GuestImg']?></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
<h6>Copyright &copy 2017</h6>    
</body>

</html>