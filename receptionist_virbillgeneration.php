<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<center>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <fieldset>
 <legend> PATIENTS WITH PATIENTID </legend>
  ID: <input type="text" name="patientid"><br><br>
  <input type="submit" value="SUBMIT">
  </fieldset>
</form>
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
    $patientid = $_POST['patientid'];
    $sql = "UPDATE Patient SET datedischarged=CURRENT_TIMESTAMP WHERE patientid='".$patientid."'";

if ($conn->query($sql) === TRUE) {echo "<font size=5 color=yellow>";
    echo "Patient discharged just now";
} else {echo "<font size=5 color=yellow>";
    echo "Error updating record: " . $conn->error;
}}

$conn->close();
?>
<br>
<br>
<br>
<hr>
<br>
<a href="receptionist_billgeneration.php"> GENERATE BILL FOR THE PATIENT </a>
<br>
<hr>
</center>
</body>
</html>
