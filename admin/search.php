<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel = "stylesheet" type = "text/css" href = "../css/read.css"/>
        <link rel = "stylesheet" type = "text/css" href = "../css/form.css"/>
        <link rel = "stylesheet" type = "text/css" href = "../css/common.css"/>
    </head>
    <body style="background-image: url('../image/pokhara.jfif')">
        <div class = "site-header">
            <h2>Search Here </h2>
        </div>
        <form action="search.php" method = "post">
            <div class = "input-group">
                <label>Name</label>
                <input type="text" name = "uname" required/>
            </div>

            <div class = "input-group">
                <label>Email</label>
                <input type="email" name = "email" required/>
            </div>

            
            <div class = "input-group">
                <label>Password</label>
                <input type="password" name = "password" required/>
            </div>
            
            <div class = "input-group">
                <button type="submit" name = "view" class = "btn">View</button>
            </div>
            <a href = "../html/afterticketbooking.php">Back</a>
           
        </form>
        <style>
            h1{
                padding : 30px;
                color : darkred;
            }
        </style>
        <?php
            include "../inc/db_connects.php";  
            if(isset($_REQUEST['view']))                   
            {
                $name = $_POST['uname'];
                $run = mysqli_query($con,"select *from booking where Username = '$name'");
                while($row = mysqli_fetch_array($run))
                {
        ?>
                        <div class = "header">
                            
                        </div>
                        <div align = "center">
                            <table border = "2" width = "900">
                                <tr>
                                    <th>User_Id</th>
                                    <th>Username</th>
                                    <th>Ticket on date</th>
                                    <th>Route</th>
                                    <th>Price</th>
                                    <th>Number of days</th>
                                    <th>Number of people</th>
                                    <th>Total amount</th>
                                    <?php
                                        $showuid = $row[0];
                                        $showusername = $row[1];
                                        $showtod = $row[2];
                                        $showroute = $row[3];
                                        $showprice = $row[4];
                                        $showdays = $row[5];
                                        $showpeople = $row[6];
                                        $showamt = $row[7];
                                        echo "<tr align = 'center'>
                                            <td>$showuid</td>
                                            <td>$showusername</td>
                                            <td>$showtod</td>
                                            <td>$showroute</td>
                                            <td>$showprice</td>
                                            <td>$showdays</td>
                                            <td>$showpeople</td>
                                            <td>$showamt</td>
                                            </tr>";
                    }
                }
        ?>
                </tr>
            </table> 
             
        </div>
    </body>
</html>