<!DOCTYPE HTML>
<html> 
<head>
<link rel="stylesheet" href="style.css">
</head> 
<body>
<center>
<p><h1><u><b>REMOVAL FROM DUTY </b> </u></h1></p>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>
<legend> PHARMACIST'S REMOVAL </legend>
ID of the Pharmacist: <input type="text" name="id"><br><br>

<input type="submit">
</fieldset>
</form>
<br>
<br>
<hr>
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

$sql = "DELETE FROM Pharmacist WHERE pharmacistid='".$id."'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}



$conn->close();


}
?>

</body>
</html>
