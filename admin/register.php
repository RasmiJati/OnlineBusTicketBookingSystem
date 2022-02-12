<?php
    include "registerphp.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Register Page</title>
        <link rel = "stylesheet" type = "text/css" href = "../css/form.css">
        <link rel = "stylesheet" type = "text/css" href = "../css/common.css">
    </head>
    <body style="background-image: url('../image/download2.jfif')">
        <div class = "site-menu">
            <ul>
                <li><?php echo "<a href = '../html/home.php'>Home</a>"?></li>
                <li><?php echo "<a href = '../html/contact.php'>Contact</a>"?></li>
                <li><?php echo "<a href = 'login.php'>Login</a>"?></li>
                <li><?php echo "<a href = 'register.php'>Register</a>"?></li> 
            </ul>
        </div>

        <div class = "site-header">
            <h2>Register</h2>
        </div>
        <form action="register.php" method = "post">
              
              <?php/* include "errors.php"*/?>
              
            <div class = "input-group">
                <label>Username</label>
                <input type="text" name = "username"/>
            </div>
            
            <div class = "input-group">
                <label>Address</label>
                <input type="text" name = "address"/>
            </div>
            
            <div class = "input-group">
                <label>Phone Number</label>
                <input type="text" name = "phone"/>
            </div>
            
            <div class = "input-group">
                <label>Email</label>
                <input type="text" name = "email"/>
            </div>
            
            <div class = "input-group">
                <label>Password</label>
                <input type="password" name = "password"/>
            </div>
            
            <div class = "input-group">
                <label>Confirm Password</label>
                <input type="password" name = "cpassword"/>
            </div>
            
            <div class = "input-group">
                <button type="submit" name = "register" class = "btn">Register</button>
            </div>

            <p>
              Have an account?<a href = "login.php">Sign In</a>  
            </p>

        </form>
    </body>
</html>