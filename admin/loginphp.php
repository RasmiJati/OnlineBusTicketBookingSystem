<style>
    h1{
        padding : 30px;
        color : darkred;
    }
</style>
<?php
    include "../inc/db_connects.php";
    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $select ="select Username,Password from usertable where Username = '$username' and Password = '$password'";
        $result = mysqli_query($con,$select) or die("error selection");
	    if(mysqli_num_rows($result) != 0)
		    while($row = mysqli_fetch_assoc($result))
			    header('location:table.php');
	    else
            echo "<h1 align = 'center'>Enter correct Username and Password!</h1>";
    }
?>