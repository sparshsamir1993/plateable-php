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
            <?php include("navbar.php") ?>

            <!-- Page Header -->
            <section class="page_header">
                <div class="grey-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="text-uppercase">Contact</h2>
                            <p>Tomato is a delicious restaurant website template</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Form / Info -->
            <section class="main-content contact-content">
                <div class="container">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="text-left no-margin-top">Address</h3>
                                <div class="footer-address contact-info">
                                    <!-- <p><i class="fa fa-map-marker"></i>28 Seventh Avenue, Neew York, 10014</p> -->
                                    <p><i class="fa fa-phone"></i>Phone: +1 (647) 648-1853</p>
                                    <p><i class="fa fa-envelope-o"></i>info@takeoutin.com</p>
                                </div>
                                <br>

                                <h3 class="text-left no-margin-top">Working hours</h3>
                                <div class="contact-info text-muted">
                                    <p>10:00 am to 11:00 pm on Weekdays</p>
                                    <p>11:00 am to 11:30 pm on Weekends</p>
                                </div>
                                <br>

                                <h3 class="text-left no-margin-top">Follow Us</h3>
                                <div class="contact-social">
                                    <a target="_blank" href="https://www.facebook.com/Take-Out-In-628398887665086/?modal=admin_todo_tour"><i class="fa fa-facebook"></i></a>
                                    <!-- <a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a> -->
                                    <!-- <a href="http://www.dribbble.com"><i class="fa fa-dribbble"></i></a> -->
                                    <a target="_blank" href="https://www.instagram.com/takeout.in/?hl=en"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <form class="contact-form" id="contactForm" action="php/contact.php" method="post">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" placeholder="Full Name" type="text" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="email" name="email" id="email" placeholder="Email Address" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Subject" type="text" id="subject" name="subject">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="message" placeholder="Message" rows="5"></textarea>
                                    </div>
                                    <button class="btn btn-default btn-lg btn-block" id="js-contact-btn">Send message</button>
                                </form>
                                <div id="js-contact-result" data-success-msg="Form submitted successfully." data-error-msg="Oops. Something went wrong."></div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Google Map -->
            <!-- Set latitude and Longitude (Get it from http://google.com/maps) -->
            <!-- <div id="map" data-latitude="40.6700" data-longitude="-73.9400"></div> -->

            <!-- subscribe -->
            <!-- <section class="subscribe">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Subscribe</h1>
                            <p>Get updates about new dishes and upcoming deals</p>
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
            </section> -->

            <!-- Footer-->
            <?php include("footer.php"); ?>
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
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="js/vendor/map.js"></script>
    <!-- Contact JS -->
    <script src="js/vendor/validate.js"></script>
    <script src="js/contact.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145082421-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-145082421-1');
    </script>

</body>

</html>
