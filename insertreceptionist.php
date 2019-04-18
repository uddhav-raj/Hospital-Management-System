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

// prepare and bind
$stmt = $conn->prepare("INSERT INTO Receptionist (receptionistid, name, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $receptionistid, $name, $password);

// set parameters and execute

$receptionistid = 'rec1';
$name = 'recname1';
$password='rec1udd';
$stmt->execute();

$receptionistid = 'rec2';
$name = 'recname2';
$password='rec2udd';
$stmt->execute();

$receptionistid = 'rec3';
$name = 'recname3';
$password='rec3udd';
$stmt->execute();

$receptionistid = 'rec4';
$name = 'recname4';
$password='rec4udd';
$stmt->execute();

$receptionistid = 'rec5';
$name = 'recname5';
$password='rec5udd';
$stmt->execute();

$receptionistid = 'rec6';
$name = 'recname6';
$password='rec6udd';
$stmt->execute();

$receptionistid = 'rec7';
$name = 'recname7';
$password='rec7udd';
$stmt->execute();

$receptionistid = 'rec8';
$name = 'recname8';
$password='rec8udd';
$stmt->execute();

$receptionistid = 'rec9';
$name = 'recname9';
$password='rec9udd';
$stmt->execute();

$receptionistid = 'rec10';
$name = 'recname10';
$password='rec10udd';
$stmt->execute();



echo "New records created successfully";

$stmt->close();
$conn->close();
?>

</body>
</html>
