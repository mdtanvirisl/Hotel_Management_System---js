<?php
    include('../model/noticeModel.php');
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        deletenotice($id);
        header('location: ../view/write_notice.php');
    }
?>