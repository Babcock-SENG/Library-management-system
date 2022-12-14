<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<?php
require_once "./config/dbConnection.php";
?>

<head>
  <base href="./views/public/">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>Home</title>


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
            ?>
            <?php
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
    <section class="py-0" id="header">
      <div class="bg-holder" style="background-image:url(assets/img/gallery/header-bg.png);background-position:right top;background-size:contain;">
      </div>
      <!--/.bg-holder-->

      <div class="container">
        <div class="row align-items-center min-vh-75 min-vh-xl-100">
          <div class="col-md-8 col-lg-6 text-md-start text-center">
            <h1 class="display-1 lh-sm text-uppercase text-light">The Only Place You<br class="d-none d-xxl-block" /> Can Get Quality</h1>
            <div class="pt-4"><a class="btn btn-sm btn-outline-primary me-3" href="./sign.php">Sign In</a><a class="btn btn-sm btn-outline-primary" href="./register.php">Create an acount</a></div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-black py-8 pt-0" id="store">
      <div class="bg-holder" style="background-image:url(assets/img/gallery/store-bg.png);background-position:left bottom;background-size:contain;">
      </div>
      <!--/.bg-holder-->

      <div class="container-lg">
        <div class="row flex-center">
          <div class="col-6 order-md-0 text-center text-md-start"></div>
          <div class="col-sm-10 col-md-6 col-lg-6 text-center text-md-start">
            <div class="col-4 position-relative ms-auto py-5"><a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleFade" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleFade" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a></div>
            <div class="carousel slide carousel-fade" id="carouselExampleFade" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row h-100">
                    <div class="col-12">
                      <h5 class="fs-3 fs-lg-5 lh-sm text-uppercase">About Us</h5>
                      <p class="my-4 pe-xl-5">Memphis clinched a spot in the play-in tournament with the victory, but the fight for seeding continues. The race for the No. 8 spot in the West -- and the safety net of having to win just one of two games to make the playoffs -- could come down to the regular seasons final day, when Memphis and Golden State meet. The good thing for the Grizzlies is they dont have to leave home until that matchup as they have games against Dallas and two against Sacramento before the finale.</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row h-100">
                    <div class="col-12">
                      <h5 class="fs-3 fs-lg-5 lh-sm text-uppercase">What We Stand For</h5>
                      <p class="my-4 pe-xl-5">Memphis clinched a spot in the play-in tournament with the victory, but the fight for seeding continues. The race for the No. 8 spot in the West -- and the safety net of having to win just one of two games to make the playoffs -- could come down to the regular seasons final day, when Memphis and Golden State meet. The good thing for the Grizzlies is they dont have to leave home until that matchup as they have games against Dallas and two against Sacramento before the finale.</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row h-100">
                    <div class="col-12">
                      <h5 class="fs-3 fs-lg-5 lh-sm text-uppercase">WHy Chose Us</h5>
                      <p class="my-4 pe-xl-5">Memphis clinched a spot in the play-in tournament with the victory, but the fight for seeding continues. The race for the No. 8 spot in the West -- and the safety net of having to win just one of two games to make the playoffs -- could come down to the regular seasons final day, when Memphis and Golden State meet. The good thing for the Grizzlies is they dont have to leave home until that matchup as they have games against Dallas and two against Sacramento before the finale.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-0 pb-6" id="collections">
      <div class="container">
        <div class="row h-100">
          <div class="col-lg-7 mt-7">
            <h5 class="fs-3 fs-lg-5 lh-sm mb-0 text-uppercase">Collections</h5>
          </div>
          <div class="col-12">
            <nav>
              <div class="nav nav-tabs watch-tabs mb-4 justify-content-end" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-latest-tab" data-bs-toggle="tab" data-bs-target="#nav-latest" type="button" role="tab" aria-controls="nav-latest" aria-selected="true">Latest </button>

                <!-- will contain the student's borrowed books -->
                <button class="nav-link" id="nav-popular-tab" data-bs-toggle="tab" data-bs-target="#nav-popular" type="button" role="tab" aria-controls="nav-popular" aria-selected="false">Already Borrowed</button>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-latest" role="tabpanel" aria-labelledby="nav-latest-tab">
                <div class="carousel slide" id="carouselLatest" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <?php
                    $i = 0;

                    $sql = "SELECT * FROM books";
                    $query = mysqli_query($connection, $sql);
                    $numOfRows = mysqli_num_rows($query);

                    while ($i < ($numOfRows / 3)) {
                    ?>
                      <div class="carousel-item <?php if ($i == 0) { echo 'active'; } ?>" data-bs-interval="<?php if ($i == 0) { echo '10000'; } else { echo '5000'; } ?>">
                        <div class="row h-100 align-items-center">
                          <?php

                           $bookId = 0;
                            while ($data = mysqli_fetch_assoc($query)) {
                          ?>

                            <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                              <div class="card bg-black text-white p-6 pb-8"><img class="card-img" src="<?php echo $data['imageUrl'] ?>" alt="..." />
                                <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                  <h6 class="text-primary">$<?php echo $data["price"] ?></h6>
                                  <h4 class="text-light"><?php echo $data['title'] ?></h4>
                                </div><a class="stretched-link" href="book.php?id=<?php echo $data['id'] ?>"></a>
                              </div>
                            </div>

                          <?php

                          $bookId++;

                          if ($bookId % 3 == 0) {
                            break;
                          }

                          }

                          ?>
                        </div>
                      </div>

                    <?php
                      $i++;
                    }
                    ?>

                    <div class="row">
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselLatest" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselLatest" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- will contain the borrowed books  -->
              <div class="tab-pane fade" id="nav-popular" role="tabpanel" aria-labelledby="nav-popular-tab">
                <div class="carousel slide" id="carouselPopular" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $i = 0;

                    $userID = $_COOKIE['userID'];

                    $sql = "SELECT * FROM collections WHERE `studentId` = '$userID'";
                    $query = mysqli_query($connection, $sql);
                    $numOfRows = mysqli_num_rows($query);

                    while ($i < ($numOfRows / 3)) {
                    ?>
                      <div class="carousel-item <?php if ($i == 0) { echo 'active'; } ?>" data-bs-interval="<?php if ($i == 0) { echo '10000'; } else { echo '5000'; } ?>">
                        <div class="row h-100 align-items-center">
                          <?php

                           $bookId = 0;

                            while ($data = mysqli_fetch_assoc($query)) {
                              $bookId = $data['bookId'];

                              $sql2 = "SELECT * FROM books WHERE id = '$bookId'";
                          $query = mysqli_query($connection, $sql2);
                              $data2 = mysqli_fetch_assoc($query)

                          ?>

                            <h4 id="apiResCollection"></h4>
                            <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                              <div class="card bg-black text-white p-6 pb-8"><img class="card-img" src="<?php echo $data2['imageUrl'] ?>" alt="..." />
                                <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                  <h6 class="text-primary">$<?php echo $data2["price"] ?></h6>
                                  <h4 class="text-light"><?php echo $data2['title'] ?></h4>
                                </div>

                              </div>
                            </div>

                          <?php

                          $bookId++;

                          if ($bookId % 3 == 0) {
                            break;
                          }

                          }

                          ?>
                        </div>
                      </div>

                    <?php
                      $i++;
                    }
                    ?>

                    <div class="row">
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselLatest" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselLatest" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-6 bg-dark">

      <div class="container">

      </div>
      <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->





    <!-- =Foooter-->
    <!-- <section> begin ============================-->
    <section class="py-0 pt-7" id="contact">

      <div class="container">
        <div class="row">
          <div class="col-6 col-sm-4 col-xl-3 mb-3">
            <h4 class="lh-lg fw-bold text-light">ELibrary/h4>
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