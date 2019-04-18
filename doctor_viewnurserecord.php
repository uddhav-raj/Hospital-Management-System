<!DOCTYPE HTML>
<html> 
<head>
<link rel="stylesheet" href="style.css">
</head> 
<body>
<center>
<p><u><b><h3> NURSES UNDER YOU</h3></b></u></p>
<br>
<br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>
<legend> ENTER YOUR ID </legend>
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


$sql = "SELECT N.nurseid AS nurseid,N.name AS name,D.doctorid AS doctorid,N.doctorid FROM Nurse N,Doctor D WHERE D.doctorid='".$id."' AND N.doctorid=D.doctorid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<br><br>";
    while($row = $result->fetch_assoc()){
echo "<font size=5 color=yellow>";
    echo "Name: " .$row["name"]. "<br>";
    echo "Nurse ID: " .$row["nurseid"]. "<br>";
    echo "<br><hr><br>";
    }
} else {
echo "<font size=5 color=blue>";
    echo "RECORD NOT FOUND";
    exit;
}






$conn->close();


}
?>

</body>
</html>
