<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body >

<center>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <fieldset>
 <legend> Reset Doctor Password </legend>
  Doctor Id: <input type="text" name="doctorid"><br><br>
  Password: <input type="password" name="password"><br><br>
  <input type="submit" value="SUBMIT">
  </fieldset>
</form>
<hr>
<br>
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $doctorid = $_POST['doctorid'];
    $password = $_POST['password'];
    $sql = "UPDATE Doctor SET password='".$password."' WHERE doctorid='".$doctorid."'";

if ($conn->query($sql) === TRUE) {
    echo "Password Is Reset";
} else {
    echo "Error updating record: " . $conn->error;
}}

$conn->close();
?>

</body>
</html>
