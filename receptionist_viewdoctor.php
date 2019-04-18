<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<center>
 <p> <b> <u> DOCTOR ACCORDING TO SPECIALITY </u> </b> </p>
  
   <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<fieldset>
<legend> ENTER SPECIALITY </legend>
   SPECIALISATION:- <input type="text" name="specialization"><br><br>
                    <input type="submit" value="SUBMIT">
</fieldset>
   </form>

<?php 
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $specialization = $_POST['specialization'];
$sql="SELECT doctorid,name,specialization,address FROM Doctor WHERE specialization='".$specialization."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) { 
    // output data of each row
    while($row = $result->fetch_assoc()) {echo "<font size=5 color=yellow>";
        echo "Doctorid: " . $row["doctorid"]. " - Name: " . $row["name"]. " - Specialization: " . $row["specialization"]. " - Address: " .$row["address"]."<br>";
    }
} else {echo "<font size=5 color=yellow>";
    echo "0 results";
}                    
}
$conn->close();
?>
</center>
</body>
</html>
