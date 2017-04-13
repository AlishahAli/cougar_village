<?php

/*

initialization

*/


// register autoload function
spl_autoload_register('newAutoLoad');

/*
newAutoLoad
string $className is the name of the class
return void
*/

/*
function newAutoLoad($className)
{
  require dirname(dirname(dirname(__FILE__))) . '/classes/' . $className . '.class.php';
}
*/


require_once('classes/auth.class.php');
require_once('classes/configure.class.php');
require_once('classes/db.class.php');
require_once('classes/hash.class.php');
require_once('classes/user.class.php');
require_once('classes/utiliti.class.php');

//R!: php closing tag

// Authorisation
Auth::init();

?>
