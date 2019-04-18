<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>  
<body>
<center>
<p><u><b><h3> YOUR MEDICINE'S DETAILS </h3></b></u></p>
<br>
<br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>
<legend> ENTER ID </legend>
Id: <input type="text" name="id"><br><br>
<input type="submit"><br>
</fieldset>
</form>
<br>
<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$id=$_POST["id"];

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


$sql = "SELECT medid1,M.medid,M.name,M.quantity,M.Price FROM Patient,Medicine M WHERE patientid='".$id."' AND M.medid=medid1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    echo "<br>";
    echo "<font size=5 color=yellow>";
    echo "<center> <u>THE DETAILS OF YOUR MEDICINES ARE: </u><br><br><br>";
    echo "Name of medicine: " . $row["name"]. "<br>";
    echo "Quantity: " . $row["quantity"]. "<br>";
    echo "Price: " . $row["Price"]. "<br>";
    echo "<br>";
    echo "<hr>";
    
} else {
    echo "RECORD NOT FOUND";
    exit;
}

$sql = "SELECT medid2,M.medid,M.name,M.quantity,M.Price FROM Patient,Medicine M WHERE patientid='".$id."' AND M.medid=medid2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    echo "<br><br>";
    echo "Name of medicine: " . $row["name"]. "<br>";
    echo "Quantity: " . $row["quantity"]. "<br>";
    echo "Price: " . $row["Price"]. "<br>";
    echo "<br>";
    echo "<hr>";
} 

$sql = "SELECT medid3,M.medid,M.name,M.quantity,M.Price FROM Patient,Medicine M WHERE patientid='".$id."' AND M.medid=medid3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    echo "<br><br>";
    echo "Name of medicine: " . $row["name"]. "<br>";
    echo "Quantity: " . $row["quantity"]. "<br>";
    echo "Price: " . $row["Price"]. "<br>";
    echo "<br>";
    echo "<hr>";
} 

$sql = "SELECT medid4,M.medid,M.name,M.quantity,M.Price FROM Patient,Medicine M WHERE patientid='".$id."' AND M.medid=medid4";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    echo "<br><br>";
    echo "Name of medicine: " . $row["name"]. "<br>";
    echo "Quantity: " . $row["quantity"]. "<br>";
    echo "Price: " . $row["Price"]. "<br>";
    echo "<br>";
    echo "<hr>";
} 

$sql = "SELECT medid5,M.medid,M.name,M.quantity,M.Price FROM Patient,Medicine M WHERE patientid='".$id."' AND M.medid=medid5";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    echo "<br><br>";
    echo "Name of medicine: " . $row["name"]. "<br>";
    echo "Quantity: " . $row["quantity"]. "<br>";
    echo "Price: " . $row["Price"]. "<br>";
    echo "<br>";
    echo "<hr>";
} 





$conn->close();


}
?>

</body>
</html>
