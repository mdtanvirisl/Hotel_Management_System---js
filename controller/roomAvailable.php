<?php

    include('../model/reserveModel.php');
 
    if(isset($_REQUEST['roomno'])){

        $roomno=$_REQUEST['roomno'];
        $status = searchroom($roomno);
        echo $status;
       
    }

?>