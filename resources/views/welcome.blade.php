<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ocean.tonytemplates.com/ttdemo/tonytemplates/23-live-radio/dark-radio/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Mar 2018 20:29:50 GMT -->
<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tropi-k-n@</title>
    <link rel="shortcut icon" href="fav-dark.png" type="images/png">
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
    <link href="jplayer/skin/liveradio/css/jplayer.liveradio-dark.css" rel="stylesheet" />
    <link href="fonts/flaticon-liveradio/flaticon.css" rel="stylesheet">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
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
        <li> <span class="name"><span class="expander">-</span> <a href="{{url('djs')}}">Djs</a></span>
            <ul>
                <li><span class="name"><a href="#">Djs Submenu#1</a></span> </li>
                <li><span class="name"><a href="#">Djs Submenu#2</a></span> </li>
                <li><span class="name"><a href="#">Djs Submenu#3</a></span> </li>
                <li><span class="name"><a href="#">Djs Submenu#4</a></span> </li>
            </ul>
        </li>
        <li><span class="name"><a href="{{url('noticias')}}">Noticias</a></span></li>
        <li><span class="name"><a href="{{url('horario')}}">Horario</a></span></li>
        <li><span class="name"><a href="fallery.html">Galeria</a></span></li>
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

                        <!-- MENU NORMAL -->
                        <dl class="navbar-main-menu hidden-xs">
                            <dt class="item"> <a href="{{url('')}}" class="btn-main"><span class="icon flaticon-home"></span></a> </dt>
                            <dd></dd>
                            <dt class="item"> <a href="{{url('noticias')}}" class="btn-main">Noticias</a> </dt>
                            <dd></dd>
                            <dt class="item"> <a href="{{url('horario')}}" class="btn-main">Programacion</a> </dt>
                            <dd></dd>
                            <dt class="item"> <a href="{{url('djs')}}" class="btn-main">Djs</a> </dt>
                            <dd></dd>
                            <dt class="item"> <a href="{{url('faq')}}" class="btn-main">Ranking</a> </dt>
                            <dd></dd>
                            <dt class="item"> <a href="{{url('galeria')}}" class="btn-main">Galeria</a> </dt>
                            <dd></dd>
                            <dt class="item"> <a href="{{url('faq')}}" class="btn-main">Nosotros</a> </dt>
                            <dd></dd>
                            <dt class="item"> <a href="{{url('contacto')}}" class="btn-main">Contactanos</a> </dt>
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
        <!-- Slider -->
        <section id="slider">

            <!--
        #################################
            - THEMEPUNCH BANNER -
        #################################
        -->
            <div class="tp-banner-container hidden-xs">
                <div class="tp-banner">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-transition="slotzoom-horizontal" data-slotamount="10" data-masterspeed="500" data-saveperformance="on"  data-title="Slide1">
                            <!-- MAIN IMAGE -->
                            <img src="images/dummy.png"  alt="slide1" data-lazyload="images/slider/slide1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption text1 sfr"
                                 data-x="400"
                                 data-y="350"
                                 data-speed="800"
                                 data-start="1000"
                                 data-easing="Power3.easeInOut"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="300"
                                 style="z-index: 1; max-width: auto; max-height: auto; white-space: nowrap;"><span>LA MEJOR MUSICA </span></div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption text2 sfr"
                                 data-x="400"
                                 data-y="465"
                                 data-speed="3000"
                                 data-start="1500"
                                 data-easing="Power3.easeInOut"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="300"
                                 style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;"><span>Curation</span></div>
                            <div class="tp-caption lfb stt"
                                 data-x="-100"
                                 data-y="100"
                                 data-speed="2000"
                                 data-start="1000"
                                 data-easing="easeOutQuad"
                                 data-end="3000"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-01.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="80"
                                 data-y="250"
                                 data-speed="2500"
                                 data-start="1000"
                                 data-easing="easeOutQuad"
                                 data-end="3500"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-02.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="350"
                                 data-y="100"
                                 data-speed="2000"
                                 data-start="1500"
                                 data-easing="easeOutQuad"
                                 data-end="3500"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-03.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="700"
                                 data-y="50"
                                 data-speed="2000"
                                 data-start="2000"
                                 data-easing="easeOutQuad"
                                 data-end="4000"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-04.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="550"
                                 data-y="500"
                                 data-speed="1000"
                                 data-start="2000"
                                 data-easing="easeOutQuad"
                                 data-end="3000"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-05.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="900"
                                 data-y="150"
                                 data-speed="2000"
                                 data-start="2000"
                                 data-easing="easeOutQuad"
                                 data-end="4000"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-06.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="1050"
                                 data-y="200"
                                 data-speed="2500"
                                 data-start="500"
                                 data-easing="easeOutQuad"
                                 data-end="3500"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-07.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="1200"
                                 data-y="100"
                                 data-speed="1500"
                                 data-start="1500"
                                 data-easing="easeOutQuad"
                                 data-end="3000"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-05.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="1100"
                                 data-y="500"
                                 data-speed="1500"
                                 data-start="1500"
                                 data-easing="easeOutQuad"
                                 data-end="3000"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-08.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="1250"
                                 data-y="480"
                                 data-speed="1500"
                                 data-start="1500"
                                 data-easing="easeOutQuad"
                                 data-end="3000"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-09.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="0"
                                 data-y="550"
                                 data-speed="1500"
                                 data-start="1000"
                                 data-easing="easeOutQuad"
                                 data-end="2500"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-10.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="450"
                                 data-y="450"
                                 data-speed="1500"
                                 data-start="1000"
                                 data-easing="easeOutQuad"
                                 data-end="2500"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-11.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="300"
                                 data-y="350"
                                 data-speed="2000"
                                 data-start="500"
                                 data-easing="easeOutQuad"
                                 data-end="2500"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-12.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="800"
                                 data-y="450"
                                 data-speed="2000"
                                 data-start="2500"
                                 data-easing="easeOutQuad"
                                 data-end="4500"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-13.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="700"
                                 data-y="500"
                                 data-speed="2000"
                                 data-start="1500"
                                 data-easing="easeOutQuad"
                                 data-end="3500"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-14.png" alt="" ></div>
                        </li>
                        <li data-transition="slotzoom-horizontal" data-slotamount="10" data-masterspeed="500" data-saveperformance="on"  data-title="Slide2">
                            <!-- MAIN IMAGE -->
                            <img src="images/dummy.png"  alt="slide2" data-lazyload="images/slider/slide2.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption text1 sfr"
                                 data-x="400"
                                 data-y="350"
                                 data-speed="800"
                                 data-start="1000"
                                 data-easing="Power3.easeInOut"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="300"
                                 style="z-index: 1; max-width: auto; max-height: auto; white-space: nowrap;"><span>LIVE SHOW</span></div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption text2 sfr"
                                 data-x="400"
                                 data-y="465"
                                 data-speed="3000"
                                 data-start="1500"
                                 data-easing="Power3.easeInOut"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="300"
                                 style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;"><span>CONTEST</span></div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption text3 sfr"
                                 data-x="820"
                                 data-y="465"
                                 data-speed="3000"
                                 data-start="1500"
                                 data-easing="Power3.easeInOut"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="300"
                                 style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;"><span>EVERYDAY 8:00 AM</span></div>
                            <div class="tp-caption lfb stt"
                                 data-x="-100"
                                 data-y="100"
                                 data-speed="2000"
                                 data-start="1000"
                                 data-easing="easeOutQuad"
                                 data-end="3000"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-01.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="80"
                                 data-y="250"
                                 data-speed="2500"
                                 data-start="1000"
                                 data-easing="easeOutQuad"
                                 data-end="3500"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-02.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="350"
                                 data-y="100"
                                 data-speed="2000"
                                 data-start="1500"
                                 data-easing="easeOutQuad"
                                 data-end="3500"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-03.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="700"
                                 data-y="50"
                                 data-speed="2000"
                                 data-start="2000"
                                 data-easing="easeOutQuad"
                                 data-end="4000"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-04.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="550"
                                 data-y="500"
                                 data-speed="1000"
                                 data-start="2000"
                                 data-easing="easeOutQuad"
                                 data-end="3000"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-05.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="900"
                                 data-y="150"
                                 data-speed="2000"
                                 data-start="2000"
                                 data-easing="easeOutQuad"
                                 data-end="4000"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-06.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="1050"
                                 data-y="200"
                                 data-speed="2500"
                                 data-start="500"
                                 data-easing="easeOutQuad"
                                 data-end="3500"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-07.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="1200"
                                 data-y="100"
                                 data-speed="1500"
                                 data-start="1500"
                                 data-easing="easeOutQuad"
                                 data-end="3000"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-05.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="1100"
                                 data-y="500"
                                 data-speed="1500"
                                 data-start="1500"
                                 data-easing="easeOutQuad"
                                 data-end="3000"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-08.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="1250"
                                 data-y="480"
                                 data-speed="1500"
                                 data-start="1500"
                                 data-easing="easeOutQuad"
                                 data-end="3000"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-09.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="0"
                                 data-y="550"
                                 data-speed="1500"
                                 data-start="1000"
                                 data-easing="easeOutQuad"
                                 data-end="2500"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-10.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="450"
                                 data-y="450"
                                 data-speed="1500"
                                 data-start="1000"
                                 data-easing="easeOutQuad"
                                 data-end="2500"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-11.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="300"
                                 data-y="350"
                                 data-speed="2000"
                                 data-start="500"
                                 data-easing="easeOutQuad"
                                 data-end="2500"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-12.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="800"
                                 data-y="450"
                                 data-speed="2000"
                                 data-start="2500"
                                 data-easing="easeOutQuad"
                                 data-end="4500"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-13.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="700"
                                 data-y="500"
                                 data-speed="2000"
                                 data-start="1500"
                                 data-easing="easeOutQuad"
                                 data-end="3500"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-14.png" alt="" ></div>
                        </li>
                        <li data-transition="slotzoom-vertical" data-slotamount="10" data-masterspeed="1000" data-saveperformance="on"  data-title="Slide3">
                            <!-- MAIN IMAGE -->
                            <img src="images/dummy.png"  alt="slide3" data-lazyload="images/slider/slide3.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption text1 sfr"
                                 data-x="0"
                                 data-y="250"
                                 data-speed="800"
                                 data-start="1000"
                                 data-easing="Power3.easeInOut"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="300"
                                 style="z-index: 1; max-width: auto; max-height: auto; white-space: nowrap;"><span>SPECIAL GUEST</span></div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption text2 sfr"
                                 data-x="80"
                                 data-y="365"
                                 data-speed="3000"
                                 data-start="1500"
                                 data-easing="Power3.easeInOut"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="300"
                                 style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;"><span>FRIDAY 9:00 PM</span></div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption text4 randomrotate"
                                 data-x="0"
                                 data-y="365"
                                 data-speed="3000"
                                 data-start="1500"
                                 data-easing="Power3.easeInOut"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="300"
                                 style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;"><span>EVERY</span></div>
                            <div class="tp-caption lfb stt"
                                 data-x="-100"
                                 data-y="100"
                                 data-speed="2000"
                                 data-start="1000"
                                 data-easing="easeOutQuad"
                                 data-end="3000"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-01.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="80"
                                 data-y="250"
                                 data-speed="2500"
                                 data-start="1000"
                                 data-easing="easeOutQuad"
                                 data-end="3500"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-02.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="350"
                                 data-y="100"
                                 data-speed="2000"
                                 data-start="1500"
                                 data-easing="easeOutQuad"
                                 data-end="3500"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-03.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="700"
                                 data-y="50"
                                 data-speed="2000"
                                 data-start="2000"
                                 data-easing="easeOutQuad"
                                 data-end="4000"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-04.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="550"
                                 data-y="500"
                                 data-speed="1000"
                                 data-start="2000"
                                 data-easing="easeOutQuad"
                                 data-end="3000"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-05.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="900"
                                 data-y="150"
                                 data-speed="2000"
                                 data-start="2000"
                                 data-easing="easeOutQuad"
                                 data-end="4000"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-06.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="1050"
                                 data-y="200"
                                 data-speed="2500"
                                 data-start="500"
                                 data-easing="easeOutQuad"
                                 data-end="3500"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-07.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="1200"
                                 data-y="100"
                                 data-speed="1500"
                                 data-start="1500"
                                 data-easing="easeOutQuad"
                                 data-end="3000"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-05.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="1100"
                                 data-y="500"
                                 data-speed="1500"
                                 data-start="1500"
                                 data-easing="easeOutQuad"
                                 data-end="3000"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-08.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="1250"
                                 data-y="480"
                                 data-speed="1500"
                                 data-start="1500"
                                 data-easing="easeOutQuad"
                                 data-end="3000"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-09.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="0"
                                 data-y="550"
                                 data-speed="1500"
                                 data-start="1000"
                                 data-easing="easeOutQuad"
                                 data-end="2500"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-10.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="450"
                                 data-y="450"
                                 data-speed="1500"
                                 data-start="1000"
                                 data-easing="easeOutQuad"
                                 data-end="2500"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-11.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="300"
                                 data-y="350"
                                 data-speed="2000"
                                 data-start="500"
                                 data-easing="easeOutQuad"
                                 data-end="2500"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-12.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="800"
                                 data-y="450"
                                 data-speed="2000"
                                 data-start="2500"
                                 data-easing="easeOutQuad"
                                 data-end="4500"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-13.png" alt="" ></div>
                            <div class="tp-caption lfb stt"
                                 data-x="700"
                                 data-y="500"
                                 data-speed="2000"
                                 data-start="1500"
                                 data-easing="easeOutQuad"
                                 data-end="3500"
                                 data-endspeed="500"
                                 data-endeasing="easeInSine"><img src="images/slider/nota-14.png" alt="" ></div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- //tres opciones lado derecho -->

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
        <section class="container content-row">
            <div class="banners-row">
                <div class="banner-box" onclick="location.href='#'">
                    <div class="inside">
                        <div class="icon-float-left animate fadeIn">
                            <div class="icon-circle"><a href="#"><span class="icon flaticon-musical51"></span></a></div>
                        </div>
                        <div class="text-float-right">
                            <div class="inside">
                                <h3 class="upper">Artist Booking</h3>
                                <p>Artist for Your Party</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-box" onclick="location.href='#'">
                    <div class="inside">
                        <div class="icon-float-left">
                            <div class="icon-circle animate fadeIn"><a href="#"><span class="icon flaticon-movie29"></span></a></div>
                        </div>
                        <div class="text-float-right">
                            <div class="inside">
                                <h3 class="upper">Online</h3>
                                <p>www.liveradio.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-box" onclick="location.href='#'">
                    <div class="inside">
                        <div class="icon-float-left">
                            <div class="icon-circle animate fadeIn"><a href="#"><span class="icon flaticon-smartphone53"></span></a></div>
                        </div>
                        <div class="text-float-right">
                            <div class="inside">
                                <h3 class="upper">On Your Phone</h3>
                                <p>Live Radio App</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-box" onclick="location.href='#'">
                    <div class="inside">
                        <div class="icon-float-left">
                            <div class="icon-circle animate fadeIn"><a href="#"><span class="icon flaticon-podcast6"></span></a></div>
                        </div>
                        <div class="text-float-right">
                            <div class="inside">
                                <h3 class="upper">On Demand</h3>
                                <p>Radio Podcasts</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider-lg"></div>
            <div class="row">
                <div class="col-sm-6 col-lg-4 animate fadeInLeft">
                    <h2><span class="icon flaticon-audio36 color"></span>Top 10</h2>
                    <div id="content-player">
                        <div class="scrollpane">
                            <div id="jquery_jplayer_2" class="jp-jplayer"></div>
                            <div id="jp_container_2" class="jp-audio" role="application" aria-label="media player">
                                <div class="jp-type-playlist">
                                    <div class="jp-playlist">
                                        <ul>
                                            <li>&nbsp;</li>
                                        </ul>
                                    </div>
                                    <div class="jp-no-solution"> <span>Update Required</span> To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 animate fadeUp">
                    <h2><span class="icon flaticon-instagramm color"></span>INSTAGRAM&nbsp;<span class="color"><span class="default-font">@</span>tropikanaradiotv</span></h2>
                    <div class="photos-small">
                        <div class="item"><a href="#" class="img-popup"><img src="images/photos/photo-small-01.jpg" alt=""/></a></div>
                        <div class="item"><a href="#" class="img-popup"><img src="images/photos/photo-small-02.jpg" alt=""/></a></div>
                        <div class="item"><a href="#" class="img-popup"><img src="images/photos/photo-small-03.jpg" alt=""/></a></div>
                        <div class="item"><a href="#" class="img-popup"><img src="images/photos/photo-small-04.jpg" alt=""/></a></div>
                        <div class="item"><a href="#" class="img-popup"><img src="images/photos/photo-small-05.jpg" alt=""/></a></div>
                        <div class="item"><a href="#" class="img-popup"><img src="images/photos/photo-small-06.jpg" alt=""/></a></div>
                        <div class="item"><a href="#" class="img-popup"><img src="images/photos/photo-small-07.jpg" alt=""/></a></div>
                        <div class="item"><a href="#" class="img-popup"><img src="images/photos/photo-small-08.jpg" alt=""/></a></div>
                        <div class="item"><a href="#" class="img-popup"><img src="images/photos/photo-small-09.jpg" alt=""/></a></div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 animate fadeInRight">
                    <h2><span class="icon flaticon-movie29 color"></span>PROMO VIDEO</h2>
                    <div class="equal-height">
                        <iframe src="https://player.vimeo.com/video/100947716" style="width:100%; min-height:318px;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog widget -->
        <section class="blog-widget parallax">
            <div class="container content">
                <h3><span class="icon flaticon-megaphone9"></span>&nbsp;NOTICIAS</h3>
                <div class="posts flexslider">
                    <ul class="slides">
                        <li>
                            <h4>Phasellus id nisi vitae odio pretium aliquam. Pellentesque</h4>
                            <div class="image-cell"><a href="blog-posts.html"><img src="images/liveradio/blog-img.jpg" class="img-responsive animate scale" alt=""></a>
                                <div class="post-date"><span class="icon flaticon-clock"></span>&nbsp;May 19, 2015 - 3:55 PM MST</div>
                                <div class="post-comment"><a href="#">41 Comments</a></div>
                            </div>
                            <div class="offset-image">
                                <p>Proin eros odio, mattis rutrum, pulvinar et, egestas vitae, magna. Integer semper, velit ut interdum malesuada, diam dolor pellentesque lacus, vitae commodo orci nisi et sem. Pellentesque adipiscing nisi. Nulla facilisi. Mauris lacinia lectus sit amet felis. Aliquam commodo iaculis, mi risus sagittis odio, vel ultrices enim sem ut pede. Aenean quam. Nulla neque purus, ullamcorper nec, eleifend at, fermentum ut, turpis. </p>
                                <p>Mauris et ligula quis erat dignissim imperdiet. Integer ligula magna, dictum et, pulvinar non, ultricies ac, nibh. Vivamus euismod nulla vel nunc.</p>
                                <h4>&nbsp;</h4>
                            </div>
                        </li>
                        <li>
                            <h4>Phasellus id nisi vitae odio pretium aliquam. Pellentesque</h4>
                            <div class="image-cell"><a href="blog-posts.html"><img src="images/liveradio/blog-img.jpg" class="img-responsive animate scale" alt=""></a>
                                <div class="post-date"><span class="icon flaticon-clock"></span>&nbsp;May 19, 2015 - 3:55 PM MST</div>
                                <div class="post-comment"><a href="#">41 Comments</a></div>
                            </div>
                            <div class="offset-image">
                                <p>Proin eros odio, mattis rutrum, pulvinar et, egestas vitae, magna. Integer semper, velit ut interdum malesuada, diam dolor pellentesque lacus, vitae commodo orci nisi et sem. Pellentesque adipiscing nisi. Nulla facilisi. Mauris lacinia lectus sit amet felis. Aliquam commodo iaculis, mi risus sagittis odio, vel ultrices enim sem ut pede. Aenean quam. Nulla neque purus, ullamcorper nec, eleifend at, fermentum ut, turpis. </p>
                                <p>Mauris et ligula quis erat dignissim imperdiet. Integer ligula magna, dictum et, pulvinar non, ultricies ac, nibh. Vivamus euismod nulla vel nunc.</p>
                                <h4>&nbsp;</h4>
                            </div>
                        </li>
                        <li>
                            <h4>Phasellus id nisi vitae odio pretium aliquam. Pellentesque</h4>
                            <div class="image-cell"><a href="blog-posts.html"><img src="images/liveradio/blog-img.jpg" class="img-responsive animate scale" alt=""></a>
                                <div class="post-date"><span class="icon flaticon-clock"></span>&nbsp;May 19, 2015 - 3:55 PM MST</div>
                                <div class="post-comment"><a href="#">41 Comments</a></div>
                            </div>
                            <div class="offset-image">
                                <p>Proin eros odio, mattis rutrum, pulvinar et, egestas vitae, magna. Integer semper, velit ut interdum malesuada, diam dolor pellentesque lacus, vitae commodo orci nisi et sem. Pellentesque adipiscing nisi. Nulla facilisi. Mauris lacinia lectus sit amet felis. Aliquam commodo iaculis, mi risus sagittis odio, vel ultrices enim sem ut pede. Aenean quam. Nulla neque purus, ullamcorper nec, eleifend at, fermentum ut, turpis. </p>
                                <p>Mauris et ligula quis erat dignissim imperdiet. Integer ligula magna, dictum et, pulvinar non, ultricies ac, nibh. Vivamus euismod nulla vel nunc.</p>
                                <h4>&nbsp;</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- //end Blog widget -->
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 animate fadeUp info-box">
                        <div class="inside">
                            <div class="text">
                                <h3>ACERCA DE  <span class="color">TROPIKANA</span></h3>
                                <p><img src="images/liveradio/about-img.png" alt="" class="img-left" /> <strong>Vestibulum justo. Nulla mauris ipsum vestibulum eunisi.</strong></p>
                                <p>Curabitur molestie euismod erat. Proin eros odio, mattis rutrum, pulvinar et, egestas. Pell entesque<br>
                                    Integer semper, velit ut interdum malesuada, diam sem. Pellentesque adipiscing nisi. Nulla facilisi. Mauris lacinia lectus sit amet felis. Aliquam erat volutpat. Nulla porttitor tortor at nisl. </p>
                                <p>Nam lectus nulla, bibendum pretium, dictum a, mattis dictum et, pulvinar non, ultricies ac, nibh. </p>
                            </div>
                            <div class="info-box-bg-icon"><span class="flaticon-note-beamed"></span></div>
                        </div>
                    </div>
                    <div class="col-sm-4 animate fadeUp info-box">
                        <div class="inside">
                            <div class="text">
                                <h3>PUBLICA TU PUBLICIDAD</h3>
                                <div class="news-carousel">
                                    <div class="news">
                                        <div class="image"><img src="images/liveradio/news-img-1.jpg" alt=""/></div>
                                        <div class="news-date">10/10/2015</div>
                                        <p>Curabitur molestie euismod erat nunc tristique pede. Ut condimentum mattis ullamcorper, pede eget pellentesq magna nonummy odio lorem quis urna.</p>
                                    </div>
                                    <div class="news">
                                        <div class="image"><img src="images/liveradio/news-img-2.jpg" alt=""/></div>
                                        <div class="news-date">10/10/2015</div>
                                        <p>Ut condimentum mattis ullamcorper, pede eget pellentesque venenatis, felis magna nonummy odio.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="info-box-bg-icon"><span class="flaticon-mic"></span></div>
                        </div>
                    </div>
                    <div class="col-sm-4 animate fadeUp info-box">
                        <div class="inside">
                            <div class="text">
                                <h3>ENCUESTA DE RADIO EN VIVO </h3>
                                <form role="form">
                                    <p><strong>¿Con qué frecuencia escuchas Radio en vivo?</strong></p>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                            Daily</label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked="">
                                            More than once a week</label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" checked="">
                                            More than once a month</label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios4" value="option4" checked="">
                                            Around once a year</label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios5" value="option5" checked="">
                                            Never</label>
                                    </div>
                                    <div class="divider-xs"></div>
                                    <button class="btn btn-default">ENVIAR</button>
                                    <div class="divider-xs"></div>
                                </form>
                            </div>
                            <div class="info-box-bg-icon"><span class="flaticon-podcast6"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Social navbar -->
        <section class="content nopad-xs grey-box">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6  col-lg-6 newsletter collapsed-block">
                        <div class="row">
                            <div class="col-lg-5  col-md-12 col-sm-12 ">
                                <h2 class="icon-title"><span class="icon flaticon-mail color"></span>INSCRÍBASE AL BOLETÍN <a class="expander visible-xs" href="#TabBlock-1">+</a></h2>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6 tabBlock" id="TabBlock-1">
                                <p>Ingrese su correo electrónico y le enviaremos un cupón con un 10% de descuento en su próximo pedido.</p>
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
                        <h2><span class="icon flaticon-disc29 color"></span>ENCUÉNTRANOS EN<a class="expander visible-xs" href="#TabBlock-2">+</a></h2>
                        <div  class="tabBlock" id="TabBlock-2">
                            <ul class="find-us">
                                <li class="divider"><a href="https://www.facebook.com/Radio-Tropikana-Vrae-1025-FM-318964435227264/" class="animate-scale"><span class="icon icon-facebook flaticon-facebook"></span></a></li>
                                <li class="divider"><a href="https://twitter.com/TropikanaT" class="animate-scale"><span class="icon icon-twitter flaticon-twitter"></span></a></li>
                                <li class="divider"><a href="https://www.instagram.com/tropikanaradiotv/" class="animate-scale"><span class="icon icon-instagramm flaticon-instagramm"></span></a></li>
                                <li class="divider"><a href="https://www.youtube.com/channel/UCHfl7optcRWSZKgPoLEqJVA" class="animate-scale"><span class="icon icon-youtube flaticon-youtube"></span></a></li>
                                <li class="divider"><a href="https://www.pinterest.com/tropikanaradiotv/" class="animate-scale"><span class="icon icon-pinterest flaticon-pinterest"></span></a></li>
                                <li class="divider"><a href="https://plus.google.com/u/0/103317885145608387111" class="animate-scale"><span class="icon icon-gplus flaticon-gplus"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //end Social navbar -->

        <section>
            <div class="animate fadeUp">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3894.9765988518657!2d-73.82746320816008!3d-12.51770917048834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910d3d6901840c29%3A0x15ab00ce6f5a2103!2sADES!5e0!3m2!1ses!2spe!4v1522805259781" ></iframe>
            </div>
        </section>
        <!-- Footer -->
        <footer>
            <section class="footer-navbar">
                <div class="container content nopad-xs">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-lg-4 hidden-xs animate fadeUp">
                            <div>&copy; 2018<a href="https://www.codsit.com"> Codsit</a>. <span class="clearfix visible-sm"></span>Todos los Derechos Reservados.</div>
                            <a href="#"><img src="images/liveradio/logo-dark.gif" alt="" class="img-responsive"/></a> </div>
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
                                        <li><span class="icon flaticon-mail"></span> <a href="mailto:tropikana.pe@gmail.com">tropikana.pe@gmail.com</a></li>
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
<script src="js/jquery.mCustomScrollbar.min.js"></script>
<script src="jplayer/jquery.jplayer.js"></script>
<script src="jplayer/jplayer.playlist.js"></script>
<script src="jplayer/header-playlist.js"></script>
<script src="jplayer/top10-playlist.js"></script>
<script src="js/liveradio.js"></script>
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript">

    jQuery(document).ready(function() {

        jQuery('.tp-banner').show().revolution(
                {
                    dottedOverlay:"none",
                    delay:5000,
                    startwidth:1170,
                    startheight:700,
                    hideThumbs:200,

                    thumbWidth:100,
                    thumbHeight:50,
                    thumbAmount:5,

                    navigationType:"",
                    navigationArrows:"",
                    navigationStyle:"",

                    touchenabled:"on",
                    onHoverStop:"off",

                    swipe_velocity: 0.7,
                    swipe_min_touches: 1,
                    swipe_max_touches: 1,
                    drag_block_vertical: false,

                    parallax:"mouse",
                    parallaxBgFreeze:"on",
                    parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

                    keyboardNavigation:"off",

                    navigationHAlign:"center",
                    navigationVAlign:"bottom",
                    navigationHOffset:0,
                    navigationVOffset:20,

                    soloArrowLeftHalign:"left",
                    soloArrowLeftValign:"center",
                    soloArrowLeftHOffset:20,
                    soloArrowLeftVOffset:0,

                    soloArrowRightHalign:"right",
                    soloArrowRightValign:"center",
                    soloArrowRightHOffset:20,
                    soloArrowRightVOffset:0,

                    shadow:0,
                    fullWidth:"off",
                    fullScreen:"on",

                    spinner:"",

                    stopLoop:"off",
                    stopAfterLoops:-1,
                    stopAtSlide:-1,

                    shuffle:"off",

                    autoHeight:"off",
                    forceFullWidth:"off",

                    hideTimerBar:"on",

                    hideThumbsOnMobile:"off",
                    hideNavDelayOnMobile:1500,
                    hideBulletsOnMobile:"off",
                    hideArrowsOnMobile:"off",
                    hideThumbsUnderResolution:0,

                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    startWithSlide:0,
                    fullScreenOffsetContainer: ".navbar"
                });




    });	//ready

</script>
</body>

<!-- Mirrored from ocean.tonytemplates.com/ttdemo/tonytemplates/23-live-radio/dark-radio/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Mar 2018 20:30:34 GMT -->
</html>