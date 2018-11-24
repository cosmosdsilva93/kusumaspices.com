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
    <title>Kusuma Spices : {{ $title }}</title>

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

    <!-- <div class="loader">

        <div class="loader-inner">

            <div class="spinner">

                <div class="dot1"></div>

                <div class="dot2"></div>

            </div>

        </div>

    </div> -->

    <!-- Parent Section -->

    <section class="page_content_parent_section">


        <!-- Header Section -->
        <header>

            <!-- Navbar Section -->

            <nav class="navbar navbar-fixed-top green shrink" style="">
                <div class="container-fluid">
                    <!-- <div class="right back-bttn" >
                        <a href="{{ url('/') }}" class="button default button button_default_style bg_pink bg_before_navy text-capitalize scroll" style="line-height: 24px;">Go Back</a>
                    </div> -->
                    <div class="container">
                        <div class="navbar-header" style="top:-25%;">
                            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/site-images/logo.png') }}" alt="logo" style="width:102px;"></a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-ex1-collapse  ">

                            <div class="navbar-left">
                                <ul class="nav navbar-nav">
                                    <!-- <li class="active"><a href="#home" class="scroll">Home</a></li> -->
                                    <!-- <li><a href="#skill_section" class="scroll">About Us</a></li> -->
                                    <!-- <li><a href="#work" class="scroll">Our Products</a></li> -->
                                </ul>
                            </div>
                            <div class="navbar-right">
                                <ul class="nav navbar-nav">
                                    <!-- <li><a href="#team" class="scroll">Our Team</a></li> -->
                                    <!-- <li><a href="#pricing_table" class="scroll">Pricing</a></li> -->
                                    <!-- <li><a href="#review" class="scroll">Testimonials</a></li> -->
                                    <!-- <li><a href="#blog" class="scroll">Blog</a></li> -->
                                    <!-- <li><a href="{{ url('/') }}">Go Back</a></li> -->
                                </ul>
                            </div>

                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                </div>
            </nav>

            <!-- /Navbar Section -->

  

            <!-- /Main Slider Section -->

        </header>

        <!-- /Header Section -->

    
        <!-- Circle Js Skill Section -->

        <!-- Skill Heading Section -->
        <br><br>
        <section id="pure-spices" class="combined_skills_section big_padding bg_grey" style="padding:55px 0 !important;">


            <!-- <section class="skill_section" > -->

                <div class="container">

                    <div class="skill_section_inner">

                        <!-- <p class="default_text raleway text-center default_small_heading blue_color font_200">What we do</p> -->

                        <h2 class="default_section_heading text-center">

                            Pure

                            <span class="font_200">

                                Spices

                            </span>

                        </h2>

                        <hr class="default_divider default_divider_blue">
                        
                        <div class="food_menu_section"> 
                            <div class="row">
                                <div class="col-md-4">   
                                    <a class="anchor_style_default" href="#.">

                                        <div class="menu-detail-outer">

                                            <div class="menu-img" >

                                                <img src="{{ asset('images/site-images/products/Kusuma_Hing_F.jpg') }}" height="400px">
                                                
                                            </div>

                                            <div class="menu-detail bg_white">

                                                <h2 class="default_small_heading navy_blue open_sans font_400 margin_0 clearfix">Hing (Asafoetida) <!-- <span class="font_600 text-right">&#8377; 120</span> --></h2>

                                            </div>

                                        </div>

                                    </a>
                                </div>

                                <div class="col-md-4">   
                                    <a class="anchor_style_default" href="#.">

                                        <div class="menu-detail-outer">

                                            <div class="menu-img">

                                                <img src="{{ asset('images/site-images/products/Kusuma_Jeera_F.jpg') }}" height="400px">

                                            </div>

                                            <div class="menu-detail bg_white">

                                                <h2 class="default_small_heading navy_blue open_sans font_400 margin_0 clearfix">Jeera (Cumin) <!-- <span class="font_600 text-right">&#8377; 35</span> --></h2>

                                            </div>

                                        </div>

                                    </a>
                                </div>

                                <div class="col-md-4">   
                                    <a class="anchor_style_default" href="#.">

                                        <div class="menu-detail-outer">

                                            <div class="menu-img">

                                                <img src="{{ asset('images/site-images/products/Kusuma_Mohori_F.jpg') }}" height="400px">

                                            </div>

                                            <div class="menu-detail bg_white">

                                                <h2 class="default_small_heading navy_blue open_sans font_400 margin_0 clearfix">Mohori (Mustard Seed) <!-- <span class="font_600 text-right">&#8377; 15</span> --></h2>

                                            </div>

                                        </div>

                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <a class="anchor_style_default" href="#.">

                                        <div class="menu-detail-outer">

                                            <div class="menu-img">

                                                <img src="{{ asset('images/site-images/products/Kusuma_Gawthi Teel_F.jpg') }}" height="400px">

                                            </div>

                                            <div class="menu-detail bg_white">

                                                <h2 class="default_small_heading navy_blue open_sans font_400 margin_0 clearfix">Gawthi Teel (Sesame Seeds)<!-- <span class="font_600 text-right">&#8377; 30</span> --></h2>

                                            </div>

                                        </div>

                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            <!-- </section> -->

            <!-- /Skill Section -->

        </section>

        <section id="ground-spices" class="combined_skills_section big_padding bg_grey" style="padding:55px 0 !important;">


            <!-- <section class="skill_section" > -->

                <div class="container">

                    <div class="skill_section_inner">

                        <!-- <p class="default_text raleway text-center default_small_heading blue_color font_200">What we do</p> -->

                        <h2 class="default_section_heading text-center">

                            Ground

                            <span class="font_200">

                                Spices

                            </span>

                        </h2>

                        <hr class="default_divider default_divider_blue">
                        <div class="food_menu_section"> 
                            <div class="row">
                                <div class="col-md-4">
                                    <a class="anchor_style_default" href="#.">

                                        <div class="menu-detail-outer">

                                            <div class="menu-img">

                                                <img src="{{ asset('images/site-images/products/Kusuma_Turmeric_F.jpg') }}" height="400px">

                                            </div>

                                            <div class="menu-detail bg_white">

                                                <h2 class="default_small_heading navy_blue open_sans font_400 margin_0 clearfix">Halad (Turmeric Powder) <!-- <span class="font_600 text-right">&#8377; 40</span> --></h2>

                                            </div>

                                        </div>

                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a class="anchor_style_default" href="#.">

                                        <div class="menu-detail-outer">

                                            <div class="menu-img">

                                                <img src="{{ asset('images/site-images/products/Kusuma_MIrchi_F.jpg') }}" height="400px">

                                            </div>

                                            <div class="menu-detail bg_white">

                                                <h2 class="default_small_heading navy_blue open_sans font_400 margin_0 clearfix">Mirchi Powder (Red Chilli Powder) <!-- <span class="font_600 text-right">&#8377; 40</span> --></h2>

                                            </div>

                                        </div>

                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a class="anchor_style_default" href="#.">

                                        <div class="menu-detail-outer">

                                            <div class="menu-img ">

                                                <img src="{{ asset('images/site-images/products/Kusuma_Kashmiri Mirchi_F.jpg') }}" height="400px">

                                            </div>

                                            <div class="menu-detail bg_white">

                                                <h2 class="default_small_heading navy_blue open_sans font_400 margin_0 clearfix">Kashmiri Mirchi Powder (Kashmiri Red Chilli Powder) <!-- <span class="font_600 text-right">&#8377; 60</span> --></h2>

                                            </div>

                                        </div>

                                    </a>
                                </div>
                            </div>    
                            <div class="row">
                                <div class="col-md-4">
                                    <a class="anchor_style_default" href="#.">

                                        <div class="menu-detail-outer">

                                            <div class="menu-img">

                                                <img src="{{ asset('images/site-images/products/Kusuma_Jeera Powder_F.jpg') }}" height="400px">

                                            </div>

                                            <div class="menu-detail bg_white">

                                                <h2 class="default_small_heading navy_blue open_sans font_400 margin_0 clearfix">Jeera Powder (Cumin Powder) <!-- <span class="font_600 text-right">&#8377; 50</span> --></h2>

                                            </div>

                                        </div>

                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a class="anchor_style_default" href="#.">

                                        <div class="menu-detail-outer">

                                            <div class="menu-img">

                                                <img src="{{ asset('images/site-images/products/Kusuma_Dhania_F.jpg') }}" height="400px">

                                            </div>

                                            <div class="menu-detail bg_white">

                                                <h2 class="default_small_heading navy_blue open_sans font_400 margin_0 clearfix">Dhania Powder (Coriander Powder)<!-- <span class="font_600 text-right">&#8377; 40</span> --></h2>

                                            </div>

                                        </div>

                                    </a>
                                </div>
                                <div class="col-md-4"></div>   
                            </div>
                        </div>
                    </div>
                </div>
            <!-- </section> -->

            <!-- /Skill Section -->

        </section>

        <section id="blended-spices" class="combined_skills_section big_padding bg_grey" style="padding:55px 0 !important;">


            <section class="skill_section" >

                <div class="container">

                    <div class="skill_section_inner">

                        <!-- <p class="default_text raleway text-center default_small_heading blue_color font_200">What we do</p> -->

                        <h2 class="default_section_heading text-center">

                            Blended

                            <span class="font_200">

                                Spices

                            </span>

                        </h2>

                        <hr class="default_divider default_divider_blue">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="anchor_style_default" href="#.">

                                    <div class="menu-detail-outer">

                                        <div class="menu-img img-container" data-content="Our Garam Masala as the name suggests is a blend of choicest spices that can be used
to impart a distinct aroma to your recipes.&NewLine;This is a must-have for adding that special touch and flavour
to your Pulao, Biryani and other Punjabi recipes like Chole &amp; Paneer. &NewLine; Our ‘Garam Masala&#39; with its
distinct aroma and taste is already a hit, and we are confident to receive a similar response from you
too. &NewLine;Garam Masala&#39; consists of high-quality ingredients, and you will relish any recipe it will be used
for. &NewLine;Enjoy the real taste &amp; aroma of PUNJABI garam masala to your heart&#39;s content.">

                                            <img src="{{ asset('/images/site-images/products/Kusuma_Garam Masala_F.jpg') }}" height="400px">

                                        </div>

                                        <div class="menu-detail bg_white">

                                            <h2 class="default_small_heading navy_blue open_sans font_400 margin_0 clearfix">Garam Masala <!-- <span class="font_600 text-right">&#8377; 100</span> --></h2>

                                        </div>

                                    </div>

                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="anchor_style_default" href="#.">

                                    <div class="menu-detail-outer">

                                        <div class="menu-img img-container" data-content="A must-have in any Maharashtrian kitchen. It is most widely used and a cherished mix
of spices favourite for its inviting aroma and delectable taste. This unique taste for which our Goda
Masala is most famous in Marathi kitchen is a result of using best quality ingredients. Can be used for
making finger licking Dry Vegetables (Sukhi Sabji), Curry Masala/Vegetables (Rassa bhaji), Masala Rice
(Masala Bhaat) and Tadka Dal (Amti)">

                                            <img src="{{ asset('/images/site-images/products/Kusuma_Goda Masala_F.jpg') }}" height="400px">

                                        </div>

                                        <div class="menu-detail bg_white">

                                            <h2 class="default_small_heading navy_blue open_sans font_400 margin_0 clearfix">Goda Masala <!-- <span class="font_600 text-right">&#8377; 70</span> --></h2>

                                        </div>

                                    </div>

                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="anchor_style_default" href="#.">

                                    <div class="menu-detail-outer">

                                        <div class="menu-img img-container" data-content="Kanda Masala is a spicy, lip-smacking blend of high-quality spices in the most
authentic Kolhapuri style. The unique feature of this Kanda Masala (a perfect mix of wet ginger, garlic,
onion &amp; spices) is its texture and color which unlike many is almost in powdered form rather than a
lumpy cluster of globules. It is used in preparation of spicy vegetable with or without curry like stuffed
brinjal, shev-bhaji, misal, chicken, mutton, fish and egg curry, etc.">

                                            <img src="{{ asset('/images/site-images/products/Kusuma_Kanda Masala_F.jpg') }}" height="400px">

                                        </div>

                                        <div class="menu-detail bg_white">

                                            <h2 class="default_small_heading navy_blue open_sans font_400 margin_0 clearfix">Kanda Masala <!-- <span class="font_600 text-right">&#8377; 50</span> --></h2>

                                        </div>

                                    </div>

                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <a class="anchor_style_default" href="#.">

                                    <div class="menu-detail-outer">

                                        <div class="menu-img img-container" data-content="Metkut is a Maharashtrian marvel. Metkut when mixed with rice and dollops of ghee, turns into a dish where every morsel makes you nostalgic and takes you back to your good old childhood. It’s a mix of dry roasted rice, lentils & spices which aids digestion& gives instant energy. Good for babies too.">

                                            <img src="{{ asset('/images/site-images/products/Kusuma_Metkut_F.jpg') }}" height="400px">

                                        </div>

                                        <div class="menu-detail bg_white">

                                            <h2 class="default_small_heading navy_blue open_sans font_400 margin_0 clearfix">Metkut <!-- <span class="font_600 text-right">&#8377; 50</span> --></h2>

                                        </div>

                                    </div>

                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="anchor_style_default" href="#.">

                                    <div class="menu-detail-outer">

                                        <div class="menu-img img-container" data-content="Mix of lentils & spice – when added to yogurt along with onion make a quick & tasty high protein raita.">

                                            <img src="{{ asset('/images/site-images/products/Kusuma_Daangar_F.jpg') }}" height="400px">

                                        </div>

                                        <div class="menu-detail bg_white">

                                            <h2 class="default_small_heading navy_blue open_sans font_400 margin_0 clearfix">Daangar <!-- <span class="font_600 text-right">&#8377; 50</span> --></h2>

                                        </div>

                                    </div>

                                </a>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                   
                    </div>

                </div>

            </section>

            <!-- /Skill Section -->

        </section>

        <section id="snack-mix" class="combined_skills_section big_padding bg_grey" style="padding:55px 0 !important;" >
            <!-- <section class="skill_section" > -->

                <div class="container">

                    <div class="skill_section_inner">

                        <!-- <p class="default_text raleway text-center default_small_heading blue_color font_200">What we do</p> -->

                        <h2 class="default_section_heading text-center">

                            Snack

                            <span class="font_200">

                                Mix

                            </span>

                        </h2>

                        <hr class="default_divider default_divider_blue">
                        
                        <div class="row">
                            <div class="col-md-4">
                                <a class="anchor_style_default" href="#.">

                                    <div class="menu-detail-outer">

                                        <div class="menu-img img-container" data-content="Our favourite snack was Ajji’s Bhajani Thalipeeth (grandmother’s homemade flatbread). Easy to make and a wholesome mix of grains, pulses, legumes & millets grounded to perfection that gave us iron calcium and much needed dietary fibres. Healthy, tasty & nutritious anytime snack.">

                                            <img src="{{ asset('/images/site-images/products/Kusuma_Thalipeeth_F.jpg') }}" height="400px">

                                        </div>

                                        <div class="menu-detail bg_white">

                                            <h2 class="default_small_heading navy_blue open_sans font_400 margin_0 clearfix">Thalipeeth Bhajani <!-- <span class="font_600 text-right">&#8377; 50</span> --></h2>

                                        </div>

                                    </div>

                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="anchor_style_default" href="#.">

                                    <div class="menu-detail-outer">

                                        <div class="menu-img img-container" data-content="This variation is the fasting version of one of the most liked dishes of Maharashtra – Thalipeeth. This is a farali adaption of the classic thalipeeth where the multigrain is replaced with Samo rice, Tapioca, Amaranth and other spices. This is a delicious and healthy breakfast idea even on non-fasting days. This flatbread tastes as good as the classic Thalipeeth or instead tastes a tad better.">

                                            <img src="{{ asset('/images/site-images/products/Kusuma_UPasachi Bhajani_F.jpg') }}" height="400px">

                                        </div>

                                        <div class="menu-detail bg_white">

                                            <h2 class="default_small_heading navy_blue open_sans font_400 margin_0 clearfix">Upasachi Bhajani <!-- <span class="font_600 text-right">&#8377; 50</span> --></h2>

                                        </div>

                                    </div>

                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="anchor_style_default" href="#.">

                                    <div class="menu-detail-outer">

                                        <div class="menu-img img-container" data-content="Bhajani Chakli a must have favourite snack of Maharashtrians in Diwali, which is - salty, savoury and crisp. It is the one snack that you cannot stop nibbling. The flour is made from roasted rice & lentils along with spices.">

                                            <img src="{{ asset('/images/site-images/products/Kusuma_Chakali Bhajani_F.jpg') }}" height="400px">

                                        </div>

                                        <div class="menu-detail bg_white">

                                            <h2 class="default_small_heading navy_blue open_sans font_400 margin_0 clearfix">Chakali Bhajani<!-- <span class="font_600 text-right">&#8377; 50</span> --></h2>

                                        </div>

                                    </div>

                                </a>
                            </div>
                        </div>

                    </div>

                </div>

            <!-- </section> -->

            <!-- /Skill Section -->

        </section>

        <section id="snacks" class="combined_skills_section big_padding bg_grey" style="padding:55px 0 !important;" >


            <!-- <section class="skill_section" > -->

                <div class="container">

                    <div class="skill_section_inner">

                        <!-- <p class="default_text raleway text-center default_small_heading blue_color font_200">What we do</p> -->

                        <h2 class="default_section_heading text-center">

                            Snacks

                            <span class="font_200">

                                

                            </span>

                        </h2>

                        <hr class="default_divider default_divider_blue">
                            
                        <div class="row">
                            <div class="col-md-4">
                                <a class="anchor_style_default" href="#.">

                                    <div class="menu-detail-outer">

                                        <div class="menu-img img-container" data-content="Indian snacks have a fantastic spread &amp; our Poha Chivda or Chidva is one of the wonderful healthy snack alternative to the fried ones, an addictive tea time snack. Once you start can’t stop polishing off the bowl.">

                                            <img src="{{ asset('/images/site-images/products/Kusuma_Chivada_F.jpg') }}" height="400px">

                                        </div>

                                        <div class="menu-detail bg_white">

                                            <h2 class="default_small_heading navy_blue open_sans font_400 margin_0 clearfix">Chivada <!-- <span class="font_600 text-right">&#8377; 30</span> --></h2>

                                        </div>

                                    </div>

                                </a>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                        </div>

                    </div>

                </div>

            <!-- </section> -->

            <!-- /Skill Section -->

        </section>

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

                    <p class="text-center default_text open_sans white_color">&copy; 2018 <a href="mailto:cosmosdsilva93@gmail.com" style="text-decoration: none; color:#fff;">Pixxel IT Services</a>,  All rights reserved.</p>

                </div>

            </div>

        </footer>

        <!-- /Footer Section -->

    </section>

    <!-- /Parent Section Ended -->

    <!-- jQuery 2.2.0-->
    <script src="{{ asset('/js/jquery.js') }}"></script>

    <?php if($category != ''){ ?>
    <script type="text/javascript">
        $(function(){
            $('html, body').animate({
                scrollTop: $('#<?php echo $category; ?>').offset().top
            }, 500);
        });
    </script>
    <?php } ?>


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
    <script src="{{ asset('/images/food-resturant-assets/js/script.js') }}"></script>

</body>

</html>