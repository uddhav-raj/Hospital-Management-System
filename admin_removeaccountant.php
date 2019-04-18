<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>  
<body>
<center>
<p><u><h1><b> REMOVAL FROM DUTY </b></h1></u></p><br>
<br>
<br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>
<legend> ACCOUNTANT'S ID </legend>
Enter the ID of the Accountant: <input type="text" name="id"><br><br>
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

$sql = "DELETE FROM Accountant WHERE accountantid='".$id."'";

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
