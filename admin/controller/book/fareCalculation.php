<?php
    require(__DIR__.'/../../../inc/db_connects.php');
  $people = $_REQUEST['people'];
  $days = $_REQUEST['days'];
  $price = $_REQUEST['price'];
  $sum = $people * $days * $price;
?>
<input type="text" name="totalfareprice" value="<?php echo $sum; ?>">
