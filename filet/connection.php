<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "user";  
	$db_port = '3307';
    $conn = new mysqli($servername, $username, $password, $db_name, $db_port);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo "";
    
    ?>