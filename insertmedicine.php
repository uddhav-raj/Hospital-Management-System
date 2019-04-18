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
$stmt = $conn->prepare("INSERT INTO Medicine (medid, name, quantity, Price) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssii", $id, $name, $quantity, $price);

// set parameters and execute
$id = 'med1';
$name = "name1";
$quantity = 100;
$price=10;
$stmt->execute();

$id = 'med2';
$name = "name2";
$quantity = 200;
$price=20;
$stmt->execute();

$id = 'med3';
$name = "name3";
$quantity = 300;
$price=30;
$stmt->execute();

$id = 'med4';
$name = "name4";
$quantity = 400;
$price=40;
$stmt->execute();

$id = 'med5';
$name = "name5";
$quantity = 500;
$price=50;
$stmt->execute();

$id = 'med6';
$name = "name6";
$quantity = 600;
$price=60;
$stmt->execute();

$id = 'med7';
$name = "name7";
$quantity = 700;
$price=70;
$stmt->execute();

$id = 'med8';
$name = "name8";
$quantity = 800;
$price=80;
$stmt->execute();

$id = 'med9';
$name = "name9";
$quantity = 900;
$price=90;
$stmt->execute();

$id = 'med10';
$name = "name1";
$quantity = 1000;
$price=100;
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>

</body>
</html>
