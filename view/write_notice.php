<?php
session_start();
include('../controller/adminsession.php');
    include('../model/noticeModel.php');
    $notice = getallnotice();
?>


<html lang="en">

<head>
    <title> Write Notice </title>
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
                <form method="post" action="../controller/noticecheck.php" enctype="">
                    <fieldset>
                        <legend> Write Notice </legend>
                        <textarea class="write_notice" name="notice" placeholder="Write Notice here" > </textarea> <br>
                        <hr>
                        <input type="submit" name="submit" value="Send Notice" class="btnn" /> <br>
                    </fieldset>
                </form>
                <table border=1 align = "center" width = '60%'>
                    <tr>
                        <th>Date</th>
                        <th>Notice</th>
                        <th>Option</th>
                    </tr>
                    <?php  for($i=0; $i<count($notice); $i++){ ?>
                        <tr>
                            <td><?=$notice[$i]['Date']?></td>
                            <td><?=$notice[$i]['Notice']?></td>
                            <td>
                              <a href='../controller/noticeDelete.php?id=<?=$notice[$i]['Id']?>'> DELETE </a> 
                            </td>
                        </tr>
                    <?php } ?>
                </table> <br/>
            </div>
        </div>
    </section>
</body>
</html>