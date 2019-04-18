<!DOCTYPE HTML>
<html> 
<head>
<link rel="stylesheet" href="style.css">
</head> 
<body>
<center>
<p><u><b><h3> INSERT NEW MEDICINE</h3></b></u></p>
<br>
<br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>
<legend> ENTER NEW MEDICINE INFORMATION </legend>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMedicine Id: <input type="text" name="medid"><br><br>
Medicine Name: <input type="text" name="medname"><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspQuantity: <input type="text" name="quantity"><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPrice: <input type="text" name="price"><br><br>
<input type="submit">
</fieldset>
</form>

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

$stmt = $conn->prepare("INSERT INTO Medicine (medid, name, quantity, Price) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssii", $medid, $name, $quantity, $price);

// set parameters and execute
$medid=$_POST["medid"];
$name=$_POST["medname"];
$quantity=$_POST["quantity"];
$price=$_POST["price"];

$stmt->execute();
echo "<font size=5 color=yellow>";
echo "Records Inserted <br>";

$stmt->close();
$conn->close();


}
?>

</body>
</html>
