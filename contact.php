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
    <meta name="viewport" content="width=device-width">

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
            <nav class="navbar navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="./index.php">
                            <!-- <img src="img/nav-logo.png" alt="nav-logo"> -->
                            <span>Takeout-in</span>
                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="menu_list.php">Menu</a></li>
                            <!-- <li class="dropdown">
                                <a href="./index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="./index.html">Home - Image</a></li>
                                    <li><a href="./index_slider.html">Home - Header Slider</a></li>
                                    <li><a href="./index_video.html">Home - Video Background</a></li>
                                    <li><a href="./index_parallax.html">Home - Parallax</a></li>
                                    <li><a href="./index_animation.html">Home - Scroll Animation</a></li>
                                </ul>
                            </li> -->
                            <!-- <li class="dropdown">
                                <a href="./menu_all.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="./menu_list.html">Menu - List</a></li>
                                    <li><a href="./menu_overlay.html">Menu - Overlay</a></li>
                                    <li><a href="./menu_tile.html">Menu - Tile</a></li>
                                    <li><a href="./menu_grid.html">Menu - Grid</a></li>
                                    <li><a href="./menu_all.html">Menu All</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="./reservation.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reservation<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="./reservation.html">Reservation</a></li>
                                    <li><a href="./reservation-ot.html">Reservation - Opentable</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="./about.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="./about.html">About</a></li>
                                    <li><a href="./gallery.html">Gallery</a></li>
                                    <li><a href="./elements.html">Shortcodes</a></li>
                                    <li><a href="./shop_account.html">Login / Signup</a></li>
                                    <li><a href="./404.html">404 Page</a></li>
                                </ul>
                            </li> -->
                            <!-- <li class="dropdown">
                                <a href="./recipe.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Recipe<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="./recipe.html">Recipe - 2Col</a></li>
                                    <li><a href="./recipe_3col.html">Recipe - 3Col</a></li>
                                    <li><a href="./recipe_4col.html">Recipe - 4Col</a></li>
                                    <li><a href="./recipe_masonry.html">Recipe - Masonry</a></li>
                                    <li>
                                        <a href="./recipe_detail-image.html">Recipe - Single <span class="caret-right"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="./recipe_detail-image.html">Recipe - Image</a></li>
                                            <li><a href="./recipe_detail-slider.html">Recipe - Gallery</a></li>
                                            <li><a href="./recipe_detail-video.html">Recipe - Video</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- <li class="dropdown">
                                <a href="./blog_right_sidebar.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="./blog_right_sidebar.html">Blog - Right Sidebar</a></li>
                                    <li><a href="./blog_left_sidebar.html">Blog - Left Sidebar</a></li>
                                    <li><a href="./blog_fullwidth.html">Blog - Fullwidth</a></li>
                                    <li><a href="./blog_masonry.html">Blog - Masonry</a></li>
                                    <li>
                                        <a href="./blog_single_image.html">Blog - Single <span class="caret-right"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="./blog_single_image.html">Blog - Image</a></li>
                                            <li><a href="./blog_single_slider.html">Blog - Gallery</a></li>
                                            <li><a href="./blog_single_video.html">Blog - Video</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- <li class="dropdown">
                                <a href="./shop_fullwidth.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="./shop_fullwidth.html">Shop - Full</a></li>
                                    <li><a href="./shop_left_sidebar.html">Shop - Left Sidebar</a></li>
                                    <li><a href="./shop_right_sidebar.html">Shop - Right Sidebar</a></li>
                                    <li>
                                        <a href="./shop_single_full.html">Shop - Single <span class="caret-right"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="./shop_single_full.html">Shop - Full</a></li>
                                            <li><a href="./shop_single_left.html">Shop - Left Sidebar</a></li>
                                            <li><a href="./shop_single_right.html">Shop - Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="./shop_cart.html">Shop - Cart</a></li>
                                    <li><a href="./shop_checkout.html">Shop - Checkout</a></li>
                                    <li><a href="./shop_account.html">Shop - Account</a></li>
                                    <li><a href="./shop_account_detail.html">Shop - Account Detail</a></li>
                                </ul>
                            </li> -->
                            <li><a href="./contact.php">Contact</a></li>
                            <!-- <li class="dropdown">
                                <a class="css-pointer dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-shopping-cart fsc pull-left"></i><span class="cart-number">3</span><span class="caret"></span></a>
                                <div class="cart-content dropdown-menu">
                                    <div class="cart-title">
                                        <h4>Shopping Cart</h4>
                                    </div>
                                    <div class="cart-items">
                                        <div class="cart-item clearfix">
                                            <div class="cart-item-image">
                                                <a href="./shop_single_full.html"><img src="img/cart-img1.jpg" alt="Breakfast with coffee"></a>
                                            </div>
                                            <div class="cart-item-desc">
                                                <a href="./shop_single_full.html">Breakfast with coffee</a>
                                                <span class="cart-item-price">$19.99</span>
                                                <span class="cart-item-quantity">x 2</span>
                                                <i class="fa fa-times ci-close"></i>
                                            </div>
                                        </div>
                                        <div class="cart-item clearfix">
                                            <div class="cart-item-image">
                                                <a href="./shop_single_full.html"><img src="img/cart-img2.jpg" alt="Chicken stew"></a>
                                            </div>
                                            <div class="cart-item-desc">
                                                <a href="./shop_single_full.html">Chicken stew</a>
                                                <span class="cart-item-price">$24.99</span>
                                                <span class="cart-item-quantity">x 3</span>
                                                <i class="fa fa-times ci-close"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-action clearfix">
                                        <span class="pull-left checkout-price">$ 114.95</span>
                                        <a class="btn btn-default pull-right" href="./shop_cart.html">View Cart</a>
                                    </div>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                    <!--/.navbar-collapse -->
                </div>
            </nav>

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
            <div id="map" data-latitude="40.6700" data-longitude="-73.9400"></div>

            <!-- subscribe -->
            <section class="subscribe">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Subscribe</h1>
                            <p>Get updates about new dishes and upcoming events</p>
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

</body>

</html>
