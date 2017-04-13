<?php

/*

register form

*/

//initialization file included here everytime
require_once('includes/initialize.php');

//require the user to NOT be logged in before they can see this page
Auth::getInstance()->requireGuest();

//process the submitted form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $user = User::signup($_POST);

  if (empty($user->errors)) {

    //redirect to register_confirm.php
    Util::redirect('/register_confirm.php');
  }
}

include('includes/header.php');
//refer to signup.php in phpTemplates
?>

<?php if (isset($user)): ?>
  <ul>
    <?php foreach ($user->errors as $error): ?>
      <li><?php echo $error; ?></li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>

<body id = "AR">
<br>
<div class = "formbox2">
<h2 class="title">Account Registration</h2>

<p id = "instructions" >MAKE SURE ALL FIELDS ARE FILLED BEFORE SUBMITTING<p>



<form id = "registering" action = "register.php" method = "post" name= "register" >


	First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input id = "fname2" type="text" name="fname_name"> <br><br>
	Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id = "lname2" type="text" name="lname_name"> <br><br>
	Email Address:&nbsp;&nbsp;&nbsp; <input id = "email2" type="text" name="email_name"  > <br><br>
	Username: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id = "UN2" type="text" name="uname_name"  > <br><br>
	Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<input id = "pwd2" type="password" name="pword_name"  > <br><br>
	Verify Password: <input id = "verifypwd" type="password" name="verifypwd_name"   > <br>

<input id = "sub" type="submit" name = "submitbutton" value = "Sign Up">

<br><br>
  <a id = "sub" href= "login.php" class="fakebutton">Login </a>

</form>
<br><br>

<?php include('includes/footer.php'); ?>
