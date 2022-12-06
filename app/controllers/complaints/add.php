<?php

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // import the connection
    require_once $_SERVER['DOCUMENT_ROOT']."/Websites/Library-management-system/"."app/config/dbConnection.php";

    // parse the post request
    $rawPostData = file_get_contents("php://input");
    $postData = json_decode($rawPostData, true);

    $description = $postData['description'];
    $studentId = $postData['studentId'];
    $bookId = $postData['bookId'];

    if (strlen($description) == 0 || strlen($studentId) == 0 || strlen($bookId) == 0) {
      http_response_code(400);
      customExit("Incomplete request");
    }
    
    $sql = "INSERT INTO complaints (`description`, `studentId`, `bookId`) VALUES ('$description', $studentId, $bookId)";
    $query = mysqli_query($connection, $sql);

    if (!$query) {
      http_response_code(500);
      customExit("Something went wrong please try again");
    }

    http_response_code(200);
    customExit("Success");
  }

?>