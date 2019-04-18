<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<center>
<p><u><h1><b> RESET PASSWORD </b></h1></u></p>
<br>
<br>
<br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <fieldset>
 <legend> Reset Receptionist Password </legend>
  Receptionist Id: <input type="text" name="receptionistid"><br><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPassword: <input type="password" name="password"><br><br>
  <input type="submit" value="SUBMIT">
  </fieldset>
</form>
<br>
<br>
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
    $receptionistid = $_POST['receptionistid'];
    $password = $_POST['password'];
    $sql = "UPDATE Receptionist SET password='".$password."' WHERE receptionistid='".$receptionistid."'";

if ($conn->query($sql) === TRUE) {
    echo "Password Is Reset";
} else {
    echo "Error updating record: " . $conn->error;
}}

$conn->close();
?>

</body>
</html>
