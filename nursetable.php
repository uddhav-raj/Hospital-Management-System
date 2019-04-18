<!DOCTYPE html>
<html>
<body>


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

// sql to create table
$sql = "CREATE TABLE Nurse (
nurseid VARCHAR(6) PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
doctorid VARCHAR(6) NOT NULL,
password VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Nurse created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

</body>
</html>
