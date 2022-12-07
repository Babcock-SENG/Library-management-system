<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>

  <?php
  require_once "./../../config/dbConnection.php";
  ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Admin</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-inline-flex" href="./../../index.php"><span class="text-light fs-2 fw-bold ms-2">ELEARN</span></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item px-2"><a class="nav-link fw-bold active" aria-current="page" href="./../../index.php#collections">BOOKS</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-bold" href="./../../index.php#store">WHO WE ARE</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-bold" href="./sign.php">SIGN IN</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-bold" href="./../../index.php#contact">CONTACT</a></li>
              
            </ul>
            <form class="d-flex"><a class="text-primary" href="<?php echo "./admin.php" ?>">
            <div class="ms-4 text-light fw-bold">
            <?php
              if (isset($_COOKIE['userID']) && isset($_COOKIE['type'])) {
                echo "Hello, ".$_COOKIE['userID'];
              }

              if (isset($_COOKIE['userID'])) {
              ?>
                <a href="http://localhost/websites/Library-management-system/app/controllers/auth/logout.php">Logout</a>
              <?php
              }
              ?>
            </div>
            </a>
          </form>
          </div>
        </div>
      </nav>
      
      <p style="margin-top: 5%;"></p>
      <p></p>

      <div class="row">
        <h4 style="text-align: center;">Books information</h4>
        <h5 id="apiResBooks"></h5>


        <div class="col-md-1">

        </div>
        <div class="col-md-10">
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Book Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image Url</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                    $sql = "SELECT * FROM books";
                    $query = mysqli_query($connection, $sql);

                    $rowNo = 1;
                    while($data = mysqli_fetch_assoc($query)) {
                  ?>

                  <tr>
                    <td><?php echo $rowNo ?></td>
                    <td><?php echo $data['title'] ?></td>
                    <td><?php echo $data['author'] ?></td>
                    <td><?php echo $data['price'] ?></td>
                    <td><?php echo substr($data['imageUrl'], strlen($data['imageUrl']) - 50) ?></td>
                    <td><?php echo $data['category'] ?></td>
                    <td><?php echo substr($data['description'], strlen($data['description']) - 50) ?></td>
                    <td><span onclick="deleteBook(<?php echo $data['id'] ?>, 'apiResBooks')">
                      <svg style="width: 20px; height: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path style="fill: white;" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
                    </span></td>
                  </tr>

                  <?php

                      $rowNo++;
                    }

                  ?>
                </tbody>
              </table>

              <a class="btn btn-sm btn-outline-primary me-3" href="./addBooks.php">Add books</a>
        
        </div>
        <div class="col-md-1">

        </div>

      </div>

      <div class="row">
        <h4 style="text-align: center;">Borrowing information</h4>

        <div class="col-md-1">

        </div>
        <div class="col-md-10">
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Book Name</th>
                    <th scope="col">Borrower's name</th>
                    <th scope="col">Collection Date</th>
                    <th scope="col">Fine</th>
                    <th scope="col">Return Date</th>
                    <th scope="col">Due Date</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                    $sql = "SELECT collections.*, books.title As bookTitle FROM collections INNER JOIN books ON books.id = collections.bookId";
                    $query = mysqli_query($connection, $sql);

                    $rowNo = 1;
                    while($data = mysqli_fetch_assoc($query)) {
                  ?>

                  <tr>
                    <td><?php echo $rowNo ?></td>
                    <td><?php echo $data['bookTitle'] ?></td>
                    <td><?php echo $data['studentId'] ?></td>
                    <td><?php echo $data['collectionDate'] ?></td>
                    <td><?php echo $data['fine'] ?></td>
                    <td><?php echo $data['returnDate'] ?></td>
                    <td><?php echo $data['dueDate'] ?></td>
                  </tr>

                  <?php

                      $rowNo++;
                    }

                  ?>
                </tbody>
              </table>
        
        </div>
        <div class="col-md-1">

        </div>

      </div>
      


      <div class="row">
        <h4 style="text-align: center;">Users information</h4>

        <div class="col-md-1">

        </div>
        <div class="col-md-10">
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Matric No</th>
                    <th scope="col">Department</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                    $sql = "SELECT * FROM students";
                    $query = mysqli_query($connection, $sql);

                    $rowNo = 1;
                    while($data = mysqli_fetch_assoc($query)) {
                  ?>

                  <tr>
                    <td><?php echo $rowNo ?></td>
                    <td><?php echo $data['fullName'] ?></td>
                    <td><?php echo $data['email'] ?></td>
                    <td><?php echo $data['matricNo'] ?></td>
                    <td><?php echo $data['department'] ?></td>
                  </tr>

                  <?php

                      $rowNo++;
                    }

                  ?>
                </tbody>
              </table>
        
        </div>
        <div class="col-md-1">

        </div>

      </div>

      <div class="row">
        <h4 style="text-align: center;">Libarians Information</h4>
        <h5 id="apiResLibarian"></h5>

        <div class="col-md-1">

        </div>
        <div class="col-md-10">
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                    $sql = "SELECT * FROM staffs";
                    $query = mysqli_query($connection, $sql);

                    $rowNo = 1;
                    while($data = mysqli_fetch_assoc($query)) {
                  ?>

                  <tr>
                    <td><?php echo $rowNo ?></td>
                    <td><?php echo $data['fullName'] ?></td>
                    <td><?php echo $data['email'] ?></td>
                    <td><span onclick="deleteStaff(<?php echo $data['id'] ?>, 'apiResLibarian')">
                      <svg style="width: 20px; height: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path style="fill: white;" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
                    </span></td>
                  </tr>

                  <?php

                      $rowNo++;
                    }

                  ?>
                </tbody>
              </table>
        
              <a class="btn btn-sm btn-outline-primary me-3" href="./registerStaff.php">Add a Libarian</a>

        
        </div>
        <div class="col-md-1">

        </div>

      </div>

<p></p>
<p></p>














    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/feather-icons/feather.min.js"></script>
    <script>
      feather.replace();
    </script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/custom.js"></script>


    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&amp;display=swap" rel="stylesheet">
  </body>

</html>