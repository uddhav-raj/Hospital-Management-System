<!DOCTYPE html>
<html>
<title>HOSPITAL MANAGEMENT SYSTEM</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-black.css">
<link rel="stylesheet" href="font-awesome.min.css">

<style>
body, html {
    height: 100%;
    font-family: "Inconsolata", sans-serif;
}
.bgimg {
    background-position: center;
    background-size: cover;
    background-image: url("bc8.jpg");
    min-height: 75%;
}
.menu {
    display: none;
}
</style>


<body id="myPage">

<!-- Sidebar on click -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card-2 w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  <a href="#" class="w3-bar-item w3-button">Link 4</a>
  <a href="#" class="w3-bar-item w3-button">Link 5</a>
</nav>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  
  <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Team</a>
  <a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Login Pages</a>
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
    
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
 </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Team</a>
    <a href="#work" class="w3-bar-item w3-button">Work</a>
    <a href="#pricing" class="w3-bar-item w3-button">Price</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    <a href="#" class="w3-bar-item w3-button">Search</a>
  </div>
</div>



<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag">24 HRS AT YOUR SERVICE</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-red" style="font-size:90px">HOSPITAL<br>MANAGEMENT<br>SYSTEM</span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white">NATIONAL INSTITUTE OF TECHNOLOGY CALICUT</span>
  </div>
</header>



<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>THE DEV TEAM</h2>


<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="uddhav.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Uddhav Raj</h3>
</div>

<div class="w3-quarter">
  <img src="akansh.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Akansh Kumar</h3>
</div>

<div class="w3-quarter">
  <img src="rohit.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Rohit Meshram</h3>
</div>

<div class="w3-quarter">
  <img src="tripathi.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>T.S. Ashutosh</h3>

</div>

</div>
</div>


<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

<div class="w3-quarter">
<h2>LOGIN PAGES</h2>
<p>Patients are an integral part of the Hospital and we take utmost care of your well being. Now you can generate your bills,know about your doctor,your medication and your own information. Don't worry about your diseases we are here to take care!!</p>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <center>
  <img src="patient.jpg" alt="Cinque Terre" style="width:100%">
  <div class="w3-container">
  <h3>PATIENT</h3>
  <A href="patientlogin.php"><h4>LOGIN</h4></A>
  <p>TO PROVIDE CARE THAT PEOPLE TRUST</p>
  </div>
  </div>
  </center>
</div>

</div>


<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

<div class="w3-quarter">
<h2>LOGIN PAGES</h2>
<p>Administrators are the head of the institute. He has the power to recruit and fire employee. He is the meeting point of the employees for resetting their passwords. <br><br> Doctors can view the records of patients, view the records of nurses under him and modify the medication records of patients. <br><br> Accountant keeps track of the expenditure and income of the hospital. He has the information about the salary of all the employees.  </p>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <center>
  <img src="admin.jpeg" alt="Vernazza" style="width:100%">
  <div class="w3-container">
  <h3>ADMINISTRATOR</h3>
  <A href="adminlogin.php"><h4>LOGIN</h4></A>
  <p>MASTER OF MY DOMAIN</p>
  </div>
  </center>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <center>
  <img src="doctor.jpg" alt="Cinque Terre" style="width:100%">
  <div class="w3-container">
  <h3>DOCTOR</h3>
  <A href="doctorlogin.php"><h4>LOGIN</h4></A>
  <p>I KILL YOUR ILLS WITH PILLS</p>
  
  </div>
  </center>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <center>
  <img src="accountant.jpg" alt="Monterosso" style="width:100%">
  <div class="w3-container">
  <h3>ACCOUNTANT</h3>
  <A href="accountantlogin.php"><h4>LOGIN</h4></A>
  <p> ACT. COUNT. THINK.</p>
  </center>
  </div>
  </div>
</div>

</div>


<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

<div class="w3-quarter">
<h2>LOGIN PAGES</h2>
<p>Receptionists can register patients. He can also generate the bills of patients. <br><br> Nurses can keep track of the patients according to the room number and also carry all the records of the patients. <br><br> Pharmacist keep track of the medicines in the hospital. He can insert or delete medicine records. </p>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <center>
  <img src="receptionist1.jpeg" alt="Vernazza" style="width:100%">
  <div class="w3-container">
  <h3>RECEPTIONIST</h3>
  <A href="receptionistlogin.php"><h4>LOGIN</h4></A>
  <p>HOW CAN I HELP YOU</p>
  
  </div>
  <center>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <CENTER>
  <img src="nurse.jpg" alt="Cinque Terre" style="width:100%">
  <div class="w3-container">
  <h3>NURSE</h3>
  <A href="nurselogin.php"><h4>LOGIN</h4></A>
  <p>WE NURSE LIVES</p>
  
  </div>
  </center>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <center>
  <img src="pharmacist.jpeg" alt="Monterosso" style="width:100%">
  <div class="w3-container">
  <h3>PHARMACIST</h3>
  <A href="pharmacistlogin.php"><h4>LOGIN</h4></A>
  <p>I PROVIDE PILLS</p>
  
  </div>
  </center>
  </div>
</div>

</div>




<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p>Swing by for a cup of coffee, or whatever.</p>
      <p> CALICUT,INDIA</p>
      <p> +91 8137008044</p>
      <p> ourteam@nitc.ac.in</p>
    </div>
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
      <div class="w3-section">      
        <label>Name</label>
        <input class="w3-input" type="text" name="Name" required>
      </div>
      <div class="w3-section">      
        <label>Email</label>
        <input class="w3-input" type="text" name="Email" required>
      </div>
      <div class="w3-section">      
        <label>Message</label>
        <input class="w3-input" type="text" name="Message" required>
      </div>  
      <input class="w3-check" type="checkbox" checked name="Like">
      <label>I Like it!</label>
      <button type="submit" class="w3-button w3-right w3-theme">Send</button>
      </form>
    </div>
  </div>
</div>





<script>
// Script for side navigation
function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "300px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}

// Close side navigation
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>

