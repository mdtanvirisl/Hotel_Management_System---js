<?php
session_start();
    include('../controller/adminsession.php');
    
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
            <?php include('admin_menu.php'); ?>
        </div>
        <div class="info">
            <div id="info">
                
            </div>
        </div>
    </section>
</body>
</html>