<?php

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // import the connection
    require_once $_SERVER['DOCUMENT_ROOT']."/Websites/Library-management-system/"."app/config/dbConnection.php";

    // parse the post request
    $rawPostData = file_get_contents("php://input");
    $postData = json_decode($rawPostData, true);

    $bookId = $postData['bookId'];
    $studentId = $postData['studentId'];
    $fine = $postData['fine'];
    $returnDate = $postData['returnDate'];
    $dueDate = $postData['dueDate'];

    if (strlen($bookId) == 0 || strlen($studentId) == 0 || strlen($fine) == 0 || strlen($returnDate) == 0 || strlen($bookId) == 0 || strlen($dueDate) == 0) {
      http_response_code(400);
      customExit("Incomplete request");
    }
    
    $sql = "INSERT INTO collections (`bookId`, `studentId`, `fine`, `returnDate`, `dueDate`) VALUES ('$bookId', '$studentId', '$fine', $returnDate, '$dueDate')";
    $query = mysqli_query($connection, $sql);

    if (!$query) {
      http_response_code(500);
      customExit("Something went wrong please try again");
    }

    http_response_code(200);
    customExit("Success");
  }

?>