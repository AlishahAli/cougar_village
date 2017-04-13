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


	Full Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input id = "fname2" type="text" name="fname_name"> <br><br>
	Employee ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id = "lname2" type="text" name="empid_name"> <br><br>
	Email Address:&nbsp;&nbsp;&nbsp; <input id = "email2" type="text" name="email_name"  > <br><br>
	Username: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id = "UN2" type="text" name="uname_name"  > <br><br>
	Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<input id = "pwd2" type="password" name="pword_name"  > <br><br>
	Verify Password: <input id = "verifypwd" type="password" name="verifypwd_name"> <br><br>

<input id = "sub" type="submit" name = "submitbutton" value = "Sign Up">

<br>
  <a id = "sub" href= "index.php" class="fakebutton">Home</a>

</form>
<br>

<?php include('includes/footer.php'); ?>
