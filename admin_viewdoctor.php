<!DOCTYPE HTML>
<html> 
<head>
<link rel="stylesheet" href="style.css">
</head> 
<body>

<center>
<h1><p><u><b> THE RECORDS OF DOCTORS</b></u></p></h1>
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

$sql = "SELECT doctorid,name,specialization,address,salary FROM Doctor";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    echo "<font size=5 color=yellow  >";
    echo "<br><br>";
    while($row = $result->fetch_assoc()){
    echo "DoctorID: " .$row["doctorid"]. "<br>";
    echo "Name: " .$row["name"]. "<br>";
    echo "Specialization: " .$row["specialization"]. "<br>";
    echo "Address: " .$row["address"]. "<br>";
    echo "Salary: " .$row["salary"]. "<br>";
 
    echo "<br><br>";
    echo "<hr>";
    echo "<br>";
    }
} else {
    echo "RECORD NOT FOUND";
    exit;
}

 
$conn->close();



?>

</body>
</html>
