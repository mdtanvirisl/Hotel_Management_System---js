<html>
<head>
    <title>home menu</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/body.css">
</head>
<body>
    <section class="header">
        <div class="h-title">
            <div>
                <img class="img" src="../assets/logo/property.png" alt="">
            </div>
            <h2>Welcome to dashboard</h2>
        </div>
        <div class="menu">
            <a href="profile.php">Logged in as <?php echo $_SESSION['user']['username'];?></a>
            <a href="../controller/logout.php"><img class="image" src="../assets/logo/log-out.png" alt=""></a>
        </div>
    </section>
</body>
</html>