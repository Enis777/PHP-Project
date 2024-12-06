<?php

include "connection.php";

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numer_kallezimi = $_POST['numer_kallezimi'];
    $data_kallezimit = $_POST['data_kallezimit'];
    $neni = $_POST['neni'];
    $pershkrimi = $_POST['pershkrimi'];
    $informacion = $_POST['informacion'];
    $origjina = $_POST['origjina'];

    // Prepare and execute SQL statement to insert data into the database
    $sql = "INSERT INTO denouncement (numer_kallezimi, dateofdenouncment, article, description, information_about_denouncment, denouncementorigin) 
            VALUES ('$numer_kallezimi','$data_kallezimit', '$neni', '$pershkrimi', '$informacion', '$origjina')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the second page with numer_kallezimi as a parameter
        header("Location: kallezueskallezime1.php?numer_kallezimi=$numer_kallezimi");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Registration Form</title>

</head>
<body>

<h2>Shto kallezim</h2>
<form action="#"  method="post">

  <label for="numer_kallezimi">Numer kallezimi:</label><br>
  <input type="number" id="numer_kallezimi" name="numer_kallezimi"><br>
  
  <label for="data_kallezimit">Data e Kallezimit</label><br>
  <input type="date" id="data_kallezimit" name="data_kallezimit"><br>
  
  <label for="neni">Neni:</label><br>
  <input type="text" id="neni" name="neni"><br><br>

  <label for="pershkrimi">Pershkrimi:</label><br>
  <input type="text" id="pershkrimi" name="pershkrimi"><br><br>
  
  <label for="informacion">Informacion:</label><br>
  <input type="text" id="informacion" name="informacion"><br><br>

  <h3>Origjina:</h3>

    <input type="radio" id="police" name="origjina" value="police">
    <label for="police">Policia</label><br>

    <input type="radio" id="government" name="origjina" value="governmental institutions">
    <label for="government">Governmental Institutions</label><br>

    <input type="radio" id="individuals" name="origjina" value="individuals">
    <label for="individuals">Individuals</label><br>

    <input type="radio" id="prosecutors" name="origjina" value="prosecutors">
    <label for="prosecutors">Prosecutors</label><br>

    <input type="radio" id="other_prosecutor" name="origjina" value="other prosecutor institutions">
    <label for="other_prosecutor">Other Prosecutor Institutions</label><br>

    <button type="submit">Submit</button>

</form>


</body>
</html>
