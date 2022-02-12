<?php
    $route = $_REQUEST['route'];
    require(__DIR__.'/../../../../inc/connection.php');
    $select = "SELECT price FROM book WHERE Route= $route";
    $result = mysqli_query($con,$select) or die(mysqli_error());
    if(mysqli_num_rows($result)==0){
		echo "No Record Found!";
    }
    $arr = mysqli_fetch_assoc($result);
?>
<input type="text" name="batch" value="<?php echo $arr['Price']?>">