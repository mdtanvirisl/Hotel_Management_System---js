<?php
    require_once('../model/faqModel.php');
    $faqId = AutoFaqIdGenerate();
    $faq = $_REQUEST['faq'];
    $ans = $_REQUEST['answer'];
    if($faq == "" || $ans == ""){
       echo "please some write";
    }
    else{
     addfaq($faqId, $faq, $ans);
     header('location: ../view/write_FAQ.php');
    }
?>