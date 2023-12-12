<?php
if (!isset($_REQUEST['username'])) {
    $response = ['error' => 'no data recieved'];
    echo json_encode($response);
} else {
    include_once('../model/userModel.php');
    $data = $_REQUEST['username'];

    $status = usernameCheck($data);
    if($status){
        echo true;
    }else{
        echo false;
    }
}


?>