<?php

include "connection.php";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];


	$sql="select * from login where username='".$username."' AND password='".$password."' ";

	$result=mysqli_query($conn,$sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="user")
	{	

		$_SESSION["username"]=$username;

		header("location:userhome.php");
	}

	elseif($row["usertype"]=="admin")
	{

		$_SESSION["username"]=$username;
		
		header("location:adminhome.php");
	}

	else
	{
		echo "username or password incorrect";
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
    body {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f0f0f0;
    }
    .container {
        width: 90%; /* Adjust this width as needed */
        max-width: 400px; /* Limit maximum width */
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }
    .container h1 {
        text-align: center;
        margin-bottom: 20px;
    }
    .form {
        margin-top: 20px;
    }
    .form label {
        display: block;
        margin-bottom: 5px;
    }
    .form input[type="text"],
    .form input[type="password"],
    .form input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box; /* Ensure padding doesn't affect width */
    }
    .form input[type="submit"] {
        background-color: black;
        color: #fff;
        cursor: pointer;
    }
    .form input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
</head>

<body>


<div class="container">
	<h1>Login Form</h1>

	<div class="form">

		<form action="#" method="POST">

	<div>

		<label>username</label>
		<input type="text" name="username" required>

	</div>
	
	
	
	<div>
		<label>password</label>
		<input type="password" name="password" required>
	</div>
	
		<input type="submit" value="Login">
	
	</form>

	</div>

 </div>


</body>
</html>