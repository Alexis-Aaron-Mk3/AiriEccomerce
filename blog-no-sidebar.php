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


<!-- Mirrored from demo.hasthemes.com/airiV-2/airi/blog-no-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Dec 2018 15:12:03 GMT -->
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
                        <h1 class="page-title">Blog</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><span>Blog No Sidebar</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Breadcrumb area End -->

        <!-- Main Content Wrapper Start -->
        <div id="content" class="main-content-wrapper">
            <div class="page-content-inner">
                <div class="container">
                    <div class="row pt--80 pt-md--60 pt-sm--50">
                        <div class="col-12 mb--40 mb-md--30 mb-sm--25">
                            <article class="post">
                                <div class="post-media">
                                    <div class="image">
                                        <img src="assets/img/blog/image.jpg" alt="Blog">
                                        <a href="single-post.html" class="link-overlay">Blog</a>
                                    </div>
                                </div>
                                <div class="post-info post-info--4">
                                    <h3 class="post-title">
                                        <a href="single-post.html">Monday to Sunday</a>
                                    </h3>
                                    <div class="post-meta">
                                        <a href="blog.html" class="posted-on" tabindex="0">September 16, 2018</a>
                                        <span class="meta-separator">-</span>
                                        <a href="blog.html" class="posted-by" tabindex="0">By John Snow</a>
                                    </div>
                                    <div class="post-content">
                                        <p>Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales dolor nec…</p>
                                    </div>
                                    <a href="single-post.html" class="read-more-btn">Read More</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-12 mb--40 mb-md--30 mb-sm--25">
                            <article class="post">
                                <div class="post-media">
                                    <div class="image">
                                        <img src="assets/img/blog/blog-13.jpg" alt="Blog">
                                        <a href="single-post.html" class="link-overlay">Blog</a>
                                    </div>
                                </div>
                                <div class="post-info post-info--4">
                                    <h3 class="post-title">
                                        <a href="single-post.html">Dress Time</a>
                                    </h3>
                                    <div class="post-meta">
                                        <a href="blog.html" class="posted-on" tabindex="0">September 16, 2018</a>
                                        <span class="meta-separator">-</span>
                                        <a href="blog.html" class="posted-by" tabindex="0">By John Snow</a>
                                    </div>
                                    <div class="post-content">
                                        <p>Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales dolor nec…</p>
                                    </div>
                                    <a href="single-post.html" class="read-more-btn">Read More</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-12 mb--40 mb-md--30 mb-sm--25">
                            <article class="post">
                                <div class="post-media">
                                    <div class="image">
                                        <img src="assets/img/blog/blog-12.jpg" alt="Blog">
                                        <a href="single-post.html" class="link-overlay">Blog</a>
                                    </div>
                                </div>
                                <div class="post-info post-info--4">
                                    <h3 class="post-title">
                                        <a href="single-post.html">Fashion Vintage</a>
                                    </h3>
                                    <div class="post-meta">
                                        <a href="blog.html" class="posted-on" tabindex="0">September 16, 2018</a>
                                        <span class="meta-separator">-</span>
                                        <a href="blog.html" class="posted-by" tabindex="0">By John Snow</a>
                                    </div>
                                    <div class="post-content">
                                        <p>Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales dolor nec…</p>
                                    </div>
                                    <a href="single-post.html" class="read-more-btn">Read More</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-12 mb--40 mb-md--30 mb-sm--25">
                            <article class="post">
                                <div class="post-media">
                                    <div class="image">
                                        <img src="assets/img/blog/blog-11.jpg" alt="Blog">
                                        <a href="single-post.html" class="link-overlay">Blog</a>
                                    </div>
                                </div>
                                <div class="post-info post-info--4">
                                    <h3 class="post-title">
                                        <a href="single-post.html">She Belived She Could</a>
                                    </h3>
                                    <div class="post-meta">
                                        <a href="blog.html" class="posted-on" tabindex="0">September 16, 2018</a>
                                        <span class="meta-separator">-</span>
                                        <a href="blog.html" class="posted-by" tabindex="0">By John Snow</a>
                                    </div>
                                    <div class="post-content">
                                        <p>Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales dolor nec…</p>
                                    </div>
                                    <a href="single-post.html" class="read-more-btn">Read More</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-12 mb--40 mb-md--30 mb-sm--25">
                            <article class="post">
                                <div class="post-media">
                                    <div class="image">
                                        <img src="assets/img/blog/blog-10.jpg" alt="Blog">
                                        <a href="single-post.html" class="link-overlay">Blog</a>
                                    </div>
                                </div>
                                <div class="post-info post-info--4">
                                    <h3 class="post-title">
                                        <a href="single-post.html">Trade Show Promotions</a>
                                    </h3>
                                    <div class="post-meta">
                                        <a href="blog.html" class="posted-on" tabindex="0">September 16, 2018</a>
                                        <span class="meta-separator">-</span>
                                        <a href="blog.html" class="posted-by" tabindex="0">By John Snow</a>
                                    </div>
                                    <div class="post-content">
                                        <p>Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales dolor nec…</p>
                                    </div>
                                    <a href="single-post.html" class="read-more-btn">Read More</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-12 mb--40 mb-md--30 mb-sm--25">
                            <article class="post">
                                <div class="post-media">
                                    <div class="image">
                                        <img src="assets/img/blog/blog-9.jpg" alt="Blog">
                                        <a href="single-post.html" class="link-overlay">Blog</a>
                                    </div>
                                </div>
                                <div class="post-info post-info--4">
                                    <h3 class="post-title">
                                        <a href="single-post.html">Poka Dots In Italy</a>
                                    </h3>
                                    <div class="post-meta">
                                        <a href="blog.html" class="posted-on" tabindex="0">September 16, 2018</a>
                                        <span class="meta-separator">-</span>
                                        <a href="blog.html" class="posted-by" tabindex="0">By John Snow</a>
                                    </div>
                                    <div class="post-content">
                                        <p>Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales dolor nec…</p>
                                    </div>
                                    <a href="single-post.html" class="read-more-btn">Read More</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-12 mb--40 mb-md--30 mb-sm--25">
                            <article class="post">
                                <div class="post-media">
                                    <div class="image">
                                        <img src="assets/img/blog/blog-8-1.jpg" alt="Blog">
                                        <a href="single-post.html" class="link-overlay">Blog</a>
                                    </div>
                                </div>
                                <div class="post-info post-info--4">
                                    <h3 class="post-title">
                                        <a href="single-post.html">Men Style Street</a>
                                    </h3>
                                    <div class="post-meta">
                                        <a href="blog.html" class="posted-on" tabindex="0">September 16, 2018</a>
                                        <span class="meta-separator">-</span>
                                        <a href="blog.html" class="posted-by" tabindex="0">By John Snow</a>
                                    </div>
                                    <div class="post-content">
                                        <p>Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales dolor nec…</p>
                                    </div>
                                    <a href="single-post.html" class="read-more-btn">Read More</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-12 mb--40 mb-md--30 mb-sm--25">
                            <article class="post">
                                <div class="post-media">
                                    <div class="image">
                                        <img src="assets/img/blog/blog-7-1.jpg" alt="Blog">
                                        <a href="single-post.html" class="link-overlay">Blog</a>
                                    </div>
                                </div>
                                <div class="post-info post-info--4">
                                    <h3 class="post-title">
                                        <a href="single-post.html">Summer Colors</a>
                                    </h3>
                                    <div class="post-meta">
                                        <a href="blog.html" class="posted-on" tabindex="0">September 16, 2018</a>
                                        <span class="meta-separator">-</span>
                                        <a href="blog.html" class="posted-by" tabindex="0">By John Snow</a>
                                    </div>
                                    <div class="post-content">
                                        <p>Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales dolor nec…</p>
                                    </div>
                                    <a href="single-post.html" class="read-more-btn">Read More</a>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="row pb--80 pb-md--60 pb-sm--50">
                        <div class="col-12">
                            <nav class="pagination-wrap">
                                <ul class="pagination">
                                    <li><a href="#" class="prev page-number"><i class="fa fa-long-arrow-left"></i></a></li>
                                    <li><span class="current page-number">1</span></li>
                                    <li><a href="#" class="page-number">2</a></li>
                                    <li><a href="#" class="page-number">3</a></li>
                                    <li><a href="#" class="next page-number"><i class="fa fa-long-arrow-right"></i></a></li>
                                </ul>
                            </nav>
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
                            <div class="product-action d-flex flex-row align-items-center mb--30 mb-md--20">
                                <div class="quantity">
                                    <input type="number" class="quantity-input" name="qty" id="quick-qty" value="1" min="1">
                                </div>
                                <button type="button" class="btn btn-style-1 btn-semi-large add-to-cart" onclick="window.location.href='cart.html'">
                                    Add To Cart
                                </button>
                                <a href="wishlist.html"><i class="dl-icon-heart2"></i></a>
                                <a href="compare.html"><i class="dl-icon-compare2"></i></a>
                            </div>  
                            <div class="product-extra mb--30 mb-md--20">
                                <a href="#" class="font-size-12"><i class="fa fa-map-marker"></i>Find store near you</a>
                                <a href="#" class="font-size-12"><i class="fa fa-exchange"></i>Delivery and return</a>
                            </div>
                            <div class="product-summary-footer d-flex justify-content-between flex-sm-row flex-column flex-sm-row flex-column">
                                <div class="product-meta">
                                    <span class="sku_wrapper font-size-12">SKU: <span class="sku">REF. LA-887</span></span>
                                    <span class="posted_in font-size-12">Categories: <a href="shop-sidebar.html" rel="tag">Fashions</a></span>
                                </div>
                                <div class="product-share-box">
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


<!-- Mirrored from demo.hasthemes.com/airiV-2/airi/blog-no-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Dec 2018 15:12:03 GMT -->
</html>

<?php
	include "_footer.php";
?>