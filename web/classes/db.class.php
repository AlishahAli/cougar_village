<?php

/*

database class
provides the PDO connection with db
prevents the need from making a new PDO connection each time

*/

class Database
{
  //singleton connection obj, the underscore will indicate private
  private $db;

  //prevent creating a new obj of the class with new Database()
  //private function _construct(){}

  //prevent cloning the class
  //private function _clone(){}

  //get instance of PDO connection
  //return db PDO connection
  public function getInstance()
  {
    //R!: to change label to postgres,
    //and review if PDO instance is correctly made for heroku
/*
    if (static::$_db === NULL)
    {
      //$dsn = 'pgsql:host=' . Config::DB_HOST . ';dbname=' . Config::DB_NAME . ';charset=utf8';
      //static::$_db = new PDO($dsn, Config::DB_USER, Config::DB_PASS);
      //raise exceptions when a database exception occurs
      //static::$_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $dsn = 'pgsql:'
      . 'host=' . Config::DB_HOST
      . ';dbname=' . Config::DB_NAME
      . ';user=' . Config::DB_USER
      . ';port=' . Config::DB_PORT
      . ';sslmode=' . Config::DB_SSL
      . ';password=' . Config::DB_PASS ;

      $_db = new PDO($dsn);

      //set PDO error mode to exception
      $_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }


    return static::$_db;
*/

      $connect_string = "host=ec2-50-19-95-47.compute-1.amazonaws.com dbname=d4j6prebdlmau9 user=qniibjvdqrucoa port=5432 sslmode=require password=5bd87c534f8455a3712867981a1a14bea89c2dd1e6b93f85ccfb8a4e41477bfa";

      $db = pg_connect($connect_string);

      return $db;


  }

}



?>
