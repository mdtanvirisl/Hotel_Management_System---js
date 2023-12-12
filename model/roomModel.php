<?php

    require_once('db.php');
    function room(){
        $con = getConnection();
        $sql = "select * from room";
        $result = mysqli_query($con, $sql);
        $rooms = [];
        
        while($room = mysqli_fetch_assoc($result)){
            array_push($rooms, $room);
        }
        
        return $rooms;
    }
    function addRoom($room){
        $con = getConnection();
        $sql = "insert into room (roomType, bedding) values('{$room['roomType']}', '{$room['bedding']}')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

?>