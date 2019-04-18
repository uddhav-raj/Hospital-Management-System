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
$sql = "CREATE TABLE Medicine (
medid VARCHAR(6) PRIMARY KEY, 
name VARCHAR(6) NOT NULL,
quantity INT(6) NOT NULL,
Price INT(6) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Medicine created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

</body>
</html>
