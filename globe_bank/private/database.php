<?php

require_once('db_credentials.php');

// connects databas
function db_connect() {
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    confirm_db_connect();
    return $connection;
  }
// disconnect db
  function db_disconnect($connection) {
    if(isset($connection)) {
      mysqli_close($connection);
    }
  }

// santizes data to prevent Sql injections
function db_escape($connection, $string){
  return mysqli_real_escape_string($connection, $string);
}

  // if database is not connected, it will throw an error
  function confirm_db_connect(){
    if(mysqli_connect_errno()){
      $msg = "Database connection failed: ";
      $msg .= mysqli_connect_error();
      $msg .=" (" . mysqli_connect_errno() . ")";
      exit($msg);
    }
  }

//Test if query succeeded
function confirm_result_set($result_set){
  if (!$result_set){
    exit ('Database query failed.');
  }
}
?>