<?php

    // set session info
    setcookie("userID", $email, time() - 10, "/");
    setcookie("type", "admin", time() - 10, "/");


    header("location: http://localhost/websites/Library-management-system/app/index.php");

?>