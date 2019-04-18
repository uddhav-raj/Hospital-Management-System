<!DOCTYPE HTML>
<html>  
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<center>
<p><u><b><h1>NEW APPOINTMENT </h1></b></u></p>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>
<legend> Enter The Details Of The Doctor </legend>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDoctor Id: <input type="text" name="id"><br><br>
Doctor's Name: <input type="text" name="name"><br><br>
&nbsp&nbspSpecialization: <input type="text" name="spec"><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAddress: <input type="text" name="address"><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSalary: <input type="text" name="salary"><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPassword: <input type="password" name="password"><br><br>
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

$stmt = $conn->prepare("INSERT INTO Doctor (doctorid, name, specialization, address, salary, password) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssis", $id, $name, $spec, $address, $salary, $password);

// set parameters and execute
$id=$_POST["id"];
$name=$_POST["name"];
$spec=$_POST["spec"];
$address=$_POST["address"];
$salary=$_POST["salary"];
$password=$_POST["password"];


$stmt->execute();

echo "<center> <br><br>Records Inserted <br>";

$stmt->close();
$conn->close();


}
?>

</body>
</html>
