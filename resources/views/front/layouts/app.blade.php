<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <!-- =====  BASIC PAGE NEEDS  ===== -->
    <meta charset="utf-8">
    <title>Goldfish</title>
    <!-- =====  SEO MATE  ===== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="distribution" content="global">
    <meta name="revisit-after" content="2 Days">
    <meta name="robots" content="ALL">
    <meta name="rating" content="8 YEARS">
    <meta name="Language" content="en-us">
    <meta name="GOOGLEBOT" content="NOARCHIVE">
    <!-- =====  MOBILE SPECIFICATION  ===== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="width=device-width">
    <!-- =====  CSS  ===== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/bootsnav.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/heroslider.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/owl.carousel.css') }}">
    <link rel="shortcut icon" href="{{ asset('front-assets/images/favicon.png') }}">
    <link rel="apple-touch-icon" href="https://html.lionode.com/civil-engineer/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72"
        href="https://html.lionode.com/civil-engineer/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114"
        href="https://html.lionode.com/civil-engineer/images/apple-touch-icon-114x114.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Add this inside <head> -->



</head>


<body id="home">
    <!-- =====  LODER  ===== -->
    <div class="loder"></div>
    <div class="wrapper">
        <!-- =====  HEADER START  ===== -->
        <header id="header">
            <!-- Start Navigation -->
            <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">
                <!-- Start Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>
                <!-- End Top Search -->
                <div class="container">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="dropdown">
                                <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-shopping-bag"></i>
                                    <span class="badge">3</span>
                                </a>
                                <ul class="dropdown-menu cart-list">
                                    <li>
                                        <a href="index.html#" class="photo"><img
                                                src="{{ asset('front-assets/images/thumb/thumb01.jpg') }}"
                                                class="cart-thumb" alt="" /></a>
                                        <h6><a href="index.html#">Delica omtantur </a></h6>
                                        <p>2x - <span class="price">$99.99</span></p>
                                    </li>
                                    <li>
                                        <a href="index.html#" class="photo"><img
                                                src="{{ asset('front-assets/images/thumb/thumb02.jpg') }}"
                                                class="cart-thumb" alt="" /></a>
                                        <h6><a href="index.html#">Omnes ocurreret</a></h6>
                                        <p>1x - <span class="price">$33.33</span></p>
                                    </li>
                                    <li>
                                        <a href="index.html#" class="photo"><img
                                                src="{{ asset('front-assets/images/thumb/thumb03.jpg') }}"
                                                class="cart-thumb" alt="" /></a>
                                        <h6><a href="index.html#">Agam facilisis</a></h6>
                                        <p>2x - <span class="price">$99.99</span></p>
                                    </li>
                                    <li class="total">
                                        <span class="pull-right"><strong>Total</strong>: $0.00</span>
                                        <a href="index.html#" class="btn btn-default btn-cart">Cart</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="search"><a href="index.html#"><i class="fa fa-search"></i></a></li>
                            {{-- <li class="side-menu"><a href="index.html#"><i class="fa fa-bars"></i></a></li> --}}
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.html">
                            <img src="{{ asset('front-assets/images/brand/logo-white.png') }}"
                                class="logo logo-display" alt="">
                            <img src="{{ asset('front-assets/images/brand/logo-black.png') }}"
                                class="logo logo-scrolled" alt="">
                        </a>
                    </div>
                    <!-- End Header Navigation -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li class="dropdown megamenu-fw">
                                <a href="portfolio_2col_grid.html" class="dropdown-toggle"
                                    data-toggle="dropdown">Projects</a>
                                <ul class="dropdown-menu megamenu-content" role="menu">
                                    <li>
                                        <div class="row">
                                            <div class="col-menu col-md-3">
                                                <h6 class="title">Construction</h6>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="portfolio_2col_grid.html">Interior design</a></li>
                                                        <li><a href="portfolio_2col_grid.html">Condo remodeling</a>
                                                        </li>
                                                        <li><a href="portfolio_2col_grid.html">Metal roofing</a></li>
                                                        <li><a href="portfolio_2col_grid.html">Architecture</a></li>
                                                        <li><a href="portfolio_2col_grid.html">General contracting</a>
                                                        </li>
                                                        <li><a href="portfolio_2col_grid.html">House renovation</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- end col-3 -->
                                            <div class="col-menu col-md-3">
                                                <h6 class="title">Workspaces</h6>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="portfolio_2col_grid.html">Interior design</a></li>
                                                        <li><a href="portfolio_2col_grid.html">Condo remodeling</a>
                                                        </li>
                                                        <li><a href="portfolio_2col_grid.html">Metal roofing</a></li>
                                                        <li><a href="portfolio_2col_grid.html">Architecture</a></li>
                                                        <li><a href="portfolio_2col_grid.html">General contracting</a>
                                                        </li>
                                                        <li><a href="portfolio_2col_grid.html">House renovation</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- end col-3 -->
                                            <div class="col-menu col-md-3">
                                                <h6 class="title">Grid</h6>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="portfolio_2col_grid.html">2 Columns</a></li>
                                                        <li><a href="portfolio_2col_grid_no_space.html">2 Columns No
                                                                Space</a></li>
                                                        <li><a href="portfolio_3col_grid.html">3 Columns</a></li>
                                                        <li><a href="portfolio_3col_grid_no_space.html">3 Columns No
                                                                Space</a></li>
                                                        <li><a href="portfolio_4col_grid.html">4 Columns</a></li>
                                                        <li><a href="portfolio_4col_grid_no_space.html">4 Columns No
                                                                Space</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-menu col-md-3">
                                                <h6 class="title">Masonry</h6>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="portfolio_2col_mesonary.html">2 Columns</a></li>
                                                        <li><a href="portfolio_2col_mesonary_no_space.html">2 Columns
                                                                No Space</a></li>
                                                        <li><a href="portfolio_3col_mesonary.html">3 Columns</a></li>
                                                        <li><a href="portfolio_3col_mesonary_no_space.html">3 Columns
                                                                No Space</a></li>
                                                        <li><a href="portfolio_4col_mesonary.html">4 Columns</a></li>
                                                        <li><a href="portfolio_4col_mesonary_no_space.html">4 Columns
                                                                No Space</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- end col-3 -->
                                        </div>
                                        <!-- end row -->
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="blog_2col_grid.html" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">Grid</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog_2col_grid.html">2 Columns</a></li>
                                            <li><a href="blog_3col_grid.html">3 Columns</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="index.html#" class="dropdown-toggle"
                                            data-toggle="dropdown">Masonry</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog_2col_mesonary.html">2 Columns</a></li>
                                            <li><a href="blog_3col_mesonary.html">3 Columns</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">Blog
                                            Detail</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="single_blog_image.html">Single Blog Image</a></li>
                                            <li><a href="single_blog_slider.html">Single Blog Slider</a></li>
                                            <li><a href="single_blog_you_video.html">Single Blog Youtube</a></li>
                                            <li><a href="single_blog_vimeo_video.html">Single Blog Vimeo</a></li>
                                            <li><a href="single_blog_quote.html">Single Blog Quote</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="shop_3col.html" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">Shop</a>
                                        <ul class="dropdown-menu">
                                            <li> <a href='shop_3col.html'>3colunm</a></li>
                                            <li> <a href='shop_3col_left_sidebar.html'>3colunm Left Sidebar</a></li>
                                            <li> <a href='shop_3col_right_sidebar.html'>3colunm Right Sidebar</a></li>
                                            <li> <a href='shop_4col.html'>4colunm</a></li>
                                            <li> <a href='shop_4col_left_sidebar.html'>4colunm Left Sidebar</a></li>
                                            <li> <a href='shop_4col_right_sidebar.html'>4colunm Right Sidebar</a></li>
                                            <li> <a href='shop_detail.html'> Detail Page</a></li>
                                            <li> <a href='checkout_page.html'>Checkout Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="team.html" class="dropdown-toggle" data-toggle="dropdown">Team</a>
                                        <ul class="dropdown-menu">
                                            <li> <a href='team.html'>Team 3colunm Grid</a></li>
                                            <li> <a href='team_3col_slider.html'>Team 3colunm Slider</a></li>
                                            <li> <a href='team_4col.html'>Team 4colunm Grid</a></li>
                                            <li> <a href='team_4col_slider.html'>Team 4colunm slider</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="index.html#" class="dropdown-toggle"
                                            data-toggle="dropdown">Elements</a>
                                        <ul class="dropdown-menu">
                                            <li> <a href='pricing.html'>Pricing</a></li>
                                            <li> <a href='components.html'>Components</a></li>
                                            <li> <a href='accordian.html'>Accordian</a></li>
                                            <li> <a href='progress_bar.html'>Progress bar</a></li>
                                            <li> <a href='tabs.html'>Tabs</a></li>
                                            <li> <a href='typography.html'>Typography</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">Contact Us</a>
                                <ul class="dropdown-menu">
                                    <li> <a href='contact.html'>Contact</a></li>
                                    <li> <a href='contact_fom_top.html'>Contact Form Topside</a></li>
                                    <li> <a href='contact_map_right.html'>Map Rightside</a></li>
                                    <li> <a href='contact_map_top.html'>Map Topside</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- Start Side Menu -->
                <div class="side">
                    <a href="index.html#" class="close-side"><i class="fa fa-times"></i></a>
                    <div class="widget">
                        <h6 class="title">English Language</h6>
                        <ul class="link">
                            <li><a href="index.html#">English</a></li>
                            <li><a href="index.html#">Russian</a></li>
                            <li><a href="index.html#">Deutsch</a></li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h6 class="title">USD Currency</h6>
                        <ul class="link">
                            <li><a href="index.html#">€ Euro</a></li>
                            <li><a href="index.html#">£ Pound Sterling</a></li>
                            <li><a href="index.html#">$ US Dollar</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Side Menu -->
            </nav>
            <!-- End Navigation -->
            <div class="clearfix"></div>
        </header>
        <!-- =====  HEADER END  ===== -->


        <main>

            @yield('content')


        </main>




        <!-- =====  FOOTER START  ===== -->
        <div id="contact" class="footer ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 mtb_40 text-left wow fadeInUp" data-wow-delay=".2s">
                        <h4 class="footer-title ptb_20 light uppr ">Contact Us</h4>
                        <ul>
                            <li>B-14 Collins Street West Victoria 2386 lorems colerfes state</li>
                            <li>(+123) 456 789 - (+024) 666 888</li>
                            <li>Contact@yourcompany.com</li>
                        </ul>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="footer-logo mt_20 mb_20"> <a href="index.html"> <img
                                    src="{{ asset('front-assets/images/brand/logo-white.png') }}"
                                    alt="Civil Engineer"> </a> </div>
                        <div class="footer-link">
                            <ul>
                                <li><a href="index.html">Home </a></li>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="portfolio_2col_grid.html">Projects</a></li>
                                <li><a href="blog_2col_grid.html">Blog</a></li>
                                <li> <a href="team.html">Team</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <div class="copyright-part mtb_10">@ 2018 All Rights Reserved <a
                                href="http://lionode.com/">Civil Engineer</a></div>
                        <div class="social_icon">
                            <ul>
                                <li><a href="index.html#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="index.html#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="index.html#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="index.html#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 mtb_40 text-right wow fadeInUp" data-wow-delay=".6s">
                        <h4 class="footer-title ptb_20 light uppr">SIGN UP OUR NEWSLETTER</h4>
                        <div class="form-group light">
                            <input placeholder="Enter Your Email Address" type="text">
                            <br>
                            <button class="custom-btn btn-12 light mt_10">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- =====  FOOTER END  ===== -->
    </div>
    <!-- =====  WRAPPER END  ===== -->
    <!-- =====  SCRIPT START  ===== -->




    <script src="{{ asset('front-assets/js/jQuery_v3.1.1.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('front-assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/menu.js') }}"></script>
    <script src="{{ asset('front-assets/js/custom.js') }}"></script>
    <script src="{{ asset('front-assets/js/wow.js') }}"></script>
    <script src="{{ asset('front-assets/js/parallax.js') }}"></script>
    <script src="{{ asset('front-assets/js/circle-progress.js') }}"></script>
    <script src="{{ asset('front-assets/js/circle-examples.js') }}"></script>
    <script src="{{ asset('front-assets/js/jquery.easeScroll.js') }}"></script>
    <script src="{{ asset('front-assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/bootsnav.js') }}"></script>


    <script>
        $("html").easeScroll();
        // Add scrollspy to <body>
        $('body').scrollspy({
            target: '#menu'
        })
        $("#menu ul li a[href^='#']").on('click', function(e) {
            // prevent default anchor click behavior
            e.preventDefault();
            // store hash
            var hash = this.hash;
            // animate
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 1500, function() {
                // when done, add hash to url
                // (default click behaviour)
                window.location.hash = hash;
            });
        });
    </script>
    <!-- =====  SCRIPT END  ===== -->
</body>

</html>
