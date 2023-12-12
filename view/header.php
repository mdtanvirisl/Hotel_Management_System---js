<html>
<head>
    <title>header</title>
</head>
<body>
    <th>
        <img src="../image/hotel_management.jpg" alt="" width="100" height="100">
    </th>
    <th align = "right">
        Logged in as <a href="profile.php"><?php echo $_SESSION['user']['username'];?></a>
        | <a href="../controller/logout.php">Logout</a>
    </th>
</body>
</html>