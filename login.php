<?php
include ('includes/common.php');
if(isset($_SESSION['email'])){
    header('location:product.php');
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

    <section id="login">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-3 col-md-6 col-12 mx-auto my-5">
                    <div class="card">
                        <div class="card-header bg-primary">
                          <h4 class="text-white font-weight-bold">LOGIN</h4>
                        </div>
                        <div class="card-body">
                            <p class="text-warning"><i>Login to make a purchase</i></p>
                               <form action="login_script.php" method="POST">
                                   <div class="form-group">
                                       <input type="email" 
                                       class="form-control" 
                                       placeholder="Email" 
                                       name="email" 
                                       required="true">
                                   </div><br>
                                   <div class="form-group">
                                       <input type="password" 
                                       class="form-control" 
                                       placeholder="Password" 
                                       name="password" 
                                       required="true">
                                   </div>
                                   <br>
                                   <button class="btn btn-primary" name="submit" type="submit" >Login</button>
                               </form>
                        </div>
                        <div class="card-footer">
                            <p>Don't have an account?<a href="signup.php">Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include ('includes/footer.php')?>

    <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>