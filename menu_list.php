<?php   
        $menuString = '[{"name":"Butter Chicken","price":"10.99","type":"mains chicken"},{"name":"Chicken Curry","price":"10.99","type":"mains chicken"},{"name":"Chicken Korma","price":"10.99","type":"mains chicken"},{"name":"Chicken Saag","price":"10.99","type":"mains chicken"},{"name":"Radda Chicken","price":"10.99","type":"mains chicken"},{"name":"Karahi Chicken","price":"10.99","type":"mains chicken"},{"name":"Achari Chicken","price":"10.99","type":"mains chicken"},{"name":"Radda Chicken","price":"10.99","type":"mains chicken"},{"name":"Mutton Saag","price":"10.99","type":"mains mutton"},{"name":"Mutton Curry","price":"10.99","type":"mains mutton"},{"name":"Mutton Radda","price":"10.99","type":"mains mutton"},{"name":"Karahi Mutton","price":"10.99","type":"mains mutton"},{"name":"Fish Curry","price":"10.99","type":"mains seafood"},{"name":"Shrimp Masala","price":"10.99","type":"mains seafood"},{"name":"Chicken Biriyani","price":"10.99","type":"mains biriyani"},{"name":"Mutton Biriyani","price":"10.99","type":"mains biriyani"},{"name":"Dal Makhani","price":"10.99","type":"mains veg"},{"name":"Channa Masala","price":"10.99","type":"mains veg"},{"name":"Saag","price":"10.99","type":"mains veg"},{"name":"Palak Paneer","price":"10.99","type":"mains veg"},{"name":"Shahi Paneer","price":"10.99","type":"mains veg"},{"name":"Paneer Tikka Masala","price":"10.99","type":"mains veg"},{"name":"Mutter Paneer","price":"10.99","type":"mains veg"},{"name":"Karahi Paneer","price":"10.99","type":"mains veg"},{"name":" Malai Kofta","price":"10.99","type":"mains veg"},{"name":"Veg Biriyani","price":"10.99","type":"mains biriyani"},{"name":"Plain Rice","price":"0","type":"sides"},{"name":"Jeera Rice","price":"0","type":"sides"},{"name":"Mix Veg Rice","price":"0","type":"sides"},{"name":"Naan","price":"0","type":"sides"},{"name":"Pop","price":"2","type":"extra"},{"name":"Naan","price":"2","type":"extra"},{"name":"Rice","price":"5.5","type":"extra"}]';
        $menuJson = json_decode($menuString);
        $mains = "";
        foreach ($menuJson as $key => $value) {
            $item = "";
            $template = '<div class="menu-item col-sm-6 col-xs-12 '.$value->type.'">
                            <div class="clearfix menu-wrapper">
                                <h4>'.$value->name.'</h4>
                                <span class="price">'.$value->price.'</span>
                                <div class="dotted-bg"></div>
                            </div>
                            <p>pellentesque enim. Aliquam tempor</p>
                        </div>';
            $mains = $mains.$template;
            //array_push($mains, $template);
            
        }

?>
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
                            </li>
                            <li class="dropdown">
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
                            </li>
                            <li class="dropdown">
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
                            </li>
                            <li class="dropdown">
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
                            <h2 class="text-uppercase">Menu</h2>
                            <p>Choose from a variety of delicious food</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- menu-->
            <section class="menu space60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header wow fadeInDown">
                                <h1>Food Menu<small></small></h1>
                            </div>
                        </div>
                    </div>
                    <div class="food-menu wow fadeInUp">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="menu-tags">
                                    <span data-filter="*" class="tagsort-active">All</span>
                                    <span data-filter=".veg">mains-veg</span>
                                    <span data-filter=".chicken">mains-chicken</span>
                                    <span data-filter=".mutton">mains-mutton</span>
                                    <span data-filter=".biriyani">mains-biriyani</span>
                                    <span data-filter=".sides">sides</span>
                                    <span data-filter=".extra">Extras</span>

                                </div>
                            </div>
                        </div>
                        <div class="row menu-items">
                            <?php echo($mains)?>
                            <!-- <div class="menu-item col-sm-6 col-xs-12 starter dinner desserts">
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
                            </div> -->
                        </div>
                        <div class="row">
                            <!-- <div class="col-md-12">
                                <div class="menu-btn">
                                    <a class="btn btn-default btn-lg" href="./menu_all.html" role="button">Explore our menu</a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </section>
            <section class="features">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header wow fadeInDown">
                                <h1 class="white">Order Now<small>Our service makes us the bes in town</small></h1>
                            </div>
                        </div>
                    </div>
                    <div class="row wow fadeInUp">
                        <div class="col-md-4 col-sm-6">
                            <a class="features-tile" target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSdTQfk-gUOhNuySK_uGArZQ38s_wWBS6oks0bJ-jZzxanx6dQ/viewform?usp=pp_url&entry.1257298964=0&entry.138944944=0&entry.1321232806=0&entry.453903816=0&entry.207747968=0&entry.122946592=0&entry.644678019=0&entry.1367381266=0&entry.33772779=0&entry.1782847053=0&entry.855796109=0&entry.121015151=0&entry.2092744528=0&entry.1054105907=0&entry.2026707774=0&entry.712098623=0&entry.1263505397=0&entry.780711546=0&entry.1565670256=0&entry.1373116995=0&entry.1134740381=0&entry.233504575=0&entry.655593170=0&entry.1235996775=0&entry.1406760706=0&entry.1028738381=0&entry.1454836335=0&entry.172639683=0&entry.823929563=0&entry.840197138=0">
                                <div class="features-img">
                                    <img src="img/tiffin.jpg" alt="" />
                                </div>
                                <div class="features-content">
                                    <div class="page-header">
                                        <h1>3 day</h1>
                                    </div>
                                    <!-- <p>Aenean suscipit vehicula purus quis iaculis. Aliquam nec leo nisi. Nam urna arcu, maximus eget ex nec, consequat pellentesque enim. Aliquam tempor fringilla odio, vel ullamcorper turpis varius eu.</p> -->
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <a class="features-tile" target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSctD04Gowl4kIdQsLv2pC27XbB3KReeFl8b5QM-7hoMyPhBzQ/viewform?usp=pp_url&entry.1257298964=0&entry.138944944=0&entry.1321232806=0&entry.453903816=0&entry.207747968=0&entry.122946592=0&entry.644678019=0&entry.1367381266=0&entry.33772779=0&entry.1819038051=0&entry.392569033=0&entry.1653667122=0&entry.1782847053=0&entry.855796109=0&entry.552575174=0&entry.121015151=0&entry.2092744528=0&entry.1054105907=0&entry.2026707774=0&entry.712098623=0&entry.1263505397=0&entry.780711546=0&entry.1956020546=0&entry.1565670256=0&entry.1373116995=0&entry.1134740381=0&entry.233504575=0&entry.655593170=0&entry.1235996775=0&entry.1406760706=0&entry.1028738381=0&entry.1454836335=0&entry.172639683=0&entry.823929563=0&entry.840197138=0&entry.206304367=0&entry.1660530259=0&entry.1619362075=0&entry.970589046=0&entry.1692638586=0&entry.551018491=0&entry.1191240453=0">
                                <div class="features-img">
                                    <img src="img/tiffin.jpg" alt="" />
                                </div>
                                <div class="features-content">
                                    <div class="page-header">
                                        <h1>4 day</h1>
                                    </div>
                                    <!-- <p>Aenean suscipit vehicula purus quis iaculis. Aliquam nec leo nisi. Nam urna arcu, maximus eget ex nec, consequat pellentesque enim. Aliquam tempor fringilla odio, vel ullamcorper turpis varius eu.</p> -->
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <a class="features-tile" target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLScsLIDfoFho26b_1_Cpq6JREuvMw46i_-ynlcjyAZrai7h8Xw/viewform?usp=pp_url&entry.1257298964=0&entry.138944944=0&entry.1321232806=0&entry.453903816=0&entry.207747968=0&entry.122946592=0&entry.644678019=0&entry.1367381266=0&entry.33772779=0&entry.1819038051=0&entry.392569033=0&entry.1653667122=0&entry.218948676=0&entry.1925329616=0&entry.1004153735=0&entry.1782847053=0&entry.855796109=0&entry.552575174=0&entry.121015151=0&entry.2092744528=0&entry.1054105907=0&entry.2026707774=0&entry.712098623=0&entry.1263505397=0&entry.780711546=0&entry.1956020546=0&entry.1565670256=0&entry.1373116995=0&entry.1134740381=0&entry.233504575=0&entry.655593170=0&entry.1235996775=0&entry.1406760706=0&entry.1028738381=0&entry.1454836335=0&entry.172639683=0&entry.823929563=0&entry.840197138=0&entry.206304367=0&entry.1660530259=0&entry.1619362075=0&entry.970589046=0&entry.1692638586=0&entry.551018491=0&entry.1191240453=0&entry.1754365652=0&entry.2049819649=0&entry.1971049934=0&entry.1386675131=0&entry.1552911093=0&entry.27528735=0&entry.372407190=0">
                                <div class="features-img">
                                    <img src="img/tiffin.jpg" alt="" />
                                </div>
                                <div class="features-content">
                                    <div class="page-header">
                                        <h1>5 day</h1>
                                    </div>
                                    <!-- <p>Aenean suscipit vehicula purus quis iaculis. Aliquam nec leo nisi. Nam urna arcu, maximus eget ex nec, consequat pellentesque enim. Aliquam tempor fringilla odio, vel ullamcorper turpis varius eu.</p> -->
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 hidden visible-sm">
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
    <script src="js/main.js"></script>
    <script src="js/vendor/mc/jquery.ketchup.all.min.js"></script>
    <script src="js/vendor/mc/main.js"></script>

</body>

</html>
