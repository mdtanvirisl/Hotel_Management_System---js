<?php
    require_once('../model/reserveModel.php');

    if(isset($_GET['username'])) {
        $username = $_GET['username'];

        confirmReservation($username);
    }

?>