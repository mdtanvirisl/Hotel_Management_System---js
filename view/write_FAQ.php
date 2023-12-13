<?php
session_start();
include('../controller/adminsession.php');
    include('../model/faqModel.php');
    $faq = getallfaq();
?>


<html lang="en">

<head>
    <title> Write FAQ </title>
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
                <form method="post" action="../controller/FAQcheck.php" enctype="">
                    <fieldset>
                        <legend> Write FAQ </legend>
                        <textarea class="write_text" name="faq" placeholder="Write answer here" > </textarea> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <textarea class="write_text" name="answer" placeholder="Write answer here" > </textarea>
                        <hr>
                        <input type="submit" name="submit" value="Submit" class="btnn" /> <br>
                    </fieldset>
                </form>
                
                <?php  for($i=0; $i<count($faq); $i++){ ?>
                        <div class="faq">
                            <h3> <?=$faq[$i]['Id']?>. <?=$faq[$i]['Faq']?> </h3>
                            <h3> <?=$faq[$i]['Answer']?> </h3>
                        </div>
                <?php } ?>
            </div>
        </div>
    </section>
</body>
</html>