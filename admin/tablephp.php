<?php
    include "../inc/db_connects.php";
    $username = $_POST['uname'];
    $Ticket_on_date = $_POST['departingdate'];
    $Route = $_POST['selroute'];
    $Price = $_POST['price'];
    $No_of_days = $_POST['numdays'];
    $No_of_people = $_POST['numpeople'];
    $Total_amount = $_POST['totalfareprice'];
    $insert = "INSERT INTO booking (Username,Ticket_on_date,Route,Price,Number_of_days,Number_of_people,Total_Amount) VALUES('$username','$Ticket_on_date','$Route','$Price','$No_of_days','$No_of_people','$Total_amount')";
    mysqli_query($con,$insert);
    header('location:../html/afterticketbooking.php');
    exit();
?> 