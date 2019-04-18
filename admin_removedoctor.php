<!DOCTYPE HTML>
<html> 
<head>
<link rel="stylesheet" href="style.css">
</head> 
<body>
<center>
<p><u><b><h1> REMOVAL FROM DUTY </h1></b></u></p> 


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>
<legend> REMOVE DOCTOR </legend>
ID of the Doctor: <input type="text" name="id"><br>
<br>
<input type="submit">
<br>
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

$sql = "DELETE FROM Doctor WHERE doctorid='".$id."'";

if ($conn->query($sql) === TRUE) {
    echo "<center> Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}



$conn->close();


}
?>

</body>
</html>
