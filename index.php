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
                            <!-- <img src="img/logo-truck.svg" alt="nav-logo"> -->
                            <span>Takeout-in</span>
                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Home</a></li>
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
                            <li><a href="menu_list.php">Menu</a></li>
                            <!-- <li class="dropdown">
                                <a href="./menu_all.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="./menu_list.html">Menu - List</a></li>
                                    <li><a href="./menu_overlay.html">Menu - Overlay</a></li>
                                    <li><a href="./menu_tile.html">Menu - Tile</a></li>
                                    <li><a href="./menu_grid.html">Menu - Grid</a></li>
                                    <li><a href="./menu_all.html">Menu All</a></li>
                                </ul>
                            </li> -->
                            <!-- <li class="dropdown">
                                <a href="./reservation.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reservation<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="./reservation.html">Reservation</a></li>
                                    <li><a href="./reservation-ot.html">Reservation - Opentable</a></li>
                                </ul>
                            </li> -->
                            <!-- <li class="dropdown">
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

            <!-- Home page-->
            <section class="home">
                <div class="grey-overlay"></div>
                <div class="tittle-block">
                    <div class="logo">
                        <!-- <a href="./index.html">
                            <img src="img/logo.png" alt="logo">
                        </a> -->
                    </div>
                    <h1>serving <br>DELICIOUS Food</h1>
                    <h2>Takeout-in, a place to curb all your food problems</h2>
                </div>
                <div class="scroll-down">
                    <a href="#about">
                        <img src="img/arrow-down.png" alt="down-arrow">
                    </a>
                </div>
            </section>
            
            <!-- About page-->
            <section class="about" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header wow fadeInDown">
                                <h1>the Idea<small>A little about us and a breif history of how we started.</small></h1>
                            </div>
                        </div>
                    </div>
                    <div class="row wow fadeInUp">
                        <div class="col-md-4">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12 hidden-sm about-photo">
                                        <div class="image-thumb">
                                            <img src="img/spices.jpg" data-mfp-src="img/fullImages/pic1.jpg" class="img-responsive  hgt-200 " alt="logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 about-photo hidden-xs">
                                        <img src="img/food1.jpg" data-mfp-src="img/fullImages/pic2.jpg" class="img-responsive" alt="logo">
                                    </div>
                                    <div class="col-sm-6 about-photo hidden-xs">
                                        <img src="img/naan.jpg" data-mfp-src="img/fullImages/pic3.jpg" class="img-responsive" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <p>
                                Cras ut viverra eros. Phasellus sollicitudin sapien id luctus tempor. Sed hend rerit inter dum sagittis. Donec nunc lacus, dapibus nec interdum eget, ultrices eget justo. Nam purus lacus, efficitur eget laoreet sed, finibus nec neque. Cras eget enim in diam dapibus sagittis. In massa est, dignissim in libero ac, fringilla ornare mi. Etiam interdum ligula purus.
                            </p>
                            <br>
                            <p>
                                Ultrices eget justo. Nam purus lacus, efficitur eget laoreet sed, finibus nec neque. Cras eget enim in diam dapibus sagittis. In massa est, dignissim in libero ac, fringilla ornare.
                            </p>
                            <!-- <img src="img/signature.png" alt="signature"> -->
                        </div>
                    </div>
                </div>
            </section>

            <!-- Today's special page-->
            <!-- <section class="special">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header wow fadeInDown">
                                <h1 class="white">today's specials<small>A little about us and a breif history of how we started.</small></h1>
                            </div>
                        </div>
                    </div>
                    <div class="row wow fadeInUp">
                        <div class="col-md-offset-1 col-md-10">
                            <div class="flexslider special-slider">
                                <ul class="slides">
                                    <li>
                                        <div class="slider-img">
                                            <img src="img/thumb4.png" alt="" />
                                        </div>
                                        <div class="slider-content">
                                            <div class="page-header">
                                                <h1>Pancake with Caramel<small>If you are a fan of caramel cake, then you'll love our Pancake with caramel icecream. It's not thick, but very tasty.</small></h1>
                                            </div>
                                            <p>Ultrices In massa est, dignissim in libero ac, fringilla ornare mi.Ultrices eget justo. Nam purus lacus, efficitur eget laoreet sed, finibus nec neque. Cras eget enim in diam dapibus sagittis. accumsan, habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                            <a class="btn btn-default" href="./index.html" role="button">Order now</a>
                                            <a class="btn btn-secondary" href="./index.html" role="button">Add to cart</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="slider-img">
                                            <img src="img/thumb4.png" alt="" />
                                        </div>
                                        <div class="slider-content">
                                            <div class="page-header">
                                                <h1>Pancake with Caramel<small>If you are a fan of caramel cake, then you'll love our Pancake with caramel icecream. It's not thick, but very tasty.</small></h1>
                                            </div>
                                            <p>Ultrices In massa est, dignissim in libero ac, fringilla ornare mi.Ultrices eget justo. Nam purus lacus, efficitur eget laoreet sed, finibus nec neque. Cras eget enim in diam dapibus sagittis. accumsan, habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                            <a class="btn btn-default" href="./index.html" role="button">Order now</a>
                                            <a class="btn btn-secondary" href="./index.html" role="button">Add to cart</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="slider-img">
                                            <img src="img/thumb4.png" alt="" />
                                        </div>
                                        <div class="slider-content">
                                            <div class="page-header">
                                                <h1>Pancake with Caramel<small>If you are a fan of caramel cake, then you'll love our Pancake with caramel icecream. It's not thick, but very tasty.</small></h1>
                                            </div>
                                            <p>Ultrices In massa est, dignissim in libero ac, fringilla ornare mi.Ultrices eget justo. Nam purus lacus, efficitur eget laoreet sed, finibus nec neque. Cras eget enim in diam dapibus sagittis. accumsan, habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                            <a class="btn btn-default" href="./index.html" role="button">Order now</a>
                                            <a class="btn btn-secondary" href="./index.html" role="button">Add to cart</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="direction-nav hidden-sm">
                                    <div class="next">
                                        <a><img src="img/right-arrow.png" alt="" /></a>
                                    </div>
                                    <div class="prev">
                                        <a><img src="img/left-arrow.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <!-- Reservations page-->
            <!-- <section class="reservation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header wow fadeInDown">
                                <h1>Reservations<small>Book a table online. Leads will reach in your email.</small></h1>
                            </div>
                        </div>
                    </div>
                    <div class="reservation-form wow fadeInUp">
                        <form action="php/reservation.php" id="reservationform" method="POST">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="datepicker">Date</label>
                                        <input type="text" name="date" class="form-control" id="datepicker" placeholder="Pick a date" title="Please choose a date" required>
                                        <i class="fa fa-calendar-o"></i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" title="Your Full Name please" required>
                                        <i class="fa fa-pencil-square-o"></i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="timepicker">Time</label>
                                        <input type="text" class="form-control" id="timepicker" name="time" placeholder="Pick a time" title="Choose Preferred Time" required>
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email ID" title="Please enter your email id" required>
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="guests">Guests</label>
                                        <input class="form-control" type="number" id="guests" name="guests" placeholder="How many of you?" title="Please enter number of guests" required>
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your Phone Number" title="Please enter your phone number" required>
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="reservation-btn">
                                        <button type="submit" class="btn btn-default btn-lg" id="js-reservation-btn">Make Reservation</button>
                                        <div id="js-reservation-result" data-success-msg="Form submitted successfully." data-error-msg="Oops. Something went wrong."></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="reservation-footer">
                        <p>You can also call: <strong>+1 224 6787 004</strong> to make a reservation.</p>
                        <span></span>
                    </div>
                </div>
            </section> -->

            <!-- Our features-->
            <!-- <section class="features">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header wow fadeInDown">
                                <h1 class="white">Our features<small>Little things make us best in town</small></h1>
                            </div>
                        </div>
                    </div>
                    <div class="row wow fadeInUp">
                        <div class="col-md-4 col-sm-6">
                            <div class="features-tile">
                                <div class="features-img">
                                    <img src="img/thumb5.png" alt="" />
                                </div>
                                <div class="features-content">
                                    <div class="page-header">
                                        <h1>Serving with love</h1>
                                    </div>
                                    <p>Aenean suscipit vehicula purus quis iaculis. Aliquam nec leo nisi. Nam urna arcu, maximus eget ex nec, consequat pellentesque enim. Aliquam tempor fringilla odio, vel ullamcorper turpis varius eu.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="features-tile">
                                <div class="features-img">
                                    <img src="img/thumb6.png" alt="" />
                                </div>
                                <div class="features-content">
                                    <div class="page-header">
                                        <h1>Serving with love</h1>
                                    </div>
                                    <p>Aenean suscipit vehicula purus quis iaculis. Aliquam nec leo nisi. Nam urna arcu, maximus eget ex nec, consequat pellentesque enim. Aliquam tempor fringilla odio, vel ullamcorper turpis varius eu.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="features-tile">
                                <div class="features-img">
                                    <img src="img/thumb7.png" alt="" />
                                </div>
                                <div class="features-content">
                                    <div class="page-header">
                                        <h1>Serving with love</h1>
                                    </div>
                                    <p>Aenean suscipit vehicula purus quis iaculis. Aliquam nec leo nisi. Nam urna arcu, maximus eget ex nec, consequat pellentesque enim. Aliquam tempor fringilla odio, vel ullamcorper turpis varius eu.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 visible-sm">
                            <div class="features-tile">
                                <div class="features-img">
                                    <img src="img/thumb5.png" alt="" />
                                </div>
                                <div class="features-content">
                                    <div class="page-header">
                                        <h1>Serving with love</h1>
                                    </div>
                                    <p>Aenean suscipit vehicula purus quis iaculis. Aliquam nec leo nisi. Nam urna arcu, maximus eget ex nec, consequat pellentesque enim. Aliquam tempor fringilla odio, vel ullamcorper turpis varius eu.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <!-- menu-->
            <section class="menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header wow fadeInDown">
                                <h1>Our menu<small>These fine folks trusted the award winning restaurant.</small></h1>
                            </div>
                        </div>
                    </div>
                    <div class="food-menu wow fadeInUp">
                        <!-- <div class="row">
                            <div class="col-md-12">
                                <div class="menu-tags">
                                    <span data-filter="*" class="tagsort-active">All</span>
                                    <span data-filter=".starter">starters</span>
                                    <span data-filter=".breakfast">breakfast</span>
                                    <span data-filter=".lunch">lunch</span>
                                    <span data-filter=".dinner">dinner</span>
                                    <span data-filter=".desserts">desserts</span>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="row menu-items">
                            <div class="menu-item col-sm-6 col-xs-12 starter dinner desserts">
                                <div class="clearfix menu-wrapper">
                                    <h4>English asparagus</h4>
                                    <span class="price">$14.95</span>
                                    <div class="dotted-bg"></div>
                                </div>
                                <p>pellentesque enim. Aliquam tempor</p>
                            </div>
                            <div class="menu-item col-sm-6 col-xs-12 starter">
                                <div class="clearfix menu-wrapper">
                                    <h4>English asparagus</h4>
                                    <span class="price">$14.95</span>
                                    <div class="dotted-bg"></div>
                                </div>
                                <p>pellentesque enim. Aliquam tempor</p>
                            </div>
                            <div class="menu-item col-sm-6 col-xs-12 breakfast desserts starter">
                                <div class="clearfix menu-wrapper">
                                    <h4>English asparagus</h4>
                                    <span class="price">$14.95</span>
                                    <div class="dotted-bg"></div>
                                </div>
                                <p>pellentesque enim. Aliquam tempor</p>
                            </div>
                            <div class="menu-item col-sm-6 col-xs-12 breakfast">
                                <div class="clearfix menu-wrapper">
                                    <h4>English asparagus</h4>
                                    <span class="price">$14.95</span>
                                    <div class="dotted-bg"></div>
                                </div>
                                <p>pellentesque enim. Aliquam tempor</p>
                            </div>
                            <div class="menu-item col-sm-6 col-xs-12 lunch starter breakfast">
                                <div class="clearfix menu-wrapper">
                                    <h4>English asparagus</h4>
                                    <span class="price">$14.95</span>
                                    <div class="dotted-bg"></div>
                                </div>
                                <p>pellentesque enim. Aliquam tempor</p>
                            </div>
                            <div class="menu-item col-sm-6 col-xs-12 lunch">
                                <div class="clearfix menu-wrapper">
                                    <h4>English asparagus</h4>
                                    <span class="price">$14.95</span>
                                    <div class="dotted-bg"></div>
                                </div>
                                <p>pellentesque enim. Aliquam tempor</p>
                            </div>
                            <div class="menu-item col-sm-6 col-xs-12 dinner breakfast lunch">
                                <div class="clearfix menu-wrapper">
                                    <h4>English asparagus</h4>
                                    <span class="price">$14.95</span>
                                    <div class="dotted-bg"></div>
                                </div>
                                <p>pellentesque enim. Aliquam tempor</p>
                            </div>
                            <div class="menu-item col-sm-6 col-xs-12 dinner">
                                <div class="clearfix menu-wrapper">
                                    <h4>English asparagus</h4>
                                    <span class="price">$14.95</span>
                                    <div class="dotted-bg"></div>
                                </div>
                                <p>pellentesque enim. Aliquam tempor</p>
                            </div>
                            <div class="menu-item col-sm-6 col-xs-12 desserts lunch dinner">
                                <div class="clearfix menu-wrapper">
                                    <h4>English asparagus</h4>
                                    <span class="price">$14.95</span>
                                    <div class="dotted-bg"></div>
                                </div>
                                <p>pellentesque enim. Aliquam tempor</p>
                            </div>
                            <div class="menu-item col-sm-6 col-xs-12 desserts">
                                <div class="clearfix menu-wrapper">
                                    <h4>English asparagus</h4>
                                    <span class="price">$14.95</span>
                                    <div class="dotted-bg"></div>
                                </div>
                                <p>pellentesque enim. Aliquam tempor</p>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="menu-btn">
                                    <a class="btn btn-default btn-lg" href="./menu_list.php" role="button">Explore our menu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Trusted BY-->
            <section class="trusted">
                <!-- <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header wow fadeInDown">
                                <h1>Trusted By<small>These fine folks trusted tha award winning restaurant</small></h1>
                            </div>
                        </div>
                    </div>
                    <div class="row wow fadeInUp">
                        <div class="col-md-12">
                            <div class="trusted-sponsors">

                                <img src="img/sponsor/foodsquare.png" alt="sponsors">

                                <img src="img/sponsor/opentable.png" alt="sponsors">

                                <img src="img/sponsor/tripadvisor.png" alt="sponsors">

                                <img src="img/sponsor/zomato.png" alt="sponsors">

                                <img src="img/sponsor/foodsquare.png" alt="sponsors">

                                <img src="img/sponsor/opentable.png" alt="sponsors">

                                <img src="img/sponsor/tripadvisor.png" alt="sponsors">

                                <img src="img/sponsor/zomato.png" alt="sponsors">

                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- Quotes section-->
                <div class="trusted-quote">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-offset-1 col-md-10">
                                <div class="trusted-slider">
                                    <ul class="slides">
                                        <li>
                                            <img src="img/quote.png" alt="quote">
                                            <p class="quote-body"> I liked the meal serving size and did appreciate extra cutlery provided with it. Malai kofta was delicious and fresh and I would definitely recommend the food to my friends. Option to add another side or a drink to the meal is something that will complement the service. Sometimes I like to enjoy both, rice and naan with Shahi Paneer.</p>
                                            <p class="quote-author">Saatvik Walia, <span>Waterloo</span></p>
                                        </li>
                                        <!-- <li>
                                            <img src="img/quote.png" alt="quote">
                                            <p class="quote-body">You might not find dragon meat on the menu, but you’ll find pretty much anything else that walks, swims or flies, cooked up in more ways than there are people in the Guangdong province. This Midtown mainstay has a 20-year history of delivering mouth-watering and Cantonese style chow.</p>
                                            <p class="quote-author">Gemma Arterton, <span>Bay Area</span></p>
                                        </li>
                                        <li>
                                            <img src="img/quote.png" alt="quote">
                                            <p class="quote-body">This NYC historical landmark in the heart of the Theatre District has been serving up suds and down home pub food since 1892, surviving prohibition by renting the front of its then Rockefeller Center façade to Greek florists, while the Hurley brothers ran a speak-easy in back.</p>
                                            <p class="quote-author">Zachary Burton, <span>Sanfransisco</span></p>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="instagram">
                <!-- <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header wow fadeInDown">
                                <h1>Instagram<small>We love posting photos of our coustomers having a good time</small></h1>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- instafeed div-->
                <!-- Change your settings in the data- attributes (See documentation for help) -->
                <!-- <div id="instafeed" data-username="YOUR_INSTAGRAM_USERNAME_HERE" data-access-token="YOUR_INSTAGRAM_ACCESS_TOKEN_HERE" data-client-id="YOUR_INSTAGRAM_CLIENT_ID_HERE">

                </div> -->
            </section>

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
    <script src="js/vendor/validate.js"></script>
    <script src="js/reservation.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>

</body>

</html>
