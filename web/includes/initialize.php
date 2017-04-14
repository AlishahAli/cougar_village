<?php

/*

initialization

*/

require_once('classes/auth.class.php');

// register autoload function
spl_autoload_register('newAutoLoad');

/*
newAutoLoad
string $className is the name of the class
return void
*/

function newAutoLoad($className)
{
  require_once '/classes/' . $className . '.class.php';
}


//R!: php closing tag

// Authorisation
Auth::init();

?>
