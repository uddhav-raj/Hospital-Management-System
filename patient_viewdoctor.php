<!DOCTYPE HTML>
<html> 
<head>
<link rel="stylesheet" href="style.css">
</head> 
<body>
<center>
<p><u><b><h3> YOUR DOCTOR'S DETAILS </h3></b></u></p>
<br>
<br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>
<legend> ENTER ID </legend>
Id: <input type="text" name="id"><br><br>
<input type="submit">
</fieldset>
</form>
<br>
<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$id=$_POST["id"];

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


$sql = "SELECT D.specialization AS spec,D.name AS name,D.doctorid AS doctorid,P.doctorid,P.patientid FROM Patient P,Doctor D WHERE P.patientid='".$id."' AND P.doctorid=D.doctorid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    echo "<br>";
    echo "<font size=7 color=yellow>";
    echo "<center> THE DETAILS OF YOUR DOCTOR ARE: <br><br><br>";
    echo "Name of DOCTOR: " . $row["name"]. "<br>";
    echo "Specialization: " . $row["spec"]. "<br>";
    echo "DoctorID: " . $row["doctorid"]. "<br>";
    echo "<br><hr><br>";    
// echo "ADDRESS of DOCTOR: " . $row["add"]. "<br>";
    
} else {
    echo "RECORD NOT FOUND";
    exit;
}







$conn->close();


}
?>

</body>
</html>
