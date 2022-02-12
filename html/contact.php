<!DOCTYPE html>
<html>
    <head>
        <title>Contact Page</title>
        <link rel = "stylesheet" type = "text/css" href = "../css/form.css">
        <link rel = "stylesheet" type = "text/css" href = "../css/common.css">
        <link rel = "stylesheet" type = "text/css" href = "../css/contact.css">
    </head>
    <body style="background-image: url('../image/picture.jfif')">
        
        <div class = "site-menu">
            <ul>
                <li><?php echo "<a href = 'home.php'>Home</a>"?></li>
                <li><?php echo "<a href = 'contact.php'>Contact</a>"?></li>
                <li><?php echo "<a href = '../admin/login.php'>Login</a>"?></li>
                <li><?php echo "<a href = '../admin/register.php'>Register</a>"?></li> 
            </ul>
        </div>
        
        <div class = "header1">
            <div class = "header">
            <h2>Contact Info</h2>
            </div>
                
            <div class = "info">
                <p><b>Name</b> : Online Bus Ticket Booking </p>
                <p><b>Email</b> : onlinebus@gmail.com </p>
                <p><b>Contact</b> : 9874152630 , 015024856 </p>
                <p><b>Address</b> : New Baneshwor, Kathmandu </p>
            </div>
        </div>

        <div class = "header2">
            <div class = "site-header">
                <h2>Contact Form</h2>
            </div>
            <form action="contact.php" method = "post">
                <div class = "input-group">
                    <label>Name</label>
                    <input type="text" name = "name"/>
                </div>
                
                <div class = "input-group">
                    <label>Email</label>
                    <input type="text" name = "email"/>
                </div>

                <div class = "input-group">
                    <label>Phone</label>
                    <input type="text" name = "phone"/>
                </div>

                <div class = "input-group">
                    <label>Message</label>
                    <textarea rows = "10" cols = "45" name = "message"></textarea>
                </div>
                
                <div class = "input-group">
                    <button type="submit" name = "send" class = "btn">Send</button>
                </div>
                            
            </form>
        </div>     
        <?php
            include "../inc/db_connects.php";
            if(isset($_REQUEST['send']))
            {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $message = $_POST['message'];
                $insert = "INSERT INTO contacttb VALUES ('$name','$email','$phone','$message')";
                mysqli_query($con,$insert); 
                header('location:contact.php');  
            }
        ?>
    </body>
</html>


