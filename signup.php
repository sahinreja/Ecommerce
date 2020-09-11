<?php
include('includes/common.php');
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

    <section id="signup">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-11 mx-auto my-5">
                          <h3>SIGN UP</h3><br>
                              <form action="signup_script.php" method="POST">
                                   <div class="form-group">
                                       <input type="text"
                                        placeholder="Name" 
                                        class="form-control" 
                                        required="true" 
                                        name="name"
                                        pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                                   </div><br>
                                   <div class="form-group">
                                       <input type="email" 
                                       class="form-control" 
                                       placeholder="Email" 
                                       name="email" 
                                       required="true" 
                                       pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                   </div>
                                   <br>
                                   <div class="form-group">
                                       <input type="password"  
                                       pattern=".{6,}" 
                                       class="form-control" 
                                       placeholder="Password" 
                                       name="password" 
                                       required="true">
                                   </div>
                                   <br>
                                   <div class="form-group">
                                       <input type="text" 
                                       class="form-control"  
                                       placeholder="Contact" 
                                       maxlength="10" 
                                       size="10" 
                                       name="contact" 
                                       required = "true">
                                 </div><br>
                                 <div class="form-group">
                                     <input  type="text" 
                                     class="form-control"  
                                     placeholder="City" 
                                     name="city" 
                                     required = "true">
                                </div>   <br>
                                <div class="form-group">
                                    <input  type="text" 
                                    class="form-control"  
                                    placeholder="Address" 
                                    name="address" 
                                    required = "true">
                                </div><br>
                                   <button class="btn btn-success" 
                                   type="submit" 
                                   name="submit" >Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>

    <?php include ('includes/footer.php')?>

    <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>