<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hmend - THEMELOCK.COM - Home Maintenance, Repair Service HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->


    <!-- all css here -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <link rel="stylesheet" href="/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="/assets/css/headline.css">
    <link rel="stylesheet" href="/assets/css/animate.min.css">
    <link rel="stylesheet" href="/assets/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="/assets/css/meanmenu.css">
    <link rel="stylesheet" href="/assets/css/Pe-icon-7-stroke.css">
    <link rel="stylesheet" href="/assets/css/bundle.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<header>
    <!-- header-top-area-start -->
    <div class="header-top-area blue-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="headers-left">
                        <div class="headers-left-text">
                            <div class="headers-left-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="headers-left-text">
                                <p>+00-1202-235</p>
                            </div>
                        </div>
                        <div class="headers-left-text">
                            <div class="headers-left-icon">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="headers-left-text">
                                <p>2020 Willshire Glen,</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6  col-xs-12">
                    <div class="header-rights">
                        <a href="#"><i class="zmdi zmdi-calendar"></i> make appointment</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- main-menu-area-start -->
    <div id="header-sticky" class="main-menu-area menu-style-1 white-header">
        <div class="container md-container">
            <div class="row">
                <div class="col-md-2 col-sm-4">
                    <div class="logo">
                        <a href="index.html"><img src="/assets/img/logo/1.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-md-7 col-sm-8">
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li class="active"><a href="/">home</a> </li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="service.html">service</a>
                                    <ul class="sub-menu">
                                        <li><a href="service-details.html">service-details</a></li>
                                    </ul>
                                </li>
                                <li><a href="project.html">projects</a>
                                    <ul class="sub-menu">
                                        <li><a href="project-details.html">project-details</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-left-sidebar.html">blog-left-sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">blog-right-sidebar</a></li>
                                        <li><a href="blog-no-sidebar.html">blog-no-sidebar</a></li>
                                        <li><a href="blog-details.html">blog-details</a></li>
                                        <li><a href="blog-details-no-sidebar.html">blog-details-no-sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 hidden-xs hidden-sm">
                    <div class="header-menu-icon">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-vimeo"></i></a>
                        <a href="#"><i class="fa fa-tumblr"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    </div>
                </div>
                <div class="col-xs-12"><div class="mobile-menu"></div></div>
            </div>
        </div>
    </div>
    <!-- main-menu-area-end -->
</header>
<!-- header-top-area-start -->
<!-- breadcrumb-banner-area -->
<div class="breadcrumb-banner-area ptb-120 bg-opacity" style="background-image:url(/assets/img/bg/6.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text text-center">
                    <h2>blog-left-sidebar</h2>
                    <p>Lorem Ipsum is simply dummy text of. </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-banner-area-end -->
<!-- blog-right-area-start -->
<div class="blog-area pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-30">

                <!--сайдбар-->

                @section('author')
                    @if(isset($author))
                        <div class="widget mb-60">
                            <div class="blog-widget-img">
                                <a href="/author/{{$author->slug}}" class="author_link">
                                    <img src="/images/authors/{{$author->author_img}}" alt="{{$author->author_name}}" />
                                </a>
                            </div>
                            <div class="blog-widget-title">
                                <p>{{$author->author_txt}}</p>
                                <h4>{{$author->author_name}}</h4>
                                <div class="blog-widget-icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-vimeo"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    @endif
                @show

                <div class="widget mb-60">
                    <h6 class="widget-title">Search</h6>
                    <form class="search-form">
                        <input placeholder="Search keyword" type="text">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="widget mb-60">
                    <h6 class="widget-title">Recent Posts</h6>
                    <ul class="recent-posts">
                        <li>
                            <div class="widget-posts-image">
                                <a href="#"><img src="/assets/img/blog/111.jpg" alt=""></a>
                            </div>
                            <div class="widget-posts-body">
                                <div class="widget-posts-meta">February  13,  2018</div>
                                <h6 class="widget-posts-title"><a href="#">Diffrent title gose here. Thisisdemo title.</a></h6>
                            </div>
                        </li>
                        <li>
                            <div class="widget-posts-image">
                                <a href="#"><img src="/assets/img/blog/112.jpg" alt=""></a>
                            </div>
                            <div class="widget-posts-body">
                                <div class="widget-posts-meta">February  13,  2018</div>
                                <h6 class="widget-posts-title"><a href="#">Diffrent title gose here. Thisisdemo title.</a></h6>
                            </div>
                        </li>
                        <li>
                            <div class="widget-posts-image">
                                <a href="#"><img src="/assets/img/blog/113.jpg" alt=""></a>
                            </div>
                            <div class="widget-posts-body">
                                <div class="widget-posts-meta">February  13,  2018</div>
                                <h6 class="widget-posts-title"><a href="#">Diffrent title gose here. Thisisdemo title.</a></h6>
                            </div>
                        </li>
                        <li>
                            <div class="widget-posts-image">
                                <a href="#"><img src="/assets/img/blog/114.jpg" alt=""></a>
                            </div>
                            <div class="widget-posts-body">
                                <div class="widget-posts-meta">February  13,  2018</div>
                                <h6 class="widget-posts-title"><a href="#">Diffrent title gose here. Thisisdemo title.</a></h6>
                            </div>
                        </li>
                    </ul>
                </div>



                @section('menu')
                    @if(isset($menu))
                <div class="widget mb-60">
                    <h6 class="widget-title">Категории</h6>
                    <ul class="blog-categories">
                        @foreach($menu as $item)
                        <li><a href="/list/{{ $item['slag'] }}">♦ {{ $item['name'] }}</a> <span class="count">({{$item['count']}})</span></li>
                        @endforeach
                    </ul>
                </div>
                    @endif
                @show

                <div class="widget mb-60">
                    <h6 class="widget-title">Recent Comment</h6>
                    <ul class="Recent-Comment">
                        <li>
                            <div class="recent-comment-icon">
                                <i class="fa fa-comments-o"></i>
                            </div>
                            <div class="recent-comment-text">
                                <h4><a href="#">Creative Design for blog post. Its also simple.</a></h4>
                                <div class="recent-meta">
                                    <span>13 Feb 2016</span>
                                    <span>04.00am</span>
                                    <span>Arif Vai</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="recent-comment-icon">
                                <i class="fa fa-comments-o"></i>
                            </div>
                            <div class="recent-comment-text">
                                <h4><a href="#">Creative Design for blog post. Its also simple.</a></h4>
                                <div class="recent-meta">
                                    <span>13 Feb 2016</span>
                                    <span>04.00am</span>
                                    <span>Arif Vai</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="recent-comment-icon">
                                <i class="fa fa-comments-o"></i>
                            </div>
                            <div class="recent-comment-text">
                                <h4><a href="#">Creative Design for blog post. Its also simple.</a></h4>
                                <div class="recent-meta">
                                    <span>13 Feb 2016</span>
                                    <span>04.00am</span>
                                    <span>Arif Vai</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="recent-comment-icon">
                                <i class="fa fa-comments-o"></i>
                            </div>
                            <div class="recent-comment-text">
                                <h4><a href="#">Creative Design for blog post. Its also simple.</a></h4>
                                <div class="recent-meta">
                                    <span>13 Feb 2016</span>
                                    <span>04.00am</span>
                                    <span>Arif Vai</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="recent-comment-icon">
                                <i class="fa fa-comments-o"></i>
                            </div>
                            <div class="recent-comment-text">
                                <h4><a href="#">Creative Design for blog post. Its also simple.</a></h4>
                                <div class="recent-meta">
                                    <span>13 Feb 2016</span>
                                    <span>04.00am</span>
                                    <span>Arif Vai</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="widget mb-60">
                    <div class="img-widgets">
                        <img src="/assets/img/blog/6.jpg" alt="" />
                        <div class="img-title">
                            <h4>Banner Text for Design</h4>
                            <a href="#">contact now <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="widget mb-60">
                    <h6 class="widget-title">Newsletter</h6>
                    <form class="news-form">
                        <input placeholder="Search keyword" type="text">
                        <button type="submit"><i class="fa fa-paper-plane"></i></button>
                    </form>
                </div>
                <div class="widget mb-60">
                    <h6 class="widget-title">Instagram</h6>
                    <ul class="Instagram-img">
                        <li>
                            <a href="#"><img src="/assets/img/blog/001.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="/assets/img/blog/002.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="/assets/img/blog/003.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="/assets/img/blog/004.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="/assets/img/blog/005.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="/assets/img/blog/006.jpg" alt=""></a>
                        </li>
                    </ul>
                </div>
                <div class="widget mb-60">
                    <h6 class="widget-title">Recent Tweets</h6>
                    <ul class="tweets-post">
                        <li>
                            <div class="tweets-icon-tittle">
                                <h5><i class="fa fa-twitter"></i> <a href="#">@momenbhuiyan</a></h5>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                <div class="recent-meta">
                                    <span>13 Feb 2016</span>
                                    <span>04.00am</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="tweets-icon-tittle">
                                <h5><i class="fa fa-twitter"></i> <a href="#">@robiulsiddikee</a></h5>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                <div class="recent-meta">
                                    <span>13 Feb 2016</span>
                                    <span>04.00am</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="tweets-icon-tittle">
                                <h5><i class="fa fa-twitter"></i> <a href="#">@arifsinha</a></h5>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                <div class="recent-meta">
                                    <span>13 Feb 2016</span>
                                    <span>04.00am</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="widget mb-60">
                    <h6 class="widget-title">Social-Network</h6>
                    <div class="Social-icon">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-vimeo"></i></a>
                    </div>
                </div>
                <div class="widget">
                    <h6 class="widget-title">Social-Network</h6>
                    <ul class="tag">
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Print</a></li>
                        <li><a href="#">Adobe</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Creative</a></li>
                    </ul>
                </div>

                <!--сайдбар-end-->

            </div>
            <div class="col-md-8 mb-30">

                @yield('content')

            </div>
        </div>
    </div>
</div>
<!-- blog-right-area-start -->
<footer>
    <!-- footer-top-area-start -->
    <div class="footer-top-area footer-top pt-100 bg-opacity pb-70" style="background-image:url(/assets/img/bg/5.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 pr-0">
                    <div class="footer-wrapper mb-30">
                        <h2 class="footer-section">about us</h2>
                        <div class="footer-text">
                            <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore ma gnall aliqua. Ut enim ad minim. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-offset-1 col-md-2 col-sm-4">
                    <div class="footer-wrapper mb-30">
                        <h2 class="footer-section">SUPPORT</h2>
                        <ul class="footer-menu">
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Forums</a></li>
                            <li><a href="#">Language Packs</a></li>
                            <li><a href="#">Release Status</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-offset-1 col-md-2 hidden-sm">
                    <div class="footer-wrapper mb-30">
                        <h2 class="footer-section">link</h2>
                        <ul class="footer-menu">
                            <li><a href="#">Our Company</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Recent Work</a></li>
                            <li><a href="#">Latest News</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="footer-wrapper mb-30">
                        <h2 class="footer-section">address</h2>
                        <ul class="footer-link">
                            <li><i class="fa fa-phone"></i>1st floor dhaka bangladesh</li>
                            <li><i class="fa fa-envelope-open"></i>(801) 2345 - 6789</li>
                            <li><i class="fa fa-envelope-open"></i>admin@yourmail.com</li>
                            <li><i class="fa fa-clock-o"></i>Sat - Fry: 9:00 am- 2:00pm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-top-area-end -->
    <!-- footer-bottom-area-start -->
    <div class="footer-bottom-area footer-bottom footer-bottom-1 black-bg-2 ptb-20">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="copyright">
                        <p>Copyright © 2017 <a href="#">Hmend</a> All Right Reserved.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="footer-icon">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-vimeo"></i></a>
                        <a href="#"><i class="fa fa-tumblr"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom-area-end -->
</footer>
<!-- all js here -->
<script src="/assets/js/vendor/jquery-1.12.0.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/headline.js"></script>
<script src="/assets/js/jquery.magnific-popup.min.js"></script>
<script src="/assets/js/jquery.scrollUp.min.js"></script>
<script src=/assets/js/isotope.pkgd.min.js"></script>
<script src="/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="/assets/js/jquery.counterup.min.js"></script>
<script src="/assets/js/waypoints.min.js"></script>
<script src="/assets/js/jquery.parallax-1.1.3.js"></script>
<script src="/assets/js/owl.carousel.min.js"></script>
<script src="/assets/js/jquery.meanmenu.js"></script>
<script src="/assets/js/ajax-mail.js"></script>
<script src="/assets/js/plugins.js"></script>
<script src="/assets/js/main.js"></script>
</body>
</html>
