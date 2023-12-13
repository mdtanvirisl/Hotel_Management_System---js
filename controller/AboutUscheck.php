<?php
    require_once('../model/aboutusModel.php');
    $id = AutoAboutUsIdGenerate();
    if(isset($_REQUEST['submit'])){
       $about = $_REQUEST['about'];

       if($about == ""){
        echo "please some write";
     }
     else{
      addabout($id, $about);
      header('location: ../view/write_about_us.php');
     }
    }
?>