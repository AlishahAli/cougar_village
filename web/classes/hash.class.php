<?php

/*

hash class
will use a one way function included in php to safely store pw

*/

class Hash
{

  //prevent creating a new obj of the class with new Hash()
  private function __construct() {}

  //prevent cloning the class
  private function __clone() {}

  //get a hash of the text with make()
  //pass visible string $text, return string hash
  public static function make($text)
  {
    return password_hash($text, PASSWORD_DEFAULT);
  }

  //compare the text to hash
  //pass visible string $text and string $hash, return boolean true if match
  public static function check($text, $hash)
  {
    return password_verify($text, $hash);
  }

}

?>
