<?php

// Check if numer_kallezimi is set and not empty
if(isset($_GET['numer_kallezimi']) && !empty($_GET['numer_kallezimi'])) {
    $numer_kallezimi = $_GET['numer_kallezimi']; // Get numer_kallezimi from the URL
} else {
    // Handle the case where numer_kallezimi is not set or empty
    // For example, redirect to an error page or display an error message
    exit("Error: Numer kallezimi not provided.");
}

// Process the button click
if(isset($_POST['submit'])) {
    // Redirect to kallezueskallezime1.php with numer_kallezimi as a query parameter
    header("Location: ikallezuar.php?numer_kallezimi=$numer_kallezimi");
    exit(); // Make sure to exit after redirection
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <!-- Form to submit when button is pressed -->
        <form method="post">
            <button class="button" type="submit" name="submit">Kallezues</button>
            <button class="button" type="submit" name="submit">I Kallezuar</button>
        </form>
    </div>
</body>
</html>

