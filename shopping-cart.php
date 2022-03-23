<?php
require('app/Customer.php');
require('app/Product.php');
require('app/ShoppingCart.php');
require('app/FileUtility.php');

$products_data = FileUtility::openCSV('products.csv');

$products = Product::convertArrayToProducts($products_data);

$customer = new Customer('John Doe', 'john@mail.com');

$shoppingCart = new ShoppingCart($customer);
$shoppingCartItems = $shoppingCart->getAllItems();
?>
<html>
<head>
    <title>My Cart</title>
    <link rel="stylesheet" href="app/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

<header>
<div class="header-1">
    <a href="#" class="logo" style="text-decoration:none;"> <i class="fas fa-shopping-bag"></i><?php echo $customer->getName() ?>'s Cart</a>
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
    </nav>
    <div class="icons">
        <a href="shopping-cart.php" class="fas fa-shopping-cart" style="color:yellow;text-decoration:none;"></a>
        <a href="products-list.php" class="fas fa-user"></a>
    </div>
</div>
</header>

<section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card">
          <div class="card-body p-4">
            <div class="row">
              <div class="col-lg-7">
                <h5 class="mb-3"><a href="products-list.php" class="text-body"><i
                      class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                <hr>
                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                    <p class="mb-1">Shopping cart</p>
                    <p class="mb-0">You have 4 items in your cart</p>
                  </div>
                  <div>
                    <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!"
                        class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
                  </div>
                </div>
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">
                        <div>
                          <img
                            src="https://surlybikes.com/uploads/bikes/_medium_image/Straggler_BK2125_Background-2000x1333.jpg"
                            class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                        </div>
                        <div class="ms-3">
                          <h5>KARATE MONKEY</h5>
                          <p class="small mb-0">Hardtail Mountain Bike for All Trails</p>
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center">
                        <div style="width: 50px;">
                          <h5 class="fw-normal mb-0">1</h5>
                        </div>
                        <div style="width: 80px;">
                          <h5 class="mb-0">PHP 17999</h5>
                        </div>
                        <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">
                        <div>
                          <img
                            src="https://surlybikes.com/uploads/bikes/_medium_image/Lowside_BK0534_Background-2000x1333.jpg"
                            class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                        </div>
                        <div class="ms-3">
                          <h5>LOW SIDE</h5>
                          <p class="small mb-0">Single Speed Mountain Bike</p>
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center">
                        <div style="width: 50px;">
                          <h5 class="fw-normal mb-0">1</h5>
                        </div>
                        <div style="width: 80px;">
                          <h5 class="mb-0">PHP 14999</h5>
                        </div>
                        <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">
                        <div>
                          <img
                            src="https://surlybikes.com/uploads/bikes/_medium_image/Surly-Bridge-Club-BK3122-Gray-Background-2000x1333.jpg"
                            class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                        </div>
                        <div class="ms-3">
                          <h5>BRIDGE CLUB</h5>
                          <p class="small mb-0">All Road Touring Bike</p>
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center">
                        <div style="width: 50px;">
                          <h5 class="fw-normal mb-0">1</h5>
                        </div>
                        <div style="width: 80px;">
                          <h5 class="mb-0">PHP 15999</h5>
                        </div>
                        <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card mb-3 mb-lg-0">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">
                        <div>
                          <img
                            src="https://surlybikes.com/uploads/bikes/_medium_image/BigEasy_BK9190-2000x1333px.jpg"
                            class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                        </div>
                        <div class="ms-3">
                          <h5>BIG EASY</h5>
                          <p class="small mb-0">Longtail Electric Cargo Bike</p>
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center">
                        <div style="width: 50px;">
                          <h5 class="fw-normal mb-0">1</h5>
                        </div>
                        <div style="width: 80px;">
                          <h5 class="mb-0">PHP 13999</h5>
                        </div>
                        <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="card bg-primary text-white rounded-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <h5 class="mb-0">Card details</h5>
                      <img src="data:image/png;base64,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"
                        class="img-fluid rounded-3" style="width: 45px;" alt="Avatar">
                    </div>
                    <p class="small mb-2">Card type</p>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-visa fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-amex fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>
                    <form class="mt-4">
                      <div class="form-outline form-white mb-4">
                        <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                          placeholder="Cardholder's Name" />
                        <label class="form-label" for="typeName">Cardholder's Name</label>
                      </div>
                      <div class="form-outline form-white mb-4">
                        <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                          placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                        <label class="form-label" for="typeText">Card Number</label>
                      </div>
                      <div class="row mb-4">
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <input type="text" id="typeExp" class="form-control form-control-lg"
                              placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                            <label class="form-label" for="typeExp">Expiration</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <input type="password" id="typeText" class="form-control form-control-lg"
                              placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                            <label class="form-label" for="typeText">Cvv</label>
                          </div>
                        </div>
                      </div>
                    </form>
                    <hr class="my-4">
                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Subtotal</p>
                      <p class="mb-2">PHP 62,996</p>
                    </div>
                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Shipping</p>
                      <p class="mb-2">PHP 2400</p>
                    </div>
                    <div class="d-flex justify-content-between mb-4">
                      <p class="mb-2">Total(Incl. taxes)</p>
                      <p class="mb-2">PHP 65,396</p>
                    </div>
                    <button type="button" class="btn btn-info btn-block btn-lg">
                      <div class="d-flex justify-content-between">
                        <span>PHP 65,396 &nbsp;</span>
                        <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                      </div>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php if (count($shoppingCartItems) > 0): ?>

    <table>
    <thead>
        <th>Product</th>
        <th>Qty</th>
        <th>Price</th>
        <th>Subtotal</th>
    </thead>
    <tbody>
    <?php foreach ($shoppingCartItems as $item): ?>

        <tr>
            <td><?php echo $item['product']->getName(); ?></td>
            <td><?php echo $item['quantity']; ?></td>
            <td><?php echo $item['price']; ?></td>
            <td><?php echo $item['subtotal']; ?></td>
        </tr>

    <?php endforeach; ?>

        <tr>
            <td colspan="4">
                <?php echo $shoppingCart->getItemsTotal(); ?>
            </td>
        </tr>

    </tbody>
    </table>

    <?php endif; ?>

</body>
</html>