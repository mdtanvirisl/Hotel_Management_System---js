<?php
    include('../model/faqModel.php');
    $faq = getallfaq();
?>

<html lang="en">
<head>
    <title>Home</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>

    <?php include_once("home_menu.php");?>
    <h1>Welcome to Hotel Management System</h1>
    
    <?php  for($i=0; $i<count($faq); $i++){ ?>
        <div class="faq">
            <h3> <?=$faq[$i]['Id']?>. <?=$faq[$i]['Faq']?> </h3>
            <h3> <?=$faq[$i]['Answer']?> </h3>
        </div>
        <?php } ?>
        
    <?php include_once("footer.php");?>

</body>
</html>