<?php

    require_once('db.php');


    function addfaq($faqId, $faq, $ans){
        $con = getConnection();
        $sql = "insert into faq (Id, Faq, Answer) values('{$faqId}', '{$faq}', '{$ans}')";
        $result = mysqli_query($con, $sql);

    }

    function getallfaq(){
        $con = getConnection();
        $sql = "select * from faq";
        $result = mysqli_query($con, $sql);
        $all_faq = [];
        
        while($faq = mysqli_fetch_assoc($result)){
            array_push($all_faq, $faq);
        }
        
        return $all_faq;
        
    }

    function deletefaq($id){
        $con = getConnection();
        $sql = "delete from faq where Id = '{$id}'";
        $result = mysqli_query($con, $sql);
        
    }

    function AutoFaqIdGenerate(){
        $con = getConnection();
        $sql = "select * from faq order by Id desc";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        $id = $row['Id'];
        if($id == ""){
            
            $faqid = "1";
            return $faqid;
        }
        else{
            $faqid = substr($id, 0);
            $faqid = intval($faqid);
            $faqid = $faqid + 1;
            return $faqid;
        }
        
    }

?>