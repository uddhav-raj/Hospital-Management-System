<!DOCTYPE HTML>
<html> 
<head>
<link rel="stylesheet" href="style.css">
</head> 
<body>
<head>
<link rel="stylesheet" href="style.css">
</head>
<center>

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

$sql = "SELECT medid,name,quantity,Price FROM Medicine";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    echo "<br><br>";
    while($row = $result->fetch_assoc()){
    echo "<font size=5 color=yellow>";
    echo "MedicineID: " .$row["medid"]. "<br>";
    echo "Name: " .$row["name"]. "<br>";
    echo "Quantity: " .$row["quantity"]. "<br>";
    echo "Price: " .$row["Price"]. "<br>";
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
