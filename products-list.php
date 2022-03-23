<?php
require('app/Customer.php');
require('app/Product.php');
require('app/FileUtility.php');

$products_data = FileUtility::openCSV('products.csv');

$products = Product::convertArrayToProducts($products_data);

$customer = new Customer('John Doe', 'john@mail.com');
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jello Bike Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="app/style.css">
</head>
<body>
<header>
<div class="header-1">
    <a href="#" class="logo"> <i class="fas fa-shopping-bag"></i>Welcome <?php echo $customer->getName() ?>!</a>
    <div class="form-container">
        <form action="">
            <input type="search" placeholder="search products" id="search" /> 
            <label for="search" class="fas fa-search"></label>
        </form>
    </div>
</div>
<div class="header-2">
    <div id="menu" class="fas fa-bars"></div>
    <nav class="navbar">
        <ul>
            <li><a href="#product">View Products</a></li>
        </ul>
    </nav>
    <div class="icons">
        <a href="shopping-cart.php" class="fas fa-shopping-cart"></a>
        <a href="#" class="fas fa-user" style="color:yellow;"></a>
    </div>
</div>
</header>

<section class="home" id="home">
<div class="home-slider owl-carousel">
<?php foreach ($products as $product): ?>
    <div class="item">
        <img src="<?php echo $product->getImage(); ?>" alt="">
        <div class="content">
            <h3><?php echo $product->getName(); ?></h3>
            <p>PHP <?php echo $product->getPrice(); ?>
            <div style="background:#27AEDD; border-radius:15px; text-align:center;margin-top: 20rem; margin-left: 14rem; opacity:90%">
            <p><?php echo $product->getDescription(); ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
</section>

<section class="product" id="product">
<h1 class="heading"> <span>For SALE!</span> </h1>
<?php foreach ($products as $product): ?>
<div class="box-container">
    <div class="box">
    <form action="add-to-cart.php" method="POST">
        <div class="image">
            <img src="<?php echo $product->getImage(); ?>" alt="">
        </div>
        <div class="info">
            <h3><?php echo $product->getName(); ?></h3>
            <div class="subInfo">
                <strong class="price">PHP <?php echo $product->getPrice(); ?></strong>
                <div class="stars">
                Qty <input type="number" name="quantity" class="quantity" value="0" />
                </div>
            </div>
        </div>
        <div class="overlay">    
            <button type=submit class='fas fa-cart-plus' style='font-size:36px;'></button>
        </div>
        <form action="add-to-cart.php" method="POST">
    </div>
<?php endforeach; ?>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="app/script.js"></script>
</body>

</html>