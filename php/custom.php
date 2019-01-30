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

    <title>TurboChargedOutfitters | Custom Product</title>
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
                    <a href="shop.php" class="">
                        <span>Shop</span>
                    </a>
                    <a href="custom.php" class="activem">
                        <span>Custom</span>
                    </a>
                    <a href="contact.php" class="">
                        <span>Contact</span>
                    </a>
                    <a href="#" class=""><span><i class="fas fa-shopping-cart"></i> Cart</span></a>
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
                            <a href="shop.php" class="">Shop</a>
                            <!--<div class="nav-dropdown-menu">
                                                    <a href="#" class="">Packages</a>
                                                    <a href="#" class="">Hosting</a>
                                                    <a href="#" class="">Rebuild</a>
                                                </div>-->
                        </div>
                    </li>
                    <li>
                        <a href="#" class="active">Custom</a>
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
    </header>

    <main>

        <section class="section-shipping mb-8">
            <div class="wrapper">
                <div class="grid-12">
                    <div class="col-12 mt-4 mb-6 shipping-card">
                        <h1 class="shipping-card-title mb-2">Create a Custom Aero</h1>
                        <p class="shipping-card-text">
                             Can’t find your vehicle make/brand in our shop? Well that is ok! We are always looking for new vehicles to prototype on
                            and if your vehicle make/brand is not already in the process of being developed. We would love to work with you on creating
                            a truly unique aero piece for your vehicle. All you have to do is fill out the form below with your vehicle(s) make, model and any specified details you would like for your custom part.
                        </p>
                    </div>
                </div>
                <?php include("../includes/form1.php");?>
            </div>
        </section>
    </main>

    <?php include("../includes/footer2.php");?>

    <!-- js here -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script type="text/javascript" src="../js/mnav.js"></script>
    <script type="text/javascript" src="../js/validate.js"></script>
</body>

</html>