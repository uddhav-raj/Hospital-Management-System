<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>  
<body>
<center>
<p><u><b><h3> DELETE MEDICINE ENTERY </h3></b></u></p>
<br>
<br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>
<legend> ENTER MEDICINE ID </legend>
Enter the ID of the Medicine: <input type="text" name="id"><br><br>
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

$sql = "DELETE FROM Medicine WHERE medid='".$id."'";

if ($conn->query($sql) === TRUE) {echo "<font size=5 color=yellow>";
    echo "Record deleted successfully";
} else {echo "<font size=5 color=blue>";
    echo "Error deleting record: " . $conn->error;
}



$conn->close();


}
?>

</body>
</html>
