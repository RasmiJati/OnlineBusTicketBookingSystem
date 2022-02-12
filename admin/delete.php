<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel = "stylesheet" type = "text/css" href = "../css/form.css">
        <link rel = "stylesheet" type = "text/css" href = "../css/common.css">
        <link rel = "stylesheet" type = "text/css" href = "../css/read.css">
    </head>
    <body style="background-image: url('../image/pokhara.jfif')">
        <div class = "site-header">
            <h2>Delete</h2>
        </div>
        <form action="delete.php" method = "post">
            <div class = "input-group">
                <label>User Id</label>
                <input type="text" name = "userid" required/>
            </div>

            <div class = "input-group">
                <label>Username</label>
                <input type="text" name = "username" required/>
            </div>
            
            <div class = "input-group">
                <button type="submit" name = "cancel" class = "btn">Delete</button>
            </div>
            
            <p>
                <a href ="../html/afterticketbooking.php">Back</a> 
            </p>
        </form>
        <style>
            h1{
                padding : 30px;
                color : darkred;
            }
        </style>
        <?php
            include "../inc/db_connects.php";  
            if(isset($_REQUEST['cancel']))
            {
                $uid = $_POST['userid'];
                $name = $_POST['username'];
                $delete = "DELETE  FROM booking WHERE User_id='$uid' AND Username='$name'";
                if(mysqli_query($con,$delete) or die ("error deleting"))
                {
                    echo "<h1 align = 'center'>Ticket of username $name is  cancelled successfully.</h1>";
                } 
                                     
            }
        ?>
    </body>
</html>