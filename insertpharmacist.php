<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
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

// prepare and bind
$stmt = $conn->prepare("INSERT INTO Pharmacist (pharmacistid, name, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $pharmacistid, $name, $password);

// set parameters and execute

$pharmacistid = 'phr1';
$name = 'phrname1';
$password='phr1udd';
$stmt->execute();

$pharmacistid = 'phr2';
$name = 'phrname2';
$password='phr2udd';
$stmt->execute();

$pharmacistid = 'phr3';
$name = 'phrname3';
$password='phr3udd';
$stmt->execute();

$pharmacistid = 'phr4';
$name = 'phrname4';
$password='phr4udd';
$stmt->execute();

$pharmacistid = 'phr5';
$name = 'phrname5';
$password='phr5udd';
$stmt->execute();

$pharmacistid = 'phr6';
$name = 'phrname6';
$password='phr6udd';
$stmt->execute();

$pharmacistid = 'phr7';
$name = 'phrname7';
$password='phr7udd';
$stmt->execute();

$pharmacistid = 'phr8';
$name = 'phrname8';
$password='phr8udd';
$stmt->execute();

$pharmacistid = 'phr9';
$name = 'phrname9';
$password='phr9udd';
$stmt->execute();

$pharmacistid = 'phr10';
$name = 'phrname10';
$password='phr10udd';
$stmt->execute();



echo "New records created successfully";

$stmt->close();
$conn->close();
?>

</body>
</html>
