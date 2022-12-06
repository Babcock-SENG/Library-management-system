<?php

  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // import the connection
    require_once $_SERVER['DOCUMENT_ROOT']."/Websites/Library-management-system/"."app/config/dbConnection.php";

    $bookId = $_GET['id'];

    $sql = "SELECT * FROM books WHERE `id` = $bookId";
    $query = mysqli_query($connection, $sql);
    $numOfRows = mysqli_num_rows($query);

    if ($numOfRows == 0) {
      http_response_code(404);
      customExit("Book not found");
    }

    $bookData = mysqli_fetch_assoc($query);

    http_response_code(200);
    customExit(json_encode($bookData));
  }

?>