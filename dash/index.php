<?php 
include('../inc/db.php');
  session_start();
  if(isset($_SESSION['added'])){
    echo $_SESSION['added'];
    unset($_SESSION['added']);
  }
  $sql = "SELECT COUNT(*) FROM `cliente`";
  $result = $conn->query($sql);
  $row = $result->fetch_row();

  $cmd = "SELECT COUNT(*) FROM `activite`";
  $do = $conn->query($cmd);
  $row_activity = $do->fetch_row();
  ?>
<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey">
<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i> &nbsp;Menu</button>
  <span class="w3-bar-item w3-right">Logo</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="img/avatar.png " class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Mike</strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>&nbsp; Close Menu</a>
    <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>&nbsp; Overview</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>&nbsp; Views</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>&nbsp; Traffic</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>&nbsp; Geo</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>&nbsp; Orders</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>&nbsp; News</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>&nbsp; General</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>&nbsp; History</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>&nbsp; Settings</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $do == true ? $row_activity[0] : 0 ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Events</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $result == true ? $row[0] : 0 ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Users</h4>
      </div>
    </div>
  </div>

  <div class="w3-row-padding  w3-padding-16"> 
    <div class="w3-half">
        <div class="w3-container">
            <h3>Create Client</h3>
            <div class="w3-card-4 w3-padding-32 w3-margin-top w3-round w3-container">
                <form action="../inc/add_client.php" method="POST" 
                    
                    <label for="nom">First Name (Nom):</label><br>
                    <input class="w3-input w3-border w3-round" type="text" id="nom" name="nom" required><br><br>

                    <label for="prenom">Last Name (Prenom):</label><br>
                    <input class="w3-input w3-border w3-round" type="text" id="prenom" name="prenom" required><br><br>

                    <label for="email">Email:</label><br>
                    <input class="w3-input w3-border w3-round" type="email" id="email" name="email" required><br><br>

                    <label for="telephone">Phone (Telephone):</label><br>
                    <input class="w3-input w3-border w3-round" type="tel" id="telephone" name="telephone" required><br><br>

                    <label for="adresse">Address (Adresse):</label><br>
                    <textarea class="w3-input w3-border w3-round" id="adresse" name="adresse" rows="4" required></textarea><br><br>

                    <label for="date_naissance">Date of Birth (Date de Naissance):</label><br>
                    <input class="w3-input w3-border w3-round" type="date" id="date_naissance" name="date_naissance" required><br><br>

                    <button type="submit" class="w3-btn w3-blue w3-round">Add Client</button>
                </form>
                
            </div>
        </div>
    </div>
    <div class="w3-half">
        <div class="w3-container">
            <h3>Create Event</h3>
            <div class="w3-card-4 w3-padding-32 w3-margin-top w3-round w3-container">
            <form action="../inc/add_activity.php" method="POST">

                <label for="titre">Event Title (Titre):</label><br>
                <input class="w3-input w3-border w3-round" type="text" id="titre" name="titre" required><br><br>

                <label for="description">Description:</label><br>
                <textarea class="w3-input w3-border w3-round" id="description" name="description" rows="4" required></textarea><br><br>

                <label for="destination">Destination:</label><br>
                <input class="w3-input w3-border w3-round" type="text" id="destination" name="destination" required><br><br>

                <label for="prix">Price (Prix):</label><br>
                <input class="w3-input w3-border w3-round" type="number" id="prix" name="prix" required min="0" step="0.01"><br><br>

                <label for="date_debut">Start Date (Date de Début):</label><br>
                <input class="w3-input w3-border w3-round" type="date" id="date_debut" name="date_debut" required><br><br>

                <label for="date_fin">End Date (Date de Fin):</label><br>
                <input class="w3-input w3-border w3-round" type="date" id="date_fin" name="date_fin" required><br><br>

                <label for="places_disponible">Available Places (Places Disponibles):</label><br>
                <input class="w3-input w3-border w3-round" type="number" id="places_disponible" name="places_disponible" required min="1"><br><br>

                <button type="submit" class="w3-btn w3-blue w3-round">Add Event</button>
            </form>
            </div>
        </div>
    </div>
  </div>

  <hr>
  <br>


  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>