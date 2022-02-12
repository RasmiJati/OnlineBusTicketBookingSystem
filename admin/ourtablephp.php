<?php
    include "../inc/db_connects.php";
    $Route = $_POST['selroute'];
    $Price = $_POST['txtprice'];
    $insert = "insert into book (Route,Price) values ('$Route','$Price')";
    mysqli_query($con,$insert) or die("Error in insert");
?>

