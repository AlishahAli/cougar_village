<?php

/*

configuration class
provides the db configuration

*/

class Config
{
  //R!: change DB_HOST depending on heroku settings

  const DB_HOST = '127.0.0.1',
        DB_NAME = 'nothing',
        DB_USER = 'root',
        DB_PASS = ' ';

/*
//required fields for heroku
const DB_HOST = 'nothing',
      DB_NAME = 'nothing',
      DB_USER = 'root',
      DB_PASS = ' ',
      DB_SSL  = require,
      DB_PORT = 5432;
*/

}


?>
