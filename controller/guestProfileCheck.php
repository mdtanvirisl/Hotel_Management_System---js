<?php
    include('../controller/sessioncheck.php');
    include('../model/guestModel.php');

    $guests = getAllGuest();
    echo json_encode($guests);
?>