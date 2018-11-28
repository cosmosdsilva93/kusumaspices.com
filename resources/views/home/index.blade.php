<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags For Seo + Page Optimization -->
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="Kusuma Spices" />

    <meta property="og:description" content="As a third generation of a legacy since 1975, we offer you genuine, single handedly produced and premium quality Indian spices (Masala)." />
    
    <meta property="og:image" content="http://kusumaspices.com/images/site-images/meta-logo.png" />
    
    <meta property="og:url" content="http://kusumaspices.com" />
    <!-- <meta name="twitter:card" content="summary_large_image"> -->


    <!-- Insert Favicon Here -->
    <link href="images/favicon.png" rel="icon">

    <!-- Page Title(Name)-->
    <title>Kusuma Spices</title>

    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">

    <!-- Font-Awesome CSS File -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">

    <!-- Slider Revolution CSS File -->
    <link rel="stylesheet" href="{{ asset('css/settings.css') }}">

    <!--  Fancy Box CSS File -->
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}">

    <!-- Circleful CSS File -->
    <link rel="stylesheet" href="{{ asset('css/jquery.circliful.css') }}">

    <!-- Animate CSS File -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <!-- Cube Portfolio CSS File -->
    <link rel="stylesheet" href="{{ asset('css/cubeportfolio.min.css') }}">

    <!-- Owl Carousel CSS File -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <!-- Swiper CSS File -->
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">

    <!-- Custom Style CSS File -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Food Style CSS File -->
    <link rel="stylesheet" href="{{ asset('images/food-resturant-assets/css/style.css') }}">

    <!-- Color StyleSheet CSS File -->
    <link href="{{ asset('css/orange.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/font-six.css') }}" rel="stylesheet" type="text/css">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50" id="body" class="centered-nav food_variation index-light" >


    <!-- Loader -->

    <div class="loader">

        <div class="loader-inner">

            <div class="spinner">

                <div class="dot1"></div>

                <div class="dot2"></div>

            </div>

        </div>

    </div>

    <!-- Parent Section -->

    <section class="page_content_parent_section">


        <!-- Header Section -->

        <header id="home-page">

            <!-- Navbar Section -->

            <nav class="navbar navbar-fixed-top green" style="display: none;">
                <div class="container-fluid">
                    <!--second nav button -->
                    <div id="menu_bars" class="right menu_bars">
                        <span class="t1"></span>
                        <span class="t2"></span>
                        <span class="t3"></span>
                    </div>
                    <!-- Brand and toggle get grouped for better mobile display -->


                    <div class="container">
                        <div class="navbar-header" style="top:-40%;">
                            <a class="navbar-brand" href="{{ url('/') }}"><img src="images/site-images/logo.png" alt="logo" style="width:102px;"></a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-ex1-collapse  ">

                            <div class="navbar-left">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#home" class="scroll">Home</a></li>
                                    <li><a href="#skill_section" class="scroll">About Us</a></li>
                                    <li><a href="#work" class="scroll">Our Products</a></li>
                                </ul>
                            </div>
                            <div class="navbar-right">
                                <ul class="nav navbar-nav">
                                    <!-- <li><a href="#team" class="scroll">Our Team</a></li> -->
                                    <!-- <li><a href="#pricing_table" class="scroll">Pricing</a></li> -->
                                    <li><a href="#review" class="scroll">Testimonials</a></li>
                                    <!-- <li><a href="#blog" class="scroll">Blog</a></li> -->
                                    <li><a href="#contact-form" class="scroll">Contact Us</a></li>
                                    <li>
                                        <a href="#" class="scroll" style="text-align: center;">Recipes</a>
                                        <a href=""><span class="blinking">Coming Soon</span></a>
                                    </li>
                                    
                                </ul>
                            </div>

                        </div>
                        <!-- /.navbar-collapse -->
                    </div>

                    <div class="sidebar_menu">
                        <nav class="pushmenu pushmenu-right">
                            <a class="push-logo" href="{{ url('/') }}"><img src="images/site-images/logo.png" alt="logo"></a>
                            <ul class="push_nav centered">
                                <li class="clearfix">
                                    <a href="#home" class="scroll">Home</a>
                                </li>
                                <li class="clearfix">
                                    <a href="#skill_section" class="scroll">About Us</a>
                                </li>
                                <li class="clearfix">
                                    <a href="#work" class="scroll">Our Products</a>
                                </li>
                                <!-- <li class="clearfix">
                                    <a href="#team" class="scroll"> <span>04.</span>Our Team</a>
                                </li> -->
                                <!-- 
                                <li class="clearfix">
                                    <a href="#pricing_table" class="scroll"> <span>05.</span>Pricing</a>

                                </li> -->
                                <li class="clearfix">
                                    <a href="#review" class="scroll">Testimonials</a>

                                </li>
                                <!-- <li class="clearfix">
                                    <a href="#blog" class="scroll"> <span>07.</span>Blog</a>
                                </li> -->
                                <li class="clearfix">
                                    <a href="#contact-form" class="scroll">Contact Us</a>
                                </li>
                                <li class="clearfix">
                                    <a href="#" class="scroll">
                                        Recipes
                                        &nbsp;&nbsp;
                                        <span class="blinking" style="font-size: 10px;text-align: center;">Coming Soon</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                            <!-- <ul class="social_icon black top25 bottom20 list-inline">

                                <li><a href="#" class="navy_blue facebook"><i class="fa fa-fw fa-facebook"></i></a></li>
                                <li><a href="#" class="navy_blue twitter"><i class="fa fa-fw fa-twitter"></i></a></li>
                                <li><a href="#" class="navy_blue pinterest"><i class="fa fa-fw fa fa-pinterest"></i></a></li>
                                <li><a href="#" class="navy_blue linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                            </ul> -->
                        </nav>
                    </div>
                </div>
            </nav>

            <!-- /Navbar Section -->

            <!-- Main Slider Section -->

            <section class="page_content_main_slider" id="home">

                <div id="rev_single_wrapper" class="rev_slider_wrapper fullscreen-container rev-slider" data-alias="inspiration-header" data-source="gallery" style="background-color:transparent;padding:0px;">
                    <!-- start revolution slider 5.4.1 fullscreen mode -->
                    <div id="rev_single" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                        <ul>	<!-- slide -->
                            <li data-index="rs-layers" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="500"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- main image -->
                                <img src="images/site-images/home.jpg" data-bgcolor="rgb(247, 247, 247)" alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                                <!-- layers -->

                                <!-- layer nr. 1 -->
                                <div class="tp-caption"
                                     id="layers-one"
                                     data-x="['center','center','center','center']" data-hoffset="['-15','-15','-15','-15']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['-90','-90','-90','-90']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-type="image"
                                     data-basealign=""
                                     data-responsive_offset="on"
                                     data-frames='[{"from":"x:left;rZ:-90deg;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                     data-textAlign="['center','center','center','center']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"

                                     style="z-index: 5;border-width:0px;"><img src="images/site-images/logo.png" alt="" data-ww="['400px','400px','400px','400px']" data-hh="['250px','250px','250px','250px']" width="400" height="250" data-no-retina> </div>
                                    
                                <!-- layer nr. 13 -->
                                <div class="tp-caption tp-resizeme"
                                     id="layers-elev"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['80','80','80','-80']"
                                     data-fontsize="['18','16','16','16']"
                                     data-lineheight="['20','20','20','30']"
                                     data-width="['none','none','none','360']"
                                     data-height="none"
                                     data-whitespace="['nowrap','nowrap','nowrap','normal']"

                                     data-type="text"
                                     data-responsive_offset="on"

                                     data-frames='[{"from":"y:50px;rX:45deg;sX:2;sY:2;opacity:0;","speed":1500,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                     data-textAlign="['center','center','center','center']"
                                    style="z-index:19;background-color: #ffffff;border-radius:5px;"><h1 style="padding:5px !important; color:#373435 !important;" class="navy_blue raleway default_section_heading">Add a mother's touch to your food</h1></div>

                                <!-- layer nr. 14 -->
                                <!-- <div class="tp-caption rev-btn"
                                     id="layers-twel"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['30','30','30','30']"

                                     data-actions=''
                                     data-responsive_offset="on"
                                     data-responsive="off"
                                     data-frames='[{"from":"y:100px;rX:90deg;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                     style="z-index: 999; padding-top:200px;padding-left: 20px;">
                                    <a href="#skill_section" class="button default button button_default_style bg_pink bg_before_navy text-capitalize scroll" style="line-height: 24px;">Visit Site</a>
                                </div> -->

                                <!-- layer nr. 15 -->
                                <div class="tp-caption rev-scroll-btn revs-dark"
                                     id="layers-thir"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['bottom','bottom','bottom','bottom']" data-voffset="['100','100','70','50']"
                                     data-width="30"
                                     data-height="45"
                                     data-whitespace="nowrap"

                                     data-type="button"
                                     data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":"","speed":1000}]'
                                     data-basealign="slide"
                                     data-responsive_offset="on"
                                     data-responsive="off"
                                     data-frames='[{"from":"y:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":800,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"

                                     style="z-index: 19; min-width: 35px; max-width: 35px; max-width: 55px; max-width: 55px; white-space: nowrap; font-size: px; line-height: px; font-weight: 400;border-color:rgba(0, 0, 0, 1.00);border-style:solid;border-width:2px;border-radius:23px 23px 23px 23px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                    <span></span>
                                </div>
                            </li>
                        </ul>
                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	</div>

                </div>

            </section>

            <!-- /Main Slider Section -->

        </header>

        <!-- /Header Section -->

        <!-- Stats Section -->

        <section class="big_padding stats-section" id="skill_section" data-parallax="scroll" data-image-src="images/site-images/stats.jpg" style="background: rgba(0, 0, 0, 0.7);">

            <div class="container">

                <div class="row" id="stats-row">

                    <div class="col-md-4 col-sm-4 margin_after_tab text-center">

                        <div class="stats_section_inner">

                            <i class="fa fa-lightbulb-o white_color stats_section_icon text-center" aria-hidden="true"></i>

                            <h3 class="default_section_heading white_color raleway number-scroll"> 43 </h3>

                            <p class="small_heading_navy white_color open_sans font_200">Years Of Experience</p>

                        </div>

                    </div>

                    <div class="col-md-4 col-sm-4 margin_after_tab text-center">

                        <div class="stats_section_inner">

                            <i class="fa fa-group white_color stats_section_icon text-center" aria-hidden="true"></i>

                            <h3 class="default_section_heading white_color raleway number-scroll"> 500 </h3>

                            <p class="small_heading_navy white_color open_sans font_200">Happy Households Served</p>

                        </div>

                    </div>

                    <div class="col-md-4 col-sm-4 margin_after_tab text-center">

                        <div class="stats_section_inner">

                            <i class="fa fa-smile-o white_color stats_section_icon text-center" aria-hidden="true"></i>

                            <h3 class="default_section_heading white_color raleway number-scroll"> 100% </h3>

                            <p class="small_heading_navy white_color open_sans font_200">Satisfied Customers</p>

                        </div>

                    </div>

                    <!-- <div class="col-md-3 col-sm-6 margin_after_tab text-center">

                        <div class="stats_section_inner">

                            <i class="fa fa-coffee white_color stats_section_icon text-center" aria-hidden="true"></i>

                            <h3 class="default_section_heading white_color raleway number-scroll"> 1350 </h3>

                            <p class="small_heading_navy white_color open_sans font_200">Cups of Coffee</p>

                        </div>

                    </div> -->

                </div>

            </div>

        </section>

        <!-- /Stats Section -->

        <!-- Half Section -->

        <section class="food-company-section big_padding" style="background-color: #F2F2F2;">

            <div class="container container_big">

                <!-- <p class="default_small_heading raleway text-center blue_color font_200">Check It</p> -->

                <h2 class="default_section_heading text-center">

                    <span class="font_200"> About </span>

                    Us

                </h2>

                <hr class="default_divider default_divider_blue default_divider_big">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                <!-- <div class="team_detail wow slideInLeft" align="left"> -->
                    <div class="row">
                        <div class="col-md-4" id="desktop-kusum-img">
                            <div class="team_detail_inner">

                                <img src="images/site-images/kusumtai.jpg" alt="team_img">

                            </div>

                            <h3 class="small_heading_navy default_small_heading navy_blue text-center raleway font_400" style="transform: translateX(10px); padding-top: 10px;"><strong>Kusum Deshpande</strong></h3>    
                        </div>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <p class="default_text open_sans default_text_light" style="text-align: justify;">
                                Kusuma - An unusual combination of purity, taste and tradition passed down over two generations and carried forward by the third.
                            </p>
                            <br>
                            <p class="default_text open_sans default_text_light" style="text-align: justify;">
                                Started out of real passion for cooking & culinary expertise 43 years ago, to fill the void of good readymade masalas, here’s a legacy of hand pound, artisanal & premium masalas by my grandmother “Kusum.”
                            </p>
                        </div>
                    </div>    
                <!-- </div> -->
                    <br>
                    <div class="row" id="mobile-kusum-img">
                        <div class="col-sm-12">
                            <div class="team_detail_inner">

                                <img src="images/site-images/kusumtai.jpg" alt="team_img">

                            </div>

                            <h3 class="small_heading_navy default_small_heading navy_blue text-center raleway font_400" style="transform: translateX(10px); padding-top: 10px;"><strong>Kusum Deshpande</strong></h3>    
                        </div>
                        <br>

                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p class="default_text open_sans default_text_light" style="text-align: justify;">
                                We bring to you Kusuma Spices/masalas – that are entirely homemade. The blend of high-quality ingredients gives them exquisite aroma, texture, and taste. Apart from adding unique flavour & taste, consumption of these spices provide infinite health benefits.  
                            </p>
                            <br>
                            <p class="default_text open_sans default_text_light" style="text-align: justify;">
                                Our spices will remind you of the simplistic times and delicious home-cooked food by our grandmothers
                            </p>
                        </div>
                    </div>
                </div>
                <div col-md-1></div>
                <!-- <div class="col-md-3">

                    <div class="row">

                        <div class="col-sm-12">

                            <div class="expertise_block text-center margin_default_bottom_big wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">

                                <i class="fa fa-send pink_color"></i>

                                <h3 class="small_heading_navy text-center raleway h3_pink font_600"> Our Mission</h3>

                                <p class="default_text text-center open_sans default_text_light">

                                    Add a mother's touch to your food.

                                </p>

                            </div>

                        </div>

                        <div class="col-sm-12">

                            <div class="expertise_block text-center margin_after_tab wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">

                                <i class="fa fa-calendar pink_color"></i>

                                <h3 class="small_heading_navy text-center raleway h3_pink font_600"> Where Are We</h3>

                                <p class="default_text text-center open_sans default_text_light">

                                    All our spices are prepared in Nasik, India which are then supplied all over the world.

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 margin_after_tab" id="about-us-img">

                    <div class="food_about_bg" >

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="row">

                        <div class="col-sm-12">

                            <div class="expertise_block text-center margin_default_bottom_big wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">

                                <i class="fa fa-archive pink_color"></i>

                                <h3 class="small_heading_navy text-center raleway h3_pink font_600"> What We Do</h3>

                                <p class="default_text text-center open_sans default_text_light">

                                    As a third generation of a legacy since 1975, we offer you genuine, single handedly produced and premium quality Indian spices (Masala).

                                </p>

                            </div>

                        </div>

                        <div class="col-sm-12">

                            <div class="expertise_block text-center margin_after_tab wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">

                                <i class="fa fa-phone pink_color"></i>

                                <h3 class="small_heading_navy text-center raleway h3_pink font_600"> Contact Us</h3>

                                <p class="default_text text-center open_sans default_text_light">

                                    Feel free to get in touch with us at <a href="mailto:kusumaspices@gmail.com">kusumaspices@gmail.com</a>

                                </p>

                            </div>

                        </div>

                    </div>

                </div> -->

            </div>

        </section>

        <!-- half Section Ended -->

        <!-- Circle Js Skill Section -->

        <!-- Skill Heading Section -->

        <section class="combined_skills_section big_padding bg_grey"  id="work" >


            <section class="skill_section" >

                <div class="container">

                    <div class="skill_section_inner">

                        <!-- <p class="default_text raleway text-center default_small_heading blue_color font_200">What we do</p> -->

                        <h2 class="default_section_heading text-center">

                            Our

                            <span class="font_200">

                                Products

                            </span>

                        </h2>

                        <hr class="default_divider default_divider_blue default_divider_big">

                    </div>

                </div>

            </section>

            <!-- /Skill Section -->

            <section class="circle_pie_section">

                <div class="container">

                    <div class="food_menu_section">

                        <div class="swiper-container food-menu-slider">

                            <div class="swiper-wrapper">

                                <div class="swiper-slide">

                                    <a class="anchor_style_default" href="{{ url('/products/pure-spices') }}">

                                        <div class="menu-detail-outer">

                                            <div class="menu-img">

                                                <img src="images/site-images/categories/pure-spices.jpg" height="215px" class="slide-item">

                                            </div>

                                            <div class="menu-detail bg_white">

                                                <h2 class="default_small_heading navy_blue open_sans font_400 margin_0 clearfix">Pure Spices  <!-- <span class="font_600 text-right">$21.00</span> --></h2>

                                            </div>

                                        </div>

                                    </a>
                                </div>

                                <div class="swiper-slide">

                                    <a class="anchor_style_default" href="{{ url('/products/ground-spices') }}">

                                        <div class="menu-detail-outer">

                                            <div class="menu-img">

                                                <img src="images/site-images/categories/ground-spices.jpg" height="215px;" class="slide-item">

                                            </div>

                                            <div class="menu-detail bg_white">

                                                <h2 class="default_small_heading navy_blue open_sans font_400 margin_0 clearfix">Ground Spices<!-- <span class="font_600 text-right">&#8377; 50</span> --></h2>

                                            </div>

                                        </div>

                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a class="anchor_style_default" href="{{ url('/products/blended-spices') }}">

                                        <div class="menu-detail-outer">

                                            <div class="menu-img">

                                                <img src="images/site-images/categories/blended-spices.jpg" >

                                            </div>

                                            <div class="menu-detail bg_white">

                                                <h2 class="default_small_heading navy_blue open_sans font_400 margin_0 clearfix">Blended Spices <!-- <span class="font_600 text-right">&#8377; 30</span> --></h2>

                                            </div>

                                        </div>

                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a class="anchor_style_default" href="{{ url('/products/snack-mix') }}">

                                        <div class="menu-detail-outer">

                                            <div class="menu-img">

                                                <img src="images/site-images/categories/snack-mix.jpg">

                                            </div>

                                            <div class="menu-detail bg_white">

                                                <h2 class="default_small_heading navy_blue open_sans font_400 margin_0 clearfix">Snack Mix <!-- <span class="font_600 text-right">&#8377; 50</span> --></h2>

                                            </div>

                                        </div>

                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a class="anchor_style_default" href="{{ url('/products/snacks') }}">

                                        <div class="menu-detail-outer">

                                            <div class="menu-img">

                                                <img src="images/site-images/categories/snack.JPG" height="215px" class="slide-item">

                                            </div>

                                            <div class="menu-detail bg_white">

                                                <h2 class="default_small_heading navy_blue open_sans font_400 margin_0 clearfix">Snacks<!-- <span class="font_600 text-right">&#8377; 40</span> --></h2>

                                            </div>

                                        </div>

                                    </a>

                                </div>

                            </div>

                            <!-- Add Pagination -->

                            <!-- <div class="swiper-pagination"></div> -->

                            <!-- Add Arrows -->

                            <div class="swiper-button-next fa fa-angle-right"></div>

                            <div class="swiper-button-prev fa fa-angle-left"></div>
                            
                        </div>

                        <!-- <div class="swiper-pagination"></div> -->

                    </div>

                </div>

            </section>

        </section>

  
        <?php /* 
        
        <section class="team_section big_padding text-center " id="team">

            <div class="container">

                <!-- <p class="raleway default_small_heading blue_color font_200">Let's Meet</p> -->

                <div class="col-xs-12">

                    <h2 class="default_section_heading text-center">

                            <span class="font_200">

                                Our

                            </span>

                                Team

                    </h2>

                    <hr class="default_divider default_divider_blue default_divider_big">

                    <div class="swiper-container team_slider">

                        <div class="swiper-wrapper">

                            <div class="swiper-slide">

                                <div class="team_detail wow slideInLeft">

                                    <div class="team_detail_inner">

                                        <img src="images/site-images/kusumtai.jpg" alt="team_img">

                                    </div>

                                    <h3 class="small_heading_navy default_small_heading navy_blue text-center raleway font_400">Kusum Deshpande</h3>

                                    <p class="default_text text-center open_sans">Founder</p>

                                    <!-- <ul class="team_members_list">

                                        <li>

                                            <a href="{{ url('/products/all') }}" class="team_members_icons anchor_none_style google_team">

                                                <i class="fa fa-linkedin team_members_icon_inner" aria-hidden="true"></i>

                                            </a>

                                        </li>

                                        <li>

                                            <a href="#." class="team_members_icons anchor_none_style facebook_team">

                                                <i class="fa fa-facebook team_members_icon_inner" aria-hidden="true"></i>

                                            </a>

                                        </li>

                                        <li>

                                            <a href="#." class="team_members_icons anchor_none_style twiiter_team">

                                                <i class="fa fa-twitter team_members_icon_inner" aria-hidden="true"></i>

                                            </a>

                                        </li>

                                    </ul> -->

                                </div>

                            </div>

                            <div class="swiper-slide">

                                <div class="team_detail wow fadeInUpBig">

                                    <div class="team_detail_inner">

                                        <img src="images/site-images/spb.jpg" alt="team_img">

                                    </div>

                                    <h3 class="small_heading_navy default_small_heading navy_blue text-center raleway font_400">Surekha Bendre</h3>

                                    <p class="default_text text-center open_sans">COO</p>

                                    <ul class="team_members_list">

                                        <li>

                                            <a href="#." class="team_members_icons anchor_none_style google_team">

                                                <i class="fa fa-linkedin team_members_icon_inner" aria-hidden="true"></i>

                                            </a>

                                        </li>

                                        <li>

                                            <a href="#." class="team_members_icons anchor_none_style facebook_team">

                                                <i class="fa fa-facebook team_members_icon_inner" aria-hidden="true"></i>

                                            </a>

                                        </li>

                                        <li>

                                            <a href="#." class="team_members_icons anchor_none_style twiiter_team">

                                                <i class="fa fa-twitter team_members_icon_inner" aria-hidden="true"></i>

                                            </a>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                            <div class="swiper-slide">

                                <div class="team_detail wow fadeInDownBig">

                                    <div class="team_detail_inner">

                                        <img src="images/food-resturant-assets/images/chef-3.jpg" alt="team_img">

                                    </div>

                                    <h3 class="small_heading_navy default_small_heading navy_blue text-center raleway font_400">Pari Lalsare</h3>

                                    <p class="default_text text-center open_sans">CMO</p>

                                    <!-- <ul class="team_members_list">

                                        <li>

                                            <a href="#." class="team_members_icons anchor_none_style google_team">

                                                <i class="fa fa-linkedin team_members_icon_inner" aria-hidden="true"></i>

                                            </a>

                                        </li>

                                        <li>

                                            <a href="#." class="team_members_icons anchor_none_style facebook_team">

                                                <i class="fa fa-facebook team_members_icon_inner" aria-hidden="true"></i>

                                            </a>

                                        </li>

                                        <li>

                                            <a href="#." class="team_members_icons anchor_none_style twiiter_team">

                                                <i class="fa fa-twitter team_members_icon_inner" aria-hidden="true"></i>

                                            </a>

                                        </li>

                                    </ul> -->

                                </div>

                            </div>

                            <!-- <div class="swiper-slide">

                                <div class="team_detail wow slideInRight">

                                    <div class="team_detail_inner">

                                        <img src="images/food-resturant-assets/images/chef-2.jpg" alt="team_img">

                                    </div>

                                    <h3 class="small_heading_navy default_small_heading navy_blue text-center raleway font_400">Sarah Taylor</h3>

                                    <p class="default_text text-center open_sans">Food Supervisor</p>

                                    <ul class="team_members_list">

                                        <li>

                                            <a href="#." class="team_members_icons anchor_none_style google_team">

                                                <i class="fa fa-linkedin team_members_icon_inner" aria-hidden="true"></i>

                                            </a>

                                        </li>

                                        <li>

                                            <a href="#." class="team_members_icons anchor_none_style facebook_team">

                                                <i class="fa fa-facebook team_members_icon_inner" aria-hidden="true"></i>

                                            </a>

                                        </li>

                                        <li>

                                            <a href="#." class="team_members_icons anchor_none_style twiiter_team">

                                                <i class="fa fa-twitter team_members_icon_inner" aria-hidden="true"></i>

                                            </a>

                                        </li>

                                    </ul>

                                </div>

                            </div> -->

                        </div>

                    </div>

                </div>

            </div>

        </section>

        */ ?>
        <!-- Half Section -->

       <!--  <section class="half_section_main half_section_right bg_grey">

            <div class="half_section_picture hidden-sm hidden-xs"></div>

            <div class="container container_big">

                <div class="row">

                    <div class="col-md-6">

                        <div class="side_section_text big_padding">

                            <p class="default_small_heading raleway blue_color font_200">Professional Expertise</p>

                            <h3 class="default_section_heading raleway navy_blue"><span class="font_200"> Our </span> Specialities</h3>

                            <hr class="default_divider default_divider_blue " style="margin-left: 0;">

                            <p class="default_text_light default_text open_sans">

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nisi enim, vulputate at justo tristique, tempor sagittis dolor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sit amet ligula consequat urna posuere convallis.

                            </p>

                            <div class="progress_bar_outer_div">

                                <div class="row">

                                    <div class="col-md-12">

                                        <div class="progress_outer">

                                            <h3 class="small_heading_navy raleway default_small_heading navy_blue h3_pink font_400">Chinese</h3>

                                            <div class="progress progress_bar bg_white">

                                                <div class="progress-bar bg_pink" style="width: 84%;" role="progressbar" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100">

                                                    <span class="bg_navy">84%</span>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-md-12">

                                        <div class="progress_outer">

                                            <h3 class="small_heading_navy default_small_heading navy_blue raleway font_400">Continental</h3>

                                            <div class="progress progress_bar bg_white">

                                                <div class="progress-bar bg_pink" style="width: 98%;" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">

                                                    <span class="bg_navy">98%</span>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-md-12">

                                        <div class="progress_outer">

                                            <h3 class="small_heading_navy default_small_heading navy_blue raleway font_400">Italian</h3>

                                            <div class="progress progress_bar bg_white">

                                                <div class="progress-bar bg_pink" style="width: 63%;" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100">

                                                    <span class="bg_navy">63%</span>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-md-12">

                                        <div class="progress_outer">

                                            <h3 class="small_heading_navy default_small_heading navy_blue raleway font_400">Desserts</h3>

                                            <div class="progress progress_bar bg_white">

                                                <div class="progress-bar bg_pink" style="width: 78%;" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100">

                                                    <span class="bg_navy">78%</span>

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

        </section> -->

        <!-- half Section Ended -->

        <!-- Pricing Table -->

        <!-- <section class="pricing_section big_padding bg_grey" id="pricing_table">

            <div class="container">

                <div class="pricing_table_section">

                    <p class="default_text raleway text-center default_small_heading blue_color font_200">New Plans</p>

                    <h2 class="default_section_heading text-center">

                            <span class="font_200">

                                Our

                            </span>

                        Pricing

                        <span class="font_200">

                                Table

                            </span>

                    </h2>

                    <hr class="default_divider default_divider_blue default_divider_big">

                    <div class="row">

                        <div class="col-sm-4">

                            <div class="pricing_table_column wow slideInLeft">

                                <h3 class="small_heading_navy raleway">Hot Meal 1</h3>

                                <div class="price">

                                    <div class="row">

                                        <div class="col-xs-4">

                                            <h2 class="open_sans font_400 pink_color"><span class="dollar raleway">$</span>19<br></h2>

                                        </div>

                                        <div class="col-xs-8">

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                                        </div>

                                    </div>

                                </div>

                                <ul class="packages">

                                    <li><i class="fa fa-check" aria-hidden="true"></i>7 Chicken Pieces</li>

                                    <li><i class="fa fa-check" aria-hidden="true"></i>2 Large Pizza</li>

                                    <li><i class="fa fa-check" aria-hidden="true"></i>3 Fries Boxes</li>

                                    <li><i class="fa fa-check" aria-hidden="true"></i>2 Icecreams</li>

                                    <li><i class="fa fa-check" aria-hidden="true"></i>1 Large Pepsi</li>

                                </ul>

                                <div class="pricing_button">

                                    <a href="#." class="bg_pink button button_default_style open_sans bg_before_navy">Buy Now</a>

                                </div>

                            </div>

                        </div>

                        <div class="col-sm-4">

                            <div class="pricing_table_column blue_price wow fadeInUpBig">

                                <h3 class="small_heading_navy raleway white_color">Hot Meal 2</h3>

                                <div class="price">

                                    <div class="row">

                                        <div class="col-xs-4">

                                            <h2 class="open_sans font_400 white_color"><span class="dollar raleway">$</span>49<br></h2>

                                        </div>

                                        <div class="col-xs-8">

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                                        </div>

                                    </div>

                                </div>

                                <ul class="packages">

                                    <li><i class="fa fa-check" aria-hidden="true"></i>7 Chicken Pieces</li>

                                    <li><i class="fa fa-check" aria-hidden="true"></i>2 Large Pizza</li>

                                    <li><i class="fa fa-check" aria-hidden="true"></i>3 Fries Boxes</li>

                                    <li><i class="fa fa-check" aria-hidden="true"></i>2 Icecreams</li>

                                    <li><i class="fa fa-check" aria-hidden="true"></i>1 Large Pepsi</li>

                                </ul>

                                <div class="pricing_button">

                                    <a href="#." class="bg_white button button_default_style open_sans bg_before_pink navy_blue">Buy Now</a>

                                </div>

                            </div>

                        </div>

                        <div class="col-sm-4">

                            <div class="pricing_table_column wow slideInRight">

                                <h3 class="small_heading_navy raleway">Hot Meal 3</h3>

                                <div class="price">

                                    <div class="row">

                                        <div class="col-xs-4">

                                            <h2 class="open_sans font_400 pink_color"><span class="dollar raleway">$</span>99<br></h2>

                                        </div>

                                        <div class="col-xs-8">

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                                        </div>

                                    </div>

                                </div>

                                <ul class="packages">

                                    <li><i class="fa fa-check" aria-hidden="true"></i>7 Chicken Pieces</li>

                                    <li><i class="fa fa-check" aria-hidden="true"></i>2 Large Pizza</li>

                                    <li><i class="fa fa-check" aria-hidden="true"></i>3 Fries Boxes</li>

                                    <li><i class="fa fa-check" aria-hidden="true"></i>2 Icecreams</li>

                                    <li><i class="fa fa-check" aria-hidden="true"></i>1 Large Pepsi</li>

                                </ul>

                                <div class="pricing_button">

                                    <a href="#." class="bg_pink button button_default_style open_sans bg_before_navy">Buy Now</a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section> -->

        <!-- /Pricing Table -->

        <!-- Customer Review Slider -->

        <section class="customer_feedback_section  big_padding text-center" id="review">

            <div class="container">

                <div class="feedaback_inner">

                    <img src="images/cutomer_quote.png" alt="cutomer_quote" class="quote_pic">

                    <h2 class="default_section_heading text-center white_color">

                            <span class="font_200">

                                What

                            </span>

                        People

                        <span class="font_200">

                                Say ?

                            </span>

                    </h2>

                    <hr class="default_divider default_divider_white default_divider_big">

                    <div class="swiper-container customer_feedback_slider white_pagination">

                        <div class="swiper-wrapper">

                            <div class="swiper-slide">

                                <p class="customer_feedback_text white_color open_sans default_text font_200">


                                    I shifted to the US 2 years ago, away from my family, but Kusuma Spices keep me in touch with the taste of my mothers tasty food

                                </p>

                                <p class="customer_feedback_name white_color open_sans default_small_heading font_600">- Kumar Iyer</p>

                            </div>

                            <div class="swiper-slide">

                                <p class="customer_feedback_text white_color open_sans default_text font_200">


                                    I have been using Kusuma Spices since the past 30 years and all 4 generations of our family love the food we make from these spices. 


                                </p>

                                <p class="customer_feedback_name white_color open_sans default_small_heading font_600">- Vasudhara Kulkarni</p>

                            </div>

                            <div class="swiper-slide">

                                <p class="customer_feedback_text white_color open_sans default_text font_200">
                                    This is the taste of my home. Nothing else  in  the market is even close to the natural flavour the red mirchi powder gives.


                                </p>

                                <p class="customer_feedback_name white_color open_sans default_small_heading font_600"> - Meghna Joshi</p>

                            </div>

                            <div class="swiper-slide">

                                <p class="customer_feedback_text white_color open_sans default_text font_200">
                                    We always used Kusuma Spices when I was in Pune. Even when I moved to US 3 years ago, I have been bringing them back with me everytime I visit India. It always makes the food delicious and keeps the tastes and aromas of my chilhood alive.  


                                </p>

                                <p class="customer_feedback_name white_color open_sans default_small_heading font_600"> - Mrunmayee Kulkarni</p>

                            </div>

                        </div>

                        <!-- Add Pagination -->

                        <div class="swiper-pagination"></div>

                        <!-- Add Arrows -->

                        <div class="swiper-button-next fa fa-angle-right hidden-sm hidden-xs"></div>

                        <div class="swiper-button-prev fa fa-angle-left hidden-sm hidden-xs"></div>

                    </div>

                </div>

            </div>

        </section>

        <!-- /Customer Review Slider -->

        <!-- Blog Section -->

        <!-- <section class="blog_section big_padding" id="blog"> -->

            <!-- <div class="container">

                <p class="default_text raleway text-center default_small_heading blue_color font_200">Read the News</p>

                <h2 class="default_section_heading text-center">

                            <span class="font_200">

                                Our

                            </span>

                    Latest

                    <span class="font_200">

                                Blogs

                            </span>

                </h2>

                <hr class="default_divider default_divider_blue default_divider_big">

                <div class="blog_slider_main swiper-container">

                    <div class="swiper-wrapper">

                        <div class="swiper-slide">

                            <div class="blog_slide wow slideInLeft">

                                <a href="blog.html" class="anchor_style_default">

                                    <h3 class="small_heading_navy raleway center_on_mobile font_400">Pellentesque euismod</h3>

                                </a>

                                <p class="default_text default_text_light open_sans center_on_mobile">June 18, 2017</p>

                                <div class="blog_img">

                                    <img src="images/food-resturant-assets/images/food-blog-post-1.jpg" alt="blog_img">

                                </div>

                                <p class="default_text open_sans center_on_mobile">

                                    Aenean faucibus nulla ex, in rutrum dui blandit at. Pellentesque bibendum odio vitae gravida consequat aliquam sem morbi dor sit imet sen

                                </p>

                            </div>

                        </div>

                        <div class="swiper-slide">

                            <div class="blog_slide wow fadeInDownBig">

                                <a href="blog.html" class="anchor_style_default">

                                    <h3 class="small_heading_navy raleway center_on_mobile font_400">Proin condimentum</h3>

                                </a>

                                <p class="default_text default_text_light open_sans center_on_mobile">June 18, 2017</p>

                                <div class="blog_img">

                                    <img src="images/food-resturant-assets/images/food-blog-post-2.jpg" alt="blog_img">

                                </div>

                                <p class="default_text open_sans center_on_mobile">

                                    Cras eget ligula dolor aenean ac velit ultricies, i pretium tincidunt bibendum turpis maximus posuere get

                                </p>

                            </div>

                        </div>

                        <div class="swiper-slide">

                            <div class="blog_slide wow slideInRight">

                                <a href="blog.html" class="anchor_style_default">

                                    <h3 class="small_heading_navy raleway center_on_mobile font_400">Donec dapibus</h3>

                                </a>

                                <p class="default_text default_text_light open_sans center_on_mobile">June 18, 2017</p>

                                <div class="blog_img">

                                    <img src="images/food-resturant-assets/images/food-blog-post-3.jpg" alt="blog_img">

                                </div>

                                <p class="default_text open_sans center_on_mobile">

                                    Cras eget ligula dolor aenean ac velit ultricies, accumsan nisl cursus, aliquam sem morbi pretium tincidunt bibendum turpis maximus posuere get

                                </p>

                            </div>

                        </div>

                    </div>

                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>

                </div>

            <!-- </div> -->

        <!-- </section> -->

        <!-- /Blog Section -->

        <!-- Google Map Section -->

        <!-- <section id="map"></section> -->

        <!-- /Google Map Section -->

        <!-- Contact Form Section -->

        <section class="contact_form_section" id="contact-form">

            <div class="container">

                <div class="row">

                    <div class="contact_form_inner big_padding clearfix">

                        <div class="col-md-6 wow slideInLeft">

                            <div class="contact_form_detail  center_on_mobile">

                                <!-- <p class="default_small_heading raleway blue_color font_200">Locate Us</p> -->

                                <h3 class="default_section_heading raleway navy_blue"> <span class="font_200">Order</span> Now</h3>

                                <hr class="default_divider default_divider_blue " style="margin-left: 0;">

                               <!--  <p class="default_text_light default_text open_sans">

                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nisi enim, vulputate at justo tristique, tempor sagittis dolor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sit amet ligula consequat urna posuere convallis.

                                </p> -->

                                <div class="row">

                                    <div class="contact_form_extra_inner clearfix center_on_mobile">

                                        <div class="col-md-1 col-sm-12 form_padding_left_0">

                                            <i class="fa fa-map-marker blue_color text-center form_icon" aria-hidden="true"></i>

                                        </div>

                                        <div class="col-md-11 col-sm-12">

                                            <p class="default_text form_text open_sans default_text_light">

                                                Plot No. 19, Aparimit Bungalow, Shahu Nagar, Nr. ITI Bridge, 

                                            </p>

                                            <p class="default_text form_text open_sans default_text_light">

                                                CIDCO, Nashik - 422008

                                            </p>

                                        </div>

                                    </div>

                                    <div class="contact_form_extra_inner clearfix center_on_mobile">

                                        <div class="col-md-1 col-sm-12 form_padding_left_0">

                                            <i class="fa fa-phone blue_color text-center form_icon" aria-hidden="true"></i>

                                        </div>

                                        <div class="col-md-11 col-sm-12">

                                            <p class="default_text form_text open_sans default_text_light">

                                                Dr. Paree Lalsare (Sopan Baug, Pune) <br/>+91 9921 407 040

                                            </p>

                                            <p class="default_text form_text open_sans default_text_light">

                                                Dr. Sheetal Nanal (Appa Balwant Chowk, Pune) <br/> +91 9822 303 450

                                            </p>

                                        </div>

                                    </div>

                                    <div class="contact_form_extra_inner clearfix center_on_mobile">

                                        <div class="col-md-1 col-sm-12 form_padding_left_0">

                                            <i class="fa fa-globe blue_color text-center form_icon" aria-hidden="true"></i>

                                        </div>

                                        <div class="col-md-11 col-sm-12">

                                            <a href="mailto:kusumaspices@gmail.com" class="anchor_style_default">

                                                <p class="default_text form_text open_sans default_text_light">

                                                    kusumaspices@gmail.com

                                                </p>

                                            </a>

                                            <!-- <a href="#." class="anchor_style_default">

                                                <p class="default_text form_text open_sans default_text_light">

                                                    www.website.com

                                                </p>

                                            </a> -->

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-6 wow slideInRight">
                        
                        <form id="contact-us-form" class="form_class">
                            
                         <div class="row">

                                <div class="mew_form clearfix">

                                   <div class="col-sm-12">
                                       <div class="alert alert-msgs" id="contact-us-alert" align="center" style="display: none;">
                                           <span id="contact-us-alert-msg"></span>
                                       </div>
                                   </div>

                                    <div class="col-sm-6">

                                        <input type="text" placeholder="Your Name" class="form_inputs" id="name" name="name" required="required">

                                    </div>

                                    <div class="col-sm-6">

                                        <input type="email" placeholder="Email" class="form_inputs" id="email" name="email" required="required">

                                    </div>

                                    <div class="col-sm-12">

                                        <textarea placeholder="Your Message" class="form_inputs form_textarea" id="message" name="message" required="required"></textarea>

                                    </div>

                                    <div class="col-xs-12">

                                        <div class="button_div  center_on_mobile">
                                            <input id="submit_handle" type="submit" style="display: none" />
                                            <a href="javascript:" id="submit_btn" class="bg_pink button button_default_style open_sans bg_before_navy"> 
                                                <i class="fa fa-envelope" aria-hidden="true"></i> Send Message
                                                &nbsp;&nbsp;&nbsp;
                                                <span id="contact-us-loader" style="display:none;"><i class="fa fa-spinner fa-spin" aria-hidden="true"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </form>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- /Contact Form  Section -->

        <!-- Footer Section -->

        <footer class="footer_section bg_navy" style="padding: 30px 0;">

            <div class="container">

                <div class="footer_detail">

                    <!-- <ul class="footer_links text-center">

                        <li>

                            <a class="anchor_style_default facebook wow zoomInDown" href="#.">

                                <i class="text-center fa fa-facebook "></i>

                            </a>

                        </li>

                        <li>

                            <a class="anchor_style_default twitter wow zoomInUp" href="#.">

                                <i class="text-center fa fa-twitter "></i>

                            </a>

                        </li>

                        <li>

                            <a class="anchor_style_default g_plus wow zoomInDown" href="#.">

                                <i class="text-center fa fa-google-plus "></i>

                            </a>

                        </li>

                        <li>

                            <a class="anchor_style_default linkedin wow zoomInUp" href="#.">

                                <i class="text-center fa fa-linkedin "></i>

                            </a>

                        </li>

                        <li>

                            <a class="anchor_style_default  pinterest wow zoomInDown" href="#.">

                                <i class="text-center fa fa-pinterest"></i>

                            </a>

                        </li>

                    </ul> -->

                    <p class="text-center default_text open_sans white_color">&copy; 2018 <a href="mailto:cosmosdsilva93@gmail.com" style="text-decoration: none; color:#fff;">Pixxel IT Services</a>,  All rights reserved. </p>

                </div>

            </div>

        </footer>

        <!-- /Footer Section -->

    </section>

    <!-- /Parent Section Ended -->

    <!-- jQuery 2.2.0-->
    <script src="{{ asset('/js/jquery.js') }}"></script>

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="{{ asset('/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="{{ asset('/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/extensions/revolution.extension.video.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>

    <!-- Owl Carousel 2 Core JavaScript -->
    <script src="{{ asset('/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('/js/owl.animate.js') }}"></script>
    <script src="{{ asset('/js/owl.autoheight.js') }}"></script>
    <script src="{{ asset('/js/owl.autoplay.js') }}"></script>
    <script src="{{ asset('/js/owl.autorefresh.js') }}"></script>
    <script src="{{ asset('/js/owl.hash.js') }}"></script>
    <script src="{{ asset('/js/owl.lazyload.js') }}"></script>
    <script src="{{ asset('/js/owl.navigation.js') }}"></script>
    <script src="{{ asset('/js/owl.support.js') }}"></script>
    <script src="{{ asset('/js/owl.video.js') }}"></script>

    <!-- Fancy Box Javacript -->
    <script src="{{ asset('/js/jquery.fancybox.js') }}"></script>

    <!-- Wow Js -->
    <script src="{{ asset('/js/wow.min.js') }}"></script>

    <!-- Appear Js-->
    <script src="{{ asset('/js/jquery.appear.js') }}"></script>

    <!-- Countdown Js -->
    <script src="{{ asset('/js/jquery.countdown.js') }}"></script>

    <!-- Parallax Js -->
    <script src="{{ asset('/js/parallax.min.js') }}"></script>

    <!-- Cube Portfolio Core JavaScript -->
    <script src="{{ asset('/js/jquery.cubeportfolio.min.js') }}"></script>

    <!-- Circliful Core JavaScript -->
    <script src="{{ asset('/js/jquery.circliful.min.js') }}"></script>

    <!-- Swiper Slider Core JavaScript -->
    <script src="{{ asset('/js/swiper.min.js') }}"></script>

    <!-- Custom JavaScript -->
    <script src="{{ asset('/js/script.js') }}"></script>

    <!-- Food Custom Script -->
    <script src="images/food-resturant-assets/js/script.js"></script>

</body>

</html>