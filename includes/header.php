<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a class="navbar-brand" href="index.php"><i class="fas fa-store"></i> Life Style Store</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fas fa-sliders-h"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">

      <?php
      if(isset($_SESSION['email']))
      {?>
        <li class="nav-item">
          <a class="nav-link active" 
          aria-current="page" href="cart.php">
          <i class="fas fa-shopping-cart"></i> Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" 
          href="setting.php"><i class="fas fa-user-cog"></i> Setting</a>
        </li>
        <li class="nav-item">
         <a href="logout.php" 
         class="nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </li>
        ?>
        <?php
      }else{
        ?>
         <li class="nav-item">
         <a href="signup.php" class="nav-link"><i class="fas fa-user-plus"></i> Sign Up </a>
        </li>
        <li class="nav-item">
         <a href="login.php" class="nav-link"><i class="fas fa-sign-in-alt"></i> Login</a>
        </li>   
        <?php 
      }
      ?>
      </ul>
    
    </div>
  </div>
</nav>