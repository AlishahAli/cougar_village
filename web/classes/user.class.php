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
    $user->name = $data['fname_name'];
    $user->empid = $data['empid_name'];
    $user->uname = $data['uname_name'];
    $user->email = $data['email_name'];
    $user->password = $data['pword_name'];

    //if($user->isValid())
    //{
      try {

        $db = Database::getInstance();

        //R!: VALUES are the names from html


        $stmt = $db->prepare('INSERT INTO website_auth_admin.employee_log (employee_display_name, employee_id, employee_user_name) VALUES (:fname_name, :empid_name, :uname_name)');
        $stmt->bindParam(':fname_name', $data['fname_name']);
        $stmt->bindParam(':empid_name', $data['empid_name']);
        $stmt->bindParam(':uname_name', $data['uname_name']);
        $stmt->execute();


        $stmt = $db->prepare('INSERT INTO website_auth_admin.user_authentication (user_name, user_email, user_password) VALUES (:uname_name, :email_name, :pword_name)');
        $stmt->bindParam(':uname_name', $data['uname_name']);
        $stmt->bindParam(':email_name', $data['email_name']);
        $stmt->bindParam(':pword_name', Hash::make($data['pword_name']));
        $stmt->execute();


        /*
        $sql = 'INSERT INTO website_auth_admin.employee_log (employee_display_name, employee_id, employee_user_name)
                VALUES (:fname_name, :empid_name, :uname_name)');

        $db->exec($sql)
        */

      } catch(PDOException $exception) {

        // Log the exception message
        error_log($exception->getMessage());
      }
    //}
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
  //deploy after confirmation of writting to db
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
