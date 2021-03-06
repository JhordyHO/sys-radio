<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tropikana.pe</title>
    <link rel="shortcut icon" href="fav-dark.png" type="image/png">
    <!-- CSS preloader -->
    <link href="{{asset('css/loader-dark.css')}}" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/liveradio-template-dark.css')}}" rel="stylesheet">
    <!-- CSS modules -->
    <link href="{{asset('css/flexslider.css')}}" rel="stylesheet">
    <link href="{{asset('css/sfmenu.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery.mCustomScrollbar-dark.css')}}" rel="stylesheet" />
    <link href="{{asset('css/timeline.css')}}" rel="stylesheet" />
    <link href="{{asset('jplayer/skin/liveradio/css/jplayer.liveradio-dark.css')}}" rel="stylesheet" />
    <link href="{{asset('fonts/flaticon-liveradio/flaticon.css')}}" rel="stylesheet">
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
        <li><span class="name"><a href="blog-posts.html">Noticias</a></span></li>
        <li><span class="name"><a href="fallery.html">Gallery</a></span></li>
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
                            <dt class="item"> <a href="{{url('noticias')}}" class="btn-main active">Noticias</a> </dt>
                            <dd></dd>
                            <dt class="item"> <a href="{{url('horario')}}" class="btn-main">Horarios</a> </dt>
                            <dd></dd>
                            <dt class="item"> <a href="{{url('galeria')}}" class="btn-main">galería</a> </dt>
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
            <div class="container"><a href="#">Home</a> <span>&#8250;</span> Blog Posts</div>
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

        @yield('content')

        <!-- Social navbar -->
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
                                <h4><span class="icon flaticon-info color"></span>Información<a class="expander visible-xs" href="#TabBlock-3">+</a></h4>
                                <div  class="tabBlock" id="TabBlock-3">
                                    <ul class="menu">
                                        <li><a href="about.html">Sobre nosotros</a></li>
                                        <li><a href="#">Envío y devoluciones</a></li>
                                        <li><a href="#">Aviso de Privacidad</a></li>
                                        <li><a href="#">Condiciones de Uso</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4  collapsed-block animate fadeUp">
                                <h4><span class="icon flaticon-mic color"></span>En la Radio en Vivo<a class="expander visible-xs" href="#TabBlock-4">+</a></h4>
                                <div  class="tabBlock" id="TabBlock-4">
                                    <ul class="menu">
                                        <li>Programar</li>
                                        <li>Lista de reproducción</li>
                                        <li>Las últimas 10 canciones</li>
                                        <li>Canciones nuevas</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 collapsed-block animate fadeUp">
                                <h4><span class="icon flaticon-location-1 color"></span>Ubícanos<a class="expander visible-xs" href="#TabBlock-6">+</a></h4>
                                <div  class="tabBlock" id="TabBlock-6">
                                    <ul class="menu">
                                        <li><span class="icon flaticon-home"></span> Jr.Libertad S/N</li>
                                        <li><span class="icon flaticon-phone"></span> 987838525 , 988005376</li>
                                        <li><span class="icon flaticon-mail"></span> <a href="mailto:info@mydomain.com">tropikana.pe@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="footer-bottom-block container visible-xs">
                <div class="row">
                    <div class="col-sm-5 col-md-4 copyright-text"> &copy; 2018<a href="https://www.codsit.com">Codsit</a>. Todos los Derechos Reservados. </div>
                </div>
            </section>
        </footer>
        <div id="outer-overlay"></div>
        <!-- //end Footer --></div>
</div>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="{{asset('js/html5shiv.js')}}"></script>
<script src="{{asset('js/respond.min.js')}}"></script>
<![endif]-->
<script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/jquery.ui.touch-punch.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.flexslider.js')}}"></script>
<script src="{{asset('js/jquery.parallax.js')}}"></script>
<script src="{{asset('js/jquery.inview.js')}}"></script>
<script src="{{asset('js/superfish.js')}}"></script>
<script src="{{asset('js/supersubs.js')}}"></script>
<script src="{{asset('js/jquery.mCustomScrollbar.min.js')}}"></script>
<script src="{{asset('jplayer/jquery.jplayer.js')}}"></script>
<script src="{{asset('jplayer/jplayer.playlist.js')}}"></script>
<script src="{{asset('jplayer/header-playlist.js')}}"></script>
<script src="{{asset('jplayer/schedule-playlist.js')}}"></script>
<script src="{{asset('js/liveradio.js')}}"></script>
<script>
    jQuery(function ($) {

        "use strict";
        $('.cd-timeline-content').hover(function (e) {
            $(this).parent('.cd-timeline-block').toggleClass('under')
        })

    });
</script>
</body>
</html>