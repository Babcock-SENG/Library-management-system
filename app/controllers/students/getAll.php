<?php

  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // import the connection
    require_once $_SERVER['DOCUMENT_ROOT']."/Websites/Library-management-system/"."app/config/dbConnection.php";

    $sql = "SELECT * FROM students";
    $query = mysqli_query($connection, $sql);
    $numOfRows = mysqli_num_rows($query);

    if ($numOfRows == 0) {
      http_response_code(404);
      exit("No students");
    }

    $studentInfo = mysqli_fetch_all($query);

    http_response_code(200);
    exit(json_encode($studentInfo));
  }

?>