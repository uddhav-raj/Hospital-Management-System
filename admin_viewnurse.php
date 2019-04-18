<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>  
<body>
<center>
<p> <u><b><h1>NURSES RECORDS </h1></b></u></p>

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

$sql = "SELECT nurseid,name,doctorid FROM Nurse";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    echo "<br><br>";
    echo "<font size=5 color=blue>";
    while($row = $result->fetch_assoc()){
    echo "NurseID: " .$row["nurseid"]. "<br>";
    echo "Name: " .$row["name"]. "<br>";
    echo "DoctorId: " .$row["doctorid"]. "<br>";
    echo "<br>";
    echo "<hr>";
    
    
 
    
  }
} else {
    echo "RECORD NOT FOUND";
    exit;
}

 
$conn->close();



?>

</body>
</html>
