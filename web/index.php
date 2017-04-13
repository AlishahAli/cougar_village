<?php

/*
login page is homepage
*/

//initialization
require_once('includes/initialize.php');

// Show the page header, then the rest of the HTML
include('includes/header.php');

?>

<h1>Login</h1>

<?php if (Auth::getInstance()->isLoggedIn()): ?>

  <p>Hello <?php echo htmlspecialchars(Auth::getInstance()->getCurrentUser()->name); ?>.
  <a href="profile.php">View profile</a> or <a href="logout.php">log out</a>.</p>

<?php else: ?>

  <p><a href="register.php">Sign up</a> or <a href="login.php">Log in</a></p>

<?php endif; ?>

<?php include('includes/footer.php'); ?>