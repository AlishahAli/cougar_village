<?php

/*

log out a user

*/

//initialization
require_once('includes/init.php');

Auth::getInstance()->logout();

//redirect to home page
Util::redirect('/index.php');

?>
