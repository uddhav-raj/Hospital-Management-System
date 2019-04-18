<!DOCTYPE HTML>
<html> 
<head>
<link rel="stylesheet" href="style.css">
</head> 
<body>
<center>
<p><h1><u><b> NEW APPOINTMENT </b></u></h1></p>
<br>
<br>
<br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>
<legend> ENTER THE RECEPTIONIST'S DETAILS </legend>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspReceptionist Id: <input type="text" name="id"><br><br>
Receptionist's Name: <input type="text" name="name"><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPassword: <input type="password" name="password"><br><br>

<input type="submit">
</fieldset>
</form>
<br>
<br>
<hr>
<br>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

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

$stmt = $conn->prepare("INSERT INTO Receptionist (receptionistid, name, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $id, $name, $password);

// set parameters and execute
$id=$_POST["id"];
$name=$_POST["name"];
$password=$_POST["password"];


$stmt->execute();

echo "Records Inserted <br>";

$stmt->close();
$conn->close();


}
?>

</body>
</html>
