<?php

/**
 * Signup success page
 */

// Initialisation
require_once('includes/initialize.php');

// Set the title, show the page header, then the rest of the HTML
$page_title = 'Sign Up';
include('includes/header.php');

?>

<body id = "LF">
<br>
<br>
<br>
<div class = "formbox">
<form id="login" name = "login" onsubmit ="return validateForm()" >
	<br>

  <img style="width: 300px; height: 90px; border-radius:8px, margin-left: 15px;opacity:.7;" src="https://img.clipartfest.com/d380d2184ed63d408f777340dd4f40da_roller-coaster-tracks-clip-art-cartoon-roller-coaster-clipart_3133-1495.jpeg"><br><br>
  <h3 style="position:absolute; top: 83px; left:-10px; width:100%; color: red; "> COUG</h3>
  <h3 style="position:absolute; top: 98px; left:12px; width:100%; color: black; "> VILLAGE </h3>
  <h3 style="color: red;"> You Have Successfully Registered </h3>
  <br><br>

  <a id = "signbutton" href="login.php" class="fakebutton">Login</a>

</form>

</div>









<?php include('includes/footer.php'); ?>
