<?php
 require_once("../model/reserveModel.php");


 $username = isset($_REQUEST['username']) ? $_REQUEST['username'] : "";
 $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : "";
 $roomNo = isset($_REQUEST['roomno']) ? $_REQUEST['roomno'] : "";
 $checkin = isset($_REQUEST['checkin']) ? $_REQUEST['checkin'] : "";
 $checkout = isset($_REQUEST['checkout']) ? $_REQUEST['checkout'] : "";

 $usernameError = $nameError = $dateinError = $dateoutError = $roomNoError = "";
 $error = "";
 if (isset($_POST["submit"])) {

    if (!$name) {
        $nameError = "Please enter your name";
    }
    if (!$username) {
        $usernameError = "Please enter a username";
    }
    if (!$roomNo) {
        $roomNoError = "Please enter room no.";
    }
    if (!$checkin) {
        $dateinError = "Please enter Check in.";
    }
    if (!$checkout) {
        $dateoutError = "Please enter check out.";
    }
    if ($name && $username && $roomNo && $checkin && $checkout) {
        $details = ['name'=>$name, 'username'=>$username, 'roomNo'=>$roomNo, 'checkin'=>$checkin, 'checkout'=>$checkout];
        $error = addReserve($details);
    }
 }
?>