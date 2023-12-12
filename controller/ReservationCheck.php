<?php

require_once("../model/reserveModel.php");

if (!isset($_REQUEST['data'])) {
    $response = ['error' => 'No data received'];
    echo json_encode($response);
} else {
    $data = json_decode($_REQUEST['data']);
    if (empty($data->name)) {
        $response = ['error' => 'Please enter your name'];
    } elseif (empty($data->username)) {
        $response = ['error' => 'Please enter a username'];
    } elseif (empty($data->roomno)) {
        $response = ['error' => 'Please enter room no.'];
    } elseif (empty($data->checkin)) {
        $response = ['error' => 'Please enter Check in.'];
    } elseif (empty($data->checkout)) {
        $response = ['error' => 'Please enter check out.'];
    } else {
        $details = [
            'name' => $data->name,
            'username' => $data->username,
            'roomNo' => $data->roomno,
            'checkin' => $data->checkin,
            'checkout' => $data->checkout
        ];

        $status = addReserve($details);
        echo $status;
    }

}

?>