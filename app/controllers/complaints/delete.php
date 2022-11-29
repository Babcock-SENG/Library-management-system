<?php

  if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    // import the connection
    require_once $_SERVER['DOCUMENT_ROOT']."/Websites/Library-management-system/"."app/config/dbConnection.php";

    $complaintId = $_GET['id'];

    $sql = "DELETE FROM complaints WHERE `id` = $complaintId";
    $query = mysqli_query($connection, $sql);

    if (!$query) {
      http_response_code(404);
      exit("Delete operation failed, complaint not found");
    }

    http_response_code(200);
    exit("Success");
  }

?>