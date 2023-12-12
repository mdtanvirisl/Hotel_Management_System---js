<?php
    require_once('db.php');
    function reservation(){
        $con = getConnection();
        $sql = "select * from reserveroom";
        $result = mysqli_query($con, $sql);
        $details = [];
        
        while($detail = mysqli_fetch_assoc($result)){
            array_push($details, $detail);
        }
        
        return $details;
    }

    function addReserve($reserve){
        $con = getConnection();
        $sql = "insert into reserveroom (UserName, Name, RoomNo, CheckIn, CheckOut, status) values('{$reserve['username']}', '{$reserve['name']}', '{$reserve['roomNo']}', '{$reserve['checkin']}', '{$reserve['checkout']}', 'Confirmed')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function deleteReservation($username){
        $con = getConnection();
        $sql = "delete from reserveroom where username = '{$username}'";
        $result = mysqli_query($con, $sql);

        if ($result) {
            header('location: ../view/reservationManagement.php');
        } else {
            return "Database error!";
        }
    }

    function confirmReservation($username){
        $con = getConnection();
        $sql = "update reserveroom set status='Confirmed' where UserName = '{$username}'";
        $result = mysqli_query($con, $sql);

        if ($result) {
            header('location: ../view/reservationManagement.php');
        } else {
            return "Database error!";
        }
    }
?>