<?php
		session_start();

	error_reporting(0);

	if(isset($_SESSION["email"])) {
		echo 'BIENVENIDO ' . $_SESSION["nombre"];
		
	}else{
	echo"<script>alert  ('USTED NO TIENE PERMISOS, REGRESEMOS A LOGIN ')</script> ";
	echo '<meta http-equiv="Refresh" content="0;URL=index.php">'; 
		die();
		

	
	}
	include "_header.php";
	
?>

<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/airiV-2/airi/compare.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Dec 2018 15:10:56 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/img/icon.png">

    <!-- Title -->
    <title>Airi - Clean, Minimal eCommerce Bootstrap 4 Template</title>

    <!-- ************************* CSS Files ************************* -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- dl Icon CSS -->
    <link rel="stylesheet" href="assets/css/dl-icon.css">

    <!-- All Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Revoulation Slider CSS  -->
    <link rel="stylesheet" href="assets/css/revoulation.css">

    <!-- style CSS -->
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- modernizr JS
    ============================================ -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


    <div class="ai-preloader active">
        <div class="ai-preloader-inner h-100 d-flex align-items-center justify-content-center">
            <div class="ai-child ai-bounce1"></div>
            <div class="ai-child ai-bounce2"></div>
            <div class="ai-child ai-bounce3"></div>
        </div>
    </div>
  
    <!-- Main Wrapper Start -->
    <div class="wrapper">
        
        <!-- Breadcrumb area Start -->

        <div class="breadcrumb-area bg--white-6 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Compare</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><span>Compare</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Breadcrumb area End -->

        <!-- Main Content Wrapper Start -->
        <div id="content" class="main-content-wrapper">
            <div class="page-content-inner enable-page-sidebar">
                <div class="container">
                    <div class="row shop-sidebar ptb--80 ptb-md--60 ptb-sm--40">
                        <div class="col-lg-9 order-lg-2" id="main-content">
                            <div class="table-content table-responsive">
                                <div class="table-content table-responsive">
                                    <table class="table compare-table">
                                        <tbody>
                                            <tr>
                                                <th>Product Info</th>
                                                <td>
                                                    <div class="remove">
                                                        <a href="#">
                                                            <i class="fa fa-times"></i>Remove
                                                        </a>
                                                    </div>
                                                    <a href="product-details.html">
                                                        <div class="image-wrap">
                                                            <img src="assets/img/products/prod-18-1-120x138.jpg" alt="Product">
                                                        </div>
                                                        <h4 class="product-name">Waxed-effect pleated skirt</h4>
                                                    </a>
                                                    <a href="cart.html" class="btn btn-tiny btn-style-1">Add to cart</a>
                                                </td>
                                                <td>
                                                    <div class="remove">
                                                        <a href="#">
                                                            <i class="fa fa-times"></i>Remove
                                                        </a>
                                                    </div>
                                                    <a href="product-details.html">
                                                        <div class="image-wrap">
                                                            <img src="assets/img/products/prod-13-1-120x138.jpg" alt="Product">
                                                        </div>
                                                        <h4 class="product-name">Super skinny trousers</h4>
                                                    </a>
                                                    <a href="cart.html" class="btn btn-tiny btn-style-1">Add to cart</a>
                                                </td>
                                                <td>
                                                    <div class="remove">
                                                        <a href="#">
                                                            <i class="fa fa-times"></i>Remove
                                                        </a>
                                                    </div>
                                                    <a href="product-details.html">
                                                        <div class="image-wrap">
                                                            <img src="assets/img/products/prod-14-1-120x138.jpg" alt="Product">
                                                        </div>
                                                        <h4 class="product-name">Super skinny blazer</h4>
                                                    </a>
                                                    <a href="cart.html" class="btn btn-tiny btn-style-1">Add to cart</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Price</th>
                                                <td>
                                                    <span class="product-price-wrapper">
                                                        <span class="money">$159.00</span>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="product-price-wrapper">
                                                        <span class="money">$159.00</span>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="product-price-wrapper">
                                                        <span class="money">$159.00</span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Sku</th>
                                                <td>REF. LA-887</td>
                                                <td>REF. LA-887</td>
                                                <td>REF. LA-887</td>
                                            </tr>
                                            <tr>
                                                <th>Description</th>
                                                <td class="text-center">Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas…    </td>
                                                <td class="text-center">Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas…    </td>
                                                <td class="text-center">Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas…    </td>
                                            </tr>
                                            <tr>
                                                <th>Availability</th>
                                                <td>In stock</td>
                                                <td>In stock</td>
                                                <td>In stock</td>
                                            </tr>
                                            <tr>
                                                <th>Weight</th>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                            </tr>
                                            <tr>
                                                <th>Dimensions</th>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>  
                        </div>
                        <div class="col-lg-3 order-lg-1 mt-md--40" id="primary-sidebar">
                            <div class="sidebar-widget">
                                <!-- Category Widget Start -->
                                <div class="product-widget categroy-widget mb--35 mb-md--30">
                                    <h3 class="widget-title">Categories</h3>
                                    <ul class="prouduct-categories product-widget__list">
                                        <li><a href="#">Accessories</a><span class="count">(0)</span></li>
                                        <li><a href="#">Brands</a><span class="count">(0)</span></li>
                                        <li><a href="#">Clothing</a><span class="count">(1)</span></li>
                                        <li><a href="#">Fashions</a><span class="count">(21)</span></li>
                                        <li><a href="#">Furniture</a><span class="count">(20)</span></li>
                                        <li><a href="#">Gifts</a><span class="count">(0)</span></li>
                                        <li><a href="#">Kids</a><span class="count">(0)</span></li>
                                        <li><a href="#">Men</a><span class="count">(0)</span></li>
                                        <li><a href="#">New in</a><span class="count">(0)</span></li>
                                        <li><a href="#">Outlet</a><span class="count">(0)</span></li>
                                        <li><a href="#">Shoes</a><span class="count">(0)</span></li>
                                        <li><a href="#">Wallets</a><span class="count">(0)</span></li>
                                        <li><a href="#">Women</a><span class="count">(0)</span></li>
                                    </ul>
                                </div>
                                <!-- Category Widget Start -->

                                <!-- Price Filter Widget Start -->
                                <div class="product-widget product-price-widget mb--40 mb-md--35">
                                    <h3 class="widget-title">Price</h3>
                                    <div class="widget_content">
                                        <form action="#" method="post">
                                            <div id="slider-range" class="price-slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                                <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 16.6667%; width: 79.1667%;">
                                                    
                                                </div>
                                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 16.6667%;">
                                                    
                                                </span>
                                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 95.8333%;">
                                                    
                                                </span>
                                            </div>
                                            <div class="filter-price">
                                                <div class="filter-price__count">
                                                    <div class="filter-price__input-group mb--20">
                                                        <span>Price: </span>
                                                        <input type="text" id="amount" class="amount-range" readonly="">
                                                    </div>
                                                    <button type="submit" class="btn btn-style-1 sidebar-btn">
                                                        filter
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Price Filter Widget End -->

                                <!-- Product Size Widget Start -->
                                <div class="product-widget product-widget--size mb--25 mb-md--20">
                                    <h3 class="widget-title">Size</h3>
                                    <ul class="product-widget__list two-column-list">
                                        <li><a href="shop-sidebar.html">L</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">S</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">XXl</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">M</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">XL</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">L</a><span class="count">(2)</span></li>
                                    </ul>
                                </div>
                                <!-- Product Size Widget End -->

                                <!-- Product Color Widget Start -->
                                <div class="product-widget product-widget--Color mb--25 mb-md--20">
                                    <h3 class="widget-title">Color</h3>
                                    <ul class="product-widget__list two-column-list">
                                        <li><a href="shop-sidebar.html">Blue</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">Pink</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">White</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">Green</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">Red</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">Black</a><span class="count">(2)</span></li>
                                    </ul>
                                </div>
                                <!-- Product Color Widget End -->

                                <!-- Product Brand Widget Start -->
                                <div class="product-widget product-widget--brand mb--40 mb-md--30">
                                    <h3 class="widget-title">Brands</h3>
                                    <ul class="product-widget__list">
                                        <li><a href="shop-sidebar.html">Airi</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">Mango</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">Valention</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">Zara</a><span class="count">(2)</span></li>
                                    </ul>
                                </div>
                                <!-- Product Brand Widget End -->

                                <!-- Category Widget Start -->
                                <div class="product-widget tag-widget mb--35 mb-md--30">
                                    <h3 class="widget-title">Categories</h3>
                                    <div class="tagcloud">
                                        <a href="shop-sidebar.html">chair</a>
                                        <a href="shop-sidebar.html">deco</a>
                                        <a href="shop-sidebar.html">dress</a>
                                        <a href="shop-sidebar.html">fashion</a>
                                        <a href="shop-sidebar.html">furniture</a>
                                        <a href="shop-sidebar.html">light</a>
                                        <a href="shop-sidebar.html">living</a>
                                        <a href="shop-sidebar.html">sofa</a>
                                        <a href="shop-sidebar.html">table</a>
                                        <a href="shop-sidebar.html">women</a>
                                    </div>
                                </div>
                                <!-- Category Widget Start -->
                                
                                <!-- Promo Widget Start -->
                                <div class="product-widget promo-widget">
                                    <div class="banner-box banner-type-3 banner-type-3-2 banner-hover-1">
                                        <div class="banner-inner">
                                            <div class="banner-image">
                                                <img src="assets/img/banner/ad-banner.jpg" alt="Banner">
                                            </div>
                                            <div class="banner-info">
                                                <h2 class="banner-title-11">New <br> <strong>Season</strong></h2>
                                            </div>
                                            <a class="banner-link banner-overlay" href="shop-sidebar.html">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Promo Widget End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Wrapper Start -->


        <!-- Search from Start --> 
        <div class="searchform__popup" id="searchForm">
            <a href="#" class="btn-close"><i class="dl-icon-close"></i></a>
            <div class="searchform__body">
                <p>Start typing and press Enter to search</p>
                <form class="searchform">
                    <input type="text" name="search" id="search" class="searchform__input" placeholder="Search Entire Store...">
                    <button type="submit" class="searchform__submit"><i class="dl-icon-search10"></i></button>
                </form>
            </div>
        </div>
        <!-- Search from End --> 
        
        <!-- Side Navigation Start -->
        <aside class="side-navigation" id="sideNav">
            <div class="side-navigation-wrapper">
                <a href="#" class="btn-close"><i class="dl-icon-close"></i></a>
                <div class="side-navigation-inner">
                    <div class="widget">
                        <ul class="sidenav-menu">
                            <li><a href="about-us.html">About Airi Shop</a></li>
                            <li><a href="about-us.html">Help Center</a></li>
                            <li><a href="shop-collections.html">Portfolio</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="shop-instagram.html">New Look</a></li>
                        </ul>
                    </div>
                    <div class="widget pt--30 pr--20">
                        <div class="text-widget">
                            <p>
                                <img src="assets/img/others/payments.png" alt="payment">
                            </p>
                            <p>Pellentesque mollis nec orci id tincidunt. Sed mollis risus eu nisi aliquet, sit amet fermentum justo dapibus.</p>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="text-widget">
                            <p>
                                <a href="#">(+612) 2531 5600</a>
                                <a href="mailto:info@la-studioweb.com">info@la-studioweb.com</a>
                                PO Box 1622 Colins Street West
                            </p>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="text-widget google-map-link">
                            <p>
                                <a href="https://www.google.com/maps" target="_blank">Google Maps</a>
                            </p>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="text-widget">
                            <!-- Social Icons Start Here -->
                            <ul class="social social-small">
                                <li class="social__item">
                                    <a href="twitter.com" class="social__link">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="plus.google.com" class="social__link">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="facebook.com" class="social__link">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="youtube.com" class="social__link">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="instagram.com" class="social__link">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- Social Icons End Here -->
                        </div>
                    </div>
                    <div class="widget">
                        <div class="text-widget">
                            <p class="copyright-text">&copy; 2018 Airi All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Side Navigation End -->

        <!-- Mini Cart Start -->
        <aside class="mini-cart" id="miniCart">
            <div class="mini-cart-wrapper">
                <a href="#" class="btn-close"><i class="dl-icon-close"></i></a>
                <div class="mini-cart-inner">
                    <h5 class="mini-cart__heading mb--40 mb-lg--30">Shopping Cart</h5>
                    <div class="mini-cart__content">
                        <ul class="mini-cart__list">
                            <li class="mini-cart__product">
                                <a href="#" class="remove-from-cart remove">
                                    <i class="dl-icon-close"></i>
                                </a>
                                <div class="mini-cart__product__image">
                                    <img src="assets/img/products/prod-17-1-70x91.jpg" alt="products">
                                </div>
                                <div class="mini-cart__product__content">
                                    <a class="mini-cart__product__title" href="product-details.html">Chain print bermuda shorts  </a>
                                    <span class="mini-cart__product__quantity">1 x $49.00</span>
                                </div>
                            </li>
                            <li class="mini-cart__product">
                                <a href="#" class="remove-from-cart remove">
                                    <i class="dl-icon-close"></i>
                                </a>
                                <div class="mini-cart__product__image">
                                    <img src="assets/img/products/prod-18-1-70x91.jpg" alt="products">
                                </div>
                                <div class="mini-cart__product__content">
                                    <a class="mini-cart__product__title" href="product-details.html">Waxed-effect pleated skirt</a>
                                    <span class="mini-cart__product__quantity">1 x $49.00</span>
                                </div>
                            </li>
                            <li class="mini-cart__product">
                                <a href="#" class="remove-from-cart remove">
                                    <i class="dl-icon-close"></i>
                                </a>
                                <div class="mini-cart__product__image">
                                    <img src="assets/img/products/prod-19-1-70x91.jpg" alt="products">
                                </div>
                                <div class="mini-cart__product__content">
                                    <a class="mini-cart__product__title" href="product-details.html">Waxed-effect pleated skirt</a>
                                    <span class="mini-cart__product__quantity">1 x $49.00</span>
                                </div>
                            </li>
                            <li class="mini-cart__product">
                                <a href="#" class="remove-from-cart remove">
                                    <i class="dl-icon-close"></i>
                                </a>
                                <div class="mini-cart__product__image">
                                    <img src="assets/img/products/prod-2-1-70x91.jpg" alt="products">
                                </div>
                                <div class="mini-cart__product__content">
                                    <a class="mini-cart__product__title" href="product-details.html">Waxed-effect pleated skirt</a>
                                    <span class="mini-cart__product__quantity">1 x $49.00</span>
                                </div>
                            </li>
                        </ul>
                        <div class="mini-cart__total">
                            <span>Subtotal</span>
                            <span class="ammount">$98.00</span>
                        </div>
                        <div class="mini-cart__buttons">
                            <a href="cart.html" class="btn btn-fullwidth btn-style-1">View Cart</a>
                            <a href="checkout.html" class="btn btn-fullwidth btn-style-1">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Mini Cart End -->

        <!-- Global Overlay Start -->
        <div class="ai-global-overlay"></div>
        <!-- Global Overlay End -->
 
        <!-- Modal Start -->
        <div class="modal fade product-modal" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <button type="button" class="close custom-close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="dl-icon-close"></i></span>
                </button>
                <div class="row">
                    <div class="col-md-6">
                        <div class="airi-element-carousel product-image-carousel nav-vertical-center nav-style-1"
                                data-slick-options='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "arrows": true,
                                    "prevArrow": "dl-icon-left",
                                    "nextArrow": "dl-icon-right"
                                }'
                        >
                            <div class="product-image">
                                <div class="product-image--holder">
                                    <a href="product-details.html">
                                        <img src="assets/img/products/prod-9-1.jpg" alt="Product Image" class="primary-image">
                                    </a>
                                </div>
                                <span class="product-badge sale">sale</span>
                            </div>
                            <div class="product-image">
                                <div class="product-image--holder">
                                    <a href="product-details.html">
                                        <img src="assets/img/products/prod-10-1.jpg" alt="Product Image" class="primary-image">
                                    </a>
                                </div>
                                <span class="product-badge new">new</span>
                            </div>
                            <div class="product-image">
                                <div class="product-image--holder">
                                    <a href="product-details.html">
                                        <img src="assets/img/products/prod-11-1.jpg" alt="Product Image" class="primary-image">
                                    </a>
                                </div>
                                <span class="product-badge hot">hot</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="modal-box product-summary">
                            <div class="product-navigation mb--10">
                                <a href="#" class="prev"><i class="dl-icon-left"></i></a>
                                <a href="#" class="next"><i class="dl-icon-right"></i></a>
                            </div>
                            <h3 class="product-title mb--15">Waxed-effect pleated skirt</h3>
                            <span class="product-price-wrapper mb--20">
                                <span class="money">$49.00</span>
                                <span class="product-price-old">
                                    <span class="money">$60.00</span>
                                </span>
                            </span>
                            <p class="product-short-description mb--25 mb-md--20">Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                            <div class="product-action d-flex flex-row align-items-center mb--30">
                                <div class="quantity">
                                    <input type="number" class="quantity-input" name="qty" id="qty" value="1" min="1">
                                </div>
                                <button type="button" class="btn btn-style-1 btn-semi-large add-to-cart" onclick="window.location.href='cart.html'">
                                    Add To Cart
                                </button>
                                <a href="wishlist.html"><i class="dl-icon-heart2"></i></a>
                                <a href="compare.html"><i class="dl-icon-compare2"></i></a>
                            </div>  
                            <div class="product-extra mb--30">
                                <a href="#" class="font-size-12"><i class="fa fa-map-marker"></i>Find store near you</a>
                                <a href="#" class="font-size-12"><i class="fa fa-exchange"></i>Delivery and return</a>
                            </div>
                            <div class="product-meta float-left">
                                <span class="sku_wrapper font-size-12">SKU: <span class="sku">REF. LA-887</span></span>
                                <span class="posted_in font-size-12">Categories: <a href="shop-sidebar.html" rel="tag">Fashions</a></span>
                            </div>
                            <div class="product-share-box float-right">
                                <span class="font-size-12">Share With</span>
                                <!-- Social Icons Start Here -->
                                <ul class="social social-small">
                                    <li class="social__item">
                                        <a href="facebook.com" class="social__link">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="social__item">
                                        <a href="twitter.com" class="social__link">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="social__item">
                                        <a href="plus.google.com" class="social__link">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li class="social__item">
                                        <a href="plus.google.com" class="social__link">
                                            <i class="fa fa-pinterest-p"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- Social Icons End Here -->
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal End -->



    </div>
    <!-- Main Wrapper End -->


    <!-- ************************* JS Files ************************* -->

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery.min.js"></script>

    <!-- Bootstrap and Popper Bundle JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- All Plugins Js -->
    <script src="assets/js/plugins.js"></script>

    <!-- Ajax Mail Js -->
    <script src="assets/js/ajax-mail.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- REVOLUTION JS FILES -->
    <script src="assets/js/revoulation/jquery.themepunch.tools.min.js"></script>
    <script src="assets/js/revoulation/jquery.themepunch.revolution.min.js"></script>    

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="assets/js/revoulation/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.carousel.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.video.min.js"></script>

    <!-- REVOLUTION ACTIVE JS FILES -->
    <script src="assets/js/revoulation.js"></script>
    
</body>


<!-- Mirrored from demo.hasthemes.com/airiV-2/airi/compare.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Dec 2018 15:10:59 GMT -->
</html>
<?php
	include "_footer.php";
?>