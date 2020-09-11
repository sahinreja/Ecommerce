<?php
include ('includes/common.php');
if(!isset($_SESSION['email'])){
    header('location:index.php');
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
    <section id="cart">
        <div class="conatiner">
            <div class="row">
                <div class="col-md-6 col-10 mx-auto">
                    <table class="table table-striped">
                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price ,items.id, items.name AS Name
                        FROM users_items JOIN items ON users_items.item_id = items.id 
                        WHERE users_items.user_id = '$user_id' AND status = 'Add to cart' ";
                        $result = mysqli_query($con , $query) or die(mysqli_error($con));
                        if(mysqli_num_rows($result) >= 1){
                            ?>
                            <thead>
                                 <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                 </tr>
                            </thead>
                            <tbody>
                                <?php
                                while($row = mysqli_fetch_array($result)){
                                    $sum+= $row["Price"];
                                    $id .= $row["id"] . ", ";
                                    echo "<tr><td>" . "#" . $row["id"] .
                                     "</td><td>" . $row["Name"] .
                                      "</td><td>Rs " . $row["Price"] .
                                       "</td><td><a href='cart-remove.php?id={$row['id']}'
                                        class='remove_item_link'> Remove</a></td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs "
                                 . $sum . "</td><td><a href='success.php?itemsid=" . $id .
                                  "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                            </tbody>
                            <?php
                        }else{
                            echo "Add item to the cart first ";
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </section>


    <?php include ('includes/footer.php')?>

    <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>