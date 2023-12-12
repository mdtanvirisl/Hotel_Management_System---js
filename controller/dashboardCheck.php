<?php
    include('../model/reserveModel.php');

    $details = reservation();
    echo json_encode($details);
?>