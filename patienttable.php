<!DOCTYPE html>
<html>
<body>


<?php
include 'db.php';

// sql to create table
$sql = "CREATE TABLE Patient (
patientid VARCHAR(6) PRIMARY KEY, 
doctorid VARCHAR(6) NOT NULL,
name VARCHAR(30) NOT NULL,
address VARCHAR(30) NOT NULL,
sex VARCHAR(6) NOT NULL,
datedischarged TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
dateadmitted TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
medid1 VARCHAR(10),
medid2 VARCHAR(10),
medid3 VARCHAR(10),
medid4 VARCHAR(10),
medid5 VARCHAR(10),
room INT(6),
password VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Patient created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

</body>
</html>
