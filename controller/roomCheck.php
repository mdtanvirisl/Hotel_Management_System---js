<?php
 require_once("../model/roomModel.php");
if (!isset($_REQUEST['data'])) {
    $response = ['error' => 'No data received'];
    echo json_encode($response);
} else {
    $data = json_decode($_REQUEST['data']);
    if (empty($data->roomType)) {
        $response = ['error' => 'Please enter room type'];
    } elseif (empty($data->bedding)) {
        $response = ['error' => 'Please enter bedding type'];
    }else {
        $rooms = ['roomType'=>$data->roomType, 'bedding'=>$data->bedding];

        $status = addRoom($rooms); 
        echo $status;
    }

}

?>