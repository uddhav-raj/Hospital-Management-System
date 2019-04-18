<!DOCTYPE HTML>
<html> 
<head>
<link rel="stylesheet" href="style.css">
</head> 
<body>
<center>
<p><u><b><h3> RECPTIONIST LOGIN PAGE</h3></b></u></p>
<br>
<br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>
<legend> ENTER YOUR LOGIN CREDENTIALS </legend>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspId: <input type="text" name="id"><br><br>
Password: <input type="password" name="pass"><br><br>
<input type="submit">
</fieldset>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$id=$_POST["id"];
$pass=$_POST["pass"];

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

$sql = "SELECT password FROM Receptionist WHERE receptionistid='".$id."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
        if($pass==$row["password"])
         {
         header("Location:receptionist_main.php"); 
exit; // <- don't forget this!

         }
        else
          {echo "<font size=5 color=blue>";
         echo "Incorrect Password <br>";
          }

    
} else {echo "<font size=5 color=blue>";
    echo "RECORD NOT FOUND";
}
$conn->close();


}
?>

</body>
</html>
