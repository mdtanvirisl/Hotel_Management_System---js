<?php
    include('../model/aboutusModel.php');
    $about = getallaboutUs();
?>



<html lang="en">

<head>
    <title> About us </title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/draft.css">
</head>

<body>
        <?php include_once("home_menu.php");?>
        <?php for($i=0; $i<count($about); $i++){ ?>
            <p class="write_about"> <?=$about[$i]['AboutUs']?> </p>
        <?php } ?>
    
</body>

</html>