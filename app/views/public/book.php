<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<?php
require_once "./../../config/dbConnection.php";
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>Book</title>


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
          <form class="d-flex"><a class="text-primary" href="<?php echo './admin.php'?>">
            <div class="ms-4 text-light fw-bold">
              <?php
              if (isset($_COOKIE['userID'])) {
                echo "Hello, ".$_COOKIE['userID'];
              }
              ?>
            </div>
            </a></form>
        </div>
      </div>
    </nav>



    <?php
    $bookId = $_GET['id'];
    $sql = "SELECT * FROM books WHERE `id` = $bookId";
    $query = mysqli_query($connection, $sql);
    $data = mysqli_fetch_assoc($query);

    ?>
    <div class="container" style="margin-top: 10%">
      <div class="row">
        <div class="col-md-6">
          <?php echo $data['description'] ?>
          <p></p>
          <h5>Category: <?php echo $data['category'] ?></h5>
          <h5>Author: <?php echo $data['author'] ?></h5>
          <h5>Price: <?php echo $data['price'] ?></h5>

          <p>
            <?php

              if (isset($_COOKIE['userID'])) {
                $userID = $_COOKIE['userID'];

                $sql = "SELECT * FROM collections WHERE `bookId` = $bookId AND `studentId` = '$userID'";
                $query = mysqli_query($connection, $sql); 
                $numOfRows = mysqli_num_rows($query);

                if ($numOfRows > 0) {
            ?>
                  <button type="button" disabled class="btn btn-warning">Already borrowed</button>
            <?php
                } else {
            ?>
                  <button type="button" class="btn btn-warning" 
                    onclick="borrowBook('<?php echo $bookId ?>', '<?php echo $userID ?>', '<?php echo ($data['price'] * .20) ?>')">Order Book Now</button>
                  <h4 id="apiRes"></h4>
            <?php
                }
              } else {
            ?>
                  <a href="./sign.php"><button type="button" class="btn btn-warning">Register</button></a>
            <?php
              }
            ?>
            
          </p>

        </div>
        <div class="col-md-6">
          <img width="350px" height="350px" src="<?php echo $data['imageUrl'] ?>" alt="">
        </div>

      </div>
    </div>



    <p></p>

















    <!-- =Foooter-->
    <!-- <section> begin ============================-->
    <section class="py-0 pt-7" id="contact">

      <div class="container">
        <div class="row">
          <div class="col-6 col-sm-4 col-xl-3 mb-3">
            <h4 class="lh-lg fw-bold text-light">ELibrary</h4>
          </div>
          <div class="col-6 col-sm-4 col-xl-3 mb-3">
            <h5 class="lh-lg fw-bold text-light">MENU</h5>
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="lh-lg"><a class="text-800 text-decoration-none text-uppercase fw-bold" href="#!">Books</a></li>
              <li class="lh-lg"><a class="text-800 text-decoration-none text-uppercase fw-bold" href="#!">Who we are</a></li>
              <li class="lh-lg"><a class="text-800 text-decoration-none text-uppercase fw-bold" href="#!">Contact</a></li>
              <li class="lh-lg"><a class="text-800 text-decoration-none text-uppercase fw-bold" href="#!">Sign in</a></li>

            </ul>
          </div>
          <div class="col-6 col-sm-4 col-xl-3 mb-3">
            <h5 class="mb-5"></h5>
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="lh-lg"><a class="text-800 text-decoration-none text-uppercase fw-bold" href="#!">Contact Us</a></li>
              <li class="lh-lg"><a class="text-800 text-decoration-none text-uppercase fw-bold" href="#!">my account</a></li>
            </ul>
          </div>
          <div class="col-12 col-xl-3">
            <h5 class="lh-lg fw-bold text-light text-uppercase">Signup For our Latest News</h5>
            <div class="row input-group-icon mb-5">
              <div class="col-12">
                <form class="row row-cols-lg-auto g-0 align-items-center">
                  <div class="col-8 col-lg-9">
                    <label class="visually-hidden" for="colFormLabel">Username</label>
                    <div class="input-group">
                      <input class="rounded-end-0 form-control" id="colFormLabel" type="email" placeholder="email address" />
                    </div>
                  </div>
                  <div class="col-4 col-lg-3">
                    <button class="btn btn-primary rounded-start-0" type="submit">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="border-bottom border-700"></div>
        <div class="row flex-center my-3">
          <div class="col-md-6 order-1 order-md-0">
            <p class="my-2 text-800 text-center text-md-start"> Made with&nbsp;
              <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#EB6453" viewBox="0 0 16 16">
                <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
              </svg>&nbsp;by&nbsp;<a class="text-500" href="https://themewagon.com/" target="_blank">Group 6 </a>
            </p>
          </div>
          <div class="col-md-6">
            <div class="text-center text-md-end"><a href="#!"><span class="me-4" data-feather="facebook"></span></a><a href="#!"> <span class="me-4" data-feather="instagram"></span></a><a href="#!"> <span class="me-4" data-feather="youtube"></span></a><a href="#!"> <span class="me-4" data-feather="twitter"></span></a></div>
          </div>
        </div>
      </div>
      <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


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