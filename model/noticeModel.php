<?php

    require_once('db.php');


    function addnotice($noticeId, $date, $notice){
        $con = getConnection();
        $sql = "insert into noticeboard (Id, Date, Notice) values('{$noticeId}', '{$date}', '{$notice}')";
        $result = mysqli_query($con, $sql);

    }

    function getallnotice(){
        $con = getConnection();
        $sql = "select * from noticeboard";
        $result = mysqli_query($con, $sql);
        $all_notice = [];
        
        while($notice = mysqli_fetch_assoc($result)){
            array_push($all_notice, $notice);
        }
        
        return $all_notice;
        
    }

    function deletenotice($id){
        $con = getConnection();
        $sql = "delete from noticeboard where Id = '{$id}'";
        $result = mysqli_query($con, $sql);
        
    }

    function AutoNoticeIdGenerate(){
        $con = getConnection();
        $sql = "select * from noticeboard order by Id desc";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        $id = $row['Id'];
        if($id == ""){
            
            $noticeid = "1";
            return $noticeid;
        }
        else{
            $noticeid = substr($id, 0);
            $noticeid = intval($noticeid);
            $noticeid = $noticeid + 1;
            return $noticeid;
        }
        
    }

?>