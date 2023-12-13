<?php
session_start();
include('../controller/adminsession.php');
    include('../model/aboutusModel.php');
    $about = getallaboutUs();
?>


<html lang="en">

<head>
    <title> Write About Us </title>
    <link rel="stylesheet" href="../assets/css/draft.css">
</head>

<body>
    <?php include('dashboard_menu.php'); ?>
    <section class="container">
        <div class="">
            <?php include('admin_menu.php'); ?>
        </div>
        <div class="info">
            <div>
                <form method="post" action="../controller/AboutUscheck.php" enctype="">
                    <fieldset>
                        <legend> Write About Us </legend>
                        <textarea class="write_text" name="about" placeholder="Write here about company" > </textarea>
                        <hr>
                        <input type="submit" name="submit" value="Submit" class="btnn" /> <br>
                    </fieldset>
                </form>
                <?php for($i=0; $i<count($about); $i++){ ?>
                    <p class="write_about"> <?=$about[$i]['AboutUs']?> </p>
                <?php } ?>
            </div>
        </div>
    </section>
</body>
</html>