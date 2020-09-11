<?php
include('includes/common.php');

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
    <?php 
    include ('includes/header.php');
    include ('includes/check_if_addded.php'); 
    ?>
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->


    <section class="heading">
       <div class="container">
           <div class="row">
               <div class="col-md-10 col-11 mx-auto text-center my-3">
                   <div class="jumbotron py-5 ">
                      <h1>Welcome to our Lifestyle Store!</h1>
                      <p class="px-2">We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
                   </div>
               </div>
           </div>
       </div>
    </section>


    <section id="products" class="my-5">
        <div class="container">

            <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 col-10 mx-auto home-feature">
                    <div class="img-thumbnail">
                        <img src="img/5.jpg" class="img-fluid" alt="">
                        <div class="caption">
                            <h3>Cannon EOS </h3>
                            <p>Price: Rs. 36000.00 </p>
                            <?php if(!isset($_SESSION['email'])) { ?>
                            <p>
                            <a href="login.php" 
                            class="btn btn-block btn-primary btn-block">Buy Now</a></p>
                            <?php }
                            else{
                               if(check_if_added_to_cart(1)){
                                   echo '<a href="#" class="btn btn-block btn-success" disable>Add to Cart </a>';
                               }else{
                                   ?>
                                   <a href="cart-add.php?id=1" 
                                   name="add" 
                                   value="add" 
                                   class="btn btn-block btn-primary">Add to cart</a>

                                   <?php
                               }

                            }
                            ?>
                        </div>      
                    </div>
                </div>


                <div class="col-md-3 col-sm-6 col-10 mx-auto home-feature">
                    <div class="img-thumbnail">
                        <img src="img/2.jpg" class="img-fluid" alt="">
                        <div class="caption">
                           <h3>Nikon EOS </h3>
                            <p>Price: Rs. 40,000.00 </p>
                            <?php if(!isset($_SESSION['email'])) { ?>
                            <p>
                            <a href="login.php" 
                            class="btn btn-block btn-primary btn-block">Buy Now</a></p>
                            <?php }
                            else{
                               if(check_if_added_to_cart(2)){
                                   echo '<a href="#" class="btn btn-block btn-success" disable>Add to Cart </a>';
                               }else{
                                   ?>
                                   <a href="cart-add.php?id=2" 
                                   name="add" 
                                   value="add" 
                                   class="btn btn-block btn-primary">Add to cart</a>

                                   <?php
                               }

                            }
                            ?>
                        </div>      
                    </div>
                </div>



                <div class="col-md-3 col-sm-6 col-10 mx-auto home-feature ">
                    <div class="img-thumbnail">
                        <img src="img/3.jpg" class="img-fluid" alt="">
                        <div class="caption">
                        <h3>Sony DSLR</h3>
                            <p>Price: Rs. 50000.00</p>
                            <?php if(!isset($_SESSION['email'])) { ?>
                            <p>
                            <a href="login.php" 
                            class="btn btn-block btn-primary btn-block">Buy Now</a></p>
                            <?php }
                            else{
                               if(check_if_added_to_cart(3)){
                                   echo '<a href="#" class="btn btn-block btn-success" disable>Add to Cart </a>';
                               }else{
                                   ?>
                                   <a href="cart-add.php?id=3" 
                                   name="add" 
                                   value="add" 
                                   class="btn btn-block btn-primary">Add to cart</a>

                                   <?php
                               }

                            }
                            ?>
                        </div>      
                    </div>
                </div>



                <div class="col-md-3 col-sm-6 col-10 mx-auto home-feature">
                    <div class="img-thumbnail">
                        <img src="img/4.jpg" class="img-fluid" alt="">
                        <div class="caption">
                        <h3>Olympus DSLR</h3>
                            <p>Price: Rs. 50000.00</p>
                            <?php if(!isset($_SESSION['email'])) { ?>
                            <p>
                            <a href="login.php" 
                            class="btn btn-block btn-primary btn-block">Buy Now</a></p>
                            <?php }
                            else{
                               if(check_if_added_to_cart(4)){
                                   echo '<a href="#" class="btn btn-block btn-success" disable>Add to Cart </a>';
                               }else{
                                   ?>
                                   <a href="cart-add.php?id=4" 
                                   name="add" 
                                   value="add" 
                                   class="btn btn-block btn-primary">Add to cart</a>

                                   <?php
                               }

                            }
                            ?>
                        </div>      
                    </div>
                </div>
                
            </div>


            <div class="row text-center mt-4" id="watches">
                <div class="col-md-3 col-sm-6 col-10 mx-auto home-feature">
                    <div class="img-thumbnail">
                        <img src="img/18.jpg" class="img-fluid" alt="">
                        <div class="caption">
                        <h3>Titan Model #301 </h3>
                            <p>Price: Rs. 13000.00 </p>
                            <?php if(!isset($_SESSION['email'])) { ?>
                            <p>
                            <a href="login.php" 
                            class="btn btn-block btn-primary btn-block">Buy Now</a></p>
                            <?php }
                            else{
                               if(check_if_added_to_cart(5)){
                                   echo '<a href="#" class="btn btn-block btn-success" disable>Add to Cart </a>';
                               }else{
                                   ?>
                                   <a href="cart-add.php?id=5" 
                                   name="add" 
                                   value="add" 
                                   class="btn btn-block btn-primary">Add to cart</a>

                                   <?php
                               }

                            }
                            ?>
                        </div>      
                    </div>
                </div>


                <div class="col-md-3 col-sm-6 col-10 mx-auto home-feature">
                    <div class="img-thumbnail">
                        <img src="img/19.jpg" class="img-fluid" alt="">
                        <div class="caption">
                        <h3>Titan Model #201</h3>
                            <p>Price: Rs. 3000.00 </p>
                            <?php if(!isset($_SESSION['email'])) { ?>
                            <p>
                            <a href="login.php" 
                            class="btn btn-block btn-primary btn-block">Buy Now</a></p>
                            <?php }
                            else{
                               if(check_if_added_to_cart(6)){
                                   echo '<a href="#" class="btn btn-block btn-success" disable>Add to Cart </a>';
                               }else{
                                   ?>
                                   <a href="cart-add.php?id=6" 
                                   name="add" 
                                   value="add" 
                                   class="btn btn-block btn-primary">Add to cart</a>

                                   <?php
                               }

                            }
                            ?>
                        </div>      
                    </div>
                </div>



                <div class="col-md-3 col-sm-6 col-10 mx-auto home-feature">
                    <div class="img-thumbnail">
                        <img src="img/20.jpg" class="img-fluid" alt="">
                        <div class="caption">
                        <h3>HMT Milan</h3>
                            <p>Price: Rs. 8000.00 </p>
                            <?php if(!isset($_SESSION['email'])) { ?>
                            <p>
                            <a href="login.php" 
                            class="btn btn-block btn-primary btn-block">Buy Now</a></p>
                            <?php }
                            else{
                               if(check_if_added_to_cart(7)){
                                   echo '<a href="#" class="btn btn-block btn-success" disable>Add to Cart </a>';
                               }else{
                                   ?>
                                   <a href="cart-add.php?id=7" 
                                   name="add" 
                                   value="add" 
                                   class="btn btn-block btn-primary">Add to cart</a>

                                   <?php
                               }

                            }
                            ?>
                        </div>      
                    </div>
                </div>



                <div class="col-md-3 col-sm-6 col-10 mx-auto home-feature">
                    <div class="img-thumbnail">
                        <img src="img/21.jpg" class="img-fluid" alt="">
                        <div class="caption">
                        <h3>Faber Luba #111 </h3>
                            <p>Price: Rs. 18000.00 </p>
                            <?php if(!isset($_SESSION['email'])) { ?>
                            <p>
                            <a href="login.php" 
                            class="btn btn-block btn-primary btn-block">Buy Now</a></p>
                            <?php }
                            else{
                               if(check_if_added_to_cart(8)){
                                   echo '<a href="#" class="btn btn-block btn-success" disable>Add to Cart </a>';
                               }else{
                                   ?>
                                   <a href="cart-add.php?id=8" 
                                   name="add" 
                                   value="add" 
                                   class="btn btn-block btn-primary">Add to cart</a>

                                   <?php
                               }

                            }
                            ?>
                        </div>      
                    </div>
                </div>
                
            </div>




            
            <div class="row text-center mt-4" id="shirts">
                <div class="col-md-3 col-sm-6 col-10 mx-auto home-feature">
                    <div class="img-thumbnail">
                        <img src="img/22.jpg" class="img-fluid" alt="">
                        <div class="caption">
                            <h3>H&W </h3>
                            <p>Price: Rs. 800.00 </p>
                            <?php if(!isset($_SESSION['email'])) { ?>
                            <p>
                            <a href="login.php" 
                            class="btn btn-block btn-primary btn-block">Buy Now</a></p>
                            <?php }
                            else{
                               if(check_if_added_to_cart(9)){
                                   echo '<a href="#" class="btn btn-block btn-success" disable>Add to Cart </a>';
                               }else{
                                   ?>
                                   <a href="cart-add.php?id=9" 
                                   name="add" 
                                   value="add" 
                                   class="btn btn-block btn-primary">Add to cart</a>

                                   <?php
                               }

                            }
                            ?>
                        </div>      
                    </div>
                </div>


                <div class="col-md-3 col-sm-6 col-10 mx-auto home-feature">
                    <div class="img-thumbnail">
                        <img src="img/23.jpg" class="img-fluid" alt="">
                        <div class="caption">
                        <h3>Luis Phil</h3>
                            <p>Price: Rs. 1000.00</p>
                            <?php if(!isset($_SESSION['email'])) { ?>
                            <p>
                            <a href="login.php" 
                            class="btn btn-block btn-primary btn-block">Buy Now</a></p>
                            <?php }
                            else{
                               if(check_if_added_to_cart(10)){
                                   echo '<a href="#" class="btn btn-block btn-success" disable>Add to Cart </a>';
                               }else{
                                   ?>
                                   <a href="cart-add.php?id=10" 
                                   name="add" 
                                   value="add" 
                                   class="btn btn-block btn-primary">Add to cart</a>

                                   <?php
                               }

                            }
                            ?>
                        </div>      
                    </div>
                </div>



                <div class="col-md-3 col-sm-6 col-10 mx-auto home-feature">
                    <div class="img-thumbnail">
                        <img src="img/24.jpg" class="img-fluid" alt="">
                        <div class="caption">
                        <h3>John Zok</h3>
                            <p>Price: Rs. 1500.00</p>
                            <?php if(!isset($_SESSION['email'])) { ?>
                            <p>
                            <a href="login.php" 
                            class="btn btn-block btn-primary btn-block">Buy Now</a></p>
                            <?php }
                            else{
                               if(check_if_added_to_cart(11)){
                                   echo '<a href="#" class="btn btn-block btn-success" disable>Add to Cart </a>';
                               }else{
                                   ?>
                                   <a href="cart-add.php?id=11" 
                                   name="add" 
                                   value="add" 
                                   class="btn btn-block btn-primary">Add to cart</a>

                                   <?php
                               }

                            }
                            ?>
                        </div>      
                    </div>
                </div>



                <div class="col-md-3 col-sm-6 col-10 mx-auto home-feature">
                    <div class="img-thumbnail">
                        <img src="img/25.jpg" class="img-fluid" alt="">
                        <div class="caption">
                        <h3>Jhalsani</h3>
                            <p>Price Rs. 1300.00</p>
                            <?php if(!isset($_SESSION['email'])) { ?>
                            <p>
                            <a href="login.php" 
                            class="btn btn-block btn-primary btn-block">Buy Now</a></p>
                            <?php }
                            else{
                               if(check_if_added_to_cart(12)){
                                   echo '<a href="#" class="btn btn-block btn-success" disable>Add to Cart </a>';
                               }else{
                                   ?>
                                   <a href="cart-add.php?id=12" 
                                   name="add" 
                                   value="add" 
                                   class="btn btn-block btn-primary">Add to cart</a>

                                   <?php
                               }

                            }
                            ?>
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