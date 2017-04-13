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


function newAutoLoad($className)
{
  require dirname(dirname(dirname(__FILE__))) . '/classes/' . $className . '.class.php';
}

//R!: php closing tag

// Authorisation
Auth::init();

?>
