<?php

/*
log in a user
*/

// Initialisation
require_once('includes/initialize.php');

// Require the user to NOT be logged in before they can see this page.
Auth::getInstance()->requireGuest();

// Get checked status of the "remember me" checkbox
$remember_me = isset($_POST['remember_me']);

// Process the submitted form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $email = $_POST['email'];

  if (Auth::getInstance()->login($email, $_POST['password'], $remember_me)) {

    // Redirect to home page or intended page, if set
    if (isset($_SESSION['return_to'])) {
      $url = $_SESSION['return_to'];
      unset($_SESSION['return_to']);
    } else {
      $url = '/index.php';
    }

    Util::redirect($url);
  }
}


// Set the title, show the page header, then the rest of the HTML
//$page_title = 'Login';
include('includes/header.php');

?>

<h1>Login</h1>

<?php if (isset($email)): ?>
  <p>Invalid login</p>
<?php endif; ?>

<body id = "LF">
<br>
<br>
<br>
<div class = "formbox">
<form id="login" method="post" name = "login" onsubmit ="return validateForm()" >
	<br>
  <img style="width: 300px; height: 90px; border-radius:8px, margin-left: 15px;opacity:.7;" src="https://img.clipartfest.com/d380d2184ed63d408f777340dd4f40da_roller-coaster-tracks-clip-art-cartoon-roller-coaster-clipart_3133-1495.jpeg"><br><br>
  <h3 style="position:absolute; top: 83px; left:-10px; width:100%; color: red; "> COUG</h3>
  <h3 style="position:absolute; top: 98px; left:12px; width:100%; color: black; "> VILLAGE </h3>
  <!--<p>Username:</p>-->
  <input id= "UN" type="text" name="uname_name" placeholder="Username" >
  <br>
  <br>

  <!--<p>Password:&nbsp;</p> -->
  <input id = "pwd" type="password" name="pword_name" placeholder="Password">
  <br><br>
  <input id = "sub" type="submit" value="Login">
  <a id = "signbutton" href="register.php" class="fakebutton">Sign Up</a>

</form>
	
	<script>

	var Lusername = document.forms["login"]["uname_name"].value;
	var Lpassword = document.forms["login"]["pword_name"].value;
	
	function validateForm() {
	var username = document.forms["login"]["uname_name"].value;
    if (username == "") {
        alert("Username and password must be filled out");
        return false;
    }
	var password = document.forms["login"]["pword_name"].value;
    if (password == "") {
	
        alert("Username and Password must be filled out");
        return false;
    }
	else{
		return true;
	}
	
}
	
</script>

<?php include('includes/footer.php'); ?>
