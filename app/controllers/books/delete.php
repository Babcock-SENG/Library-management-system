<?php

  if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    // import the connection
    require_once $_SERVER['DOCUMENT_ROOT']."/Websites/Library-management-system/"."app/config/dbConnection.php";

    $bookId = $_GET['id'];

    $sql = "DELETE FROM books WHERE `id` = $bookId";
    $query = mysqli_query($connection, $sql);

    if (!$query) {
      http_response_code(404);
      customExit("Delete operation failed, book not found");
    }

    http_response_code(200);
    customExit("Success");
  }

?>