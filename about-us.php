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


<!-- Mirrored from demo.hasthemes.com/airiV-2/airi/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Dec 2018 15:11:09 GMT -->
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
                        <h1 class="page-title">About Us</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><span>About Us</span></li>
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
                    <div class="row pt--80 pt-md--60 pt-sm--40">
                        <div class="col-12">
                            <div class="about-text about-bg-1">
                                <div class="row">
                                    <div class="col-xl-5 offset-xl-7 col-md-6 offset-md-6 pt--90 pt-md--80 pb--100 pl-sm--35">
                                        <figure class="mb--40 mb-md--30 max-w-45">
                                            <img src="assets/img/logo/m01-logo.png" alt="logo">
                                        </figure>
                                        <p class="font-size-16 font-2 heading-color">
                                            Integer ut ligula quis lectus fringilla elementum porttitor sed est. Fringilla efficitur ligula sed lobortis. Sed tempus faucibus mi, quis fringilla mauris lacinia sed. Integer vehicula egestas nunc ac facilisis. Nam bibendum non faucibus libero eu. Curabitur posuere to ullamcorper                         
                                        </p>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                    <div class="row pt--80 pt-md--60 pt-sm--35 pb--40 pb-md--30 pb-sm--15">
                        <div class="col-lg-7 col-md-6 mb-sm--30">
                            <div class="about-text">
                                <h3 class="heading-tertiary heading-color mb--15">Airi Beautiful eCommerce Online Store</h3>
                                <p class="color--light-3 mb--25 mb-md--20">Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales dolor nec mattis convallis. Quisque ut nulla viverra, posuere lorem eget, ultrices metus. Nulla facilisi. Duis aliquet, eros in auctor aliquam, tortor justo laoreet nisi, nec pulvinar lectus diam nec libero. Nullam sit amet Cras porta posuere lectus, vitae consectetur dolor elementum</p>
                                <figure>
                                    <img src="assets/img/about/about-signature.png" alt="signature">
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <figure>
                                <img src="assets/img/about/about-bg2.jpg" alt="about">
                            </figure>
                        </div>
                    </div>
                    <div class="row ptb--40 ptb-md--30 ptb-sm--20">
                        <div class="col-lg-6 offset-lg-1 col-md-6 order-md-2 mb-sm--25">
                            <div class="about-text">
                                <h3 class="heading-tertiary heading-color mb--20">Why Work With Us ?</h3>
                                <p class="color--light-3 mb--25">Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales dolor nec mattis convallis. Quisque ut nulla viverra, posuere lorem eget, ultrices metus.</p>
                                <ul class="list-with-icon color--light-3">
                                    <li class="mb--30 mb-md--25">
                                        <i class="fa fa-hourglass"></i>
                                        <span>Praesent sed ex vel mauris ele.</span>
                                    </li>
                                    <li class="mb--30 mb-md--25">
                                        <i class="fa fa-sun-o"></i>
                                        <span>Nam vel luctus nulla, eget interdum metus</span>
                                    </li>
                                    <li class="mb--25 mb-md--20">
                                        <i class="fa fa-bolt"></i>
                                        <span>Nam vel luctus nulla, eget interdum metus</span>
                                    </li>
                                </ul>
                                <p class="color--light-3">Dspendisse sodales dolor nec mattis convallis. Quisque ut nulla viverra, posuere lorem eget, ultrices metus ed maximus neque feugiat magna pretium, euismod sagittis massa tincidunt.</p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 order-md-1">
                            <figure class="image-box image-box-w-video-btn btn-right max-w-sm-65 max-w-xs-100">
                                <a href="https://www.youtube.com/watch?v=Rp19QD2XIGM" class="video-popup">
                                    <img src="assets/img/about/about-bg3.jpg" alt="about">
                                    <span class="video-btn video-btn--2"></span>
                                </a>
                            </figure>
                        </div>
                    </div>
                    <div class="row pt--30 pt-md--20 pt-sm--15 pb--40 pb-md--30 pb-sm--20">
                        <div class="col-12">
                            <div class="row justify-content-center mb--35 mb-md--25">
                                <div class="col-xl-6 text-center">
                                    <h3 class="heading-tertiary heading-color mb--15">Meet Our Team</h3>
                                    <p class="color--light-3">Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="airi-element-carousel team-carousel" 
                                        data-slick-options='{
                                            "spaceBetween": 30,
                                            "slidesToShow": 3,
                                            "slidesToScroll": 3
                                        }'
                                        data-slick-responsive='[
                                            {"breakpoint":991, "settings": {"slidesToShow": 2} },
                                            {"breakpoint":479, "settings": {"slidesToShow": 1} }
                                        ]'>

                                        <div class="airi-team">
                                            <div class="team-member">
                                                <div class="team-member__thumbnail">
                                                    <img src="assets/img/team/member-1.jpg" alt="Team Member">
                                                    <a href="team.html" class="link-overlay">Team member</a>
                                                    <div class="team-member__overlay">
                                                        <ul class="social social-round">
                                                            <li class="social__item">
                                                                <a href="https://www.facebook.com/" class="social__link">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li class="social__item">
                                                                <a href="https://twitter.com/" class="social__link">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li class="social__item">
                                                                <a href="https://www.pinterest.com/" class="social__link">
                                                                    <i class="fa fa-pinterest-p"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="team-member__info">
                                                    <h2 class="team-member__name"><a href="team.html">Dollie Watts</a></h2>
                                                    <p class="team-member__designation">CEO Founder</p>
                                                    <p class="team-member__desc">Pellentesque dignissim at ante sed iaculis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sod</p>
                                                </div>
                                            </div>  
                                        </div>
                                        <div class="airi-team">
                                            <div class="team-member">
                                                <div class="team-member__thumbnail">
                                                    <img src="assets/img/team/member-2.jpg" alt="Team Member">
                                                    <a href="team.html" class="link-overlay">Team member</a>
                                                    <div class="team-member__overlay">
                                                        <ul class="social social-round">
                                                            <li class="social__item">
                                                                <a href="https://www.facebook.com/" class="social__link">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li class="social__item">
                                                                <a href="https://twitter.com/" class="social__link">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li class="social__item">
                                                                <a href="https://www.pinterest.com/" class="social__link">
                                                                    <i class="fa fa-pinterest-p"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="team-member__info">
                                                    <h2 class="team-member__name"><a href="team.html">Mitchell Bates</a></h2>
                                                    <p class="team-member__designation">Art Director</p>
                                                    <p class="team-member__desc">Pellentesque dignissim at ante sed iaculis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sod</p>
                                                </div>
                                            </div>  
                                        </div>
                                        <div class="airi-team">
                                            <div class="team-member">
                                                <div class="team-member__thumbnail">
                                                    <img src="assets/img/team/member-3.jpg" alt="Team Member">
                                                    <a href="team.html" class="link-overlay">Team member</a>
                                                    <div class="team-member__overlay">
                                                        <ul class="social social-round">
                                                            <li class="social__item">
                                                                <a href="https://www.facebook.com/" class="social__link">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li class="social__item">
                                                                <a href="https://twitter.com/" class="social__link">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li class="social__item">
                                                                <a href="https://www.pinterest.com/" class="social__link">
                                                                    <i class="fa fa-pinterest-p"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="team-member__info">
                                                    <h2 class="team-member__name"><a href="team.html">Leona Bowman</a></h2>
                                                    <p class="team-member__designation">Marketing Manager</p>
                                                    <p class="team-member__desc">Pellentesque dignissim at ante sed iaculis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sod</p>
                                                </div>
                                            </div>  
                                        </div>
                                        <div class="airi-team">
                                            <div class="team-member">
                                                <div class="team-member__thumbnail">
                                                    <img src="assets/img/team/member-4.jpg" alt="Team Member">
                                                    <a href="team.html" class="link-overlay">Team member</a>
                                                    <div class="team-member__overlay">
                                                        <ul class="social social-round">
                                                            <li class="social__item">
                                                                <a href="https://www.facebook.com/" class="social__link">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li class="social__item">
                                                                <a href="https://twitter.com/" class="social__link">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li class="social__item">
                                                                <a href="https://www.pinterest.com/" class="social__link">
                                                                    <i class="fa fa-pinterest-p"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="team-member__info">
                                                    <h2 class="team-member__name"><a href="team.html">Amanda Gutierrez</a></h2>
                                                    <p class="team-member__designation">CEO Founder</p>
                                                    <p class="team-member__desc">Pellentesque dignissim at ante sed iaculis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sod</p>
                                                </div>
                                            </div>  
                                        </div>
                                        <div class="airi-team">
                                            <div class="team-member">
                                                <div class="team-member__thumbnail">
                                                    <img src="assets/img/team/member-5.jpg" alt="Team Member">
                                                    <a href="team.html" class="link-overlay">Team member</a>
                                                    <div class="team-member__overlay">
                                                        <ul class="social social-round">
                                                            <li class="social__item">
                                                                <a href="https://www.facebook.com/" class="social__link">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li class="social__item">
                                                                <a href="https://twitter.com/" class="social__link">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li class="social__item">
                                                                <a href="https://www.pinterest.com/" class="social__link">
                                                                    <i class="fa fa-pinterest-p"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="team-member__info">
                                                    <h2 class="team-member__name"><a href="team.html">Marc Cook</a></h2>
                                                    <p class="team-member__designation">Art Director</p>
                                                    <p class="team-member__desc">Pellentesque dignissim at ante sed iaculis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sod</p>
                                                </div>
                                            </div>  
                                        </div>
                                        <div class="airi-team">
                                            <div class="team-member">
                                                <div class="team-member__thumbnail">
                                                    <img src="assets/img/team/member-6.jpg" alt="Team Member">
                                                    <a href="team.html" class="link-overlay">Team member</a>
                                                    <div class="team-member__overlay">
                                                        <ul class="social social-round">
                                                            <li class="social__item">
                                                                <a href="https://www.facebook.com/" class="social__link">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li class="social__item">
                                                                <a href="https://twitter.com/" class="social__link">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li class="social__item">
                                                                <a href="https://www.pinterest.com/" class="social__link">
                                                                    <i class="fa fa-pinterest-p"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="team-member__info">
                                                    <h2 class="team-member__name"><a href="team.html">Rose Robinson</a></h2>
                                                    <p class="team-member__designation">Marketing Manager</p>
                                                    <p class="team-member__desc">Pellentesque dignissim at ante sed iaculis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sod</p>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt--30 pt-md--20 pt-sm--10 pb--75 pb-md--55 pb-sm--35">
                        <div class="col-12">
                            <div class="row mb--35 mb-md--25">
                                <div class="col-12 text-center">
                                    <h3 class="heading-tertiary heading-color">What Client Say ?</h3>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="airi-element-carousel testimonial-carousel"    
                                    data-slick-options='{
                                        "slidesToShow": 1,
                                        "slidesToScroll": 1
                                    }'>
                                        <div class="testimonial testimonial-style-3">
                                            <div class="testimonial__inner">
                                                <img src="assets/img/others/happy-client-1.jpg" alt="Client" class="testimonial__author--img">
                                                <p class="testimonial__desc">"Maecenas eu accumsan libero. Fusce id imperdiet felis. Cras sed ex vel turpis ultricies blandit nec et massa. Pellentesque lectus turpis, vestibulum eu interdum vel.</p>
                                                <div class="testimonial__author">
                                                    <h3 class="testimonial__author--name">Lura Frazier</h3>
                                                    <p class="testimonial__author--designation">Happy Client</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial testimonial-style-3">
                                            <div class="testimonial__inner">
                                                <img src="assets/img/others/happy-client-2.jpg" alt="Client" class="testimonial__author--img">
                                                <p class="testimonial__desc">"Maecenas eu accumsan libero. Fusce id imperdiet felis. Cras sed ex vel turpis ultricies blandit nec et massa. Pellentesque lectus turpis, vestibulum eu interdum vel.</p>
                                                <div class="testimonial__author">
                                                    <h3 class="testimonial__author--name">Lura Frazier</h3>
                                                    <p class="testimonial__author--designation">Happy Client</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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


<!-- Mirrored from demo.hasthemes.com/airiV-2/airi/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Dec 2018 15:11:17 GMT -->
</html>

<?php
	include "_footer.php";
?>
   