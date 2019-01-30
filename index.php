<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="">

    <title>TurboChargedOutfitters | The Site for Car Guys</title>
</head>

<body>
    <header class="header">
        <?php include("includes/header.php");?>
        <div class="slider" id="slider1">
            <!-- Slides -->
            <div style="background-image:url(images/banner.jpg)"></div>
            <div style="background-image:url(images/hero.jpg)"></div>
            <div style="background-image:url(images/hero2.jpg)"></div>
            <div style="background-image:url(images/hero4.jpg)"></div>
            <!-- The Arrows -->
            <i class="left" class="arrows" style="z-index:2; position:absolute;">
                <svg viewBox="0 0 100 100">
                    <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path>
                </svg>
            </i>
            <i class="right" class="arrows" style="z-index:2; position:absolute;">
                <svg viewBox="0 0 100 100">
                    <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path>
                </svg>
            </i>
        </div>
    </header>

    <main>
        <section class="featured-slider">
            <div class="wrapper">
                <?php include("includes/featureslider.php");?>
            </div>
        </section>

        <section class="section-insta mt-2 mb-2">
            <div class="wrapper">
                <?php include("includes/social.php");?>
            </div>
        </section>

        <section class="section-products mt-4 mb-4">
            <div class="wrapper">
                <?php include("includes/products.php");?>
            </div>
        </section>

        <section class="section-infographic mb-4 mt-4">
            <div class="wrapper">
                <?php include("includes/infographic.php")?>
            </div>
        </section>
    </main>

    <?php include("includes/footer.php");?>

    <!-- js here -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
    <script type="text/javascript" src="js/featuredslider.js"></script>
    <script type="text/javascript" src="js/mnav-2.js"></script>
</body>

</html>