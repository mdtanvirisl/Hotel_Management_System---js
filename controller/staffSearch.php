<?php

    include('../model/staffModel.php');
    
    if(isset($_REQUEST['search'])){
        $staffusername = $_REQUEST['search'];

        $staff = staffsearch($staffusername);
        
        $searchResults = [];
        while ($row = mysqli_fetch_assoc($staff)) {
            $searchResults[] = $row;
        }
    
        echo json_encode($searchResults);
    }
?>