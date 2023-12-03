<?php
 require_once("../model/userModel.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $roomId = $_POST["id"];
        $roomType = $_POST["roomType"];
        $bedding = $_POST["bedding"];

        $rooms = ['roomType'=>$roomType, 'bedding'=>$bedding];

        addRoom($rooms);   
    }
?>