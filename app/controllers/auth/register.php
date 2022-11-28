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
    $department = $postData['department'];
    $matricNo = $postData['matricNo'];
    $password = $postData['password'];

    // validate information
    if (strlen($email) == 0 || strlen($password) == 0 || strlen($fullName) == 0 || strlen($department) == 0 || strlen($matricNo) == 0) {
      http_response_code(400);
      exit("Invalid request");
    }

    // register user
    $hashedPassword = hash("sha256", $password);

    $sql = "INSERT INTO students (`email`, `password`, `fullName`, `department`, `matricNo`) VALUES ('$email', '$hashedPassword', '$fullName', '$department', '$matricNo')";    
    $query = mysqli_query($connection, $sql);

    if (!$query) {
      http_response_code(500);
      exit("Something went wrong on the server try again later");
    }

    // set session info
    setcookie("userID", $email);

    http_response_code(200);
    exit("Success");
  }

?>