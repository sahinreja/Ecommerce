<?php
include('includes/common.php');
if (!isset($_SESSION['email'])) {
    header('location: index.php');
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

    <section id="setting">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-3 col-md-4 col-11 mx-auto my-5">
                          <h3>Change Password</h3><br>
                               <form action="">
                                   <div class="form-group">
                                       <input type="password" class="form-control" 
                                       placeholder="Password" name="old-password" required="true">
                                   </div>
                                   <br>
                                   <div class="form-group">
                                       <input type="password" class="form-control" 
                                        placeholder="New Password" maxlength="10" 
                                        name="password"
                                        size="10"
                                         name="contact" required = "true">
                                  </div><br>
                                  <div class="form-group">
                                       <input type="password" class="form-control"  
                                       placeholder="Re-type New Password" maxlength="10" size="10" 
                                       name="password1" required = "true">
                                  </div><br/>
                                 
                                   <button class="btn btn-success">Submit</button>
                               </form>
                    
                </div>
            </div>
        </div>
    </section>

    <?php include ('includes/footer.php')?>

    <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>