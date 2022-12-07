<?php

  if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    // import the connection
    require_once $_SERVER['DOCUMENT_ROOT']."/Websites/Library-management-system/"."app/config/dbConnection.php";

    $bookId = $_GET['bookId'];
    $userId = $_GET['userId'];


    $sql = "DELETE FROM collections WHERE `bookId` = $bookId AND studentId = '$userId'";
    $query = mysqli_query($connection, $sql);

    if (!$query) {
      http_response_code(404);
      customExit("Delete operation failed, book not found");
    }

    http_response_code(200);
    customExit("Success");
  }

?>