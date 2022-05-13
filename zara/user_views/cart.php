
<?php
    session_start();
    // include("../connect.php");
?>
<head>
    <title>Cart</title>
    <link rel="icon" href="/Images/Pre-Z.jpg" type="image/jpg">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../css/style.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.html">Zara Apparel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item m-auto">
                    <a class="nav-link" href="../user_views/womensproducts.php">Shop More</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="category.html">Discount Offers</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="product.html">Product</a>
                </li> -->
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="contact.html">Cart <span class="sr-only">(current)</span></a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <a class="btn btn-success btn-sm ml-3" href="cart.html">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge badge-light">3</span>
                </a>
            </form>
        </div>
    </div>
</nav> 

<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   
</head>
</html>

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading"></h1>
     </div>
</section>
            <?php 
            if(isset($_SESSION['message'])){
                ?>
                <div class="alert alert-info text-center">
                    <?php echo $_SESSION['message']; ?>
                </div>
                <?php
                unset($_SESSION['message']);
            }
 
            ?>
            <form method="POST" action="save_cart.php">
            <table class="table table-bordered table-striped">
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
                    <?php
                        //initialize total
                        $total = 0;
                        if(!empty($_SESSION['cart'])){
                        //connection
                        $conn = new mysqli('localhost', 'root', '', 'zara_art');
                        //create array of initail qty which is 1
            $index = 0;
            if(!isset($_SESSION['qty_array'])){
              $_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
            }
                        $sql = "SELECT * FROM womens_products WHERE id IN (".implode(',',$_SESSION['cart']).")";
                        $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()){
                                ?>
                                <tr>
                                    <td>
                                        <a href="delete_item.php?id=<?php echo $row['id']; ?>&index=<?php echo $index; ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                                    </td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo number_format($row['price'], 2); ?></td>
                                    <input type="hidden" name="indexes[]" value="<?php echo $index; ?>">
                                    <td><input type="text" class="form-control" value="<?php echo $_SESSION['qty_array'][$index]; ?>" name="qty_<?php echo $index; ?>"></td>
                                    <td><?php echo number_format($_SESSION['qty_array'][$index]*$row['price'], 2); ?></td>
                                    <?php $total += $_SESSION['qty_array'][$index]*$row['price']; ?>
                                </tr>
                                <?php
                                $index ++;
                            }
                        }
                        else{
                            ?>
                            <tr>
                                <td colspan="4" class="text-center">No Item in Cart</td>
                            </tr>
                            <?php
                        }
 
                    ?>
                    <tr>
                        <td colspan="4" align="right"><b>Total</b></td>
                        <td><b><?php echo number_format($total, 2); ?></b></td>
                    </tr>
            </table>
            <a href="womensproducts.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
            <button type="submit" class="btn btn-success" name="save">Save Changes</button>
            <a href="Cart_delete.php?action=delete&id=<?php echo $values["id"]; ?>"><span class="text-danger">Remove</span></a>
            <a href="checkout.php" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Checkout</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
