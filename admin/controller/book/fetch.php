<?php
    $route = $_REQUEST['route'];
    require(__DIR__.'/../../../inc/db_connects.php');
    $selectRoute = "select *FROM book where Route= '$route'";
    $resultRoute = mysqli_query($con,$selectRoute) or die(mysqli_error());
    if(mysqli_num_rows($resultRoute)==0){
		echo "No Record Found!";
    }
    $arr = mysqli_fetch_assoc($resultRoute);
?>
<input type="text" name="price" id ="price" value="<?php echo $arr['Price']?>">