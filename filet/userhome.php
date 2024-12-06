<?php
session_start();


if(!isset($_SESSION["username"]))
{
	header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Big Buttons with Links</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .container {
    text-align: center;
  }

  .button {
    display: inline-block;
    padding: 20px 40px;
    font-size: 24px;
    text-transform: uppercase;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
    margin: 10px;
    transition: background-color 0.3s;
    text-decoration: none;
  }

  .button:hover {
    background-color: #45a049;
  }
</style>
</head>
<body>

<div class="container">
  <button class="button"><a href="kallezime.php" style="color: inherit; text-decoration: none;">Kallezime</a></button>
  <button class="button"><a href="#" style="color: inherit; text-decoration: none;">Procedim</a></button>
</div>

<script>
  // You can add JavaScript functionality here if needed
</script>

</body>
</html>
