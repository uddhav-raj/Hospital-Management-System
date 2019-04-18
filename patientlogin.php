<!DOCTYPE HTML>
<html> 
<head>
<link rel="stylesheet" href="style.css">
</head> 
<body>
<center>
<h1><b><u> PATIENT LOGIN PAGE </u></b></h1>
<br>
<br>
<br>
<hr>
<br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>
<legend> ENTER LOGIN DETAILS </legend>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspId: <input type="text" name="id"><br><br>
Password: <input type="password" name="pass"><br><br>
<input type="submit">
</fieldset>
</form>
<br>
<hr>
<br>


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

$sql = "SELECT password FROM Patient WHERE patientid='".$id."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
        if($pass==$row["password"])
         {
         header("Location:patient_main.php"); 
exit; // <- don't forget this!

         }
        else
          {
         echo "Incorrect Password <br>";
          }

    
} else {
    echo "RECORD NOT FOUND";
}
$conn->close();


}
?>

</body>
</html>
