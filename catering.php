<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Takeout-in</title>

    <!-- SEO -->
    <meta name="description" content="Takeout-in is a one stop place to curb your food problems">
    <meta name="keywords" content="food, order, tiffin, indian, lunch, food">

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Responsive Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS Files -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/plugin.css">
    <link rel="stylesheet" href="css/main.css">

    <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->
</head>

<body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
    
    <!-- Preloder-->
    <div class="preloder animated">
        <div class="scoket">
            <img src="img/preloader.svg" alt="" />
        </div>
    </div>

    <div class="body">

        <div class="main-wrapper">
            <!-- Navigation-->
            <?php include("navbar.php"); ?>

            <!-- Home page-->
            <section class="home">
                <div class="grey-overlay"></div>
                <div class="tittle-block">
                    <div class="logo">
                        <!-- <a href="./index.html">
                            <img src="img/logo.png" alt="logo">
                        </a> -->
                    </div>
                    <h1>Coming soon...</h1>
                    
                </div>
                <div class="scroll-down">
                    <a href="#about">
                        <img src="img/arrow-down.png" alt="down-arrow">
                    </a>
                </div>
            </section>
            
            
            
            <section class="subscribe">
                    <div class="container w-1200">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Subscribe</h1>
                                <p>Provide us with your email and we'll keep you posted</p>
                                <form class="form-inline" action="php/subscribe.php" id="invite" method="POST">
                                    <div class="form-group">
                                        <input class="e-mail form-control" name="email" id="address" type="email" placeholder="Your Email Address" required>
                                    </div>
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-angle-right"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            <!-- Footer-->
            
        </div>

    </div>

    <!-- Javascript -->
    <script src="js/vendor/jquery-1.11.2.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/jquery.flexslider-min.js"></script>
    <script src="js/vendor/spectragram.js"></script>
    <script src="js/vendor/owl.carousel.min.js"></script>
    <script src="js/vendor/velocity.min.js"></script>
    <script src="js/vendor/velocity.ui.min.js"></script>
    <script src="js/vendor/bootstrap-datepicker.min.js"></script>
    <script src="js/vendor/bootstrap-clockpicker.min.js"></script>
    <script src="js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="js/vendor/isotope.pkgd.min.js"></script>
    <script src="js/vendor/slick.min.js"></script>
    <script src="js/vendor/wow.min.js"></script>
    <script src="js/animation.js"></script>
    <script src="js/vendor/vegas/vegas.min.js"></script>
    <script src="js/vendor/jquery.mb.YTPlayer.js"></script>
    <script src="js/vendor/jquery.stellar.js"></script>
    <script src="js/vendor/mc/jquery.ketchup.all.min.js"></script>
    <script src="js/vendor/mc/main.js"></script>
    <script src="js/vendor/validate.js"></script>
    <script src="js/reservation.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>

</body>
<script>
    $(document).ready(function(){
        let subscribeHt = $(".subscribe").outerHeight();
        // debugger;
        let homeHt = $(".home").outerHeight();

        $(".home").css("height", homeHt- subscribeHt);
    })
</script>
</html>
