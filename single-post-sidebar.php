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


<!-- Mirrored from demo.hasthemes.com/airiV-2/airi/single-post-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Dec 2018 15:13:25 GMT -->
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
                            <li><a href="blog.html">Blog</a></li>
                            <li class="current"><span>Single Post Sidebar</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Breadcrumb area End -->

        <!-- Main Content Wrapper Start -->
        <div id="content" class="main-content-wrapper">
            <div class="page-content-inner blog-page-sidebar">
                <div class="container">
                    <div class="row ptb--70 ptb-md--50 ptb-sm--30">
                        <div class="col-lg-9 order-lg-2 mb-md--35" id="main-content">
                            <div class="single-post">
                                <!-- Single Blog Start Here -->
                                <article class="single-post-details">
                                    <div class="entry-header">
                                        <h2 class="entry-title">Monday to Sunday</h2>
                                        <div class="entry-meta">
                                            <div class="entry-meta-top">
                                                <a href="blog.html" class="posted-on">September 15, 2018</a>
                                                <span class="meta-separator">-</span>
                                                <a href="blog.html" class="posted-by">John Snow</a>
                                                <span class="meta-separator">/</span>
                                                <a href="blog.html">Life Style</a>
                                            </div>
                                            <div class="entry-meta-bottom">
                                                <a href="#" class="comments-link">
                                                    <i class="dl-icon-comment"></i>
                                                    <span>2</span>
                                                </a>
                                                <a href="#" class="favorite-link">
                                                    <i class="dl-icon-heart4"></i>
                                                    <span>4</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="entry-thumbnail">
                                        <img src="assets/img/blog/post-1-1.jpg" alt="Post Thumbnail">
                                    </div>
                                    <div class="entry-content">
                                        <p>Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales dolor nec mattis convallis. Quisque ut nulla viverra, posuere lorem eget, ultrices metus. Nulla facilisi. Duis aliquet, eros in auctor aliquam, tortor justo laoreet nisi, nec pulvinar lectus diam nec libero. Nullam sit amet dia</p>
                                        <p>Cras porta posuere lectus, vitae consectetur dolor elementum id. Ut interdum, sem eget varius eleifend, ex risus gravida purus, sed finibus tortor nisi maximus orci. Etiam vel sollicitudin nisi. In ipsum tortor, vulputate nec est in, pharetra malesuada diam. Praesent ullamcorper lacinia ultrices. Etiam semper cursus mi, id tempor neque porta non. Praesent nec faucibus risus. Morbi aliquam hendrerit felis, eu cursus orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et ante a felis egestas varius quis eget urna. Mauris blandit, sem venenatis blandit vehicula, neque leo eleifend ante, id porta enim odio sit amet dolor. Duis finibus magna id justo egestas tincidunt. Aliquam eu tristique lorem. Morbi rutrum accumsan sem, ut rhoncus tortor tincidunt eget. Phasellus eros massa, molestie id molestie a, maximus id tortor. Aenean sit amet arcu varius, elementum sapien ut, tristique est.</p>
                                        <p>Nullam viverra convallis tellus. Nulla fermentum dictum congue. Quisque enim felis, molestie ac tempor vel, auctor a magna. Sed viverra laoreet turpis, vitae pellentesque sem viverra sed. Integer posuere est a sem viverra</p>
                                        <div class="row mb--80 mb-lg--40">
                                            <div class="col-md-6">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et ante a felis egestas varius quis eget urna. Mauris blandit, sem venenatis blandit vehicula, neque leo eleifend ante, id porta enim odio sit amet dolor. Duis finibus magna id justo egestas tincidunt. Aliquam eu tristique lorem. Morbi rutrum accumsan sem
                                                </p>
                                                <ul class="list list-disc">
                                                    <li>Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales dolor nec mattis conva.</li>
                                                    <li>Cras porta posuere lectus, vitae consectetur dolor elementum id. Ut interdum, sem eget varius eleifend</li>
                                                </ul>
                                                <p>Porta enim odio sit amet dolor. Duis finibus magna id justo egestas tincidunt. Aliquam eu tristique lorem. Morbi rutrum accumsan sem</p>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <img src="assets/img/blog/post-1-2.jpg" alt="blog">
                                            </div>
                                        </div>
                                        <h3>7 Reason why you need to work for a big company</h3>
                                        <p>Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales dolor nec mattis convallis. Quisque ut nulla viverra, posuere lorem eget, ultrices metus. Nulla facilisi. Duis aliquet, eros in auctor aliquam, tortor justo laoreet nisi, nec pulvinar lectus diam nec libero. Nullam sit amet dia</p>

                                        <p>Cras porta posuere lectus, vitae consectetur dolor elementum id. Ut interdum, sem eget varius eleifend, ex risus gravida purus, sed finibus tortor nisi maximus orci. Etiam vel sollicitudin nisi. In ipsum tortor, vulputate nec est in, pharetra malesuada diam. Praesent ullamcorper lacinia ultrices. Etiam semper cursus mi, id tempor neque porta non. Praesent nec faucibus risus. Morbi aliquam hendrerit felis, eu cursus orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et ante a felis egestas varius quis eget urna. Mauris blandit, sem venenatis blandit vehicula, neque leo eleifend ante, id porta enim odio sit amet dolor. Duis finibus magna id justo egestas tincidunt. Aliquam eu tristique lorem. Morbi rutrum accumsan sem, ut rhoncus tortor tincidunt eget.</p>
                                    </div>
                                    <div class="entry-footer-meta">
                                        <div class="tag-list">
                                            <span>
                                                <i class="fa fa-tags"></i>
                                            </span>
                                            <span>
                                                <a href="blog.html">Business</a>,
                                                <a href="blog.html">Creative</a>,
                                                <a href="blog.html">Start-up</a>
                                            </span>
                                        </div>
                                        <div class="author">
                                            <span>
                                                Author: <a href="blog.html">John Snow</a>
                                            </span>
                                        </div>
                                    </div>
                                </article>
                                <!-- Single Blog End Here -->

                                <!-- Social Sharing Icons Start Here -->
                                <div class="post-share sticky-social">
                                    <ul class="social social-big social-round social-sharing bg-gray-2 vertical">
                                        <li class="social__item">
                                            <a href="facebook.com" class="social__link facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="twitter.com" class="social__link twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="plus.google.com" class="social__link pinterest">
                                                <i class="fa fa-pinterest-p"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="plus.google.com" class="social__link google-plus">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Social Sharing Icons End Here -->

                                <!-- Post Navigation Start Here -->
                                <nav class="post-navigation">
                                    <div class="nav-links">
                                        <div class="nav-prev nav-links__inner">
                                            <a href="single-post.html" class="nav-links__link">Prev Post</a>
                                            <span class="nav-links__text">Prev Post</span>
                                            <div class="nav-links__thumb">
                                                <img src="assets/img/blog/m2-s3-1-100x100.jpg" alt="Prev Post">
                                            </div>
                                            <div class="nav-links__content">
                                                <h4 class="nav-links__title">Summer Beach 2019</h4>
                                                <span class="nav-links__meta">August 29, 2018 - by John Snow</span>
                                            </div>
                                        </div>
                                        <div class="nav-next nav-links__inner">
                                            <a href="single-post.html" class="nav-links__link">Next Post</a>
                                            <span class="nav-links__text">Next Post</span>
                                            <div class="nav-links__thumb">
                                                <img src="assets/img/blog/post-2-1-100x100.jpg" alt="Next Post">
                                            </div>
                                            <div class="nav-links__content">
                                                <h4 class="nav-links__title">Summer Night Party</h4>
                                                <span class="nav-links__meta">August 29, 2018 - by John Snow</span>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                                <!-- Post Navigation Start Here -->
                                
                                <!-- Comments Start Here -->
                                <div class="comments-area">
                                    <div class="comment">
                                        <ul class="comment-list">
                                            <li>
                                                <div class="single-comment">
                                                    <div class="comment-avatar">
                                                        <img src="assets/img/others/comment-1.jpg" alt="comment">
                                                    </div>
                                                    <div class="comment-info">
                                                        <div class="comment-meta">
                                                            <h5 class="comment-author"><a href="#">Julia Rebeca</a></h5>
                                                            <span class="comment-date">30 Janurary, 2018</span>
                                                            <a href="#" class="reply">Reply</a>
                                                        </div>
                                                        <div class="comment-content">
                                                            <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cntur magn lores eos qui ratione voluptatem sequi nesciunt. Neque porro</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="children">
                                                    <li>
                                                        <div class="single-comment">
                                                            <div class="comment-avatar">
                                                                <img src="assets/img/others/comment-2.jpg" alt="comment">
                                                            </div>
                                                            <div class="comment-info">
                                                                <div class="comment-meta">
                                                                    <h5 class="comment-author"><a href="#">Admin</a></h5>
                                                                    <span class="comment-date">30 Janurary, 2018</span>
                                                                    <a href="#" class="reply">Reply</a>
                                                                </div>
                                                                <div class="comment-content">
                                                                    <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cntur magn lores eos qui ratione voluptatem sequi nesciunt. Neque porro</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="single-comment">
                                                    <div class="comment-avatar">
                                                        <img src="assets/img/others/comment-3.jpg" alt="comment">
                                                    </div>
                                                    <div class="comment-info">
                                                        <div class="comment-meta">
                                                            <h5 class="comment-author"><a href="#">Julia Rebeca</a></h5>
                                                            <span class="comment-date">30 Janurary, 2018</span>
                                                            <a href="#" class="reply">Reply</a>
                                                        </div>
                                                        <div class="comment-content">
                                                            <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cntur magn lores eos qui ratione voluptatem sequi nesciunt. Neque porro</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="comment-respond">
                                        <h3 class="comment-reply-title">Leave a Reply</h3>
                                        <form action="#" class="form comment-form">
                                            <div class="form-notes mb--20">
                                                <p><em>Your email address will not be published. Required fields are marked</em> <span class="required">*</span></p>
                                            </div>
                                            <div class="form__group mb--30 mb-sm--20">
                                                <div class="form-row">
                                                    <div class="col-md-4 mb-sm--20">
                                                        <label class="form__label form__label--3" for="comment_name">Name<span class="required">*</span></label>
                                                        <input type="text" name="comment_name" id="comment_name" class="form__input">
                                                    </div>  
                                                    <div class="col-md-4 mb-sm--20">
                                                        <label class="form__label form__label--3" for="comment_email">Email<span class="required">*</span></label>
                                                        <input type="email" name="comment_email" id="comment_email" class="form__input">
                                                    </div> 
                                                    <div class="col-md-4">
                                                        <label class="form__label form__label--3" for="comment_website">Website</label>
                                                        <input type="url" name="comment_website" id="comment_website" class="form__input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form__group mb--30 mb-sm--20">
                                                <div class="form-row">
                                                    <div class="col-12">
                                                        <label class="form__label form__label--3" for="review">Your Review<span class="required">*</span></label>
                                                        <textarea name="review" id="review" class="form__input form__input--textarea"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form__group">
                                                <div class="form-row">
                                                    <div class="col-12">
                                                        <input type="submit" value="Submit" class="btn btn-style-1 btn-submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Comments Start Here -->
                            </div>
                        </div>
                        <div class="col-lg-3 order-lg-1 mt--5" id="primary-sidebar">
                            <div class="sidebar-inner">
                                <div class="widget blog-widget widget-categories mb--40 mb-md--30 mb-sm--20">
                                    <h3 class="widget-title">Categories</h3>
                                    <ul class="menu list-unstyled">
                                        <li><a href="#">Cafe</a></li>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Furniture</a></li>
                                        <li><a href="#">Life Style</a></li>
                                        <li><a href="#">New Look</a></li>
                                        <li><a href="#">Photography</a></li>
                                        <li><a href="#">Technology</a></li>
                                        <li><a href="#">Travel</a></li>
                                    </ul>
                                </div>
                                <div class="widget blog-widget widget-recent-posts mb--40 mb-md--30 mb-sm--20">
                                    <h3 class="widget-title">Recent Post</h3>
                                    <div class="recent-post">
                                        <div class="recent-post__item">
                                            <div class="recent-post__thumb">
                                                <a href="single-post.html">
                                                    <img src="assets/img/blog/image-70x70.jpg" alt="Blog">
                                                </a>
                                            </div>
                                            <div class="recent-post__content">
                                                <h3 class="recent-post__title text-truncate">
                                                    <a href="single-post.html">Monday to Sunday</a>
                                                </h3>
                                                <span class="recent-post__meta">September 15, 2018</span>
                                            </div>
                                        </div>
                                        <div class="recent-post__item">
                                            <div class="recent-post__thumb">
                                                <a href="single-post.html">
                                                    <img src="assets/img/blog/blog-13-70x70.jpg" alt="Blog">
                                                </a>
                                            </div>
                                            <div class="recent-post__content">
                                                <h3 class="recent-post__title text-truncate">
                                                    <a href="single-post.html">Dress Time</a>
                                                </h3>
                                                <span class="recent-post__meta">September 15, 2018</span>
                                            </div>
                                        </div>
                                        <div class="recent-post__item">
                                            <div class="recent-post__thumb">
                                                <a href="single-post.html">
                                                    <img src="assets/img/blog/blog-12-70x70.jpg" alt="Blog">
                                                </a>
                                            </div>
                                            <div class="recent-post__content">
                                                <h3 class="recent-post__title text-truncate">
                                                    <a href="single-post.html">Fashion Vintage</a>
                                                </h3>
                                                <span class="recent-post__meta">September 15, 2018</span>
                                            </div>
                                        </div>
                                        <div class="recent-post__item">
                                            <div class="recent-post__thumb">
                                                <a href="single-post.html">
                                                    <img src="assets/img/blog/blog-11-70x70.jpg" alt="Blog">
                                                </a>
                                            </div>
                                            <div class="recent-post__content">
                                                <h3 class="recent-post__title text-truncate">
                                                    <a href="single-post.html">She Belived She Could</a>
                                                </h3>
                                                <span class="recent-post__meta">September 15, 2018</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget blog-widget widget-archive mb--40 mb-md--30 mb-sm--20">
                                    <h3 class="widget-title">Archives</h3>
                                    <ul class="menu">
                                        <li><a href="blog.html">September 2018</a></li>
                                        <li><a href="blog.html">August 2018</a></li>
                                    </ul>
                                </div>
                                <div class="widget blog-widget widget-meta mb--40 mb-md--30 mb-sm--20">
                                    <h3 class="widget-title">Meta</h3>
                                    <ul class="menu">
                                        <li><a href="blog.html">Site Admin</a></li>
                                        <li><a href="login-register.html">Log out</a></li>
                                        <li><a href="blog.html">Entries RSS</a></li>
                                        <li><a href="blog.html">Comments RSS</a></li>
                                        <li><a href="blog.html">WordPress.org</a></li>
                                    </ul>
                                </div>
                                <div class="widget blog-widget widget-tag">
                                    <h3 class="widget-title">Tags</h3>
                                    <div class="tagcloud">
                                        <a href="blog.html">Business</a>
                                        <a href="blog.html">Creative</a>
                                        <a href="blog.html">Strat-up</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid p-0">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row pt--65 pb--55 pt-md--45 pb-md--35 pt-sm--35 pb-sm--25">
                        <div class="col-12">
                            <h4 class="mb--35 text-center">Related Post</h4>
                            <div class="airi-element-carousel related-post"
                                data-slick-options='{
                                    "spaceBetween": 30,
                                    "slidesToShow": 3,
                                    "slidesToScroll": 3
                                }'
                                data-slick-responsive='[
                                    {"breakpoint":991, "settings": {"slidesToShow": 2} },
                                    {"breakpoint":479, "settings": {"slidesToShow": 1} }
                                ]'
                            >
                                <div class="item">
                                    <article class="blog blog-style-2">
                                        <div class="blog-media">
                                            <div class="image">
                                                <a href="single-post.html">
                                                    <img src="assets/img/blog/blog-f-1-500x478.jpg" alt="Blog Thumb">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="blog-info">
                                            <div class="blog-entry-meta">
                                                <a href="blog.html" class="posted-on">September 16, 2018</a>
                                                <span class="meta-separator">-</span>
                                                <a href="blog.html" class="posted-by">By John Snow</a>
                                            </div>
                                            <h3 class="blog-title blog-title--2">
                                                <a href="single-post.html">Decorative Trending 2019 </a>
                                            </h3>
                                            <p class="blog__excerpt">Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar…</p>
                                        </div>
                                    </article>
                                </div>
                                <div class="item">
                                    <article class="blog blog-style-2">
                                        <div class="blog-media">
                                            <div class="image">
                                                <a href="single-post.html">
                                                    <img src="assets/img/blog/blog-11-500x478.jpg" alt="Blog Thumb">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="blog-info">
                                            <div class="blog-entry-meta">
                                                <a href="blog.html" class="posted-on">September 16, 2018</a>
                                                <span class="meta-separator">-</span>
                                                <a href="blog.html" class="posted-by">By John Snow</a>
                                            </div>
                                            <h3 class="blog-title blog-title--2">
                                                <a href="single-post.html">She Belived She Could</a>
                                            </h3>
                                            <p class="blog__excerpt">Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar…</p>
                                        </div>
                                    </article>
                                </div>
                                <div class="item">
                                    <article class="blog blog-style-2">
                                        <div class="blog-media">
                                            <div class="image">
                                                <a href="single-post.html">
                                                    <img src="assets/img/blog/blog-f-2-500x478.jpg" alt="Blog Thumb">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="blog-info">
                                            <div class="blog-entry-meta">
                                                <a href="blog.html" class="posted-on">September 16, 2018</a>
                                                <span class="meta-separator">-</span>
                                                <a href="blog.html" class="posted-by">By John Snow</a>
                                            </div>
                                            <h3 class="blog-title blog-title--2">
                                                <a href="single-post.html">Decorative Trending 2019 </a>
                                            </h3>
                                            <p class="blog__excerpt">Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar…</p>
                                        </div>
                                    </article>
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


<!-- Mirrored from demo.hasthemes.com/airiV-2/airi/single-post-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Dec 2018 15:13:25 GMT -->
</html>
<?php
	include "_footer.php";
?>