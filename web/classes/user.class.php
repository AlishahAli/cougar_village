<?php

/*

user class

*/

class User
{
  public $errors;

  //pass array $data via POST data
  //return user
  public static function signup($data)
  {
    //new user model, set the attributes
    $user = new static();
    $user->name = $data['name'];
    $user->email = $data['email'];
    $user->password = $data['password'];

    if($user->isValid())
    {
      try {

        $db = Database::getInstance();

        //alter to fit db
        $stmt = $db->prepare('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':password', Hash::make($data['password']));
        $stmt->execute();

      } catch(PDOException $exception) {

        // Log the exception message
        error_log($exception->getMessage());
      }
    }
    return $user;
  }

  /*change to employee id
   *See if a user record already exists with the specified email address
   *
   * @param string $email  email address
   * @return boolean
   */
  /*
  public function emailExists($email) {
    try {

      $db = Database::getInstance();

      $stmt = $db->prepare('SELECT COUNT(*) FROM users WHERE email = :email LIMIT 1');
      $stmt->execute([':email' => $this->email]);

      $rowCount = $stmt->fetchColumn();
      return $rowCount == 1;

    } catch(PDOException $exception) {

      error_log($exception->getMessage());
      return false;
    }
  }
  */


  /*use same model for validating form data during registration
   * Validate the properties and set $this->errors if any are invalid
   *
   * @return boolean  true if valid, false otherwise
   */
  /*
  public function isValid()
  {
    $this->errors = [];

    //
    // name
    //
    if ($this->name == '') {
      $this->errors['name'] = 'Please enter a valid name';
    }

    //
    // email address
    //
    if (filter_var($this->email, FILTER_VALIDATE_EMAIL) === false) {
      $this->errors['email'] = 'Please enter a valid email address';
    }

    if ($this->emailExists($this->email)) {
      $this->errors['email'] = 'That email address is already taken';
    }

    //
    // password
    //
    if (strlen($this->password) < 5) {
      $this->errors['password'] = 'Please enter a longer password';
    }

    return empty($this->errors);
  }
  */


}
?>
