<!doctype html>
<html>
<head>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="ThemeMarch">
	<!-- Page Title -->
	<title>Trustlife - Medical and Health Landing Page HTML Template</title>
    <!-- Favicon Icon -->
  	<link rel="icon" href="assets/img/favicon.png">
	<!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="assets/css/plugins.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

    <!-- Start Preloader -->
    <div id="tm-preloader">
        <div id="tm-preloader-in">
            <div></div><div></div><div></div><div></div><div></div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Start Site Header Wrap -->
    <header>
        <div class="tm-site-header">
            <div class="tm-header-info-wrap">
                <div class="container tm-header-info">
                    <a href="#"><i class="fa fa-phone"></i>1-800-915-6270</a>
                    <a href="#"><i class="fa fa-envelope"></i>info@trustlife.com</a>
                </div>
            </div>
            <div class="tm-header-menu">
                <div class="container tm-header-menu-container">
                    <div class="tm-site-branding">
                        <!-- For Image Logo -->
                        <a href="index.html" class="tm-logo-link">
                            <img src="assets/img/logo.png" alt="" class="tm-logo">
                        </a>
                        <!-- For Site Title -->
                        <!-- <span class="tm-site-title">
                        <a href="index.html">Trustlife</a>
                        </span> -->
                    </div>
                    <nav class="tm-primary-nav tm-onepage-nav">
                        <ul class="tm-primary-nav-list">
                            <li class="menu-item menu-item-has-children">
                                <a href="index.html#home" class="nav-link tm-smooth-move">HOME</a>
                                @include("pageHtml.deroulant")
                            </li>
                            <li class="menu-item"><a href="index.html#about" class="nav-link tm-smooth-move">ABOUT</a></li>
                            <li class="menu-item"><a href="index.html#department" class="nav-link tm-smooth-move">DEPARTMENT</a></li>
                            <li class="menu-item"><a href="index.html#doctor" class="nav-link tm-smooth-move">DOCTOR</a></li>
                            <li class="menu-item"><a href="index.html#gallery" class="nav-link tm-smooth-move">GALLERY</a></li>
                            <li class="menu-item"><a href="index.html#price" class="nav-link tm-smooth-move">PRICE</a></li>
                            <li class="menu-item menu-item-has-children current-menu-ancestor current-menu-parent"><a href="index.html#blog" class="nav-link tm-smooth-move">BLOG</a>
                                <ul>
                                    <li class="menu-item"><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li class="menu-item current-menu-item"><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li class="menu-item"><a href="blog-full-width.html">Blog Full Width</a></li>
                                    <li class="menu-item"><a href="blog-details-right-sidebar.html">Single Blog Image Post</a></li>
                                    <li class="menu-item"><a href="blog-details-left-sidebar.html">Single Blog Slider Post</a></li>
                                    <li class="menu-item"><a href="blog-details-full-width.html">Single Blog Video Post</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="index.html#contact" class="nav-link tm-smooth-move">CONTACT</a></li>
                            <li class="menu-item"><a href="index.html#appointment" class="nav-link tm-smooth-move">APPOINTMENT</a></li>
                        </ul>
                    </nav>
                </div><!-- .tm-header-menu-container -->
            </div><!-- .tm-header-menu -->
        </div><!-- .tm-site-header -->
    </header>
    <!-- End Site Header Wrap -->

    <!-- Start Blog Header -->
    <section class="tm-blog-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tm-blog-hero-title">Our News & Blog</h1>
                    <ul class="tm-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Blog Details</li>
                    </ul>
                </div><!-- .col -->
            </div>
        </div>
    </section>
    <!-- End Blog Header -->

       <!-- Start Site Content -->
    <div class="tm-blog-section tm-blog-left-sidebar">
    	<div class="empty-space col-md-b100 col-xs-b70"></div>
        <div class="container">
            <div class="row">
            	<aside class="col-xl-3 col-lg-4 sidebar">
                	<div class="empty-space col-md-b0 col-xs-b40"></div>
                    <section class="widget widget_search">
                        <h2 class="widget-title">Search</h2>
                        <form role="search" method="get" class="search-form">
                            <input type="submit" class="search-btn">
                            <label>
                                <input type="text" class="search-field" placeholder="Search …">
                            </label>
                        </form>
                    </section>
                    <section class="widget widget_categories">
                        <h2 class="widget-title">Categories</h2>
                        <ul>
                            <li><a href="#">Business Growth</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Consulting</a></li>
                            <li><a href="#">Technology</a></li>
                        </ul>
                    </section><!-- .widget -->
                    <section class="widget widget_recent_entries">
                        <h2 class="widget-title">Recent Post</h2>
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="assets/img/recent-post-01.jpg" alt="">
                                    <div class="r-post-head">
                                        <h2>Lorem Ipsum Dolor..</h2>
                                        <span>February 11, 2018</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/recent-post-02.jpg" alt="">
                                    <div class="r-post-head">
                                        <h2>Lorem Ipsum Dolor..</h2>
                                        <span>February 11, 2018</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/recent-post-03.jpg" alt="">
                                    <div class="r-post-head">
                                        <h2>Lorem Ipsum Dolor..</h2>
                                        <span>February 11, 2018</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </section><!-- .widget -->
                    <section class="widget widget_tag_cloud">
                        <h2 class="widget-title">Popular tags</h2>
                        <div class="tagcloud">
                            <a href="#">Idea</a>
                            <a href="#">Book</a>
                            <a href="#">Service</a>
                            <a href="#">Clean</a>
                            <a href="#">Marketing</a>
                            <a href="#">Agency</a>
                            <a href="#">Unique</a>
                            <a href="#">Creative </a>
                            <a href="#">Clear</a>
                        </div>
                    </section><!-- .widget -->
                    <section class="widget widget_archive">
                        <h2 class="widget-title">Archives</h2>
                        <ul>
                            <li><a href="#">January 2017</a></li>
                            <li><a href="#">March 2017</a></li>
                            <li><a href="#">Julay 2017</a></li>
                            <li><a href="#">Julay 2017</a></li>
                            <li><a href="#">November 2017</a></li>
                            <li><a href="#">February 018</a></li>
                        </ul>
                    </section><!-- .widget -->
                </aside>
                <main class="col-xl-9 col-lg-8">
                    <div class="tm-site-main">
                        <article class="tm-post">
                            <header class="tm-entry-header">
                                <div class="tm-post-thumb">
                                    <div class="tm-post-carousel owl-carousel">
                                        <img src="assets/img/blog-05.jpg" alt="">
                                        <img src="assets/img/blog-06.jpg" alt="">
                                        <img src="assets/img/blog-09.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tm-post-details-wrap">
                                    <h2 class="tm-entry-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing eliust</a></h2>
                                    <div class="tm-byline">
                                        <span class="author">
                                            <a href="#" class="bar-link"><i class="fa fa-user"></i>Admin</a>
                                        </span>
                                        <span class="posted-on"><i class="fa fa-calendar"></i>February 21, 2018</span>
                                        <span><i class="fa fa-tag"></i>Medical</span>
                                    </div>
                                </div><!-- .tm-post-details-wrap -->
                            </header><!-- .tm-entry-header -->
                            <div class="tm-entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatLorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="empty-space col-xs-b30"></div>
                            <a href="#" class="tm-btn1">Read More</a>
                        </article><!-- .post -->
                        <article class="tm-post">
                            <header class="tm-entry-header">
                                <div class="tm-post-thumb">
                                    <!-- For Youtube -->
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" width="816" height="459" src="https://www.youtube.com/embed/vGOL7ZvuGMc" allowfullscreen>
                                        </iframe>
                                    </div>
                                    <!-- For Vimeo -->
                                    <!-- <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" width="816" height="459" src="https://player.vimeo.com/video/172077385?title=0&tm-byline=0&portrait=0&color=EE5A3F&autoplay=0&loop=0&wmode=transparent" allowfullscreen></iframe>
                                    </div> -->
                                </div>
                                <div class="tm-post-details-wrap">
                                    <h2 class="tm-entry-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing eliust</a></h2>
                                    <div class="tm-byline">
                                        <span class="author">
                                            <a href="#" class="bar-link"><i class="fa fa-user"></i>Admin</a>
                                        </span>
                                        <span class="posted-on"><i class="fa fa-calendar"></i>February 21, 2018</span>
                                        <span><i class="fa fa-tag"></i>Medical</span>
                                    </div>
                                </div><!-- .tm-post-details-wrap -->
                            </header><!-- .tm-entry-header -->
                            <div class="tm-entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatLorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="empty-space col-xs-b30"></div>
                            <a href="#" class="tm-btn1">Read More</a>
                        </article><!-- .post -->
                        <article class="tm-post">
                            <header class="tm-entry-header">
                                <div class="tm-post-details-wrap tm-post-blockquote tm-gray-bg">
                                    <div class="tm-entry-content">
                                        <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatLorem ipsum dolor sit amet.</blockquote>
                                        <div class="tm-quote-meta">
                                            <h4>Robert Smith</h4>
                                            <span>Director</span>
                                        </div>
                                    </div>
                                    <div class="tm-byline">
                                        <span class="author">
                                            <a href="#" class="bar-link"><i class="fa fa-user"></i>Admin</a>
                                        </span>
                                        <span class="posted-on"><i class="fa fa-calendar"></i>February 21, 2018</span>
                                        <span><i class="fa fa-tag"></i>Medical</span>
                                    </div>
                                </div><!-- .tm-post-details-wrap -->
                            </header><!-- .tm-entry-header -->
                            <div class="empty-space col-xs-b30"></div>
                            <a href="#" class="tm-btn1">Read More</a>
                        </article><!-- .post -->
                        <article class="tm-post">
                            <header class="tm-entry-header">
                                <div class="tm-post-thumb">
                                    <a href="#" class="tm-link-block">
                                        <img src="assets/img/blog-08.jpg" alt="">
                                        <div class="tm-blog-hover">
                                            <span class="tm-blog-shap"></span>
                                            <i class="fa fa-link"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="tm-post-details-wrap">
                                    <h2 class="tm-entry-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing eliust</a></h2>
                                    <div class="tm-byline">
                                        <span class="author">
                                            <a href="#" class="bar-link"><i class="fa fa-user"></i>Admin</a>
                                        </span>
                                        <span class="posted-on"><i class="fa fa-calendar"></i>February 21, 2018</span>
                                        <span><i class="fa fa-tag"></i>Medical</span>
                                    </div>
                                </div><!-- .tm-post-details-wrap -->
                            </header><!-- .tm-entry-header -->
                            <div class="tm-entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatLorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="empty-space col-xs-b30"></div>
                            <a href="#" class="tm-btn1">Read More</a>
                        </article><!-- .post -->
                        <div class="tm-pagination">
                            <!-- <a href="#" class="tm-prev-page"><i class="icofont icofont-long-arrow-left"></i></a> -->
                            <div class="tm-page-number">
                                <a href="#" class="active">1</a>
                                <a href="#">2</a>
                                <span>...</span>
                                <a href="#">4</a>
                            </div>
                            <a href="#" class="tm-next-page"><i class="icofont icofont-long-arrow-right"></i></a>
                        </div>
                    </div><!-- .tm-site-main -->
                </main><!-- .col -->
            </div>
        </div>
        <div class="empty-space col-md-b100 col-xs-b70"></div>
    </div>
    <!-- End Site Content -->

    <!-- Start Footer -->
    <footer class="tm-overflow-hidden">
        <div class="tm-gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="tm-footer-social">
                            <h2>Follow Us</h2>
                            <div class="tm-footer-social-list">
                                <a href="#" class="tm-social-btn blue">
                                    <i class="fa fa-facebook-square"></i>
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a href="#" class="tm-social-btn blue">
                                    <i class="fa fa-google-plus-square"></i>
                                    <i class="fa fa-google-plus-square"></i>
                                </a>
                                <a href="#" class="tm-social-btn blue">
                                    <i class="fa fa-twitter-square"></i>
                                    <i class="fa fa-twitter-square"></i>
                                </a>
                                <a href="#" class="tm-social-btn blue">
                                    <i class="fa fa-linkedin-square"></i>
                                    <i class="fa fa-linkedin-square"></i>
                                </a>
                                <a href="#" class="tm-social-btn blue">
                                    <i class="fa fa-skype"></i>
                                    <i class="fa fa-skype"></i>
                                </a>
                            </div>
                        </div>
                    </div><!-- .col -->
                </div>
            </div>
        </div>
        <div class="tm-site-footer">
            <div class="container"><!-- row-md-reverce -->
                <div class="row row-sm-reverce">
                    <div class="col-md-7 col-lg-8">
                        <p class="tm-copyright">Copyright © 2018 TRUSTLIFE. Designed by thememarch </p>
                    </div><!-- .col -->
                    <div class="col-md-5 col-lg-4">
                        <div class="tm-footer-hotline">
                            <div class="tm-footer-hotline-in">
                                <div class="tm-phone-icon"><i class="fa fa-mobile"></i></div>
                                <h3>Toll Free</h3>
                                <p>1-800-915-6270</p>
                            </div>
                        </div>
                    </div><!-- .col -->
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Scroll Up -->
    <div id='scrollup'></div>

	<!-- Scripts -->
	<script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
	<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/plugins.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>
