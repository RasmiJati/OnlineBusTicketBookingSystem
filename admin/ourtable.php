<!DOCTYPE html>
<html>
    <head>
        <title>Admin form</title>
        <link rel="stylesheet" type="text/css" href="../css/form.css"/>
        <link rel = "stylesheet" type = "text/css" href = "../css/common.css">
    </head>
    <body style="background-image: url('../image/pokhara2.jpg')">

        <div class = "site-menu">
            <ul>
                <li><?php echo "<a href = '../html/home.php'>Home</a>"?></li>
                <li><?php echo "<a href = '../html/contact.php'>Contact</a>"?></li>
                <li><?php echo "<a href = 'login.php'>Login</a>"?></li>
                <li><?php echo "<a href = 'register.php'>Register</a>"?></li> 
            </ul>
        </div>

            
        <div class = "site-header">
            <h3><b>Admin Form</b></h3>
        </div>

        <form method = "post" action = "ourtablephp.php">
             
            <div class="input-group">
                Route:
                <select name="selroute">
                    <option>Choose Route</option>
                    <option value="Kathmandu To Pokhara">Kathmandu To Pokhara</option>
                    <option value="Kathmandu To Lumbini">Kathmandu To Lumbini</option>
                    <option value="Kathmandu To Gorkha">Kathmandu To Gorkha</option>
                    <option value="Kathmandu To Janakpur">Kathmandu To Janakpur</option>
                    <option value="Kathmandu To Chitlang">Kathmandu To Chitlang</option>
                </select>
            </div><br/>

            <div class="input-group">
                Price:<input type="text" name="txtprice"/>
            </div><br/>

            <div class="input-group">
                <button type="submit" name="submit" class = "btn">Submit</button>
            </div>
                
            </form>
        
    </body>
</html>