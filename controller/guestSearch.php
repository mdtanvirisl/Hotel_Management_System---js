<?php

    include('../model/guestModel.php');
    
    if(isset($_REQUEST['search'])){
        $guestusername = $_REQUEST['search'];

        $guest = guestsearch($guestusername);
        
        $searchResults = [];
        while ($row = mysqli_fetch_assoc($guest)) {
            $searchResults[] = $row;
        }
    
        echo json_encode($searchResults);
    }
?>