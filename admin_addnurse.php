<!DOCTYPE HTML>
<html> 
<head>
<link rel="stylesheet" href="style.css">
</head> 
<body>
<center>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>
<legend> ENTER NURSE'S DETAILS </legend>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNurse Id: <input type="text" name="id"><br><br>
&nbsp&nbspNurse's Name: <input type="text" name="name"><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDoctor Id: <input type="text" name="docid"><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPassword: <input type="password" name="password"><br></br>

<input type="submit">
</fieldset>
</form>
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

$stmt = $conn->prepare("INSERT INTO Nurse (nurseid, name, doctorid, password) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $id, $name, $docid, $password);

// set parameters and execute
$id=$_POST["id"];
$name=$_POST["name"];
$docid=$_POST["docid"];
$password=$_POST["password"];


$stmt->execute();
echo "<br><br>";
echo "Records Inserted <br>";

$stmt->close();
$conn->close();


}
?>

</body>
</html>
