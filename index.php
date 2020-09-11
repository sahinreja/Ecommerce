<?php
include('includes/common.php');


if (isset($_SESSION['email'])) {
  header('location: product.php');
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <?php include('links/link.php') ?>
    <title>Welcome | Life Style Store</title>
  </head>
  <body>
    <?php include ('includes/header.php')?>
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->

    <section id='content'>
      <div id="banner_image">
        <div class="container">
          <center>
            <div id="banner_content">
              <h1>We sell lifestyle.</h1>
              <p>Flat 40% OFF on premium brands</p>
              <br>
              <a  href="product.php" class="btn btn-danger btn-lg active">Shop Now</a>
            </div>
          </center>
        </div>
      </div>
    </section>
    <section class="list_item my-5">
      <div class="container">
        <div class="row text-center">
          <div class="col-sm-4 mx-auto mt-3">
            <a href="product.php#cameras">
              <div class="img-thumbnail">
                <img src="img/1.jpg" class="img-fluid" alt="">
                <div class="caption">
                  <h3>Cameras</h3>
                  <p>Choose among the best available in the world.</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-sm-4 mx-auto mt-3">
            <a href="product.php#watches">
              <div class="img-thumbnail">
                <img src="img/10.jpg" class="img-fluid" alt="">
                <div class="caption">
                <h3>Watches</h3>
                <p>Original watches from the best brands.</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-sm-4 mx-auto mt-3">
            <a href="product.php#shirts">
              <div class="img-thumbnail">
                <img src="img/13.jpg" class="img-fluid" alt="">
                <div class="caption">
                <h3>Shirts</h3>
                <p>Our exquisite collection of shirts.</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <?php include ('includes/footer.php')?>

    <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>