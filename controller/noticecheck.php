<?php
    require_once('../model/noticeModel.php');
    $noticeId = AutoNoticeIdGenerate();
    $date = date("Y/m/d");
    $notice = $_REQUEST['notice'];
    if($notice == ""){
       echo "please some write";
    }
    else{
     addnotice($noticeId, $date, $notice);
     header('location: ../view/write_notice.php');
    }
?>