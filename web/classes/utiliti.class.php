<?php

/*
utilities class
*/

class Util
{

/*
redirect to a different page
pass string $url, the relative URL
return void
*/

  public static function redirect($url)
  {
    header('Location: http://' . $_SERVER['HTTP_HOST'] . $url);
    exit;
  }

}

?>
