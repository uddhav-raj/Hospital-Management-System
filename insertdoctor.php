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
$stmt = $conn->prepare("INSERT INTO Doctor (doctorid, name, specialization, address, salary, password) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssis", $doctorid, $name, $specialization, $address, $salary, $password);

// set parameters and execute
$doctorid = 'doc1';
$name = 'docname1';
$specialization = 'spec1';
$address= 'terr street';
$salary=10000;
$password='doc1udd';
$stmt->execute();

$doctorid = 'doc2';
$name = 'docname2';
$specialization = 'spec2';
$address= 'wer street';
$salary=20000;
$password='doc2udd';
$stmt->execute();

$doctorid = 'doc3';
$name = 'docname3';
$specialization = 'spec3';
$address= 'ger street';
$salary=30000;
$password='doc3udd';
$stmt->execute();


$doctorid = 'doc4';
$name = 'docname4';
$specialization = 'spec4';
$address= 'yer street';
$salary=40000;
$password='doc4udd';
$stmt->execute();

$doctorid = 'doc5';
$name = 'docname5';
$specialization = 'spec5';
$address= 'qre street';
$salary=50000;
$password='doc5udd';
$stmt->execute();

$doctorid = 'doc6';
$name = 'docname6';
$specialization = 'spec6';
$address= 'tyr street';
$salary=60000;
$password='doc6udd';
$stmt->execute();

$doctorid = 'doc7';
$name = 'docname7';
$specialization = 'spec7';
$address= 'hgf street';
$salary=70000;
$password='doc7udd';
$stmt->execute();

$doctorid = 'doc8';
$name = 'docname8';
$specialization = 'spec8';
$address= 'kjl street';
$salary=80000;
$password='doc8udd';
$stmt->execute();

$doctorid = 'doc9';
$name = 'docname9';
$specialization = 'spec9';
$address= 'kte street';
$salary=90000;
$password='doc9udd';
$stmt->execute();

$doctorid = 'doc10';
$name = 'docname10';
$specialization = 'spec10';
$address= 'awe street';
$salary=100000;
$password='doc10udd';
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>

</body>
</html>
