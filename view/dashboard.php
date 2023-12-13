<?php
session_start();
    include('../controller/sessioncheck.php');
?>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/draft.css">
    <script src="../assets/js/dashboard.js"></script>
</head>
<body>
    <?php include('dashboard_menu.php'); ?>
    <section class="container">
        <div class="">
            <?php include('side_menu.php'); ?>
        </div>
        <div class="info">
            <div id="info">
                <!-- the table will show here -->
            </div>
        </div>
    </section>
</body>
</html>