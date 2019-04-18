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
$stmt = $conn->prepare("INSERT INTO Accountant (accountantid, name, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $accountantid, $name, $password);

// set parameters and execute

$accountantid = 'acc1';
$name = 'accname1';
$password='acc1udd';
$stmt->execute();

$accountantid = 'acc2';
$name = 'accname2';
$password='acc2udd';
$stmt->execute();

$accountantid = 'acc3';
$name = 'accname3';
$password='acc3udd';
$stmt->execute();

$accountantid = 'acc4';
$name = 'accname4';
$password='acc4udd';
$stmt->execute();

$accountantid = 'acc5';
$name = 'accname5';
$password='acc5udd';
$stmt->execute();

$accountantid = 'acc6';
$name = 'accname6';
$password='acc6udd';
$stmt->execute();

$accountantid = 'acc7';
$name = 'accname7';
$password='acc7udd';
$stmt->execute();

$accountantid = 'acc8';
$name = 'accname8';
$password='acc8udd';
$stmt->execute();

$accountantid = 'acc9';
$name = 'accname9';
$password='acc9udd';
$stmt->execute();

$accountantid = 'acc10';
$name = 'accname10';
$password='acc10udd';
$stmt->execute();



echo "New records created successfully";

$stmt->close();
$conn->close();
?>

</body>
</html>
