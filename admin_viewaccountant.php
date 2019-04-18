<!DOCTYPE HTML>
<html> 
<head>
<link rel="stylesheet" href="style.css">
</head> 
<body>

<center>
<p><h1><b><u> ACCOUNTANTS RECORDS </u></b></h1></p>
<br>
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

$sql = "SELECT accountantid,name FROM Accountant";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    echo "<br><br>";
    echo "<font size=5 color=blue>";
    while($row = $result->fetch_assoc()){
    echo "AccountantID: " .$row["accountantid"]. "<br>";
    echo "Name: " .$row["name"]. "<br>";
    
    
 
    echo "<br><hr>";
    }
} else {
    echo "RECORD NOT FOUND";
    exit;
}

 
$conn->close();



?>

</body>
</html>
