<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<center>
<p><h1><b><u> RESET PASSWORD </u></b></h1></p>
<br>
<br>
<br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <fieldset>
 <legend> Reset Accountant Password </legend>
  Accountant Id: <input type="text" name="accountantid"><br><br>
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Password: <input type="password" name="password"><br><br>
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
    $accountantid = $_POST['accountantid'];
    $password = $_POST['password'];
    $sql = "UPDATE Accountant SET password='".$password."' WHERE accountantid='".$accountantid."'";

if ($conn->query($sql) === TRUE) {
    echo "Password Is Reset";
} else {
    echo "Error updating record: " . $conn->error;
}}

$conn->close();
?>

</body>
</html>
