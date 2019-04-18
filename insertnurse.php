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
$stmt = $conn->prepare("INSERT INTO Nurse (nurseid, name, doctorid, password) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nurseid, $name, $doctorid, $password);

// set parameters and execute

$nurseid = 'nur1';
$name = 'nurname1';
$doctorid = 'doc5';
$password='nur1udd';
$stmt->execute();

$nurseid = 'nur2';
$name = 'nurname2';
$doctorid = 'doc2';
$password='nur2udd';
$stmt->execute();

$nurseid = 'nur3';
$name = 'nurname3';
$doctorid = 'doc3';
$password='nur3udd';
$stmt->execute();

$nurseid = 'nur4';
$name = 'nurname4';
$doctorid = 'doc4';
$password='nur4udd';
$stmt->execute();

$nurseid = 'nur5';
$name = 'nurname5';
$doctorid = 'doc2';
$password='nur5udd';
$stmt->execute();

$nurseid = 'nur6';
$name = 'nurname6';
$doctorid = 'doc2';
$password='nur6udd';
$stmt->execute();

$nurseid = 'nur7';
$name = 'nurname7';
$doctorid = 'doc5';
$password='nur7udd';
$stmt->execute();

$nurseid = 'nur8';
$name = 'nurname8';
$doctorid = 'doc2';
$password='nur8udd';
$stmt->execute();

$nurseid = 'nur9';
$name = 'nurname9';
$doctorid = 'doc5';
$password='nur9udd';
$stmt->execute();

$nurseid = 'nur10';
$name = 'nurname10';
$doctorid = 'doc8';
$password='nur10udd';
$stmt->execute();



echo "New records created successfully";

$stmt->close();
$conn->close();
?>

</body>
</html>
