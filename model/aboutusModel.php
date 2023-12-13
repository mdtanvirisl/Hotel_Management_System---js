<?php

    require_once('db.php');


    function addabout($id, $about){
        $con = getConnection();
        $sql = "insert into aboutus (Id, AboutUs) values('{$id}', '{$about}')";
        $result = mysqli_query($con, $sql);

    }

    function getallaboutUs(){
        $con = getConnection();
        $sql = "select * from aboutus";
        $result = mysqli_query($con, $sql);
        $all_about = [];
        
        while($about = mysqli_fetch_assoc($result)){
            array_push($all_about, $about);
        }
        
        return $all_about;
        
    }

    function deletenotice($id){
        $con = getConnection();
        $sql = "delete from aboutus where Id = '{$id}'";
        $result = mysqli_query($con, $sql);
        
    }

    function AutoAboutUsIdGenerate(){
        $con = getConnection();
        $sql = "select * from aboutus order by Id desc";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        $id = $row['Id'];
        if($id == ""){
            
            $aboutid = "1";
            return $aboutid;
        }
        else{
            $aboutid = substr($id, 0);
            $aboutid = intval($aboutid);
            $aboutid = $aboutid + 1;
            return $aboutid;
        }
        
    }

?>