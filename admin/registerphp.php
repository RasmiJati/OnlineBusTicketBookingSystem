<style>
    h1{
        padding : 30px;
        color : darkred;
    }
</style>
<?php
    include "../inc/db_connects.php";

    // initializing variables
    $username = "";
    $email    = "";
    $errors = array(); 

    if(isset($_POST['register']))
    {
        $username = $_POST['username'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        if(empty($username))
        {
            array_push($errors,"Username is required");
        }
        if(empty($address))
        {
            array_push($errors,"Address is required");
        }
        if(empty($phone))
        {
            array_push($errors,"Phone number is required");
        }
        if(empty($email))
        {
            array_push($errors,"Email is required");
        }
        if(empty($password))
        {
            array_push($errors,"Password is required");
        }
        if($password!=$cpassword)
        {
            array_push($errors,"The two password do not match");
        }
        if(count($errors) == 0)
        {
            $insert = "insert into usertable (Username,Address,Phone_number,Email,Password) values ('$username','$address','$phone','$email','$password')";
            mysqli_query($con,$insert) or die('Insertion error');
            header('location:table.php');
        }
        else
        {
            echo "<h1 align = 'center'>Please enter the information correctly!</h1>";
        }
    }
?>