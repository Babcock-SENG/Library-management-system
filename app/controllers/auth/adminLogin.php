<?php

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // import the connection
    require_once $_SERVER['DOCUMENT_ROOT']."/Websites/Library-management-system/"."app/config/dbConnection.php";

    // parse the post request
    $rawPostData = file_get_contents("php://input");
    $postData = json_decode($rawPostData, true);

    // get the user information from the request payload
    $email = $postData['email'];
    $password = $postData['password'];

    // validate information
    if (strlen($email) == 0 || strlen($password) == 0) {
      http_response_code(400);
      customExit("Invalid credentials");
    }

    // find user record in database
    $sql = "SELECT * FROM staffs WHERE email = '$email'";
    $query = mysqli_query($connection, $sql);
    $numOfRows = mysqli_num_rows($query);
    $data = mysqli_fetch_assoc($query);

    if ($numOfRows == 0) {
      http_response_code(400);
      customExit("No such user exist, please register");
    }

    $storedPassword = $data['password'];
    $passwordIsValid = hash_equals($storedPassword, hash("sha256", $password));

    if (!$passwordIsValid) {
      http_response_code(400);
      customExit("Invalid credentials");
    }

    // set session info
    setcookie("userID", $email, time() + (3600 * 24 * 30), "/");
    setcookie("admin", "admin", time() + (3600 * 24 * 30), "/");

    http_response_code(200);
    customExit("Success");
  }

?>