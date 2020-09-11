<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Add to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
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

    <section id="login">
       <div class="container">
         <div class="row text-center">
            <div class="col-md-6 col-10 mx-auto my-5">
               <div class="jumbotron p-5">
                    <h3>Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p>Click <a href="product.php">here</a> to purchase any other item.</p>
               </div>
            </div>
         </div>
       </div>
    </section>

    <?php include ('includes/footer.php')?>

    <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>