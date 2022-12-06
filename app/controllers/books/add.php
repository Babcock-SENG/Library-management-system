<?php

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // import the connection
    require_once $_SERVER['DOCUMENT_ROOT']."/Websites/Library-management-system/"."app/config/dbConnection.php";

    // parse the post request
    $rawPostData = file_get_contents("php://input");
    $postData = json_decode($rawPostData, true);

    $bookTitle = $postData['title'];
    $bookImage = $postData['imageUrl'];
    $author = $postData['author'];
    $price = $postData['price'];
    $category = $postData['category'];

    if (strlen($bookTitle) == 0 || strlen($bookImage) == 0 || strlen($author) == 0 || strlen($price) == 0 || strlen($bookTitle) == 0 || strlen($category) == 0) {
      http_response_code(400);
      customExit("Incomplete request");
    }
    
    $sql = "INSERT INTO books (`title`, `imageUrl`, `author`, `price`, `category`) VALUES ('$bookTitle', '$bookImage', '$author', $price, '$category')";
    $query = mysqli_query($connection, $sql);

    if (!$query) {
      http_response_code(500);
      customExit("Something went wrong please try again");
    }

    http_response_code(200);
    customExit("Success");
  }

?>