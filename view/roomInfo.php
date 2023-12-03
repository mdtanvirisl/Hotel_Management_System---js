<?php
    include('../controller/sessioncheck.php');
    include('../model/roomModel.php');

    $rooms = room();
?>

<html>
<head>
    <title>Room Info</title>
</head>
<body>
    <table border = "1" width=100%>
        <tr>
            <?php include('header.php'); ?>
        </tr>
        <tr>
            <td>
                <?php include('account.php'); ?>
            </td>
            <td width=80%>
                <table border = "1" width=100%>
                    <tr>
                        <td>
                            <tr>
                                <h3>ADD NEW ROOM </h3>
                            </tr>
                            <tr>
                                <form method="post" action="../controller/roomCheck.php">
                                    <fieldset>
                                        Type of Room: 
                                        <select name="roomType">
                                            <option value="Superior Room">Superior Room</option>         
                                            <option value="Delux Room">Delux Room</option>         
                                            <option value="Gueast House">Gueast House</option>         
                                            <option value="Single Room">Single Room</option>         
                                        </select> 
                                        Bedding Type: 
                                        <select name="bedding">
                                            <option value="SINGLE">Single</option>         
                                            <option value="DOUBLE">Double</option>         
                                            <option value="TRIPLE">Triple</option>         
                                            <option value="QUAD">Quad</option>         
                                        </select> 
                                        <hr>
                                        <input type="submit" name="submit" value="Add Room" />
                                    </fieldset>
                                </form>
                            </tr>
                        </td>
                        <td>
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
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan = "2" align = "center">
                <h6>Copyright @ 2017</h6>
            </td>
        </tr>
    </table>
</body>
</html>