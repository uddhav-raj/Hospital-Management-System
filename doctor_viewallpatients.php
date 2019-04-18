<!DOCTYPE HTML>
<html>  
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<center>
<p><u><b><h3> YOUR PATIENT'S DETAILS </h3></b></u></p>
<br>
<br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>
<legend> ENTER YOUR ID </legend>
Id: <input type="text" name="id"><br><br>
<input type="submit">
</fieldset>
</form>

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


$sql = "SELECT P.patientid AS patientid,P.name AS name,D.doctorid AS doctorid FROM Patient P,Doctor D WHERE D.doctorid='".$id."' AND P.doctorid=D.doctorid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<br><br>";
    while($row = $result->fetch_assoc()){
    echo "<br>";
    echo "<font size=7 color=yellow>";
    echo "Name: " .$row["name"]. "<br>";
    echo "Patient ID: " .$row["patientid"]. "<br>";
echo "<br><hr><br>"; 
    }
} else {
    echo "RECORD NOT FOUND";
    exit;
}






$conn->close();


}
?>

</body>
</html>
