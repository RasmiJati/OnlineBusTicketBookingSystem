<?php
    include "../inc/db_connects.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Booking Form</title>
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
            <h3><b>BOOK BUS TICKET HERE FOR YOUR TRIP</b></h3>
        </div>

        <form action="tablephp.php" method="post">
           
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="uname"/>
            </div><br/>

            <div class="input-group">
                <label>Ticket on date</label>
                <input type="date" name="departingdate"/>
            </div><br/>
                    
            <div class="input-group">
                <label>Route:</label>
                <select name="selroute" onchange="view(this)">
                <option><b>Choose Route</option>
                    <?php
                        $select = "SELECT *FROM book";
                        $result = mysqli_query($con,$select) or die(mysqli_error());
                        while( $content = mysqli_fetch_assoc($result) ){
                    ?>
                    <option value="<?php  echo $content['Route']; ?>"><?php  echo $content['Route']; ?></option>
                    <?php
                        }
                    ?>
                </select>
            </div><br/>

            <div class="input-group">
                <label>Price:</label><span id="reply"></span>
            </div><br/>
                   
            <div class="input-group">
                <label>Number of days</label> <input type="number" name="numdays" id="days"/>
            </div><br/>
                   
            <div class="input-group">
                <label>Number of people</label> <input type="number" name="numpeople" onchange="show(this)"/> 
            </div><br/>
            
            <div>
                <label>Total Fare:</label> 
                <span id="totalfarePrice">
                    <span id="totalFareMessage"></span>
                </span>
            </div>
                    
                    
            <div class="input-group">
                <button type="submit" name="submit" class = "btn">Book</button>           
            </div>
                
        </form>
        
        <script>
            function view(data)
            {
                var route = data.value;
                if(route == "")
                {
                    document.getElementById('reply').innerHTML="Enter route";
                    return;
                }
                else{
                    var ob = new XMLHttpRequest();
                    ob.onreadystatechange = function(){
                        if(this.readyState == 4 && this.status == 200)
                            document.getElementById('reply').innerHTML = this.responseText;
                    };
                    ob.open("GET","controller/book/fetch.php?route="+route,true);
                    ob.send();
                }
            }

            function show(data){
                var people = data.value;
                var days = document.getElementById('days').value;
                var price = document.getElementById('price').value;
                if( people == "")
                {
                    document.getElementById('totalFareMessage').innerHTML="Enter number of people";
                    return;
                }
                else{
                    var ob = new XMLHttpRequest();
                    ob.onreadystatechange = function(){
                        if(this.readyState == 4 && this.status == 200)
                            document.getElementById('totalFareMessage').innerHTML = this.responseText;
                    };
                    ob.open("GET","controller/book/fareCalculation.php?days="+days+'&people='+people+'&price='+price,true);
                    ob.send();
                }
                
            }

            
        </script>
    </body>
</html>
