<?php


$mysqli = new mysqli("localhost","my_user","my_password","my_db");


if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


if ($result = $mysqli -> query("SELECT * FROM Persons")) {
  echo "Returned rows are: " . $result -> num_rows;

  $result -> free_result();
}

$mysqli -> close();
?>