<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel = "stylesheet" type = "text/css" href = "../css/read.css"/>
        <link rel = "stylesheet" type = "text/css" href = "../css/form.css"/>
        <link rel = "stylesheet" type = "text/css" href = "../css/common.css"/>
    </head>
    <body style="background-image: url('../image/pokhara.jfif')">
        <div class = "anchor">
            <a align = "center" href = "../html/afterticketbooking.php">Back</a>
        </div>
        <div align = "center">
            <table border = "2" width = "900">
                <tr>
                    <th>User_id</th>
                    <th>Username</th>
                    <th>Ticket_on_date</th>
                    <th>Route</th>
                    <th>Price</th>
                    <th>Number_of_days</th>
                    <th>Number_of_people</th>
                    <th>Total_Amount</th>
                    <?php
                        include "../inc/db_connects.php";
                        $run = mysqli_query($con,"select *from booking");
                        while($row = mysqli_fetch_array($run))
                        {
                            $showid = $row[0];
                            $showusername = $row[1];
                            $showdate = $row[2];
                            $showroute = $row[3];
                            $showprice = $row[4];
                            $showdays = $row[5];
                            $showpeople = $row[6];
                            $showamount = $row[7];
                            echo "<tr align = 'center'>
                                    <td>$showid</td>
                                    <td>$showusername</td>
                                    <td>$showdate</td>
                                    <td>$showroute</td>
                                    <td>$showprice</td>
                                    <td>$showdays</td>
                                    <td>$showpeople</td>
                                    <td>$showamount</td>
                                </tr>";
                        }
                    ?>
                </tr>
            </table>   
        </div>
    </body>
</html>
<?php

?>