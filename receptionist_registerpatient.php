<!DOCTYPE HTML>
<html>  
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<center>
<p><b><u> THE PATIENT REGISTRATION FORM</u></b> </p><br><br><hr>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>
<legend> THE PATIENT REGISTRATION </legend>
Patient Id: <input type="text" name="patientid"><br><br>
Doctor id: <input type="text" name="doctorid"><br><br>
&nbsp&nbsp&nbsp&nbsp&nbspName: <input type="text" name="name"><br><br>
&nbsp&nbsp&nbspAddress: <input type="text" name="address"><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSex: <input type="text" name="sex"><br><br>
&nbsp&nbspMedid1: <input type="text" name="medid1"><br><br>
&nbsp&nbspMedid2: <input type="text" name="medid2"><br><br>
&nbsp&nbspMedid3: <input type="text" name="medid3"><br><br>
&nbsp&nbspMedid4: <input type="text" name="medid4"><br><br>
&nbsp&nbspMedid5: <input type="text" name="medid5"><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRoom: <input type="text" name="room"><br><br>
Password: <input type="password" name="password"><br><br>

<input type="submit">
</fieldset>
</form>
</center>
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

$stmt = $conn->prepare("INSERT INTO Patient (patientid, doctorid, name, address, sex, medid1, medid2, medid3, medid4, medid5, room, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssssis", $patientid, $doctorid, $name, $address, $sex, $medid1, $medid2, $medid3, $medid4, $medid5, $room, $password);

// set parameters and execute
$patientid=$_POST["patientid"];
$doctorid=$_POST["doctorid"];
$name=$_POST["name"];
$address=$_POST["address"];
$sex=$_POST["sex"];
$medid1=$_POST["medid1"];
$medid2=$_POST["medid2"];
$medid3=$_POST["medid3"];
$medid4=$_POST["medid4"];
$medid5=$_POST["medid5"];
$room=$_POST["room"];
$password=$_POST["password"];
$stmt->execute();

echo "Records Inserted <br>";

$stmt->close();
$conn->close();


}
?>

</body>
</html>
