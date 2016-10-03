<!DOCTYPE html>
<!-- saved from url=(0031) -->
<html lang="en"
      class=" js canvas no-touch rgba multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations cssgradients csstransforms csstransforms3d csstransitions fontface generatedcontent video audio svg svgclippaths">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>M-Store | Modern E-Commerce Template</title>

    <!--SEO Meta Tags-->
    <meta name="description" content="M-Store - Modern E-Commerce Template">
    <meta name="keywords"
          content="shop, e-commerce, modern, minimalist style, responsive, online store, business, mobile, blog, bootstrap, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Rokaux">

    <!--Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!--Favicon-->
    <link rel="shortcut icon" href="/images/store/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/images/store/favicon.ico" type="image/x-icon">

    <!-- Google Material Icons -->
    <link href="/css/store/material-icons.min.css" rel="stylesheet" media="screen">

    <!-- Brand Icons -->
    <link href="/css/store/socicon.min.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="/css/store/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- Theme Styles -->
    <link href="/css/store/theme.min.css" rel="stylesheet" media="screen">

    <!-- Page Preloading -->
    <script src="/js/store/page-preloading.js"></script>

    <!-- Modernizr -->
    <script src="/js/store/modernizr.custom.js"></script>
</head>

<!-- Body -->
<!-- Adding/Removing class ".page-preloading" is enabling/disabling background smooth page transition effect and spinner. Make sure you also added/removed link to page-preloading.js script in the <head> of the document. -->
<body class="page-preloading hasScrollbar loading-done">

<!-- Page Pre-Loader -->
<div class="page-preloader">
    <div class="preloader">
        <img src="/images/store/preloader.gif" alt="Preloader">
    </div>
</div><!-- .page-preloader -->

<!-- Page Wrapper -->
<div class="page-wrapper">

    <!-- Navbar -->
    <!-- Remove ".navbar-sticky" class to make navigation bar scrollable with the page. -->
    <header class="navbar navbar-sticky">

        <!-- Site Logo -->
        <a href="{{url('/store')}}" class="site-logo visible-desktop">
            <span>[</span> M
            <span class="text-gray">/</span>
            STORE <span>]</span>
        </a><!-- site-logo.visible-desktop -->
        <a href="{{url('/store')}}" class="site-logo visible-mobile">
            <span>[</span> M <span>]</span>
        </a><!-- site-logo.visible-mobile -->

        <!-- Language Switcher -->
        <div class="lang-switcher">
            <div class="lang-toggle">
                <img src="/images/store/GB.png" alt="English">
                <i class="material-icons arrow_drop_down"></i>
                <ul class="lang-dropdown">
                    <li><a href="#"><img src="/images/store/FR.png" alt="French">FR</a></li>
                    <li><a href="#"><img src="/images/store/DE.png" alt="German">DE</a></li>
                    <li><a href="#"><img src="/images/store/IT.png" alt="Italian">IT</a></li>
                </ul>
            </div>
        </div><!-- .lang-switcher -->

        <!-- Toolbar -->
        <div class="toolbar">
            <div class="inner">
                <a href="#menu" class="toolbar-toggle"><i class="material-icons menu"></i></a>
                <a href="#account" class="toolbar-toggle"><i class="material-icons person"></i></a>
                <a href="#cart" class="toolbar-toggle">
                    <i>
                        <span class="material-icons shopping_basket"></span>
                        <span class="count">2</span>
                    </i>
                </a>
            </div>
        </div><!-- .toolbar -->

        <!-- Toolbar Dropdown -->
        <div class="toolbar-dropdown">

            <!-- Menu -->
            <div class="toolbar-section" id="menu">
                <div class="inner">
                    <ul class="main-navigation space-bottom">
                        <li class="menu-item-has-children current-menu-item">
                            <a href="#">Home</a>
                            <ul class="sub-menu">
                                <li class="current-menu-item"><a href="{{url('/store')}}">Home Version 1</a></li>
                                <li><a href="{{url('/store/home-v2')}}">Home Version 2</a></li>
                                <li><a href="{{url('/store/home-v3')}}">Home Version 3</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="shop-fullwidth-sl.html">Full Width Sidebar Left</a></li>
                                <li><a href="shop-fullwidth-sr.html">Full Width Sidebar Right</a></li>
                                <li><a href="shop-fullwidth-ft.html">Full Width Filters Top</a></li>
                                <li><a href="shop-boxed-sl.html">Boxed Sidebar Left</a></li>
                                <li><a href="shop-boxed-sr.html">Boxed Sidebar Right</a></li>
                                <li><a href="shop-boxed-ft.html">Boxed Filters Top</a></li>
                                <li><a href="shop-single.html">Single Product</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="elements.html">Elements</a></li>
                    </ul><!-- .main-navigation -->
                    <ul class="list-icon text-sm">
                        <li>
                            <i class="material-icons location_on"></i>
                            45 Park Avenue, Apt. 303<br>New York, NY 10016, USA
                        </li>
                        <li>
                            <i class="material-icons phone"></i>
                            001 (917) 555-4836
                        </li>
                        <li>
                            <i class="material-icons email"></i>
                            <a href="mailto:info@m-store.com">info@m-store.com</a>
                        </li>
                        <li>
                            <i class="socicon-skype"></i>
                            <a href="#">skype_id</a>
                        </li>
                    </ul><!-- .list-icon -->
                    <span class="text-sm display-inline"
                          style="margin-bottom: 6px;">Social accounts: &nbsp;&nbsp;</span>
                    <div class="social-bar display-inline">
                        <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title=""
                           data-original-title="Facebook">
                            <i class="socicon-facebook"></i>
                        </a>
                        <a href="#" class="sb-google-plus" data-toggle="tooltip" data-placement="top" title=""
                           data-original-title="Google+">
                            <i class="socicon-googleplus"></i>
                        </a>
                        <a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top" title=""
                           data-original-title="Twitter">
                            <i class="socicon-twitter"></i>
                        </a>
                        <a href="#" class="sb-instagram" data-toggle="tooltip" data-placement="top" title=""
                           data-original-title="Instagram">
                            <i class="socicon-instagram"></i>
                        </a>
                    </div>
                </div><!-- .inner -->
            </div><!-- .toolbar-section#menu -->

            <!-- Account (Login) -->
            <div class="toolbar-section" id="account">
                <h3 class="toolbar-title space-bottom">You are not logged in.</h3>
                <div class="inner">
                    <form method="post" class="login-form">
                        <input type="text" class="form-control" placeholder="Username" required="">
                        <input type="password" class="form-control" placeholder="Password" required="">
                        <div class="form-footer">
                            <div class="rememberme">
                                <label class="checkbox">
                                    <div class="icheckbox checked"><input type="checkbox" checked=""
                                                                          style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper"
                                             style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
                                    </div>
                                    Remember me
                                </label>
                            </div>
                            <div class="form-submit">
                                <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Login
                                </button>
                            </div>
                        </div>
                    </form><!-- .login-form -->
                    <p class="text-sm space-top">Don’t have an account? <a href="#signup" class="toggle-section">Signup
                            here</a> or with social account:</p>
                    <a href="#" class="social-signup-btn ssb-facebook">
                        <i class="socicon-facebook"></i>
                        <span>Signup with Facebook</span>
                    </a>
                    <a href="#" class="social-signup-btn ssb-google">
                        <i class="socicon-googleplus"></i>
                        <span>Signup with Google+</span>
                    </a>
                    <a href="#" class="social-signup-btn ssb-twitter">
                        <i class="socicon-twitter"></i>
                        <span>Signup with Twitter</span>
                    </a>
                </div><!-- .inner -->
            </div><!-- .toolbar-section#account -->

            <!-- Account (Sign Up) -->
            <div class="toolbar-section" id="signup">
                <h3 class="toolbar-title space-bottom">Sign up, it's free</h3>
                <div class="inner">
                    <form method="post" class="login-form">
                        <input type="email" class="form-control" placeholder="E-mail" required="">
                        <input type="password" class="form-control" placeholder="Password" required="">
                        <input type="password" class="form-control" placeholder="Repeat password" required="">
                        <div class="form-footer">
                            <div class="rememberme"></div>
                            <div class="form-submit">
                                <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Sign
                                    up
                                </button>
                            </div>
                        </div>
                    </form><!-- .login-form -->
                    <p class="text-sm space-top">Already have an account? Than <a href="#account"
                                                                                  class="toggle-section">Login here</a>
                    </p>
                </div><!-- .inner -->
            </div><!-- .toolbar-section#account -->

            <!-- Cart -->
            <div class="toolbar-section" id="cart">
                <div class="shopping-cart">
                    <!-- Item -->
                    <div class="item">
                        <a href="shop-single.html" class="item-thumb">
                            <img src="/images/store/item01.jpg" alt="Item">
                        </a>
                        <div class="item-details">
                            <h3 class="item-title"><a href="shop-single.html">Concrete Lamp</a></h3>
                            <h4 class="item-price">$85.90</h4>
                            <div class="count-input">
                                <a class="incr-btn" data-action="decrease" href="#">–</a>
                                <input class="quantity" type="text" value="1">
                                <a class="incr-btn" data-action="increase" href="#">+</a>
                            </div>
                        </div>
                        <a href="#" class="item-remove" data-toggle="tooltip" data-placement="top" title=""
                           data-original-title="Remove">
                            <i class="material-icons remove_shopping_cart"></i>
                        </a>
                    </div><!-- .item -->
                    <!-- Item -->
                    <div class="item">
                        <a href="shop-single.html" class="item-thumb">
                            <img src="/images/store/item02.jpg" alt="Item">
                        </a>
                        <div class="item-details">
                            <h3 class="item-title"><a href="shop-single.html">Resin Storage Box</a></h3>
                            <h4 class="item-price">$38.00</h4>
                            <div class="count-input">
                                <a class="incr-btn" data-action="decrease" href="#">–</a>
                                <input class="quantity" type="text" value="2">
                                <a class="incr-btn" data-action="increase" href="#">+</a>
                            </div>
                        </div>
                        <a href="#" class="item-remove" data-toggle="tooltip" data-placement="top" title=""
                           data-original-title="Remove">
                            <i class="material-icons remove_shopping_cart"></i>
                        </a>
                    </div><!-- .item -->
                    <!-- Subtotal -->
                    <div class="cart-subtotal space-bottom">
                        <div class="column">
                            <h3 class="toolbar-title">Subtotal:</h3>
                        </div>
                        <div class="column">
                            <h3 class="amount">$161.90</h3>
                        </div>
                    </div><!-- .subtotal -->
                    <!-- Buttons -->
                    <div class="text-right">
                        <a href="#" class="btn btn-default btn-ghost close-dropdown">Continue Shopping</a>
                        <a href="#checkout" class="btn btn-primary waves-effect waves-light toggle-section">Proceed to
                            Checkout</a>
                    </div>
                </div><!-- .shopping-cart -->
            </div><!-- .toolbar-section#cart -->

            <!-- Checkout -->
            <div class="toolbar-section" id="checkout">
                <form method="post" class="checkout-form container">
                    <div class="cart-subtotal space-bottom">
                        <div class="column">
                            <h3 class="toolbar-title">Checkout</h3>
                        </div>
                        <div class="column">
                            <h3 class="amount">
                                <small class="hidden-xs">3 items&nbsp;&nbsp;&nbsp;</small>
                                $161.90
                            </h3>
                        </div>
                    </div><!-- .subtotal -->
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="co_f_name" placeholder="First name"
                                   required="">
                            <input type="email" class="form-control" name="co_email" placeholder="Email" required="">
                            <input type="text" class="form-control" name="co_address1" placeholder="Address 1"
                                   required="">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="co_l_name" placeholder="Last name"
                                   required="">
                            <input type="tel" class="form-control" name="co_phone" placeholder="Phone" required="">
                            <input type="text" class="form-control" name="co_address2" placeholder="Address 2">
                        </div>
                    </div><!-- .row -->
                    <input type="text" class="form-control" name="co_company" placeholder="Company">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-element form-select">
                                <select class="form-control" name="co_country">
                                    <option value="">Country</option>
                                    <option value="australia">Australia</option>
                                    <option value="gb">Great Britain</option>
                                    <option value="poland">Poland</option>
                                    <option value="switzerland">Switzerland</option>
                                    <option value="usa">USA</option>
                                </select>
                            </div>
                            <div class="form-element form-select">
                                <select class="form-control" name="co_city">
                                    <option value="">City</option>
                                    <option value="bern">Bern</option>
                                    <option value="london">London</option>
                                    <option value="ny">New York</option>
                                    <option value="warsaw">Warsaw</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-element form-select">
                                <select class="form-control" name="co_state">
                                    <option value="">State</option>
                                    <option value="1">State 1</option>
                                    <option value="2">State 2</option>
                                    <option value="3">State 3</option>
                                    <option value="4">State 4</option>
                                    <option value="5">State 5</option>
                                </select>
                            </div>
                            <input type="text" class="form-control" name="co_zip" placeholder="ZIP code" required="">
                        </div>
                    </div><!-- .row -->
                    <div class="form-group">
                        <label class="radio radio-inline">
                            <div class="iradio checked"><input type="radio" name="co_shipping" checked=""
                                                               style="position: absolute; opacity: 0;">
                                <ins class="iCheck-helper"
                                     style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
                            </div>
                            Ship to this address
                        </label>
                        <label class="radio radio-inline">
                            <div class="iradio"><input type="radio" name="co_shipping"
                                                       style="position: absolute; opacity: 0;">
                                <ins class="iCheck-helper"
                                     style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
                            </div>
                            Ship to different address
                        </label>
                    </div><!-- .form-group -->
                    <div class="text-right">
                        <a href="#cart" class="btn btn-default btn-ghost icon-left toggle-section">
                            <i class="material-icons arrow_back"></i>
                            Back To Cart
                        </a>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Checkout</button>
                    </div>
                </form><!-- .checkout-form.container -->
            </div><!-- .toolbar-section#checkout -->
        </div><!-- .toolbar-dropdown -->
    </header><!-- .navbar.navbar-sticky -->

    <!-- Hero Slider -->
    <!-- Data API:
      data-loop="true/false" enable/disable looping
      data-autoplay="true/false" enable/disable carousel autoplay
      data-interval="3000" autoplay interval timeout in miliseconds
      Simply add necessary data attribute to the ".hero-carousel" with appropriate value to adjust carousel functionality.
     -->
    <section class="hero-slider" data-loop="true" data-autoplay="true" data-interval="7000">
        <div class="inner owl-carousel owl-theme owl-loaded">
            <!-- .slide -->
            <!-- .slide -->
            <!-- .slide -->
            <div class="owl-stage-outer">
                <div class="owl-stage"
                     style="transform: translate3d(-7620px, 0px, 0px); transition: 0.45s; width: 13335px;">
                    <div class="owl-item cloned" style="width: 1905px; margin-right: 0px;">
                        <div class="slide" style="background-image: url(/images/store/hero-slider/02.jpg);">
                            <div class="container text-center padding-top-3x">
                                <span class="h1 from-bottom">Stylish Chair</span><br>
                                <span class="h2 from-bottom"><span
                                            class="text-thin">Special offer: </span> <strong>-25%</strong></span><br>
                                <a href="#"
                                   class="btn btn-primary btn-with-icon-right waves-effect waves-light scale-up">
                                    View Offer
                                    <i class="material-icons arrow_forward"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 1905px; margin-right: 0px;">
                        <div class="slide" style="background-image: url(/images/store//hero-slider/03.jpg);">
                            <div class="container padding-top-3x">
                                <span class="h1 space-top from-left">Dior Sunglasses</span><br>
                                <span class="h2 from-right"><span class="text-thin">Only <span
                                                class="hidden-xs">today</span></span> <strong>-30%</strong></span><br>
                                <a href="#"
                                   class="btn btn-primary btn-with-icon-right waves-effect waves-light scale-up">
                                    View Offer
                                    <i class="material-icons arrow_forward"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 1905px; margin-right: 0px;">
                        <div class="slide" style="background-image: url(/images/store/hero-slider/01.jpg);">
                            <div class="container">
                                <div class="absolute from-top" style="top: 13%;">
                                    <span class="h1 hidden-xs">New SPA<br>Cosmetics</span>
                                </div>
                                <div class="absolute text-right from-bottom" style="bottom: 13%; right: 15px;">
                                    <span class="h2"><span
                                                class="text-thin">Only</span><br><strong>$127.99</strong></span><br>
                                    <a href="#"
                                       class="btn btn-primary btn-with-icon-right waves-effect waves-light space-top-none">
                                        View Offer
                                        <i class="material-icons arrow_forward"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 1905px; margin-right: 0px;">
                        <div class="slide" style="background-image: url(/images/store/hero-slider/02.jpg);">
                            <div class="container text-center padding-top-3x">
                                <span class="h1 from-bottom">Stylish Chair</span><br>
                                <span class="h2 from-bottom"><span
                                            class="text-thin">Special offer: </span> <strong>-25%</strong></span><br>
                                <a href="#"
                                   class="btn btn-primary btn-with-icon-right waves-effect waves-light scale-up">
                                    View Offer
                                    <i class="material-icons arrow_forward"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 1905px; margin-right: 0px;">
                        <div class="slide" style="background-image: url(/images/store/hero-slider/03.jpg);">
                            <div class="container padding-top-3x">
                                <span class="h1 space-top from-left">Dior Sunglasses</span><br>
                                <span class="h2 from-right"><span class="text-thin">Only <span
                                                class="hidden-xs">today</span></span> <strong>-30%</strong></span><br>
                                <a href="#"
                                   class="btn btn-primary btn-with-icon-right waves-effect waves-light scale-up">
                                    View Offer
                                    <i class="material-icons arrow_forward"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 1905px; margin-right: 0px;">
                        <div class="slide" style="background-image: url(/images/store/hero-slider/01.jpg);">
                            <div class="container">
                                <div class="absolute from-top" style="top: 13%;">
                                    <span class="h1 hidden-xs">New SPA<br>Cosmetics</span>
                                </div>
                                <div class="absolute text-right from-bottom" style="bottom: 13%; right: 15px;">
                                    <span class="h2"><span
                                                class="text-thin">Only</span><br><strong>$127.99</strong></span><br>
                                    <a href="#"
                                       class="btn btn-primary btn-with-icon-right waves-effect waves-light space-top-none">
                                        View Offer
                                        <i class="material-icons arrow_forward"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 1905px; margin-right: 0px;">
                        <div class="slide" style="background-image: url(/images/store/hero-slider/02.jpg);">
                            <div class="container text-center padding-top-3x">
                                <span class="h1 from-bottom">Stylish Chair</span><br>
                                <span class="h2 from-bottom"><span
                                            class="text-thin">Special offer: </span> <strong>-25%</strong></span><br>
                                <a href="#"
                                   class="btn btn-primary btn-with-icon-right waves-effect waves-light scale-up">
                                    View Offer
                                    <i class="material-icons arrow_forward"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-controls">
                <div class="owl-nav">
                    <div class="owl-prev" style=""></div>
                    <div class="owl-next" style=""></div>
                </div>
                <div class="owl-dots" style="">
                    <div class="owl-dot"><span></span></div>
                    <div class="owl-dot"><span></span></div>
                    <div class="owl-dot active"><span></span></div>
                </div>
            </div>
        </div><!-- .inner -->
    </section><!-- .hero-slider -->

    <!-- Content Wide -->
    <section class="container-fluid padding-top-3x">

        <!-- Featured Categories -->
        <h3 class="text-center padding-top">Categories</h3>
        <div class="row padding-top padding-bottom-3x">
            <div class="col-sm-3 col-xs-6">
                <a href="#" class="category-link">
                    <img src="/images/store/cat01.jpg" alt="Category">
                    Clocks
                </a><!-- .category-link -->
            </div><!-- .col-sm-4 -->
            <div class="col-sm-3 col-xs-6">
                <a href="#" class="category-link">
                    <img src="/images/store/cat02.jpg" alt="Category">
                    Furniture
                </a><!-- .category-link -->
            </div><!-- .col-sm-4 -->
            <div class="col-sm-3 col-xs-6">
                <a href="#" class="category-link">
                    <img src="/images/store/cat03.jpg" alt="Category">
                    Lightning
                </a><!-- .category-link -->
            </div><!-- .col-sm-4 -->
            <div class="col-sm-3 col-xs-6">
                <a href="#" class="category-link">
                    <img src="/images/store/cat04.jpg" alt="Category">
                    Bags
                </a><!-- .category-link -->
            </div><!-- .col-sm-4 -->
        </div><!-- .row -->

        <div class="row padding-top">

            <!-- Special Offer -->
            <div class="col-lg-3 col-md-4">
                <div class="info-box text-center">
                    <h2>Special Offer<br><span class="text-danger">-30%</span></h2>
                    <a href="shop-single.html" class="inline">
                        <img src="/images/store/special-offer.jpg" alt="Special Offer">
                    </a>
                    <h3 class="lead text-normal space-bottom-half"><a href="shop-single.html" class="link-title">FLOS
                            Outdoor Lightning</a></h3>
                    <span class="lead text-normal text-gray text-crossed">$800.00</span>
                    <span class="h4 text-normal text-danger">$560.00</span>

                    <!-- Countdown -->
                    <!-- Date Format: month/day/year. "date-time" data attribute is required. -->
                    <div class="countdown space-top-half padding-top" data-date-time="07/30/2017 12:00:00">
                        <div class="item">
                            <div class="days">299</div>
                            <span class="days_ref">Days</span>
                        </div>
                        <div class="item">
                            <div class="hours">20</div>
                            <span class="hours_ref">Hours</span>
                        </div>
                        <div class="item">
                            <div class="minutes">47</div>
                            <span class="minutes_ref">Mins</span>
                        </div>
                        <div class="item">
                            <div class="seconds">44</div>
                            <span class="seconds_ref">Secs</span>
                        </div>
                    </div><!-- .counter -->
                </div><!-- .info-box -->
                <div class="padding-bottom-2x visible-xs"></div>
            </div><!-- .col-lg-3.col-md-4 -->

            <!-- Products -->
            <div class="col-lg-9 col-md-8">
                <!-- Nav Tabs -->
                <ul class="nav-tabs text-center" role="tablist">
                    <li class="active"><a href="#newcomers" role="tab" data-toggle="tab">New Arrivals</a></li>
                    <li><a href="#toprated" role="tab" data-toggle="tab">Top Rated</a></li>
                    <li><a href="#onsale" role="tab" data-toggle="tab">On Sale</a></li>
                </ul><!-- .nav-tabs -->

                <!-- Tab Panes -->
                <div class="tab-content">

                    <!-- #newcomers -->
                    <div role="tabpanel" class="tab-pane transition fade scale in active" id="newcomers">
                        <div class="row space-top-half">
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                                        <span class="shop-label text-danger">Sale</span>
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th01.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Storage Box</a></h3>
                                        <span class="shop-item-price">
                        <span class="old-price">$49.00</span>
                        $38.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th02.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Shoulder Bag</a></h3>
                                        <span class="shop-item-price">
                        $125.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th03.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Glass Vase</a></h3>
                                        <span class="shop-item-price">
                        $62.50
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th04.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Alarm Clock</a></h3>
                                        <span class="shop-item-price">
                        $178.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                        </div><!-- .row -->
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th05.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Wall Clock</a></h3>
                                        <span class="shop-item-price">
                        $69.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th06.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">LED Lighting</a></h3>
                                        <span class="shop-item-price">
                        $130.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                                        <span class="shop-label text-warning">Popular</span>
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th07.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Sunglasses</a></h3>
                                        <span class="shop-item-price">
                        $99.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th08.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Hook Basket</a></h3>
                                        <span class="shop-item-price">
                        $112.35
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                        </div><!-- .row -->
                    </div><!-- .tab-pane#newcomers -->

                    <!-- #toprated -->
                    <div role="tabpanel" class="tab-pane transition fade scale" id="toprated">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                      <span class="item-rating text-warning">
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                      </span>
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th09.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Leather Case</a></h3>
                                        <span class="shop-item-price">
                        $118.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                      <span class="item-rating text-warning">
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                      </span>
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th10.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Concrete Lamp</a></h3>
                                        <span class="shop-item-price">
                        $85.90
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                      <span class="item-rating text-warning">
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star_half"></i>
                      </span>
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th11.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Stylish Chair</a></h3>
                                        <span class="shop-item-price">
                        $417.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                      <span class="item-rating text-warning">
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star_border"></i>
                      </span>
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th12.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Desktop Light</a></h3>
                                        <span class="shop-item-price">
                        $245.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                        </div><!-- .row -->
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                      <span class="item-rating text-warning">
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star_border"></i>
                      </span>
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th13.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Storage Jar</a></h3>
                                        <span class="shop-item-price">
                        $19.80
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                      <span class="item-rating text-warning">
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star_half"></i>
                        <i class="material-icons star_border"></i>
                      </span>
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th14.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Ceramic Watch</a></h3>
                                        <span class="shop-item-price">
                        $299.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                      <span class="item-rating text-warning">
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star_half"></i>
                        <i class="material-icons star_border"></i>
                      </span>
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th15.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Tissue Holder</a></h3>
                                        <span class="shop-item-price">
                        $76.40
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                      <span class="item-rating text-warning">
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star_border"></i>
                        <i class="material-icons star_border"></i>
                      </span>
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th16.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Pendant Lamp</a></h3>
                                        <span class="shop-item-price">
                        $27.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                        </div><!-- .row -->
                    </div><!-- .tab-pane#toprated -->

                    <!-- #onsale -->
                    <div role="tabpanel" class="tab-pane transition fade scale" id="onsale">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                                        <span class="shop-label text-danger">Sale</span>
                                        <a href="#" class="item-link"></a>
                                        <img src="/images/store/th05.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="#">Wall Clock</a></h3>
                                        <span class="shop-item-price">
                        <span class="old-price">$69.00</span>
                        $48.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                                        <span class="shop-label text-danger">Sale</span>
                                        <a href="#" class="item-link"></a>
                                        <img src="/images/store/th06.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="#">LED Lighting</a></h3>
                                        <span class="shop-item-price">
                        <span class="old-price">$155.00</span>
                        $130.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                                        <span class="shop-label text-danger">Sale</span>
                                        <a href="#" class="item-link"></a>
                                        <img src="/images/store/th04.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="#">Alarm Clock</a></h3>
                                        <span class="shop-item-price">
                        <span class="old-price">$225.00</span>
                        $178.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                                        <span class="shop-label text-danger">Sale</span>
                                        <a href="#" class="item-link"></a>
                                        <img src="/images/store/th08.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="#">Hook Basket</a></h3>
                                        <span class="shop-item-price">
                        <span class="old-price">$180.00</span>
                        $112.35
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                                        <span class="shop-label text-danger">Sale</span>
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th01.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Storage Box</a></h3>
                                        <span class="shop-item-price">
                        <span class="old-price">$49.00</span>
                        $38.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                                        <span class="shop-label text-danger">Sale</span>
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th07.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Sunglasses</a></h3>
                                        <span class="shop-item-price">
                        <span class="old-price">$122.00</span>
                        $99.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                                        <span class="shop-label text-danger">Sale</span>
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th09.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Leather Case</a></h3>
                                        <span class="shop-item-price">
                        <span class="old-price">$160.00</span>
                        $118.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                                        <span class="shop-label text-danger">Sale</span>
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th02.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Shoulder Bag</a></h3>
                                        <span class="shop-item-price">
                        <span class="old-price">$199.00</span>
                        $125.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                        </div><!-- .row -->
                    </div><!-- .tab-pane#onsale -->
                </div><!-- .tab-content -->
            </div><!-- .col-lg-9.col-md-8 -->
        </div><!-- .row -->
    </section><!-- .container-fluid -->

    <!-- Brands -->
    <section class="container padding-top-2x padding-bottom">
        <hr>
        <h3 class="text-center padding-top-2x">More brands</h3>
        <div class="row padding-top">
            <!-- Brand -->
            <div class="col-sm-4 col-xs-6">
                <a href="#" class="brand">
                    <div class="brand-logo opacity-75">
                        <img src="/images/store/01.svg" alt="Brand">
                    </div>
                    <p class="brand-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est corrupti
                        sapiente itaque.</p>
                </a>
            </div>
            <!-- Brand -->
            <div class="col-sm-4 col-xs-6">
                <a href="#" class="brand">
                    <div class="brand-logo opacity-75">
                        <img src="/images/store/02.svg" alt="Brand">
                    </div>
                    <p class="brand-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est corrupti
                        sapiente itaque.</p>
                </a>
            </div>
            <!-- Brand -->
            <div class="col-sm-4 col-xs-6">
                <a href="#" class="brand">
                    <div class="brand-logo opacity-75">
                        <img src="/images/store/03.svg" alt="Brand">
                    </div>
                    <p class="brand-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est corrupti
                        sapiente itaque.</p>
                </a>
            </div>
            <!-- Brand -->
            <div class="col-sm-4 col-xs-6">
                <a href="#" class="brand">
                    <div class="brand-logo opacity-75">
                        <img src="/images/store/04.svg" alt="Brand">
                    </div>
                    <p class="brand-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est corrupti
                        sapiente itaque.</p>
                </a>
            </div>
            <!-- Brand -->
            <div class="col-sm-4 col-xs-6">
                <a href="#" class="brand">
                    <div class="brand-logo opacity-75">
                        <img src="/images/store/05.svg" alt="Brand">
                    </div>
                    <p class="brand-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est corrupti
                        sapiente itaque.</p>
                </a>
            </div>
            <!-- Brand -->
            <div class="col-sm-4 col-xs-6">
                <a href="#" class="brand">
                    <div class="brand-logo opacity-75">
                        <img src="/images/store/06.svg" alt="Brand">
                    </div>
                    <p class="brand-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est corrupti
                        sapiente itaque.</p>
                </a>
            </div>
        </div><!-- .row -->
    </section><!-- .container -->

    <!-- Video Popup -->
    <div class="fw-section space-top-2x padding-top-3x padding-bottom-3x"
         style="background-image: url(/images/store/video_bg.jpg);">
        <div class="container padding-top-3x padding-bottom-3x text-center">
            <div class="space-top-3x space-bottom">
                <!-- Add ".light-skin" class to alter appearance. -->
                <a href="https://player.vimeo.com/video/135832597?color=77cde3&amp;title=0&amp;byline=0&amp;portrait=0"
                   class="video-popup-btn">
                    <i class="material-icons play_arrow"></i>
                </a>
            </div>
            <p class="space-bottom-2x">M-Store - your reliable partner.</p>
        </div>
    </div><!-- .fw-section -->

    <!-- Features -->
    <section class="container space-top space-bottom padding-top-3x padding-bottom-3x">
        <div class="row">
            <!-- Feature -->
            <div class="col-md-3 col-sm-6">
                <div class="feature text-center">
                    <div class="feature-icon">
                        <i class="material-icons location_on"></i>
                    </div>
                    <h4 class="feature-title">Free World-Wide Shipping</h4>
                    <p class="feature-text">Free shipping on all orders over $100</p>
                </div>
            </div>
            <!-- Feature -->
            <div class="col-md-3 col-sm-6">
                <div class="feature text-center">
                    <div class="feature-icon">
                        <i class="material-icons autorenew"></i>
                    </div>
                    <h4 class="feature-title">Money Back Guarantee</h4>
                    <p class="feature-text">We return money within 30 days</p>
                </div>
            </div>
            <!-- Feature -->
            <div class="col-md-3 col-sm-6">
                <div class="feature text-center">
                    <div class="feature-icon">
                        <i class="material-icons headset_mic"></i>
                    </div>
                    <h4 class="feature-title">24/7 Online Support</h4>
                    <p class="feature-text">Friendly 24/7 customer support</p>
                </div>
            </div>
            <!-- Feature -->
            <div class="col-md-3 col-sm-6">
                <div class="feature text-center">
                    <div class="feature-icon">
                        <i class="material-icons credit_card"></i>
                    </div>
                    <h4 class="feature-title">Secure Online Payments</h4>
                    <p class="feature-text">We posess SSL / Secure Certificate</p>
                </div>
            </div>
        </div><!-- .row -->
    </section><!-- .container -->

    <!-- Footer -->
    <footer class="footer">
        <div class="column">
            <p class="text-sm">Need support? Call <span class="text-primary">001 (917) 555-4836</span></p>
            <div class="social-bar text-center space-bottom">
                <a href="#" class="sb-skype" data-toggle="tooltip" data-placement="top" title=""
                   data-original-title="Skype">
                    <i class="socicon-skype"></i>
                </a>
                <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title=""
                   data-original-title="Facebook">
                    <i class="socicon-facebook"></i>
                </a>
                <a href="#" class="sb-google-plus" data-toggle="tooltip" data-placement="top" title=""
                   data-original-title="Google+">
                    <i class="socicon-googleplus"></i>
                </a>
                <a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top" title=""
                   data-original-title="Twitter">
                    <i class="socicon-twitter"></i>
                </a>
                <a href="#" class="sb-instagram" data-toggle="tooltip" data-placement="top" title=""
                   data-original-title="Instagram">
                    <i class="socicon-instagram"></i>
                </a>
            </div><!-- .social-bar -->
            <p class="copyright">© 2016. Made with <i class="text-danger material-icons favorite"></i> by rokaux.</p>
        </div><!-- .column -->
        <div class="column">
            <h3 class="widget-title">
                Subscription
                <small>To receive latest offers and discounts from the shop.</small>
            </h3>
            <form action="http://rokaux.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;id=1194bb7544"
                  method="post" target="_blank" class="subscribe-form" novalidate="">
                <input type="email" class="form-control" name="EMAIL" placeholder="Your e-mail">
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                                                                                          name="b_c7103e2c981361a6639545bd5_1194bb7544"
                                                                                          tabindex="-1" value=""></div>
                <button type="submit"><i class="material-icons send"></i></button>
            </form>
        </div><!-- .column -->
        <div class="column">
            <h3 class="widget-title">
                Payment Methods
                <small>We support one of the following payment methods.</small>
            </h3>
            <div class="cards"><img src="/images/store/cards.png" alt="Cards"></div>
            <!-- Scroll To Top Button -->
            <div class="scroll-to-top-btn"><i class="material-icons trending_flat"></i></div>
        </div><!-- .column -->
    </footer><!-- .footer -->

</div><!-- .page-wrapper -->

<!-- JavaScript (jQuery) libraries, plugins and custom scripts -->
<script src="/js/store/jquery-2.1.4.min.js"></script>
<script src="/js/store/bootstrap.min.js"></script>
<script src="/js/store/smoothscroll.js"></script>
<script src="/js/store/velocity.min.js"></script>
<script src="/js/store/waves.min.js"></script>
<script src="/js/store/icheck.min.js"></script>
<script src="/js/store/owl.carousel.min.js"></script>
<script src="/js/store/jquery.downCount.js"></script>
<script src="/js/store/magnific-popup.min.js"></script>
<script src="/js/store/scripts.js"></script>


</body><!-- <body> --></html>