<!DOCTYPE HTML>
<html>  
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<center>
<p><u><h1><b> RECEPTIONISTS RECORDS </b></h1></u></p>
<br>
<br>

<?php

$servername = "localhost";
$username = "root";
$password = "time.org";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT receptionistid,name FROM Receptionist";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    echo "<br>";
    echo "<font size=5 color=blue>";
    while($row = $result->fetch_assoc()){
    echo "ReceptionistID: " .$row["receptionistid"]. "<br>";
    echo "Name: " .$row["name"]. "<br>";
    
    
 
    echo "<br><hr><br>";
    }
} else {
    echo "RECORD NOT FOUND";
    exit;
}

 
$conn->close();



?>

</body>
</html>
