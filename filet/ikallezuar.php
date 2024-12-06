<?php

include "connection.php";

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $father = $_POST['father'];
    $mother = $_POST['mother'];
    $placeofbirth = $_POST['placeofbirth'];
    $dayofbirth = $_POST['dayofbirth'];
    $ispreviosulyconvicted = $_POST['ispreviosulyconvicted'];
    $nationality = $_POST['nationality'];
    $cellphone1 = $_POST['cellphone1'];
    $cellphone2 = $_POST['cellphone2'];

    $numer_kallezimi = $_GET['numer_kallezimi']; 
    
      // Prepare and execute SQL statement to insert data into the database
      $sql_person = "INSERT INTO ACCUSED (id, name, surname, father, mother, placeofbirth, dayofbirth
      , ispreviosulyconvicted, nationality, cellphone1,cellphone2,denouncment_id) 
      VALUES ('$id','$name', '$surname', '$father', '$mother', '$placeofbirth', '$dayofbirth'
      , '$ispreviosulyconvicted', '$nationality', '$cellphone1', '$cellphone2','$numer_kallezimi')";

if ($conn->query($sql_person) === TRUE ) {
// Set success message
$success_message = "Records added successfully.";
} else {
echo "Error: " . $sql_person . "<br>" . $conn->error;
echo "Error: " . $sql_accuser . "<br>" . $conn->error;
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shto te kallezuar</title>
</head>
<body>
<?php if (!empty($success_message)) : ?>
        <!-- Display success message -->
        <p><?php echo $success_message; ?></p>
    <?php endif; ?>

    <h3>Shto te kallezuar</h3>
    <form action="#" method="post">
        
        <label for="id">ID:</label><br>
        <input type="text" id="id" name="id" required><br>
     
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br> 
        
        <label for="surname">Surname:</label><br>
        <input type="text" id="surname" name="surname"><br>
        
        <label for="father">Father's Name:</label><br>
        <input type="text" id="father" name="father"><br>
        
        <label for="mother">Mother's Name:</label><br>
        <input type="text" id="mother" name="mother"><br>
        
        <label for="placeofbirth">Place of Birth:</label><br>
        <input type="text" id="placeofbirth" name="placeofbirth"><br>
        
        <label for="dayofbirth">Date of Birth:</label><br>
        <input type="date" id="dayofbirth" name="dayofbirth"><br>
        
        <label for="ispreviosulyconvicted">Previously Convicted:</label><br>
        <input type="checkbox" id="ispreviosulyconvicted" name="ispreviosulyconvicted" value="1"><br>
        
        <label for="nationality">Nationality:</label><br>
        <input type="text" id="nationality" name="nationality"><br>
        
        <label for="cellphone1">Cellphone 1:</label><br>
        <input type="tel" id="cellphone1" name="cellphone1" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"><br>
        
        <label for="cellphone2">Cellphone 2:</label><br>
        <input type="tel" id="cellphone2" name="cellphone2" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>