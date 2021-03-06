
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exord Online Limited</title>

    <!-- custom  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/prettyPhoto.css">
    <link rel="stylesheet" href="css/countrySelect.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/custom/style.css">
    
    <!-- favicon -->
    <link rel="icon" type="image/png" href="img/favicon.png">
    
    
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>	<!-- jQuery -->
</head>

<body class="home">

<div class="preloader gradient_bg_one">
    <div class="spinner">
      <div class="double-bounce1"></div>
      <div class="double-bounce2"></div>
    </div>
</div>


<!--Color changer option only for preview page, you can change theme color from "css\sass\_color.scss" file...-->

<div class="styler">
    <div class="icon">

        <img src="img/icon/cloud.png" alt="">
    </div>
    <div class="styleInner">
        <h3>Sticky Header</h3>
        <div class="stickyBtn">
            <a href="#" class="on active">on</a>
            <a href="#" class="off">off</a>
        </div>
        <h3>Layout Mode</h3>
        <div class="layoutBtn">
            <a href="#" class="boxed">boxed</a>
            <a href="#" class="wide active">wide</a>
        </div>

        <h3>Color Theme</h3>

        <div class="colorTheme">
            <div class="singleTheme active"> 01
               <span style="display:none"></span>
            </div>
            <div class="singleTheme"> 02
               <span style="display:none">css/theme/theme-02.css</span>
            </div>
            <div class="singleTheme"> 03
               <span style="display:none">css/theme/theme-03.css</span>
            </div>
            <div class="singleTheme"> 04
               <span style="display:none">css/theme/theme-04.css</span>
            </div>
            <div class="singleTheme"> 05
               <span style="display:none">css/theme/theme-05.css</span>
            </div>
            <div class="singleTheme"> 06
               <span style="display:none">css/theme/theme-06.css</span>
            </div>


            <div class="theme-link"><link rel="stylesheet" href="css/custom/style.css"></div>

        </div>
        <div class="layout_bg_wrap">
            <h3 class="lbg_h">Backgrounds</h3>
            <div class="layoutBg">
                <div class="singleBg"><img src="img/bg/01.png" alt=""></div>
                <div class="singleBg"><img src="img/bg/02.jpg" alt=""></div>
                <div class="singleBg"><img src="img/bg/03.png" alt=""></div>
                <div class="singleBg"><img src="img/bg/04.jpg" alt=""></div>
                <div class="singleBg"><img src="img/bg/05.jpg" alt=""></div>
                <div class="singleBg"><img src="img/bg/06.jpg" alt=""></div>
                <div class="singleBg"><img src="img/bg/07.jpg" alt=""></div>
                <div class="singleBg"><img src="img/bg/08.jpg" alt=""></div>
                <div class="singleBg"><img src="img/bg/09.jpg" alt=""></div>
                <div class="singleBg"><img src="img/bg/10.jpg" alt=""></div>
                <div class="singleBg"><img src="img/bg/11.jpg" alt=""></div>
                <div class="singleBg"><img src="img/bg/12.jpg" alt=""></div>
                <div class="singleBg"><img src="img/bg/13.jpg" alt=""></div>
                <div class="singleBg"><img src="img/bg/14.jpg" alt=""></div>
                <div class="singleBg"><img src="img/bg/15.jpg" alt=""></div>
                <div class="singleBg"><img src="img/bg/16.jpg" alt=""></div>
            </div>
        </div>
            <h3 class="lbg_h">Button Effects</h3>
        <div class="button_effect">

            <div class="btn_wrap text-center">
                <a href="#" class="big_btn hvr-bounce-to-right two">Bounce</a>
                <a href="#" class="big_btn hvr-shutter-out-horizontal">Shutter</a>
                <a href="#" class="big_btn hvr-sweep-to-right">Sweep</a>
                <a href="#" class="big_btn hvr-rectangle-out">Rectangle</a>
            </div>

        </div>
    </div>
</div>



<div class="mainWrap">


<!-- 01. hero_area -->
    <div id="home" class="hero_area v4">
        <header class="fixed_header">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <a href="index.html" class="logo">
                            @if(Storage::disk('public')->has('photo/logo/'.$logo->logo))
                                <img src="{{ Storage::url('photo/logo/'.$logo->logo) }}" alt="logo" style="width: 200px;"></a>
                            @endif
                        </a>
                    </div>
                    <div class="col-md-10 col-sm-9 col-xs-6">
                        <!-- nav Icon-->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <i class="fa fa-navicon"></i>
                          </button>
                        </div>
                        <nav id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="current-menu-item"><a href="#home">home</a></li>
                                <li><a href="#">Versions</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">Prox Creative</a></li>
                                        <li><a href="index-cta.html">Prox Cta Form</a></li>
                                        <li><a href="index-mailchimp.html">Prox MailChimp</a></li>
                                        <li><a href="index-paypal.html">Prox Paypal</a></li>
                                    </ul>
                                </li>
                                <li><a href="#features">Features</a></li>
                                <li><a href="#product">Product</a></li>
                                <li><a href="#reviews">Reviews</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                            <!-- <span class="btn_wrap">
                                <a href="#" class="big_btn hvr-bounce-to-right">Purchase Now</a>
                            </span> -->
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <div class="home_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="home_text  animated a_fu">
                            <div class="home_cell">
                                <h1>{{$heading->heading}}</h1>
                                <p>{{$heading->content}}</p>
                                <!-- <div class="home_btn  animated a_fu adn104ss">
                                    <a href="#" class="hvr-bounce-to-right">Buy using PayPal</a>
                                </div> -->
                                <div class="home_img">
                                    @if(Storage::disk('public')->has('photo/heading/'.$heading->path))
                                        <img src="{{ Storage::url('photo/heading/'.$heading->path) }}" alt="logo" style="width: 420px; height: 396px;"></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- 01. /hero_area -->


<!-- 02. news_area -->
    <div id="news" class="news_area gradient_bg_one sp90">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="h3 animated a_fu"><span>Exord Online</span> is one of the leading broad band internet service provider in Rampura, Badda and Khilgaon Area.</div>
                </div>
            </div>
        </div>
    </div>
<!-- 02. /news_area -->

<!-- 03. feature_area -->
    <!-- <div id="features" class="feature_area sp90">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section_title animated a_fu">
                        <h1>Vision can be more wider than past.</h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br>nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="featured">
                        <div class="feature_img">
                            <img src="img/01.jpg" alt="">
                        </div>
                        <div class="single_feature animated a_sl adn1s">
                            <div class="h4">Feature 1</div>
                            <p>Duis autem vel eum iriure dolor <br>in hendrerit in vulputate velit esse <br>molestie consequat.</p>
                            <span class="dot active ">
                                <span class="mtooltip two">Click to see!</span>
                                <span class="mtooltip one">Click to hide!</span>
                            </span>
                        </div>
                        <div class="single_feature animated a_sr adn102s">
                            <div class="h4">Feature 2</div>
                            <p>Duis autem vel eum iriure dolor <br>in hendrerit in vulputate velit esse <br>molestie consequat.</p>
                            <span class="dot ">
                                <span class="mtooltip two">Click to see!</span>
                                <span class="mtooltip one">Click to hide!</span>
                            </span>
                        </div>
                        <div class="single_feature animated a_sl adn0102s">
                            <div class="h4">Feature 3</div>
                            <p>Duis autem vel eum iriure dolor <br>in hendrerit in vulputate velit esse <br>molestie consequat.</p>
                            <span class="dot ">
                                <span class="mtooltip two">Click to see!</span>
                                <span class="mtooltip one">Click to hide!</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- 03. /feature_area -->

<!-- 04. ext_feature_area -->
    <div id="ex_feature" class="ext_feature_area sp90 sbg2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section_title animated a_fu">
                        <h1>Why Exord Online?</h1>
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach($benefit as $key)
                <div class="col-md-4 col-sm-6 animated a_fu">
                    <div class="single_service">
                        <div class="service_icon">
                            <img class="hvr-wobble-skew" src="img/icon/01.png" alt="">
                        </div>
                        <div class="service_content">
                            <div class="h4">{{$key->heading}}</div>
                            <p>{{$key->content}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            <!--     <div class="col-md-4 col-sm-6 animated a_fu">
                    <div class="single_service">
                        <div class="service_icon">
                            <img class="hvr-wobble-skew" src="img/icon/02.png" alt="">
                        </div>
                        <div class="service_content">
                            <div class="h4">Faster in start</div>
                            <p>Lorem ipsum dolor sit amet, consec tetuer adipiscing elit, sed diam nonu mmy nibh euismod tincidunt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 animated a_fu">
                    <div class="single_service">
                        <div class="service_icon">
                            <img class="hvr-wobble-skew" src="img/icon/03.png" alt="">
                        </div>
                        <div class="service_content">
                            <div class="h4">360 degree rotation</div>
                            <p>Lorem ipsum dolor sit amet, consec tetuer adipiscing elit, sed diam nonu mmy nibh euismod tincidunt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 animated a_fu">
                    <div class="single_service">
                        <div class="service_icon">
                            <img class="hvr-wobble-skew" src="img/icon/04.png" alt="">
                        </div>
                        <div class="service_content">
                            <div class="h4">Auto clock system</div>
                            <p>Lorem ipsum dolor sit amet, consec tetuer adipiscing elit, sed diam nonu mmy nibh euismod tincidunt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 animated a_fu">
                    <div class="single_service">
                        <div class="service_icon">
                            <img class="hvr-wobble-skew" src="img/icon/05.png" alt="">
                        </div>
                        <div class="service_content">
                            <div class="h4">HD video shoot</div>
                            <p>Lorem ipsum dolor sit amet, consec tetuer adipiscing elit, sed diam nonu mmy nibh euismod tincidunt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 animated a_fu">
                    <div class="single_service">
                        <div class="service_icon">
                            <img class="hvr-wobble-skew" src="img/icon/06.png" alt="">
                        </div>
                        <div class="service_content">
                            <div class="h4">Secured for all</div>
                            <p>Lorem ipsum dolor sit amet, consec tetuer adipiscing elit, sed diam nonu mmy nibh euismod tincidunt.</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
<!-- 04. /ext_feature_area -->

<!-- 05. cta_small_area -->
    <div id="cta_small" class="cta_small_area sp90">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section_title animated a_fu">
                        <h1>It is still not too late! Get your internet connection today.</h1>
                        <p>Your new connection is just a phone call away,<br> Call <b>01971-868600</b> to get your connection.</p>
                    </div>
                </div>
                <!-- <div class="col-md-12 text-center">
                    <a href="#" class="big_btn two hvr-bounce-to-right animated a_fu adn106s">Order Now!</a>
                </div> -->
            </div>
        </div>
    </div>
<!-- 05. /cta_small_area -->


<!-- 06. step_area -->
    <!-- <div id="step" class="step_area sp90 gradient_bg_two sr_shadow">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section_title animated a_fu">
                        <h1>How the product works?</h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br>nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 animated a_fu">
                    <div class="single_step">
                        <div class="sl_no hvr-radial-out">
                            <div class="h2">1</div>
                        </div>
                        <div class="step_content">
                            <div class="h3">Get</div>
                            <p>Duis autem vel eum iriure dolor in  hendrerit in vulputate velit esse mole stie consequat, vel illum dolore eu.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 animated a_fu">
                    <div class="single_step">
                        <div class="sl_no hvr-radial-out">
                            <div class="h2">2</div>
                        </div>
                        <div class="step_content">
                            <div class="h3">Set</div>
                            <p>Duis autem vel eum iriure dolor in  hendrerit in vulputate velit esse mole stie consequat, vel illum dolore eu.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 animated a_fu">
                    <div class="single_step">
                        <div class="sl_no hvr-radial-out">
                            <div class="h2">3</div>
                        </div>
                        <div class="step_content">
                            <div class="h3">Go!</div>
                            <p>Duis autem vel eum iriure dolor in  hendrerit in vulputate velit esse mole stie consequat, vel illum dolore eu.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- 06. /step_area -->

<!-- 07. product_area -->

   <!--  <div id="product" class="product_area animated a_fu">
            <div class="container">
                <div class="row single_product">
                    <div class="col-md-6 col-md-offset-5 static">
                        <div class="product_content">
                            <div class="h2">Enjoy the virual reality <br>with the best VR Box.</div>
                            <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt  lectores legere me lius quod ii legunt saepius. Claritas estetiam  processus dynamicus, qui sequitur mutationem consuetudium  lectorum legunt.</p>
                            <div class="product_img">
                                <img src="img/02.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row single_product">
                    <div class="col-md-6 static">
                        <div class="product_content">
                            <div class="h2">The box you want in your <br> pocket is ready now!</div>
                            <p>Typi non habent claritatem insitam; est usus legentis in iis  qui facit eorum claritatem. Investigationes demonstraverunt  lectores legere me lius quod ii legunt saepius. </p>
                            <ul class="product_list">
                                <li>360 Degree Rotation easily</li>
                                <li>Easy to carry anywhere</li>
                                <li>Fastest & Easiest setup system</li>
                            </ul>
                            <div class="product_img">
                                <img src="img/03.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div> -->
<!-- 07. /product_area -->

<!-- 08. pricing_area -->
    <div id="price" class="price_area sp90 sbg2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section_title animated a_fu">
                        <h1>Our Packages</h1>
                        <p>The popular internet packages are given below</p>
                    </div>
                </div>
                <div class="row price">
                @foreach($package as $key)
                    <div class="col-md-3 col-sm-6 animated a_fu">
                        <div class="single_price">
                            <div class="product_img" style="background-image: url({{ Storage::url('photo/package/'.$key->path) }});"></div>
                            <div class="h4">{{$key->heading}}</div>
                            <div class="h4 currency">{{$key->price}}</div>
                            <span class="price_bar"></span>
                            <p>{{$key->content}}</p>
                            <div class="price_btn">
                                <a href="#" class="big_btn two hvr-bounce-to-right">Order Now!</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                    <!-- <div class="col-md-3 col-sm-6 animated a_fu">
                        <div class="single_price">
                            <div class="product_img">
                                <div class="product_img" style="background-image: url(img/product/02.jpg);"></div>
                            </div>
                            <div class="h4">VR Set 001</div>
                            <div class="h4 currency">$149.00</div>
                            <span class="price_bar"></span>
                            <p>Lorem ipsum dolor sit amet,  consectetuer adipiscing elit, diam nonummy nibh.</p>
                            <div class="price_btn">
                                <a href="#" class="big_btn two hvr-bounce-to-right">Order Now!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 animated a_fu">
                        <div class="single_price">
                            <div class="product_img">
                                <div class="product_img" style="background-image: url(img/product/03.jpg);"></div>
                            </div>
                            <div class="h4">VR Set 001</div>
                            <div class="h4 currency">$149.00</div>
                            <span class="price_bar"></span>
                            <p>Lorem ipsum dolor sit amet,  consectetuer adipiscing elit, diam nonummy nibh.</p>
                            <div class="price_btn">
                                <a href="#" class="big_btn two hvr-bounce-to-right">Order Now!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 animated a_fu">
                        <div class="single_price">
                            <div class="product_img">
                                <div class="product_img" style="background-image: url(img/product/04.jpg);"></div>
                            </div>
                            <div class="h4">VR Set 001</div>
                            <div class="h4 currency">$149.00</div>
                            <span class="price_bar"></span>
                            <p>Lorem ipsum dolor sit amet,  consectetuer adipiscing elit, diam nonummy nibh.</p>
                            <div class="price_btn">
                                <a href="#" class="big_btn two hvr-bounce-to-right">Order Now!</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
<!-- 08. /pricing_area -->

<!-- 09. testimonial_area -->
    <div id="reviews" class="testimonial_area sp90">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section_title animated a_fu">
                        <h1>Customer reviews</h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit <br>nibh euismod tincidunt ut laoreet dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class="tst_slider animated a_fu">
                <div class="single_slide">
                    <div class="tst_content">
                        <span>"</span>
                        <p>Duis autem vel eum iriure dolor in hen drerit in vulputate velit esse estie conse quat, vel illum dolore eu feugiat nulla  facilisis at vero eros et accumsan.</p>
                        <div class="rate">
                            <img src="img/icon/rate-5.jpg" alt="">
                        </div>
                        <div class="client_dt">
                            <div class="h4">Jorgre Hason</div>
                            <span class="position">Student</span>
                        </div>
                    </div>
                </div>
                <div class="single_slide">
                    <div class="tst_content">
                        <span>"</span>
                        <p>Duis autem vel eum iriure dolor in hen drerit in vulputate velit esse estie conse quat, vel illum dolore eu feugiat nulla  facilisis at vero eros et accumsan.</p>
                        <div class="rate">
                            <img src="img/icon/rate-4.5.jpg" alt="">
                        </div>
                        <div class="client_dt">
                            <div class="h4">Martin Jones</div>
                            <span class="position">Employee</span>
                        </div>
                    </div>
                </div>
                <div class="single_slide">
                    <div class="tst_content">
                        <span>"</span>
                        <p>Duis autem vel eum iriure dolor in hen drerit in vulputate velit esse estie conse quat, vel illum dolore eu feugiat nulla  facilisis at vero eros et accumsan.</p>
                        <div class="rate">
                            <img src="img/icon/rate-5.jpg" alt="">
                        </div>
                        <div class="client_dt">
                            <div class="h4">Delowar Hossain</div>
                            <span class="position">Student</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="featured_clients animated a_fu">
                        <div class="h4">As featured on</div>
                        <div class="featured_slider">
                            <a href="#"><img src="img/06.jpg" alt=""></a>
                            <a href="#"><img src="img/07.jpg" alt=""></a>
                            <a href="#"><img src="img/08.jpg" alt=""></a>
                            <a href="#"><img src="img/09.jpg" alt=""></a>
                            <a href="#"><img src="img/10.jpg" alt=""></a>
                            <a href="#"><img src="img/11.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- 09. /testimonial_area -->

<!-- 10. cta_area -->
    <div id="cta" class="cta_area sp90 sr_shadow gradient_bg_one">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-4">
                    <div class="cta_content animated a_fu">
                        <div class="h1">Enter to the virtual world <br>with our VR Box.</div>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit  esse molestie consequat, vel illum dolore eu feugiat nulla facilisis  at vero eros et accumsan.</p>
                        <div class="cta_btn">
                            <a href="#" class="big_btn hvr-bounce-to-right">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta_img animated a_fl">
            <img src="img/04.png" alt="">
        </div>
    </div>
<!-- 10. /cta_area -->

<!-- 11. faq_area -->
    <div id="faq" class="faq_area sp90">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section_title animated a_fu">
                        <h1>Frequently asked question</h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit <br>nibh euismod tincidunt ut laoreet dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class="row faq">
                <div class="col-md-6 faq_col">
                    <div class="single_faq animated a_fl">
                        <div class="h4">What is VR Box?</div>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero  eros et accumsan et iusto odio dignissim qui blandit praesent lupta tum zzril delenit augue</p>
                    </div>
                    <div class="single_faq animated a_fl">
                        <div class="h4">Can I use it outside?</div>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero  eros et accumsan et iusto odio dignissim qui blandit praesent lupta tum zzril delenit augue</p>
                    </div>
                </div>
                <div class="col-md-6 faq_col">
                    <div class="single_faq animated a_fr">
                        <div class="h4">How it works?</div>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero  eros et accumsan et iusto odio dignissim qui blandit praesent lupta tum zzril delenit augue</p>
                    </div>
                    <div class="single_faq animated a_fr">
                        <div class="h4">How can I pay?</div>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero  eros et accumsan et iusto odio dignissim qui blandit praesent lupta tum zzril delenit augue</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- 11. /faq_area -->

<!-- 12. newsletter_area -->
<div id="newsletter" class="newsletter_area sp90 sbg2">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="section_title animated a_fu">
                    <h1>Signup for our newsletter</h1>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit <br>nibh euismod tincidunt ut laoreet dolore magna.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
                <div class="newsletter animated a_fu">
                    <div class="input_wrap clearfix">
                        <form action="#">
                            <input type="email" placeholder="Enter your email address">
                            <input type="submit" value="Subscribe Now">
                        </form>
                    </div>
                    <p class="nw_txt">We do not believe in spamming. It is guareented!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 12. /newsletter_area -->

<!-- 13. map_area -->
    <div id="contact" class="map_area">
        <div id="googleMap"></div>
        <div class="contact_form animated a_fu">
            <div class="contact_head">
                <div class="h2">Get in touch</div>
                <p id="form-messages">send us a message & we will be in touch</p>
            </div>
            <div class="form_wrap">
                <form action="php/mail.php" id="ajax-form" method="post">
                    <input id="name" name="name" type="text" placeholder="Name">
                    <input id="email" name="email" type="email" placeholder="Email address">
                    <textarea id="message" name="contactMsg" placeholder="Messege"></textarea>
                    <input name="submit" id="submit" type="submit" value="Send now">
                    <div class="form_icon fa fa-refresh fa-spin"></div>
                </form>
            </div>
            <ul class="contact_footer">
                <li>
                    <a href="mailto:info@info.com">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <span>Email: </span> info@flash.com
                    </a>
                </li>
                <li>
                    <a href="tel:000111222333">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>Phone: </span> 000 111 222 333
                    </a>
                </li>
            </ul>
        </div>
    </div>
<!-- 13. /map_area -->


<!-- 14. footer -->
    <footer id="footer animated a_fu">
        <div class="container">
            <div class="row foo_row">
                <div class="col-md-3">
                    <div class="footer_txt">
                        <p>&copy; Copyright 2016, All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="footer_link widget">
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Support</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="widget footer_social">
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-linkedin"></a></li>
                        <li><a href="#" class="fa fa-pinterest"></a></li>
                        <li><a href="#" class="fa fa-google-plus"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
<!-- 14. /footer -->

</div>

    <script src="js/bootstrap.min.js"></script>	<!-- bootstrap -->
    <script src="js/owl.carousel.min.js"></script>	<!-- owl carousel -->
    <script src="js/onepage.nav.js"></script>	<!-- onepage nav -->
    <script src="js/jquery.prettyPhoto.js"></script>	<!-- prettyPhoto -->
    <script src="js/countrySelect.min.js"></script>	<!-- countrySelect -->
    <script src="js/ajax/mail.ajax.js"></script>	<!-- ajax form -->
    <script src="js/ajax/jquery.ajaxchimp.js"></script>	<!-- ajax form -->
    <script src="js/waypoints.min.js"></script>	<!-- waypoint -->
    <script src="js/active.js"></script>	<!-- active -->

    <!-- google map script & api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7CQl6fRhagGok6CzFGOOPne2X1u1spoA"></script>
    <script src="js/google.map.js"></script>

</body>

</html>
