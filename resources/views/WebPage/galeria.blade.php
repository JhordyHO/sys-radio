<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ocean.tonytemplates.com/ttdemo/tonytemplates/23-live-radio/dark-radio/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Mar 2018 20:30:59 GMT -->
<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tropi-k-n@</title>
    <link rel="shortcut icon" href="fav-dark.png" type="image/png">
    <!-- CSS preloader -->
    <link href="css/loader-dark.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/liveradio-template-dark.css" rel="stylesheet">
    <!-- CSS modules -->
    <link href="css/flexslider.css" rel="stylesheet">
    <link href="css/sfmenu.css" rel="stylesheet">
    <link href="css/jquery.mCustomScrollbar-dark.css" rel="stylesheet" />
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="jplayer/skin/liveradio/css/jplayer.liveradio-dark.css" rel="stylesheet" />
    <link href="fonts/flaticon-liveradio/flaticon.css" rel="stylesheet">
</head>
<body class="responsive">
<div class="loader">
    <div class="inside">
        <span class="bar n1">A</span>
        <span class="bar n2">B</span>
        <span class="bar n3">c</span>
        <span class="bar n4">D</span>
        <span class="bar n5">E</span>
        <span class="bar n6">F</span>
        <span class="bar n7">G</span>
        <span class="bar n8">H</span>
    </div>
</div>
<!-- Off Canvas Menu -->
<nav id="off-canvas-menu" >
    <div id="off-canvas-menu-title">MENU<span class="icon flaticon-cancel" id="off-canvas-menu-close"></span></div>
    <ul class="expander-list">
        <li> <span class="name"><span class="expander">-</span> <a href="djs.html">Djs</a></span>
            <ul>
                <li><span class="name"><a href="#">Djs Submenu#1</a></span> </li>
                <li><span class="name"><a href="#">Djs Submenu#2</a></span> </li>
                <li><span class="name"><a href="#">Djs Submenu#3</a></span> </li>
                <li><span class="name"><a href="#">Djs Submenu#4</a></span> </li>
            </ul>
        </li>
        <li><span class="name"><a href="schedule.html">Schedule</a></span></li>
        <li><span class="name"><a href="blog-posts.html">Blog</a></span></li>
        <li><span class="name"><a href="fallery.html">GALERIA</a></span></li>
        <li><span class="name"><a href="faq.html">FAQ</a></span></li>
        <li><span class="name"><a href="contacto.html">Contact</a></span></li>
    </ul>
</nav>
<!-- //end Off Canvas Menu -->

<div id="outer">
    <div id="outer-canvas"> <!-- Navbar -->
        <header>

            <!-- Back to top -->
            <div class="back-to-top"><span class="arrow-up"><img src="images/icon-scroll-arrow.png" alt=""></span><img src="images/icon-scroll-mouse.png" alt=""></div>
            <!-- //end Back to top -->

            <section class="navbar">
                <div class="background">
                    <div class="container">
                        <!-- Logo -->
                        <div class="navbar-logo pull-left"> <a href="index-2.html"><img src="images/liveradio/logo-dark.gif" alt="Live Radio" class="img-responsive"></a></div>
                        <!-- //end Logo -->
                        <div id="top-player">
                            <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                            <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
                                <div class="jp-type-playlist">
                                    <div id="openPlaylist"><a href="#0" class="playlist-toggle"> <span></span> <span></span> <span></span> </a></div>
                                    <div class="jp-gui jp-interface">
                                        <div class="jp-details">
                                            <div class="inside"> <span class="jp-title" aria-label="title">&nbsp;</span> <span class="jp-artist" aria-label="artist">&nbsp;</span> </div>
                                        </div>
                                        <div class="jp-controls">
                                            <div class="jp-play-wrap">
                                                <div class="jp-play" role="button">
                                                    <div class="jp-play-front"></div>
                                                    <div class="jp-play-back"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-volume-controls">
                                            <button class="jp-mute" role="button" tabindex="0">mute</button>
                                            <div class="jp-volume-bar">
                                                <div class="jp-volume-bar-value"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jp-playlist" id="playlist">
                                        <ul>
                                            <li>&nbsp;</li>
                                        </ul>
                                    </div>
                                    <div class="jp-no-solution"> <span>Update Required</span> To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>. </div>
                                </div>
                            </div>
                        </div>
                        <!-- Search -->
                        <form class="navbar-search form-inline visible-lg visible-md pull-right" role="form">
                            <div class="form-group">
                                <button type="submit" class="button"><span class="flaticon-search"></span></button>
                                <input type="text" class="form-control" value="Search" onblur="if (this.value == '') {this.value = 'Search';}" onfocus="if(this.value == 'Search') {this.value = '';}">
                            </div>

                        </form>
                        <!-- //end Search -->
                        <!-- Main menu -->
                        <dl class="navbar-main-menu hidden-xs">
                            <dt class="item"> <a href="{{url('welcome')}}" class="btn-main"><span class="icon flaticon-home"></span></a> </dt>
                            <dd></dd>
                            <dt class="item">
                            <ul class="sf-menu">
                                <li> <a href="{{url('djs')}}">Djs</a>
                                    <ul>
                                        <li><a href="#">Djs Submenu # 1</a></li>
                                        <li><a href="#">Djs Submenu # 2</a></li>
                                        <li><a href="#">Djs Submenu # 3</a></li>
                                        <li><a href="#">Djs Submenu # 4</a></li>
                                    </ul>
                                </li>
                            </ul>
                            </dt>
                            <dd></dd>
                            <dt class="item"> <a href="{{url('horario')}}" class="btn-main">Horarios</a> </dt>
                            <dd></dd>
                            <dt class="item"> <a href="{{url('blog')}}" class="btn-main">BLOG</a> </dt>
                            <dd></dd>
                            <dt class="item"> <a href="{{url('galeria')}}" class="btn-main active">galería</a> </dt>
                            <dd></dd>
                            <dt class="item"> <a href="{{url('faq')}}" class="btn-main">FAQ</a> </dt>
                            <dd></dd>
                            <dt class="item"> <a href="{{url('contacto')}}" class="btn-main">contáctanos</a> </dt>
                            <dd></dd>
                        </dl>
                        <!-- //end Main menu -->

                    </div>
                </div>
                <!-- Mobile menu -->
                <div class="container visible-xs">
                    <div class="mobile-nav row">
                        <div class="nav-item item-01"><a href="#" id="off-canvas-menu-toggle"><span class="icon flaticon-menu-1"></span></a></div>
                        <div class="nav-item item-02"><a href="#"></a></div>
                        <div class="nav-item item-03"><a href="#"></a></div>
                        <div class="nav-item item-04"><a href="#"><span class="icon flaticon-search"></span></a>
                            <div class="tab-content"> <!-- Search -->
                                <form class="navbar-search form-inline" role="form">
                                    <div class="form-group">
                                        <button type="submit" class="button"><span class="flaticon-search"></span></button>
                                        <input type="text" class="form-control" value="Search" onblur="if (this.value == '') {this.value = 'Search';}" onfocus="if(this.value == 'Search') {this.value = '';}">
                                    </div>
                                </form>
                                <!-- //end Search -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- //end Mobile menu -->
                <!-- Navbar switcher -->
                <div class="navbar-switcher-container">
                    <div class="navbar-switcher"> <span class="i-inactive"><img src="images/liveradio/icon-switcher-dark.png" alt=""></span> <span class="i-active flaticon-cancel"></span> </div>
                </div>
                <!-- //end Navbar switcher -->

            </section>

            <!-- Navbar height -->
            <div class="navbar-height-inner"></div>
            <!-- Navbar height -->

            <!-- Navbar height -->
            <div class="navbar-height"></div>
            <!-- Navbar height -->

        </header>
        <!-- //end Navbar -->
        <!-- Breadcrumbs -->
        <div id="breadcrumbs">
            <div class="container"><a href="#">Home</a> <span>&#8250;</span> Gallery</div>
        </div>
        <!-- //end Breadcrumbs -->

        <!-- Social widgets -->
        <section class="social-widgets hidden-xs">
            <ul class="items">
                <li class="item item-01 facebook"> <a href="social/facebook.html" class="tab-icon"><span class="icon icon-facebook flaticon-facebook"></span></a>
                    <div class="tab-content">
                        <div class="title">FACEBOOK</div>
                        <div class="loading"><img src="images/ajax-loader.gif" alt="" class="ajaxloader"></div>
                    </div>
                </li>
                <li class="item item-02 twitter"> <a href="social/twitter.html" class="tab-icon"><span class="icon icon-twitter flaticon-twitter"></span></a>
                    <div class="tab-content">
                        <div class="title">TWITTER FEEDS</div>
                        <div class="loading"><img src="images/ajax-loader.gif" alt="" class="ajaxloader"></div>
                    </div>
                </li>
                <li class="item item-03 youtube"> <a href="social/youtubevideo.html" class="tab-icon"><span class="icon icon-youtube flaticon-youtube"></span></a>
                    <div class="tab-content">
                        <div class="title">Video</div>
                        <div class="loading"><img src="images/ajax-loader.gif" alt="" class="ajaxloader"></div>
                    </div>
                </li>
            </ul>
        </section>
        <!-- //end Social widgets -->
        <section class="content">
            <div class="container">
                <h1>Gallery</h1>
                <div class="filters-by-category text-center">
                    <ul class="option-set" data-option-key="filter">
                        <li><a href="#filter" data-option-value="*" class="selected">all events</a></li>
                        <li><a href="#filter" data-option-value=".category1">event 10.01.2015</a></li>
                        <li><a href="#filter" data-option-value=".category2" class="">event 12.01.2015</a></li>
                        <li><a href="#filter" data-option-value=".category3" class="">event 14.01.2015</a></li>
                        <li><a href="#filter" data-option-value=".category4" class="">event 17.01.2015</a></li>
                    </ul>
                </div>
                <div class="gallery">
                    <div class="item category3"> <a href="images/gallery/image-big.jpg" class="img-popup"><img src="images/gallery/gallery-thumb.jpg"  alt=""/></a> </div>
                    <div class="item category1 category3"> <a href="images/gallery/image-big-02.jpg" class="img-popup"><img src="images/gallery/gallery-thumb-02.jpg"  alt=""/> </a> </div>
                    <div class="item category2"> <a href="images/gallery/image-big-03.jpg" class="img-popup"><img src="images/gallery/gallery-thumb-03.jpg"  alt=""/> </a> </div>
                    <div class="item category4 category1"> <a href="images/gallery/image-big-04.jpg" class="img-popup"><img src="images/gallery/gallery-thumb-04.jpg"  alt=""/> </a> </div>
                    <div class="item category3 category1"> <a href="images/gallery/image-big-05.jpg" class="img-popup"><img src="images/gallery/gallery-thumb-05.jpg"  alt=""/> </a> </div>
                    <div class="item category1"> <a href="images/gallery/image-big-06.jpg" class="img-popup"><img src="images/gallery/gallery-thumb-06.jpg"  alt=""/> </a> </div>
                    <div class="item category3 category2"> <a href="images/gallery/image-big-07.jpg" class="img-popup"><img src="images/gallery/gallery-thumb-07.jpg"  alt=""/> </a> </div>
                    <div class="item category2"> <a href="images/gallery/image-big-08.jpg" class="img-popup"><img src="images/gallery/gallery-thumb-08.jpg"  alt=""/> </a> </div>
                    <div class="item category4 category1"> <a href="images/gallery/image-big-09.jpg" class="img-popup"><img src="images/gallery/gallery-thumb-09.jpg"  alt=""/> </a> </div>
                    <div class="item category4 category2"> <a href="images/gallery/image-big-10.jpg" class="img-popup"><img src="images/gallery/gallery-thumb-10.jpg"  alt=""/> </a> </div>
                    <div class="item category1"> <a href="images/gallery/image-big-11.jpg" class="img-popup"><img src="images/gallery/gallery-thumb-11.jpg"  alt=""/> </a> </div>
                    <div class="item category3"> <a href="images/gallery/image-big-12.jpg" class="img-popup"><img src="images/gallery/gallery-thumb-12.jpg"  alt=""/> </a> </div>
                    <div class="item category2"> <a href="images/gallery/image-big-13.jpg" class="img-popup"><img src="images/gallery/gallery-thumb-13.jpg"  alt=""/> </a> </div>
                    <div class="item category4 category3"> <a href="images/gallery/image-big-14.jpg" class="img-popup"> <img src="images/gallery/gallery-thumb-14.jpg"  alt=""/> </a> </div>
                    <div class="item category1"> <a href="images/gallery/image-big-15.jpg" class="img-popup"><img src="images/gallery/gallery-thumb-15.jpg"  alt=""/> </a> </div>
                    <div class="item category3 category1"> <a href="images/gallery/image-big-16.jpg" class="img-popup"><img src="images/gallery/gallery-thumb-16.jpg"  alt=""/> </a> </div>
                    <div class="item category2 category1"> <a href="images/gallery/image-big-17.jpg" class="img-popup"><img src="images/gallery/gallery-thumb-17.jpg"  alt=""/> </a> </div>
                    <div class="item category4 category2"> <a href="images/gallery/image-big-18.jpg" class="img-popup"><img src="images/gallery/gallery-thumb-18.jpg"  alt=""/> </a> </div>
                    <div class="item category2"> <a href="images/gallery/image-big-19.jpg" class="img-popup"><img src="images/gallery/gallery-thumb-19.jpg"  alt=""/> </a> </div>
                    <div class="item category1"> <a href="images/gallery/image-big-20.jpg" class="img-popup"><img src="images/gallery/gallery-thumb-20.jpg"  alt=""/> </a> </div>
                    <div class="item category3 category2"> <a href="images/gallery/image-big-21.jpg" class="img-popup"><img src="images/gallery/gallery-thumb-21.jpg"  alt=""/> </a> </div>
                    <div class="item category2 category3"> <a href="images/gallery/image-big-22.jpg" class="img-popup"><img src="images/gallery/gallery-thumb-22.jpg"  alt=""/> </a> </div>
                    <div class="item category4"> <a href="images/gallery/image-big-23.jpg" class="img-popup"><img src="images/gallery/gallery-thumb-23.jpg"  alt=""/> </a> </div>
                    <div class="item category3"> <a href="images/gallery/image-big-24.jpg" class="img-popup"><img src="images/gallery/gallery-thumb-24.jpg"  alt=""/> </a> </div>
                    <div class="item category1 category2"> <a href="images/gallery/image-big-25.jpg" class="img-popup"><img src="images/gallery/gallery-thumb-25.jpg"  alt=""/> </a> </div>
                    <div class="item category3"> <a href="images/gallery/image-big-26.jpg" class="img-popup"><img src="images/gallery/gallery-thumb-26.jpg"  alt=""/> </a> </div>
                    <div class="item category2"> <a href="images/gallery/image-big-27.jpg" class="img-popup"><img src="images/gallery/gallery-thumb-27.jpg"  alt=""/> </a> </div>
                    <div class="item category4 category3"> <a href="images/gallery/image-big-28.jpg" class="img-popup"><img src="images/gallery/gallery-thumb-28.jpg"  alt=""/> </a> </div>
                    <div class="item category4 category1"> <a href="images/gallery/image-big-29.jpg" class="img-popup"><img src="images/gallery/gallery-thumb-29.jpg"  alt=""/> </a> </div>
                    <div class="item category2 category3"> <a href="images/gallery/image-big-30.jpg" class="img-popup"><img src="images/gallery/gallery-thumb-30.jpg"  alt=""/> </a> </div>
                </div>
                <div class="text-center"><a href="#" class="btn btn-default btn-lg">MORE Photos</a></div>
            </div>
        </section>  <!-- Social navbar -->
        <section class="content nopad-xs grey-box">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6  col-lg-6 newsletter collapsed-block">
                        <div class="row">
                            <div class="col-lg-5  col-md-12 col-sm-12 ">
                                <h2 class="icon-title"><span class="icon flaticon-mail color"></span>NEWSLETTER SIGNUP <a class="expander visible-xs" href="#TabBlock-1">+</a></h2>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6 tabBlock" id="TabBlock-1">
                                <p>Enter your email and we'll send you a coupon with 10% off your next order.</p>
                                <form class="form-inline" role="form">
                                    <div class="form-group input-control">
                                        <button type="submit" class="button"><span class="flaticon-mail-alt"></span></button>
                                        <input type="text" class="form-control" value="Your E-mail..." onblur="if (this.value == '') {this.value = 'Your E-mail...';}" onfocus="if(this.value == 'Your E-mail...') {this.value = '';}">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 collapsed-block">
                        <h2><span class="icon flaticon-disc29 color"></span>FIND US ON<a class="expander visible-xs" href="#TabBlock-2">+</a></h2>
                        <div  class="tabBlock" id="TabBlock-2">
                            <ul class="find-us">
                                <li class="divider"><a href="#" class="animate-scale"><span class="icon icon-facebook flaticon-facebook"></span></a></li>
                                <li class="divider"><a href="#" class="animate-scale"><span class="icon icon-twitter flaticon-twitter"></span></a></li>
                                <li class="divider"><a href="#" class="animate-scale"><span class="icon icon-linkedin flaticon-linkedin"></span></a></li>
                                <li class="divider"><a href="#" class="animate-scale"><span class="icon icon-youtube flaticon-youtube"></span></a></li>
                                <li class="divider"><a href="#" class="animate-scale"><span class="icon icon-pinterest flaticon-pinterest"></span></a></li>
                                <li class="divider"><a href="#" class="animate-scale"><span class="icon icon-gplus flaticon-gplus"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //end Social navbar -->
        <section>
            <div class="animate fadeUp">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6115.684863819771!2d-82.9719195443651!3d39.96727545833253!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf3846176f3dff5ed!2sLa+Aurora!5e0!3m2!1sen!2sus!4v1416911994304" class="google-map-full"></iframe>
            </div>
        </section>
        <!-- Footer -->
        <footer>
            <section class="footer-navbar">
                <div class="container content nopad-xs">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-lg-4 hidden-xs animate fadeUp">
                            <div>&copy; 2015<a href="#"> Live Radio</a>. <span class="clearfix visible-sm"></span>All Rights Reserved.</div>
                            <a href="#"><img src="images/liveradio/logo-footer-dark.png" alt="" class="img-responsive"/></a> </div>
                        <div class="col-sm-9 col-md-9 col-lg-8 collapsed-block-outer">
                            <div class="col-sm-4 col-md-4 collapsed-block animate fadeUp">
                                <h4><span class="icon flaticon-info color"></span>Information<a class="expander visible-xs" href="#TabBlock-3">+</a></h4>
                                <div  class="tabBlock" id="TabBlock-3">
                                    <ul class="menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="#">Shipping &amp; Returns</a></li>
                                        <li><a href="#">Privacy Notice</a></li>
                                        <li><a href="#">Conditions of Use</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4  collapsed-block animate fadeUp">
                                <h4><span class="icon flaticon-mic color"></span>On live Radio<a class="expander visible-xs" href="#TabBlock-4">+</a></h4>
                                <div  class="tabBlock" id="TabBlock-4">
                                    <ul class="menu">
                                        <li>Schedule</li>
                                        <li>Playlist</li>
                                        <li>Last 10 Songs</li>
                                        <li>New Songs</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 collapsed-block animate fadeUp">
                                <h4><span class="icon flaticon-location-1 color"></span>CUSTOM HTML BLOCK<a class="expander visible-xs" href="#TabBlock-6">+</a></h4>
                                <div  class="tabBlock" id="TabBlock-6">
                                    <ul class="menu">
                                        <li><span class="icon flaticon-home"></span> 7563 St. Vincent Place, Glasgow</li>
                                        <li><span class="icon flaticon-phone"></span> 321321321, 321321321</li>
                                        <li><span class="icon flaticon-mail"></span> <a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
                                        <li><span class="icon flaticon-skype"></span> <a href="#">shop.test</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="footer-bottom-block container visible-xs">
                <div class="row">
                    <div class="col-sm-5 col-md-4 copyright-text"> &copy; 2015<a href="#"> Live Radio</a>. All Rights Reserved. </div>
                </div>
            </section>
        </footer>
        <div id="outer-overlay"></div>
        <!-- //end Footer --></div>
</div>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.ui.touch-punch.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/jquery.inview.js"></script>
<script src="js/superfish.js"></script>
<script src="js/supersubs.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.mCustomScrollbar.min.js"></script>
<script src="jplayer/jquery.jplayer.js"></script>
<script src="jplayer/jplayer.playlist.js"></script>
<script src="jplayer/header-playlist.js"></script>
<script src="js/liveradio.js"></script>
</body>

<!-- Mirrored from ocean.tonytemplates.com/ttdemo/tonytemplates/23-live-radio/dark-radio/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Mar 2018 20:33:04 GMT -->
</html>