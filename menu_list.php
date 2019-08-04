<?php   
        $menuString = '[{"name":"Butter Chicken","price":"10.99","type":"mains chicken","description":"A delicious preparation of tandoori chicken cooked in creamy tomato sauce"},{"name":"Chicken Curry","price":"10.99","type":"mains chicken","description":"A delicious preparation of tandoori chicken cooked in creamy tomato sauce"},{"name":"Chicken Korma","price":"10.99","type":"mains chicken","description":"Chicken cooked in cream & yogurt sauce and spices"},{"name":"Chicken Saag","price":"10.99","type":"mains chicken","description":"Marinated chicken cooked with mustard greens & spices"},{"name":"Radda Chicken","price":"10.99","type":"mains chicken","description":"Cooked in minced meat with herbs & spices"},{"name":"Karahi Chicken","price":"10.99","type":"mains chicken","description":"Tender chicken lightly cooked with fresh ginger, garlic, cilantro, diced tomatoes, onion, bell pepper with kadhai special"},{"name":"Achari Chicken","price":"10.99","type":"mains chicken","description":"Cooked in yogurt tomato sauce with spices"},{"name":"Mutton Saag","price":"10.99","type":"mains mutton","description":"Tender pieces of mutton cooked with mustard greens"},{"name":"Mutton Curry","price":"10.99","type":"mains mutton","description":"Tender pieces of mutton cooked in an aromatic indian sauce"},{"name":"Mutton Radda","price":"10.99","type":"mains mutton","description":"Cooked in minced meat with herbs & spices"},{"name":"Karahi Mutton","price":"10.99","type":"mains mutton","description":"Mutton lightly cooked with fresh ginger, garlic, cilantro, diced tomatoes, onion and bell pepper with kadhai special"},{"name":"Fish Curry","price":"10.99","type":"mains seafood","description":"A delicious dish cooked with fish fillet cooked in onion & tomato sauce"},{"name":"Shrimp Masala","price":"10.99","type":"mains seafood","description":"Shrip sauted in chopped onions & tomatoes, bell pepper & cooked with fresh ginger & garlic"},{"name":"Chicken Biriyani","price":"10.99","type":"mains biriyani","description":"Rice and tender pieces of chicken cooked with exotic indian herbs"},{"name":"Mutton Biriyani","price":"10.99","type":"mains biriyani","description":"Rice and tender pieces of mutton cooked with exotic indian herbs"},{"name":"Dal Makhani or Tadhka","price":"10.99","type":"mains veg","description":"Dal cooked inspices, butter & cream"},{"name":"Channa Masala","price":"10.99","type":"mains veg","description":"Chick peas cooked in indian spices"},{"name":"Saag","price":"10.99","type":"mains veg","description":"Cooked with fresh ginger, garlic tomato & onion"},{"name":"Palak Paneer","price":"10.99","type":"mains veg","description":"Homemade paneer blended with spinach & cooked in indian spices"},{"name":"Shahi Paneer","price":"10.99","type":"mains veg","description":"Homemade paneer cooked in an aromatic cream based sauce"},{"name":"Paneer Tikka Masala","price":"10.99","type":"mains veg","description":"Fresh & soft paneer cooked in an aromatic cream based sauce"},{"name":"Mutter Paneer","price":"10.99","type":"mains veg","description":"Green peas & paneer in indian spices"},{"name":"Karahi Paneer","price":"10.99","type":"mains veg","description":"Paneer cooked with fresh ginger, garlic, cilantro, diced tomatoes, onion & bell pepper with kadai special"},{"name":" Malai Kofta","price":"10.99","type":"mains veg","description":"Stuffed in mince paneer, cooked with our special spices"},{"name":"Veg Biriyani","price":"10.99","type":"mains biriyani","description":"Rice and tender pieces of mutton cooked with exotic indian herbs"},{"name":"Plain Rice","price":"0","type":"sides"},{"name":"Jeera Rice","price":"0","type":"sides"},{"name":"Mix Veg Rice","price":"0","type":"sides"},{"name":"Naan","price":"0","type":"extra sides"},{"name":"Pop","price":"2","type":"extra"},{"name":"Rice","price":"5.5","type":"extra"}]';
        $menuJson = json_decode($menuString);
        $mains = "";
        foreach ($menuJson as $key => $value) {
            $item = "";
            $template = '<div class="menu-item col-sm-6 col-xs-12 '.$value->type.'">
                            <div class="clearfix menu-wrapper">
                                <h4>'.$value->name.'</h4>
                                <span class="price"></span>
                                
                            </div>
                            <p>'.$value->description.'</p>
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
                                    <!-- <span data-filter="*" >All</span> -->
                                    
                                    <span data-filter=".chicken" class="tagsort-active">chicken</span>
                                    <span data-filter=".mutton">mutton</span>
                                    <span data-filter=".veg" >veg</span>
                                    <span data-filter=".biriyani">biriyani</span>
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
                                <h1 class="white">Order Now<small>Our service makes us the best in town</small></h1>
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
                                    <img src="img/tiffin1.jpeg" alt="" />
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
                                    <img src="img/tiffin2.jpg" alt="" />
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
            <section class="instagram">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header wow fadeInDown">
                                <h1><small>Want us to add anything to the menu?</small></h1>
                                <div class="flex-center mb-20">
                                    <a class="btn btn-default btn-lg mr-20" href="./contact.php" role="button">Contact us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- instafeed div-->
                <!-- Change your settings in the data- attributes (See documentation for help) -->
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
