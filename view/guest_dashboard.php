<?php
session_start();
    include('../controller/guestsession.php');
    
?>



<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/draft.css">
</head>
<body>
    <?php include('dashboard_menu.php'); ?>
    <section class="container">
        <div class="">
            <?php include('guest_menu.php'); ?>
        </div>
    </section>
</body>
</html>