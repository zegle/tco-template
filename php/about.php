<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" type="image/png" href="">

    <title>TurboChargedOutfitters | About</title>
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
                    <a href="about.php" class="activem">
                        <span>About</span>
                    </a>
                    <a href="shop.php" class="">
                        <span>Shop</span>
                    </a>
                    <a href="custom.php" class="">
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
                        <a href="#" class="active">About</a>
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
    </header>

    <main>
        <section class="section-insta mt-4 mb-2">
            <div class="wrapper">
                <?php include("../includes/company.php");?>
            </div>
        </section>

        <section class="section-testimonial">
            <div class="wrapper">
                <?php include("../includes/testimonial.php");?>
            </div>
        </section>

        <section class="section-shipping mb-8">
            <div class="wrapper">
                <?php include("../includes/policy.php");?>
            </div>
        </section>
    </main>

    <?php include("../includes/footer2.php");?>

    <!-- js here -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.js"></script>
    <script type="text/javascript" src="../js/slider.js"></script>
    <script type="text/javascript" src="../js/testimonial.js"></script>
    <script type="text/javascript" src="../js/mnav.js"></script>
</body>

</html>