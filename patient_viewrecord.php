<!DOCTYPE HTML>
<html> 
<head>
<link rel="stylesheet" href="style.css">
</head> 
<body>
<center>
<p><u><b><h1><i>  YOUR DETAILS </i></h1></b></u></p>
<br>
<br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>
<legend> ENTER YOUR ID </legend>
Id: <input type="text" name="id"><br><br>
<input type="submit"><br>
</fieldset>
</form>
<br>
<br>
<hr>
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

$sql = "SELECT name,address,sex,doctorid,dateadmitted,datedischarged,room,medid1,medid2,medid3,medid4,medid5 FROM Patient WHERE patientid='".$id."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    echo "<font size=7 color=yellow>";
    echo "Your Name: " . $row["name"]. "<br>";
    echo "Your address: " . $row["address"]. "<br>";
    echo "Sex: " . $row["sex"]. "<br>";
    echo "Doctor's Id: " . $row["doctorid"]. "<br>";
    echo "Date Admitted: " . $row["dateadmitted"]. "<br>";
    echo "Date Discharged: " . $row["datedischarged"]. "<br>";
    echo "Room No: " . $row["room"]. "<br><br>";
    echo "Medicine IDs: " . $row["medid1"]. "," . $row["medid2"]. "," . $row["medid3"]. "," . $row["medid4"]. "," . $row["medid5"]. "<br><br>";
    

} else {
    echo "RECORD NOT FOUND";
}
$conn->close();


}
?>

</body>
</html>
