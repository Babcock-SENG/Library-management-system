<?php

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // import the connection
    require_once $_SERVER['DOCUMENT_ROOT']."/Websites/Library-management-system/"."app/config/dbConnection.php";

    // parse the post request
    $rawPostData = file_get_contents("php://input");
    $postData = json_decode($rawPostData, true);

    // get the user information from the request payload
    $email = $postData['email'];
    $fullName = $postData['fullName'];
    $password = $postData['password']

    // validate information
    if (strlen($email) == 0 || strlen($password) == 0 || strlen($fullName) == 0) {
      customExit("Invalid request");
    }

    // register user
    $hashedPassword = hash("sha256", $password);

    $sql = "INSERT INTO staffs (`email`, `password`, `fullName`) VALUES ('$email', '$hashedPassword', '$fullName')";    
    $query = mysqli_query($connection, $sql);

    if (!$query) {
      http_response_code(500);
      customExit("Something went wrong on the server try again later");
    }

    // set session info
    setcookie("userID", $email, time() + (3600 * 24 * 30), "/");
    setcookie("type", "admin", time() + (3600 * 24 * 30), "/");

    http_response_code(200);
    customExit("Success");
  }

?>