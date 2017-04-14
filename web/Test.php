<?php

class DB_Connect
    {
        private $db;
        public function connect()
        {
          /*
          $host        = "ec2-50-19-95-47.compute-1.amazonaws.com";
          $port        = "port=5432";
          $dbname      = "d4j6prebdlmau9";
          $credentials = "user=qniibjvdqrucoa password=5bd87c534f8455a3712867981a1a14bea89c2dd1e6b93f85ccfb8a4e41477bfa";
          */

          $connect_string = "host=ec2-50-19-95-47.compute-1.amazonaws.com dbname=d4j6prebdlmau9 user=qniibjvdqrucoa port=5432 sslmode=require password=5bd87c534f8455a3712867981a1a14bea89c2dd1e6b93f85ccfb8a4e41477bfa"

          $db = pg_connect($connect_string);
          if(!$db){
             echo "Error : Unable to open database\n";
          } else {
             echo "Opened database successfully\n";
          }
          return $db;
        }
    }

    $db1 = new DB_Connect();
    $conn = $db1->connect();

    $query = "INSERT INTO website_auth_admin.user_authentication(user_name,user_email,user_password) VALUES ('TEST1','ali@yahoo.com','alishah')";
    $result = pg_query($conn,$query);
    echo $result;


?>
