<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<center>
<p><u><b><h1>RESETTING PASSWORD </h1></b></u></p>
<br>
<br>
<br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <fieldset>
 <legend> Reset Nurse Password </legend>
  &nbsp&nbsp&nbspNurse Id: <input type="text" name="nurseid"><br><br>
  Password: <input type="password" name="password"><br><br>
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
    $nurseid = $_POST['nurseid'];
    $password = $_POST['password'];
    $sql = "UPDATE Nurse SET password='".$password."' WHERE nurseid='".$nurseid."'";

if ($conn->query($sql) === TRUE) {
    echo "<br>Password Is Reset";
} else {
    echo "Error updating record: " . $conn->error;
}}

$conn->close();
?>

</body>
</html>
