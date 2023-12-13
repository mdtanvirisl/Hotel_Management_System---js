<?php
    include('../model/faqModel.php');
    $faq = getallfaq();
?>



<html lang="en">

<head>
    <title> FAQ </title>
</head>

<body>
    <table border = '1' width = 100%>
        <tr>
            <th colspan = "2" align = "left">
            <a href="../view/login.php">Login</a> | <a href="../view/registration.php">Registration</a>
            </th>
        </tr>
        <tr>
            <td>
               <li> <a href = "faq.php"> FAQ </a> </li>
               <li> <a href = "about_us.php"> About us </a> </li> 
            </td>
            <td width = 85%>
            <?php  for($i=0; $i<count($faq); $i++){ ?>
                     <h3> <?=$faq[$i]['Id']?>. <?=$faq[$i]['Faq']?> </h3>
                     <h3> <?=$faq[$i]['Answer']?> </h3>
            <?php } ?>
            </td>
        </tr>
        <tr>
            <td colspan = "2" align = "center">
                <h6>Copyright &copy 2017</h6>
            </td>
        </tr>
    </table>
    
</body>

</html>