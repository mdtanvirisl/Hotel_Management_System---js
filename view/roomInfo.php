<?php
session_start();
    include('../controller/sessioncheck.php');
    include('../model/roomModel.php');

    $rooms = room();
?>

<html>
<head>
    <title>Room Info</title>
    <link rel="stylesheet" href="../assets/css/draft.css">
    <script src="../assets/js/script.js"></script>
</head>
<body>
    <?php include('dashboard_menu.php'); ?>
    <section class="container">
        <div class="">
            <?php include('side_menu.php'); ?>
        </div>
        <div class="info">
            <div>
                <h3>ADD NEW ROOM </h3>
                <form method="post" action="">
                    <fieldset>
                        Type of Room: 
                        <select name="roomType" id="roomType">
                            <option value="Superior Room">Superior Room</option>         
                            <option value="Delux Room">Delux Room</option>         
                            <option value="Gueast House">Gueast House</option>         
                            <option value="Single Room">Single Room</option>         
                        </select> 
                        Bedding Type: 
                        <select name="bedding" id="bedding">
                            <option value="SINGLE">Single</option>         
                            <option value="DOUBLE">Double</option>         
                            <option value="TRIPLE">Triple</option>         
                            <option value="QUAD">Quad</option>         
                        </select> 
                        <hr>
                        <input onclick="room()" type="submit" name="submit" value="Add Room" />
                    </fieldset>
                </form>
            </div>
            <div>
                <table border='1' width='100%'>  
                    <tr>
                        <th>Room ID</th>
                        <th>Room Type</th>
                        <th>Bedding</th>
                    </tr>
                    <?php   for($i=0; $i<count($rooms); $i++){ ?>
                    <tr>
                        <td><?=$rooms[$i]['roomid']?></td>
                        <td><?=$rooms[$i]['roomType']?></td>
                        <td><?=$rooms[$i]['bedding']?></td>
                    </tr>
                <?php } ?> 
                </table>
            </div>
        </div>
    </section>
</body>
</html>