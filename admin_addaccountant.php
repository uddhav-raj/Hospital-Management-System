<!DOCTYPE HTML>
<html> 
<head>
<link rel="stylesheet" href="style.css">
</head> 
<body>
<center>
<p><b><u><h1> NEW APPOINTMENT </h1></u></b></p>
<br>
<br>
<br> 
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>
<legend> Enter The Details of The Accountant </legend>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAccountant Id: <input type="text" name="id"><br><br>
Accountant's Name: <input type="text" name="name"><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPassword: <input type="password" name="password"><br><br>

<input type="submit">
</fieldset>
</form>
<br>
<br>
<hr>
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

$stmt = $conn->prepare("INSERT INTO Accountant (accountantid, name, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $id, $name, $password);

// set parameters and execute
$id=$_POST["id"];
$name=$_POST["name"];
$password=$_POST["password"];


$stmt->execute();

echo " <center><br><br> Records Inserted <br><br>";

$stmt->close();
$conn->close();


}
?>

</body>
</html>
