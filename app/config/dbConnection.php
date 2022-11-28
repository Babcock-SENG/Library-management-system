<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "library-ms";

  $connection = mysqli_connect($host, $user, $pass, $db);

  if (!$connection) {
    die("Database connection failed \n".mysqli_connect_error());
  }

?>