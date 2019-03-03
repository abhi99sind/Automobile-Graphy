<?php
$mid=$_GET["mid"];
$pid=$mid-1;
$nid=$mid+1;
include_once'connection.php';
if(isset($_POST["submit"]))
{
	$name=$_POST["name"];
	$preference=$_POST["contact_method"];
	$email=$_POST["email"];
	$phone=$_POST["phone"];
	$p="INSERT INTO request_info VALUES('','$name','$preference','$email','$phone')";
	$y=$connect->query($p);
	
}
if(isset($_POST["SUBMIT"]))
{
    $offername = $_POST["offer_name"];
    $offerPrefer = $_POST["offer_contact_method"];
    $offeremail = $_POST["offer_email"];
    $offerphone = $_POST["offer_phone"];
    $offeredprice = $_POST["offer_offered_price"];
    $finance = $_POST["offer_financing_required"];
    $comments = $_POST["offer_other_comments"];
    $o = "INSERT INTO make_offer VALUES('','$offername','$offerPrefer','$offeremail','$offerphone','$offeredprice','$finance','$comments')";
    $yo= $connect->query($o);
    
}
if(isset($_POST["submitform"]))
{
    $name = $_POST["sc_name"];
    $contact = $_POST["sc_contact_method"];
    $email = $_POST["sc_email"];
    $phone = $_POST["sc_phone"];
    $day = $_POST["sc_best_day"];
    $time = $_POST["sc_best_time"];
    $sc = "INSERT INTO schedule_drive VALUES('','$name','$contact','$email','$phone','$day','$time')";
    $scy = $connect->query($sc);
}



$q="select * from showroom where id='$mid'";
$qry=$connect->query($q);
$r=$qry->fetch_array();



?><!doctype html>
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
<meta name="author" content="">
<link rel="shortcut icon" href="images/favicon.ico">
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
<link href="css/social-likes.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
<link href="css/animate.min.css" rel="stylesheet">
<link href="css/print.css" rel="stylesheet" type="text/css" media="print">
<link href="css/ts.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDN8je171svdLgDxuR1rS8zmge9XoEMz0A"></script>

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
                        <li><a href="tel:9811372660"><i class="fa fa-phone"></i>+91-8800733833</a></li>
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
                            <li class="active"><a href="index.html">Home</a></li>
                             <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Showroom<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="inventory-wide-fullwidthcars.php">CARS</a></li>
                                    <li><a href="bikes_inventory.php">BIKES</a></li>
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
<section id="secondary-banner" class="dynamic-image-8"><!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <h2>Inventory Listing</h2>
                <h4>Powerful Inventory Marketing, Fully Integrated</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 ">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Inventory</a></li>
                    <li>Inventory Listing</li>
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
        <div class="inner-page inventory-listing">
            <div class="inventory-heading margin-bottom-10 clearfix">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                        <h2 style="font-size: 30px"><?php echo $r[1];?></h2>
                        <span class="margin-top-10">Our platform will maximize the exposure of your inventory online</span>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 text-right">
                        <h2>Rs <?php echo $r[19];?></h2>
                        <em>Negotiable on Table</em> 
                        <!-- <span class="sold_text">Sold</span> -->
                    </div>
                </div>
            </div>
            <div class="content-nav margin-bottom-30">
                <div class="row">
                    <ul>
                        <?php echo "<li class='prev1 gradient_button'><a href='inventory-listing.php?mid=$pid'>Prev Vehicle</a></li>"; ?>
                        <li class="request gradient_button"><a data-toggle="modal" data-target="#modal-cpass">Request More Info</a></li>
                        <li class="schedule gradient_button"><a data-toggle="modal" data-target="#modal-spass">Schedule Test Drive</a></li>
                        <li class="offer gradient_button"><a data-toggle="modal" data-target="#modal-mpass" >Make an Offer</a></li>
                        <?php echo "<li class='next1 gradient_button'><a href='inventory-listing.php?mid=$nid'>Next Vehicle</a></li>";?>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 left-content padding-left-none"> 
                    <!--OPEN OF SLIDER-->
                    <div class="listing-slider">
                        <!-- <div class="angled_badge red">
                            <span>Just Arrived</span>
                        </div> -->
                        <section class="slider home-banner">
                            <div class="flexslider" id="home-slider-canvas">
                                <ul class="slides">
                                    <?php
									echo "<li data-thumb='admin-pannel/img/$r[20]'> <img src='admin-pannel/img/$r[20]'  data-full-image='admin-pannel/img/$r[20]' /> </li>
									<li data-thumb='admin-pannel/img/$r[21]'> <img src='admin-pannel/img/$r[21]'  data-full-image='admin-pannel/img/$r[21]' /> </li>
									<li data-thumb='admin-pannel/img/$r[22]'> <img src='admin-pannel/img/$r[22]'  data-full-image='admin-pannel/img/$r[22]' /> </li>
									<li data-thumb='admin-pannel/img/$r[23]'> <img src='admin-pannel/img/$r[23]'  data-full-image='admin-pannel/img/$r[23]' /> </li>
									<li data-thumb='admin-pannel/img/$r[24]'> <img src='admin-pannel/img/$r[24]'  data-full-image='admin-pannel/img/$r[24]' /> </li>";
									?>
                                    
                                </ul>
                            </div>
                        </section>
                        <section class="home-slider-thumbs">
                            <div class="flexslider" id="home-slider-thumbs">
                                <ul class="slides">
								<?php
                                    echo "<li data-thumb='admin-pannel/img/$r[20]'> <a href='#'><img src='admin-pannel/img/$r[20]' /></a> </li>
									<li data-thumb='admin-pannel/img/$r[21]'> <a href='#'><img src='admin-pannel/img/$r[21]' /></a> </li>
									<li data-thumb='admin-pannel/img/$r[22]'> <a href='#'><img src='admin-pannel/img/$r[22]' /></a> </li>
									<li data-thumb='admin-pannel/img/$r[23]'> <a href='#'><img src='admin-pannel/img/$r[23]' /></a> </li>
									<li data-thumb='admin-pannel/img/$r[24]'> <a href='#'><img src='admin-pannel/img/$r[24]' /></a> </li>";
									?>
                                    
                                </ul>
                            </div>
                        </section>
                    </div>
                    <!--CLOSE OF SLIDER--> 
                    <!--Slider End-->
                        <div class="clearfix"></div>
                    <div class="bs-example bs-example-tabs example-tabs margin-top-50">
                        
                        <div id="myTabContent" class="tab-content margin-top-15 margin-bottom-20">
                            <div class="tab-pane fade" id="features">
                                
                            </div>
                            <div class="tab-pane fade" id="location">
                                <div id='google-map-listing' class="contact" data-longitude='-79.38' data-latitude='43.65' data-zoom='11' style="height: 350px;" data-parallax="false"></div>
                            </div>
                            <div class="tab-pane fade" id="comments">
                                <p><?php echo $r[25];?></p>
                                <p><img src="images/engine.png" alt="engine" /></p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 right-content padding-right-none">
                    <div class="side-content">
                        <div class="car-info margin-bottom-50">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Body Style:</td>
                                            <td><?php echo $r[3];?></td>
                                        </tr>
                                        <tr>
                                            <td>ENGINE:</td>
                                            <td><?php echo $r[4];?></td>
                                        </tr>
                                        <tr>
                                            <td>TRANSMISSION:</td>
                                            <td><?php echo $r[6];?></td>
                                        </tr>
                                        <tr>
                                            <td>DRIVETRAIN:</td>
                                            <td><?php echo $r[5];?></td>
                                        </tr>
                                        <tr>
                                            <td>EXTERIOR:</td>
                                            <td><?php echo $r[7];?></td>
                                        </tr>
                                        <tr>
                                            <td>INTERIOR:</td>
                                            <td><?php echo $r[8];?></td>
                                        </tr>
                                        <tr>
                                            <td>DOORS:</td>
                                            <td><?php echo $r[10];?></td>
                                        </tr>
                                        <tr>
                                            <td>PASSENGERS:</td>
                                            <td><?php echo $r[11];?></td>
                                        </tr>
                                        <tr>
                                            <td>FUEL TYPE:</td>
                                            <td><?php echo $r[15];?></td>
                                        </tr>
                                        <tr>
                                            <td>OWNERS:</td>
                                            <td><?php echo $r[16];?></td>
                                        </tr>
										<tr>
                                            <td>YEAR:</td>
                                            <td><?php echo $r[9];?></td>
                                        </tr>
										<tr>
                                            <td>VARIENT:</td>
                                            <td><?php echo $r[12];?></td>
                                        </tr>
										<tr>
                                            <td>DRIVEN:</td>
                                            <td><?php echo $r[13];?></td>
                                        </tr>
										<tr>
                                            <td>PRICE:</td>
                                            <td><?php echo $r[19];?></td>
                                        </tr>
                                        <tr>
                                            <td>WARRANTY:</td>
                                            <td><?php echo $r[18];?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        
                        <div class="clearfix"></div>
                        <div class="financing_calculator margin-top-40">
                            <h3>FINANCING MY CAR</h3>
                            <div class="table-responsive">
                                <table class="table no-border no-margin">
                                    <tbody>
                                        <tr>
                                            <td>Cost of Vehicle ($):</td>
                                            <td><input type="text"  class="number cost" placeholder="10000" /></td>
                                        </tr>
                                        <tr>
                                            <td>Down Payment ($):</td>
                                            <td><input type="text"  class="number down_payment" placeholder="1000" /></td>
                                        </tr>
                                        <tr>
                                            <td>Annual Interest Rate (%):</td>
                                            <td><input type="text"  class="number interest" placeholder="7" /></td>
                                        </tr>
                                        <tr>
                                            <td>Term of Loan in Years:</td>
                                            <td><input type="text"  class="number loan_years" placeholder="5" /></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="bi_weekly clearfix">
                                <div class="pull-left">Frequency of Payments:</div>
                                <div class="dropdown_container ">
                                    <select class="frequency css-dropdowns">
                                        <option value='0'>Bi-Weekly</option>
                                        <option value='1'>Weekly</option>
                                        <option value='2'>Monthly</option>
                                    </select>
                                </div>
                            </div>
                            <a class="btn-inventory pull-right calculate">Calculate My Payment</a>
                            <div class="clear"></div>
                            <div class="calculation">
                                <div class="table-responsive">
                                    <table>
                                        <tr>
                                            <td><strong>NUMBER OF PAYMENTS:</strong></td>
                                            <td><strong class="payments">60</strong></td>
                                        </tr>
                                        <tr>
                                            <td><strong>PAYMENT AMOUNT:</strong></td>
                                            <td><strong class="payment_amount">$ 89.11</strong></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
    <!--container ends--> 
</section>
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
                <div class="logo-footer margin-bottom-20 md-margin-bottom-20 sm-margin-bottom-10 xs-margin-bottom-20"><a href="index.php">
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
<form method="POST">
<div class="modal fade" id="modal-cpass">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Request More Info</h4>
            </div>
            <div class="modal-body">
                <table>
        <tr><td>Name: </td> <td> <input type="text" name="name"></td></tr>
        <tr><td>Preferred Contact:</td> <td> <input type="radio" name="contact_method" value="email" id="offer_email"><label for="offer_email">Email</label>  <input type="radio" name="contact_method" value="phone" id="offer_phone"> <label for="offer_phone">Phone</label></td></tr>
        <tr><td>Email: </td> <td> <input type="text" name="email"></td></tr>
        <tr><td>Phone: </td> <td> <input type="text" name="phone"></td></tr>
        <tr><td colspan='2'><br>
			</td></tr>        <tr><td colspan="2"><input type="submit" value="Submit" class="pull-left" name="submit"></td></tr>
    </table>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
</form>
<!--Make an offer Form-->
<form method="POST">
<div class="modal fade" id="modal-mpass">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Make an offer</h4>
            </div>
            <div class="modal-body">
                <table>
        <tr><td>Name: </td> <td> <input type="text" name="offer_name"></td></tr>
        <tr><td>Preferred Contact:</td> <td> <input type="radio" name="offer_contact_method" value="email" id="offer_email"><label for="offer_email">Email</label>  <input type="radio" name="contact_method" value="phone" id="offer_phone"> <label for="offer_phone">Phone</label></td></tr>
        <tr><td>Email: </td> <td> <input type="text" name="offer_email"></td></tr>
        <tr><td>Phone: </td> <td> <input type="text" name="offer_phone"></td></tr>
        <tr><td>Offered Price: </td> <td> <input type="text" name="offer_offered_price"></td></tr>
        <tr><td>Financing Required: </td> <td> <div class="styled"><select name="offer_financing_required"><option value="yes">Yes</option><option value="no">No</option></select></div></td></tr>
        <tr><td colspan="2">Other Comments/Conditions:<br>
                <textarea name="offer_other_comments" class="fancybox_textarea"></textarea></td></tr>
        <tr><td colspan='2'><br></td></tr>        <tr><td colspan="2"><input type="submit" value="SUBMIT" class="pull-left" name="SUBMIT"></td></tr>
    </table>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
</form>
<!--Schedule Form-->
<form method="POST">
<div class="modal fade" id="modal-spass">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Schedule Test Drive</h4>
            </div>
            <div class="modal-body">
            <table>
        <tr><td>Name: </td> <td> <input type="text" name="sc_name"></td></tr>
        <tr><td>Preferred Contact:</td> <td> <input type="radio" name="sc_contact_method" value="email" id="schedule_email"><label for="schedule_email">Email</label>  <input type="radio" name="contact_method" value="phone" id="schedule_phone"> <label for="schedule_phone">Phone</label></td></tr>
        <tr><td>Email: </td> <td> <input type="text" name="sc_email"></td></tr>
        <tr><td>Phone: </td> <td> <input type="text" name="sc_phone"></td></tr>
        <tr><td>Best Day: </td> <td> <input type="text" name="sc_best_day"></td></tr>
        <tr><td>Best Time: </td> <td> <input type="text" name="sc_best_time"></td></tr>
        <tr><td colspan='2'><br></td></tr>        <tr><td colspan="2"><input type="submit" value="Submit" class="pull-left" name="submitform"></td></tr>
    </table>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
</form>
<!--Trade-in Form-->
<form method="POST">
<div class="modal fade" id="modal-tpass">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Trade-In</h4>
            </div>
            <div class="modal-body">
            <table class="left_table">
    	<tr>
        	<td colspan="2"><h4>Contact Information</h4></td>
        </tr>
    	<tr>
        	<td>First Name<br><input type="text" name="first_name"></td>
        	<td>Last Name<br><input type="text" name="last_name"></td>
        </tr>
        <tr>
        	<td>Work Phone<br><input type="text" name="work_phone"></td>
        	<td>Phone<br><input type="text" name="phone"></td>
        </tr>
        <tr>
        	<td>Email<br><input type="text" name="email"></td>
            <td>Preferred Contact<br>  <input type="radio" name="contact_method" value="email" id="email"> <label for="email">Email</label>  <input type="radio" name="contact_method" value="phone" id="phone"> <label for="phone">Phone</label> </td>
        </tr>
        <tr>
        	<td colspan="2">Comments<br><textarea name="comments" style="width: 89%;" rows="5"></textarea></td>
        </tr>
	</table>
    
    
    <div style="clear:both;"></div>
    
    <table class="left_table">    
    	<tr><td colspan="2"><h4>Vehicle Information</h4></td></tr>
        
        <tr>
        	<td>Year<br><input type="text" name="year"></td>
        	<td>Make<br><input type="text" name="make"></td>
        </tr>
        <tr>
        	<td>Model<br><input type="text" name="model"></td>
        	<td>Exterior Colour<br><input type="text" name="exterior_colour"></td>
        </tr>
        <tr>
            <td>Kilometres<br><input type="text" name="kilometres"></td>
            \<td>Engine<br><input type="text" name="engine"></td>
        </tr>
        <tr>
        	<td>Transmission<br><div class="styled"><select name="transmission"><option value="Automatic">Automatic</option><option value="5 Speed-Manual">5 Speed-Manual</option><option value="6 Speed-Manual">6 Speed-Manual</option></select></div></td>
        	<td>Drivetrain<br><div class="styled"><select name="drivetrain"><option value="2WD">2WD</option><option value="4WD">4WD</option><option value="AWD">AWD</option></select></div></td>
        </tr>
    
    </table>
       
    <table class="right_table">
    	<tr><td colspan="2"><h4>Vehicle Rating</h4></td></tr>
        
        <tr>
        	<td>Body (dents, rust, damage)<br><div class="styled"><select name="body_rating"><option value="10">10 - best</option><option value="9">9</option><option value="8">8</option><option value="7">7</option><option value="6">6</option><option value="5">5</option><option value="4">4</option><option value="3">3</option><option value="2">2</option><option value="1">1 - worst</option></select></div></td>
            <td>Tires (tread wear, mismatched)<br><div class="styled"><select name="tire_rating"><option value="10">10 - best</option><option value="9">9</option><option value="8">8</option><option value="7">7</option><option value="6">6</option><option value="5">5</option><option value="4">4</option><option value="3">3</option><option value="2">2</option><option value="1">1 - worst</option></select></div></td>
        </tr>
        <tr>
        	<td>Engine (running condition, burns oil, knocking)<br><div class="styled"><select name="engine_rating"><option value="10">10 - best</option><option value="9">9</option><option value="8">8</option><option value="7">7</option><option value="6">6</option><option value="5">5</option><option value="4">4</option><option value="3">3</option><option value="2">2</option><option value="1">1 - worst</option></select></div></td>
            <td>Transmission / Clutch (slipping, hard shift, grinds)<br><div class="styled"><select name="transmission_rating"><option value="10">10 - best</option><option value="9">9</option><option value="8">8</option><option value="7">7</option><option value="6">6</option><option value="5">5</option><option value="4">4</option><option value="3">3</option><option value="2">2</option><option value="1">1 - worst</option></select></div></td>
        </tr>
        <tr>
        	<td>Glass (chips, scratches, cracks, pitted)<br><div class="styled"><select name="glass_rating"><option value="10">10 - best</option><option value="9">9</option><option value="8">8</option><option value="7">7</option><option value="6">6</option><option value="5">5</option><option value="4">4</option><option value="3">3</option><option value="2">2</option><option value="1">1 - worst</option></select></div></td>
            <td>Interior (rips, tears, burns, faded/worn, stains)<br><div class="styled"><select name="interior_rating"><option value="10">10 - best</option><option value="9">9</option><option value="8">8</option><option value="7">7</option><option value="6">6</option><option value="5">5</option><option value="4">4</option><option value="3">3</option><option value="2">2</option><option value="1">1 - worst</option></select></div></td>
        </tr>
        <tr>
        	<td colspan="2">Exhaust (rusted, leaking, noisy)<br><div class="styled"><select name="exhaust_rating"><option value="10">10 - best</option><option value="9">9</option><option value="8">8</option><option value="7">7</option><option value="6">6</option><option value="5">5</option><option value="4">4</option><option value="3">3</option><option value="2">2</option><option value="1">1 - worst</option></select></div></td>
        </tr>
    </table>
    
    <div style="clear:both;"></div>
    
    <table class="left_table">
    	<tr><td><h4>Vehicle History</h4></td></tr>
        
        <tr>
        	<td>Was it ever a lease or rental return? <br><div class="styled"><select name="rental_return"><option value="Yes">Yes</option><option value="No">No</option></select></div></td>
        </tr>
        <tr>
        	<td>Is the odometer operational and accurate? <br><div class="styled"><select name="odometer_accurate"><option value="Yes">Yes</option><option value="No">No</option></select></div></td>
        </tr>
        <tr>
        	<td>Detailed service records available? <br><div class="styled"><select name="service_records"><option value="Yes">Yes</option><option value="No">No</option></select></div></td>
        </tr>
    </table>
    
    <table class="right_table">
    	<tr>
        	<td><h4>Title History</h4></td>
        </tr>
        
        <tr>
        	<td>Is there a lienholder? <br><input type="text" name="lienholder"></td>
        </tr>
        <tr>
        	<td>Who holds this title? <br><input type="text" name="titleholder"></td>
        </tr>
    </table>
    
    <div style="clear:both;"></div>
           
    <table style="width: 100%;">
    	<tr><td colspan="2"><h4>Vehicle Assessment</h4></td></tr>
        
        <tr>
        	<td>Does all equipment and accessories work correctly?<br><textarea name="equipment" rows="5" style="width: 89%;"></textarea></td>
            <td>Did you buy the vehicle new?<br><textarea name="vehiclenew" rows="5" style="width: 89%;"></textarea></td>
        </tr>
        <tr>
        	<td>Has the vehicle ever been in any accidents? Cost of repairs?<br><textarea name="accidents" rows="5" style="width: 89%;"></textarea></td>
            <td>Is there existing damage on the vehicle? Where?<br><textarea name="damage" rows="5" style="width: 89%;"></textarea></td>
        </tr>
        <tr>
        	<td>Has the vehicle ever had paint work performed?<br><textarea name="paint" rows="5" style="width: 89%;"></textarea></td>
            <td>Is the title designated 'Salvage' or 'Reconstructed'? Any other?<br><textarea name="salvage" rows="5" style="width: 89%;"></textarea></td>
        </tr>
        <tr><td colspan='2'><br><div id='recaptcha'></div></td></tr>        <tr><td colspan="2"><input type="submit" value="Submit" class="pull-left"></td></tr>
    </table>
        
</form>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
</form>

<div class="back_to_top"> <img src="images/arrow-up.png" alt="scroll up" /> </div>
<!-- Bootstrap core JavaScript --> <script src="js/retina.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="../../www.google.com/recaptcha/api2f54.js?ver=4.1"></script> 
<script type="text/javascript" src="js/jquery.fancybox.js"></script> 
<script src="js/modernizr.custom.js"></script> 
<script src="js/social-likes.min.js"></script><script defer src="js/jquery.flexslider.js"></script> 
<script src="js/jquery.bxslider.js" type="text/javascript"></script> 
<script src="js/jquery.selectbox-0.2.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/jquery.mousewheel.js"></script> 
<script type="text/javascript" src="js/jquery.easing.js"></script>
</body>

<!-- Mirrored from demo.themesuite.com/automotive/inventory-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Jan 2019 08:51:13 GMT -->
</html>