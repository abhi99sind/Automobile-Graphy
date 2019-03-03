<?php
include_once'connection.php';
$q="";



?>
<!doctype html>
<!--[if IE 7 ]> <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]> <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

    
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="abhinav">
<link rel="shortcut icon" href="images/favicon.jpg">
<title>AUTOMOBILE GRAPHY||YOUR CAR OUR DESIGN</title>
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Yellowtail%7COpen%20Sans%3A400%2C300%2C600%2C700%2C800" media="screen" />
<!-- Custom styles for this template -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css" media="screen" />
<link href="css/jquery.fancybox.css" rel="stylesheet">
<link href="css/jquery.selectbox.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/mobile.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
<link href="css/animate.min.css" rel="stylesheet">
<link href="css/ts.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>

<!-- Twitter Feed Scripts 
     Uncomment to activate

<script type="text/javascript" src="js/twitter/jquery.tweet.js"></script>
<script type="text/javascript" src="js/twitter/twitter_feed.js"></script> -->

</head>

<body>
<!--Header Start-->
<header  data-spy="affix" data-offset-top="1" class="clearfix">
    <section class="toolbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 left_bar">
                    <ul class="left-none">
                        <li><a href="#"><i class="fa fa-user"></i> Login</a></li>
                        
                        <li><i class="fa fa-search"></i>
                            <input type="search" placeholder="Search" class="search_box">
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 ">
                    <ul class="right-none pull-right company_info">
                        <li><a href="tel:9811372660"><i class="fa fa-phone"></i>+91-9811372660</a></li>
                        <li class="address"><a href="contact.html"><i class="fa fa-map-marker"></i> B-1,Jhilimil Colony Delhi-110095</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="toolbar_shadow"></div>
    </section>
    <div class="bottom-header" >
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid"> 
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a class="navbar-brand" href="index.php"><span class="logo"><span class="primary_text">Automobile Graphy</span> <span class="secondary_text">Your Cars Our Design</span></span></a> </div>
                    
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav pull-right">
                            <li class="active"><a href="index.php">Home</a></li>
                             <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Showroom<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="inventory-wide-fullwidth.html">CARS</a></li>
                                    <li><a href="inventory-wide-fullwidth.html">BIKES</a></li>
                                    
                                </ul>
                            </li>
                            
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse --> 
                </div>
                <!-- /.container-fluid --> 
            </nav>
        </div>
        <div class="header_shadow"></div>
    </div>
</header>
<!--Header End-->

<div class="clearfix"></div>
<section id="secondary-banner" class="dynamic-image-1"><!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <h2>OUR SHOWROOM</h2>
                <h4>Varient Cars,Varient Vehicle Type</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>Showroom</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--secondary-banner ends-->
<div class="message-shadow"></div>
<div class="clearfix"></div>
<section class="content">
    <div class="container">
        <div class="inner-page row">
            <div class="listing-view margin-bottom-20">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 pull-right select_view padding-none"> 
                </div>
            </div>
            <div class="clearfix"></div>
            <form method="post" action="#" class="listing_sort">
                <div class="select-wrapper listing_select clearfix margin-top-none margin-bottom-15">
                    <div class="my-dropdown years-dropdown">
                        <select name="year" class="css-dropdowns" tabindex="1" >
                            <option value="">All Years</option>
                            <option>2019</option>
                            <option>2018</option>
                            <option>2017</option>
                            <option>2016</option>
                            <option>2015</option>
                            <option>2014</option>
                            <option>2013</option>
                            <option>2012</option>
                            <option>2011</option>
                            <option>2010</option>
                            <option>2009</option>
                            <option>2008</option>
                            <option>2007</option>
                            <option>2006</option>
                            <option>2005</option>
                            <option>2004</option>
                        </select>
                    </div>
                    <div class="my-dropdown makers-dropdown">
                        <select name="make" class="css-dropdowns" tabindex="1" >
                            <option value="">All Makes</option>
                            <option>Lorem</option>
                            <option>ipsum</option>
                            <option>dolor</option>
                            <option>sit</option>
                            <option>amet</option>
                        </select>
                    </div>
                    <div class="my-dropdown models-dropdown">
                        <select name="model" class="css-dropdowns" tabindex="1" >
                            <option value="">All Models</option>
                            <option>Lorem</option>
                            <option>ipsum</option>
                            <option>dolor</option>
                            <option>sit</option>
                            <option>amet</option>
                        </select>
                    </div>
                    <div class="my-dropdown body-styles-dropdown">
                        <select name="body_style" class="css-dropdowns" tabindex="1" >
                            <option value="">All Body Styles</option>
                            <option>Cargo</option>
                            <option>Compact</option>
                            <option>Convertible</option>
                            <option>Coupe</option>
                            <option>Hatchback</option>
                            <option>Minivan</option>
                            <option>Sedan</option>
                            <option>SUV</option>
                            <option>Truck</option>
                            <option>Van</option>
                            <option>Wagon</option>
                        </select>
                    </div>
                    <div class="my-dropdown transmissions-dropdown">
                        <select name="transmission" class="css-dropdowns" tabindex="1" >
                            <option value="">All Transmissions</option>
                            <option>Automatic</option>
                            <option>Manual</option>
                        </select>
                    </div>
                    <div class="my-dropdown fuel-economies-dropdown">
                        <select name="fuel_economies" class="css-dropdowns" tabindex="1" >
                            <option value="">All Fuel Economies</option>
                            <option>10-20 MPG</option>
                            <option>20-30 MPG</option>
                            <option>30-40 MPG</option>
                            <option>40-50 MPG</option>
                            <option>50-60 MPG</option>
                        </select>
                    </div>
                    <div class="my-dropdown conditions-dropdown">
                        <select name="conditions" class="css-dropdowns" tabindex="1" >
                            <option value="">All Conditions</option>
                            <option>New</option>
                            <option>Used</option>
                        </select>
                    </div>
                    <div class="my-dropdown prices-dropdown">
                        <select name="price" class="css-dropdowns" tabindex="1" >
                            <option value="">All Prices</option>
                            <option>&lt; Rs.3,00,000</option>
                            <option>&lt; Rs.6,00,000</option>
                            <option>&lt; Rs.9,00,000</option>
                            <option>&lt; Rs.12,00,000</option>
                            <option>&lt; Rs.15,00,000</option>
                            <option>&lt; Rs.18,00,000</option>
                            <option>&lt; Rs.20,00,000</option>
                            
                        </select>
                    </div>
                </div>
                <div class="select-wrapper pagination clearfix margin-top-none margin-bottom-15">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sort-by-menu"> <span class="sort-by">Sort By:</span>
                            <div class="my-dropdown price-ascending-dropdown">
                                <select name="price" class="css-dropdowns" tabindex="1" >
                                    <option value="">Price Ascending</option>
                                    <option>Ascending</option>
                                    <option>Descending</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 col-lg-offset-1">
                            <div class="controls full"> <a href="#" class="left-arrow"><i class="fa fa-angle-left"></i></a> <span>Page 1 of 4</span> <a href="#" class="right-arrow"><i class="fa fa-angle-right"></i></a> </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                            <ul class="form-links top_buttons">
                                <li><a href="#" class="gradient_button">Reset Filters</a></li>
                                <li><a href="#" class="gradient_button">Deselect All</a></li>
                                <li><a href="#" class="gradient_button">Compare 0 Vehicles</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </form>
            <div class="clearfix"></div>
            <div class="content-wrap car_listings">
                <div class="row">
                    <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                        
                        <input type="checkbox" name="a" class="checkbox compare_vehicle input-checkbox" id="vehicle_1" />
                        <label for="vehicle_1"></label>
                        <a class="inventory" href="inventory-listing.html">
                        <div class="title">2015 XUV-500</div>
                        <img src="images/car-1-200x150.jpg" class="preview" alt="preview">
                        <table class="options-primary">
                            <tr>
                                <td class="option primary">Body Style:</td>
                                <td class="spec">SUV</td>
                            </tr>
                            <tr>
                                <td class="option primary">Drivetrain:</td>
                                <td class="spec">2WD</td>
                            </tr>
                            <tr>
                                <td class="option primary">Engine:</td>
                                <td class="spec">4 Cylinder mHawk</td>
                            </tr>
                            <tr>
                                <td class="option primary">Transmission:</td>
                                <td class="spec">6-Speed Manual</td>
                            </tr>
                            <tr>
                                <td class="option primary">Driven:</td>
                                <td class="spec">68000Km</td>
                            </tr>
                        </table>
                        <table class="options-secondary">
                            <tr>
                                <td class="option secondary">Exterior Color:</td>
                                <td class="spec">White</td>
                            </tr>
                            <tr>
                                <td class="option secondary">Interior Color:</td>
                                <td class="spec">Creamish Grey</td>
                            </tr>
                    
                        </table>
                        
                            <div class="price"><b>Price:</b><br>
                            <div class="figure">Rs.10,50,000/-<br>
                            </div>
                            
                        </div>
                        <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                        <div class="clearfix"></div>
                        </a>
                        <div class="view-video gradient_button" data-youtube-id="lNsNRbGYNQA"><i class="fa fa-video-camera"></i> View Video</div>
                    </div>
                    <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                        <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_2" />
                        <label for="vehicle_2"></label>
                        <a class="inventory" href="inventory-listing.html">
                        <div class="title">2006 Honda City</div>
                        <img src="images/car-2-200x150.jpg" class="preview" alt="preview">
                        <table class="options-primary">
                            <tr>
                                <td class="option primary">Body Style:</td>
                                <td class="spec">Sedan</td>
                            </tr>
                            <tr>
                                <td class="option primary">Drivetrain:</td>
                                <td class="spec">4WD</td>
                            </tr>
                            <tr>
                                <td class="option primary">Engine:</td>
                                <td class="spec">VTec</td>
                            </tr>
                            <tr>
                                <td class="option primary">Transmission:</td>
                                <td class="spec">5-Speed Manual</td>
                            </tr>
                            <tr>
                                <td class="option primary">Driven:</td>
                                <td class="spec">59000Km</td>
                            </tr>
                        </table>
                        <table class="options-secondary">
                            <tr>
                                <td class="option secondary">Exterior Color:</td>
                                <td class="spec">White</td>
                            </tr>
                            <tr>
                                <td class="option secondary">Interior Color:</td>
                                <td class="spec">Grey</td>
                            </tr>
                            <tr>
                                <td class="option secondary">Owner</td>
                                <td class="spec">First</td>
                            </tr>
                            
                        </table>
                        
                        <div class="price"><b>Price:</b><br>
                            <div class="figure">Rs.1,60,000/-<br>
                            </div>
                            
                        </div>
                        <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                        <div class="clearfix"></div>
                        </a>
                        <div class="view-video gradient_button" data-youtube-id="x34DLMrXElI"><i class="fa fa-video-camera"></i> View Video</div>
                    </div>
                    <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                        <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_3" />
                        <label for="vehicle_3"></label>
                        <a class="inventory" href="inventory-listing.html">
                            
                             <div class="title">2016 Hundai Creta</div>
                        <img src="images/car-3-200x150.jpg" class="preview" alt="preview">
                        <table class="options-primary">
                            <tr>
                                <td class="option primary">Body Style:</td>
                                <td class="spec">SUV</td>
                            </tr>
                            <tr>
                                <td class="option primary">Drivetrain:</td>
                                <td class="spec">4WD</td>
                            </tr>
                            <tr>
                                <td class="option primary">Engine:</td>
                                <td class="spec">U2 VGT CRDi</td>
                            </tr>
                            <tr>
                                <td class="option primary">Transmission:</td>
                                <td class="spec">6-Speed Manual</td>
                            </tr>
                            <tr>
                                <td class="option primary">Driven:</td>
                                <td class="spec">24000Km</td>
                            </tr>
                        </table>
                        <table class="options-secondary">
                            <tr>
                                <td class="option secondary">Exterior Color:</td>
                                <td class="spec">Grey</td>
                            </tr>
                            <tr>
                                <td class="option secondary">Interior Color:</td>
                                <td class="spec">Brown</td>
                            </tr>
                            <tr>
                                <td class="option secondary">Owner</td>
                                <td class="spec">Second</td>
                            </tr>
                            
                        </table>
                        
                        <div class="price"><b>Price:</b><br>
                            <div class="figure">Rs.9,50,000/-<br>
                            </div>
                            
                        </div>
                        <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                        <div class="clearfix"></div>
                        </a>
                        <div class="view-video gradient_button" data-youtube-id="QVCOOt-l9Is"><i class="fa fa-video-camera"></i> View Video</div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pagination_container">
                        <ul class="pagination margin-bottom-none margin-top-25 bottom_pagination">
                            <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--container ends--> 
</section>
<div id="youtube_video">
    <iframe width="560" height="315" src="#" allowfullscreen style="width: 560px; height: 315px; border: 0;"></iframe>
</div>

<!--content ends-->
<div class="clearfix"></div>

<!--Footer Start-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 padding-left-none md-padding-left-none sm-padding-left-15 xs-padding-left-15">
                <h4>About us</h4>
                <img src="images/ceo.jpg" alt="">
                <p>Started my journey,few months ago with the aim that everyone can afford a vehicle easily from home without doing survey in the market,So we provide each and every details which let you choose your dream car easily at your home.
                    <li><strong>Our cars are certified and verified and we have a great range according to your budget</strong></li>
                </p>
                 
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-20" style="align-items: center text-align-last: justify align-content: center">
                <h4>Contact us</h4>
                <div class="footer-contact">
                    <ul>
                        <li><strong><i class="fa fa-phone"></i>Phone:</strong><span>8800733833</span></li>
                        <li><strong><i class="fa fa-map-marker"></i>Address:</strong><span>Automobile Graphy<br>
                            B1,Jhilmil Colony<br>
                            Delhi-110095</span></li>
                        <li><strong><i class="fa fa-envelope-o"></i>Email:</strong><span>lovemanchanda08@gmail.com</span></li>
                    </ul>
                </div>
            </div>
            
            </div>    
    </div>
</footer>

<div class="clearfix"></div>
<section class="copyright-wrap padding-bottom-10">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="logo-footer margin-bottom-20 md-margin-bottom-20 sm-margin-bottom-10 xs-margin-bottom-20"><a href="index.html">
                     <h1>Automobile Graphy</h1>
                         <span>Your Car Our Design</span></a>
                </div>
                        </div>
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <ul class="social margin-bottom-25 md-margin-bottom-25 sm-margin-bottom-20 xs-margin-bottom-20 xs-padding-top-10 clearfix">
                    <li><a class="sc-1" href="https://m.facebook.com/automobilegraphy"></a></li>
                    
                    <li><a class="sc-3" href="https://www.youtube.com/channel/UCmAs4RMvzXZWY6Z4-WyK50Q"></a></li>
                   
                    
                                    </ul>
            </div>
            
                <ul class="f-nav">
                    <li><a href="index.html">Home</a></li>
                   
                    <li><a href="demo.html">Showroom</a></li>
                    
                    
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact.html">Location</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
        </div>
    </div>
</section>
<div class="back_to_top"> <img src="images/arrow-up.png" alt="scroll up" /> </div>
<!-- Bootstrap core JavaScript --> <script src="js/retina.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.fancybox.js"></script> 
<script src="js/modernizr.custom.js"></script> <script defer src="js/jquery.flexslider.js"></script> 
<script src="js/jquery.bxslider.js" type="text/javascript"></script> 
<script src="js/jquery.selectbox-0.2.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/jquery.mousewheel.js"></script> 
<script type="text/javascript" src="js/jquery.easing.js"></script>
</body>

<!-- Mirrored from demo.themesuite.com/automotive/inventory-wide-fullwidth.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Jan 2019 08:50:54 GMT -->
</html>