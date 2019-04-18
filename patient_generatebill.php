<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>  
<body>
<center>
<p><u><b><h1> YOUR BILL </h1></b></u></p>
<br>
<br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>
<legend> ENTER ID </legend>
Id: <input type="text" name="id"><br><br>
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

$total=0;

$sql = "SELECT DATEDIFF(datedischarged,dateadmitted) AS days,dateadmitted,datedischarged,room,medid1,medid,Price FROM Patient,Medicine WHERE patientid='".$id."' AND medid=medid1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    echo "<br><br>";
    echo "<font size=6 color=yellow>";
    echo "&nbsp&nbsp&nbspDate Admitted: " . $row["dateadmitted"]. "<br>";
    echo "Date Discharged: " . $row["datedischarged"]. "<br>";
    echo "Room No: " . $row["room"]. "<br>";
    echo "Room Cost: 500 <br>";
    echo "Number of days admitted: " . $row["days"]. "<br><br>"; 

    echo "Cost Of Medicine1: " . $row["Price"]. "<br>";
   $total=$row["Price"];
   $days=$row["days"];
   $roomcost=$days*500;
   $total=$total+$roomcost;


} else {
    echo "RECORD NOT FOUND";
    exit;
}


$sql = "SELECT medid2,medid,Price FROM Patient,Medicine WHERE patientid='".$id."' AND medid=medid2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();

    echo "Cost Of Medicine2: " . $row["Price"]. "<br>";
   $total=$total+$row["Price"];
    
} 

$sql = "SELECT medid3,medid,Price FROM Patient,Medicine WHERE patientid='".$id."' AND medid=medid3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();

    echo "Cost Of Medicine3: " . $row["Price"]. "<br>";
    $total=$total+$row["Price"];

} 

$sql = "SELECT medid4,medid,Price FROM Patient,Medicine WHERE patientid='".$id."' AND medid=medid4";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();

    echo "Cost Of Medicine4: " . $row["Price"]. "<br>";
   $total=$total+$row["Price"];
  
} 


$sql = "SELECT medid5,medid,Price FROM Patient,Medicine WHERE patientid='".$id."' AND medid=medid5";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();

    echo "&nbsp&nbspCost Of Medicine5: " . $row["Price"]. "<br><br>";
   $total=$total+$row["Price"];
    echo "<div >TOTAL COST: " . $total. "<div><br>";

} 

$conn->close();


}
?>

</body>
</html>
