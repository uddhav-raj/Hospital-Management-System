<!DOCTYPE HTML>
<html>  
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<center>
<p><u><b><h3> PATIENT DETAILS </h3></b></u></p>
<br>
<br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>
<legend> ENTER PATIENT ID </legend>
Enter the ID of the Patient: <input type="text" name="id"><br><br>
<input type="submit">
</fieldset>
</form>

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

$sql = "SELECT name,address,sex,doctorid,dateadmitted,datedischarged,room,medid1,medid2,medid3,medid4,medid5 FROM Patient WHERE patientid='".$id."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    echo "<br><br>";
    echo "<font size=5 color=yellow>";
    echo "<center>Patient's Name: " . $row["name"]. "<br>";
    echo "Patient's address: " . $row["address"]. "<br>";
    echo "Patient's Sex: " . $row["sex"]. "<br>";
    echo "Date Admitted: " . $row["dateadmitted"]. "<br>";
    echo "Date Discharged: " . $row["datedischarged"]. "<br>";
    echo "Room No: " . $row["room"]. "<br>";
    echo "<br><hr>"; 
    echo "<hr><br>"; 

} else {
echo "<font size=5 color=blue>";
    echo "RECORD NOT FOUND";
    exit;
}

$sql = "SELECT medid1,M.medid,M.name,M.quantity,M.Price FROM Patient,Medicine M WHERE patientid='".$id."' AND M.medid=medid1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    echo "<br><br>";
    echo "<u>THE DETAILS OF MEDICINES ARE</u>: <br><br><br>";
    echo "Name of medicine: " . $row["name"]. "<br>";
    echo "Quantity: " . $row["quantity"]. "<br>";
    echo "Price: " . $row["Price"]. "<br>";
    
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
    
} 







$conn->close();


}
?>

</body>
</html>
