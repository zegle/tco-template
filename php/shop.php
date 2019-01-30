<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" type="image/png" href="">

    <title>TurboChargedOutfitters | Shop Car Parts</title>
</head>

<body>
    <header class="header">
        <div class="header-nav" id="nav">
            <div class="mnav" id="m-nav">
                <!-- shows in mobile only -->
                <div class="mnav-logo">
                    <a href="../index.php">
                        <img src="../images/logo/logo-1.png" alt="Turbo logo" style="margin-top:.5rem; width:100%; max-width:100px;">
                    </a>
                </div>
                <label for="toggle" class="white">
                    <i class="fas fa-bars"></i>
                </label>
                <input type="checkbox" id="toggle">
                <div class="mnav-menu">
                    <a href="../index.php" class="">
                        <span>Home</span>
                    </a>
                    <a href="about.php" class="">
                        <span>About</span>
                    </a>
                    <a href="shop.php" class="activem">
                        <span>Shop</span>
                    </a>
                    <a href="custom.php" class="">
                        <span>Custom</span>
                    </a>
                    <a href="contact.php" class="">
                        <span>Contact</span>
                    </a>
                </div>
            </div>
            <div class="wrapper">
                <ul class="header-nav-list mhide">
                    <li>
                        <div class="header-nav-logo">
                            <a href="index.php">
                                <img src="../images/logo/logo-1.png" alt="Turbo logo">
                            </a>
                        </div>
                    </li>
                    <li>
                        <a href="../index.php" class="">Home</a>
                    </li>
                    <li>
                        <a href="about.php" class="">About</a>
                    </li>
                    <li>
                        <div class="nav-dropdown">
                            <a href="#" class="active">Shop</a>
                            <!--<div class="nav-dropdown-menu">
                                                    <a href="#" class="">Packages</a>
                                                    <a href="#" class="">Hosting</a>
                                                    <a href="#" class="">Rebuild</a>
                                                </div>-->
                        </div>
                    </li>
                    <li>
                        <a href="custom.php" class="">Custom</a>
                    </li>
                    <li>
                        <a href="contact.php" class="">Contact</a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/turbochargedoutfitters/" target="blank" class="">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="header-nav-cart">
                            <i class="fas fa-shopping-cart"></i> Cart</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header-banner mhide">
            &nbsp;
        </div>
    </header>

    <main>

        <section class="section-shop mb-4 mt-4 mt-2xs">
            <div class="wrapper">
                <div class="grid-12">
                    <div class="col-2 col-12m col-12s">
                        <h4 class="shop-title text-center">Select Your Vehicle:</h4>
                        <ul class="filter-list text-center mt-2 mt-1xs">
                            <li class="filter-list-item mb-1xs">
                                <a href="#" id="filter-wrx" class="">WRX/Sti</a>
                            </li>
                            <li class="filter-list-item mb-1xs">
                                <a href="#" id="filter-86" class="">BRZ/FRS</a>
                            </li>
                            <li class="filter-list-item mb-1xs">
                                <a href="#" id="filter-focus" class="">Focus ST</a>
                            </li>
                            <li class="filter-list-item mb-1xs">
                                <a href="#" id="filter-fiesta" class="">Fiesta ST</a>
                            </li>
                            <li class="filter-list-item">
                                <a href="#" id="filter-all" class="">View All</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-10 col-12m col-12s">
                        <h2 id="title" class="shop-title text-center mb-4">All Products</h2>
                        <div class="grid-6">
                            <div class="col-2 col-3s text-center product hide focus">
                                <div class="product-img-box">
                                    <a href="product-1.php">
                                        <img src="../images/product-1.jpg" alt="car image" class="product-img-box-image">
                                        <i class="fas fa-cart-plus product-img-box-caption white"></i>
                                    </a>
                                </div>
                                <h5 class="product-title">Focus ST Splitter</h5>
                                <h4 class="product-price mb-1">$180.00</h4>
                                <button class="btn">
                                    <i class="fas fa-shopping-cart"></i> Add to Cart</button>
                            </div>
                            <div class="col-2 col-3s text-center product hide focus">
                                <div class="product-img-box">
                                    <a href="product-2.php">
                                        <img src="../images/product-2.jpg" alt="car image" class="product-img-box-image">
                                        <i class="fas fa-cart-plus product-img-box-caption white"></i>
                                    </a>
                                </div>
                                <h5 class="product-title">Focus ST Wing Extension</h5>
                                <h4 class="product-price mb-1">$105.00</h4>
                                <button class="btn">
                                    <i class="fas fa-shopping-cart"></i> Add to Cart</button>
                            </div>
                            <div class="col-2 col-3s text-center product hide fiesta">
                                <div class="product-img-box">
                                    <a href="product-3.php">
                                        <img src="../images/product-3.jpg" alt="car image" class="product-img-box-image">
                                        <i class="fas fa-cart-plus product-img-box-caption white"></i>
                                    </a>
                                </div>
                                <h5 class="product-title">Fiesta ST Wing Extension</h5>
                                <h4 class="product-price mb-1">$105.00</h4>
                                <button class="btn">
                                    <i class="fas fa-shopping-cart"></i> Add to Cart</button>
                            </div>
                            <div class="col-2 col-3s text-center product hide focus">
                                <div class="product-img-box">
                                    <a href="product-4.php">
                                        <img src="../images/product-4.jpg" alt="car image" class="product-img-box-image">
                                        <i class="fas fa-cart-plus product-img-box-caption white"></i>
                                    </a>
                                </div>
                                <h5 class="product-title">Focus ST Diffuser/h5>
                                    <h4 class="product-price mb-1">$299.00</h4>
                                    <button class="btn">
                                        <i class="fas fa-shopping-cart"></i> Add to Cart</button>
                            </div>
                            <div class="col-2 col-3s text-center product hide fiesta">
                                <div class="product-img-box">
                                    <a href="product-5.php">
                                        <img src="../images/product-5.jpg" alt="car image" class="product-img-box-image">
                                        <i class="fas fa-cart-plus product-img-box-caption white"></i>
                                    </a>
                                </div>
                                <h5 class="product-title">Fiesta ST Splitter</h5>
                                <h4 class="product-price mb-1">$180.00</h4>
                                <button class="btn">
                                    <i class="fas fa-shopping-cart"></i> Add to Cart</button>
                            </div>
                            <div class="col-2 col-3s text-center product hide wrx">
                                <div class="product-img-box">
                                    <a href="product-6.php">
                                        <img src="../images/product-6.jpg" alt="car image" class="product-img-box-image">
                                        <i class="fas fa-cart-plus product-img-box-caption white"></i>
                                    </a>
                                </div>
                                <h5 class="product-title">WRX STI Splitter</h5>
                                <h4 class="product-price mb-1">$240.00</h4>
                                <button class="btn">
                                    <i class="fas fa-shopping-cart"></i> Add to Cart</button>
                            </div>
                            <div class="col-2 col-3s text-center product hide 86">
                                <div class="product-img-box">
                                    <a href="product-7.php">
                                        <img src="../images/product-8.jpg" alt="car image" class="product-img-box-image">
                                        <i class="fas fa-cart-plus product-img-box-caption white"></i>
                                    </a>
                                </div>
                                <h5 class="product-title">BRZ/FRS Splitter</h5>
                                <h4 class="product-price mb-1">$120.00</h4>
                                <button class="btn">
                                    <i class="fas fa-shopping-cart"></i> Add to Cart</button>
                            </div>
                            <div class="col-2 col-3s text-center product hide fiesta">
                                <div class="product-img-box">
                                    <a href="product-8.php">
                                        <img src="../images/product-7.jpg" alt="car image" class="product-img-box-image">
                                        <i class="fas fa-cart-plus product-img-box-caption white"></i>
                                    </a>
                                </div>
                                <h5 class="product-title">Fiesta ST Wing V2</h5>
                                <h4 class="product-price mb-1">$125.00</h4>
                                <button class="btn">
                                    <i class="fas fa-shopping-cart"></i> Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include("../includes/footer2.php");?>

    <!-- js here -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script type="text/javascript" src="../js/filter.js"></script>
    <script type="text/javascript" src="../js/mnav.js"></script>
</body>

</html>