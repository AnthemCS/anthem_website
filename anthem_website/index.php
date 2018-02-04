<!-- Contact us php code -->

<?php

if (isset($_POST['name']) && $_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {

    $form_name = $_POST['name'];
    $form_email = $_POST['email'];
    $form_subject = $_POST['subject'];
    $form_message = $_POST['message'];

    if (!empty($form_name) && !empty($form_email) && !empty($form_subject) && !empty($form_message)) {

      $name = $form_name;
      $to = 'anthemcreativestudios@gmail.com';
      $subject = $form_subject;
      $body = $form_message;
      $headers = 'From: '.$form_name;

      if (@mail($name, $to, $subject, $body, $headers)) {
        echo "sent";
        header("Location: index-2.php");
      }else {
        echo "Sorry. Your message was not sent.<br/>";
        echo 'Please click <a href="index-2.php">here</a> to try again!'
      }

    }else {
      echo "All fields are required.";
    }
  }




?>


<!-- The end of Contact us php code -->

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Anthem creative Studios</title>
    <!-- Bootstrap CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
    <link rel='stylesheet prefetch' href='https://npmcdn.com/basscss@8.0.0/css/basscss.min.css'> -->
    <!-- Font Awesome CSS-->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Linear icons CSS-->
    <link href="assets/linearicons/css/icon-font.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="assets/animate/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/portfolio.css" rel="stylesheet">
    <link href="css/one.css" id="style_theme" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Header -->
    <header id="home" class="welcome-hero-area">
        <div class="top-bar hidden-sm hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10">
                        <ul class="list-unstyled list-inline">
                            <li>
                                <p><i class="fa fa-envelope"></i><a href="mailto:anthemcreativestudios@gmail.com">anthemcreativestudios@gmail.com</a></p>
                            </li>
                            <li>
                                <p><i class="fa fa-phone"></i> Call us +27 76 195 8601</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-2 text-right">
                        <div class="top-header-wrapper">
                            <ul>
                                <li><a href="https://www.facebook.com/Anthem-Creative-Studios-483616838644674" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/18187566/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://www.instagram.com/anthemcreativestudio/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <!-- START LOGO -->
                        <div class="logo">
                            <a href="index-2.html"> <img src="images/logo.png" width="40px" height="40px" alt=""> <span class="logoImage">Anthem</span> <span class="CS">CS</span> </a>
                        </div>
                        <!-- END LOGO -->
                    </div>
                    <div class="col-md-9">
                        <!-- START MAIN MENU -->
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                <!-- Logo -->
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a class="smoth-scroll" href="#home">Home</a></li>
                                    <li><a class="smoth-scroll" href="#aboutus">About</a></li>
                                    <li><a class="smoth-scroll" href="#services">Services</a></li>
                                    <li><a class="smoth-scroll" href="#portfolio">Portfolio</a></li>
                                    <li><a class="smoth-scroll" href="#testimonials">Testimonials</a></li>
                                    <li><a class="smoth-scroll" href="#pricing">Pricing</a></li>
                                    <li><a class="smoth-scroll" href="#our-team">Our Team</a></li>
                                    <li><a class="smoth-scroll" href="#contactus">Contact Us</a></li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                        <!-- END MAIN MENU -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Start -->
        <div class="banner-wrapper">
            <div class="container">
                <div class="banner-content">
                    <div class="banner-content-table-cell">
                        <h1>We are <span id="js-rotating">Anthem Creative Studios | Professional | innovative | Creative</span></h1>
                        <h4 style="color:white">Anthem Creative Studios and Co. is the corner stone of all digital arts</h4>
                        <a class="smoth-scroll btn btn-default" href="#contactus">How can we help you?</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->
    </header>
    <!-- About Us Start -->
    <section id="aboutus" class="aboutus">
        <div class="container">
            <div class="section-title">
                <h2>About <span>Anthem CS</span></h2>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="about-details">
                        <h4>About Anthem</h4>
                        <img src="images/team-anthem.jpg" alt="">
                        <p>We are a Team of very well cordinated compitant and creative people that try to find the best solution to solve your problems</p>
                    </div>
                    <div class="we-do">
                        <h4>What We Do</h4>
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i><b>Mission</b></li>
                            <p>To help businesses of all sizes laverage technology to accomplish their business needs</p>
                            <li><i class="fa fa-check" aria-hidden="true"></i><b>Vision</b></li>
                            <p>To provide best services in South Africa by combining branding design and digital tecknology.</p>
                            <li><i class="fa fa-check" aria-hidden="true"></i><b>Objective</b></li>
                            <p>We help new growing businesses build exceptional web designs,mobile apps and brand experiences</p>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="skill">
                        <h4>Our skill-progress</h4>
                        <div class="skill-progress">
                            <div>HTML & CSS/ Preprosessors</div>
                            <div class="progress">
                                <div class="progress-bar html wow fadeInLeft" data-wow-delay="2s" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="web-bar bar1 wow fadeInLeft" data-wow-delay="2s">92%</span> </div>
                        <div class="skill-progress">
                            <div>PHP</div>
                            <div class="progress wow fadeInLeft">
                                <div class="progress-bar css3 wow fadeInLeft" data-wow-delay="2s" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="web-bar bar2 wow fadeInLeft" data-wow-delay="2s">78%</span> </div>
                        <div class="skill-progress">
                            <div>Bootstrap</div>
                            <div class="progress">
                                <div class="progress-bar bootstrap wow fadeInLeft" data-wow-delay="2s" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="web-bar bar3 wow fadeInLeft" data-wow-delay="2s">85%</span> </div>
                        <div class="skill-progress">
                            <div>jQuery</div>
                            <div class="progress">
                                <div class="progress-bar jquery wow fadeInLeft" data-wow-delay="2s" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="web-bar bar5 wow fadeInLeft" data-wow-delay="2s">90%</span> </div>
                        <div class="skill-progress">
                            <div>JavaScript</div>
                            <div class="progress">
                                <div class="progress-bar javascript wow fadeInLeft" data-wow-delay="2s" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="web-bar bar5 wow fadeInLeft" data-wow-delay="2s">95%</span> </div>
                        <div class="skill-progress">
                            <div>Java android</div>
                            <div class="progress">
                                <div class="progress-bar javascript wow fadeInLeft" data-wow-delay="2s" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="web-bar bar5 wow fadeInLeft" data-wow-delay="2s">95%</span> </div>
                        <div class="skill-progress">
                            <div>SQL</div>
                            <div class="progress">
                                <div class="progress-bar javascript wow fadeInLeft" data-wow-delay="2s" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="web-bar bar5 wow fadeInLeft" data-wow-delay="2s">95%</span> </div>
                        <div class="skill-progress">
                            <div>Experience Design</div>
                            <div class="progress">
                                <div class="progress-bar javascript wow fadeInLeft" data-wow-delay="2s" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="web-bar bar5 wow fadeInLeft" data-wow-delay="2s">95%</span> </div>
                        <div class="skill-progress">
                            <div>Adobe Photoshop</div>
                            <div class="progress">
                                <div class="progress-bar photoshop wow fadeInLeft" data-wow-delay="2s" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="web-bar bar4 wow fadeInLeft" data-wow-delay="2s">85%</span> </div>
                        <div class="skill-progress">
                            <div class="skill-progress">
                                <div> Adobe AfterFX</div>
                                <div class="progress">
                                    <div class="progress-bar javascript wow fadeInLeft" data-wow-delay="2s" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="web-bar bar5 wow fadeInLeft" data-wow-delay="2s">95%</span> </div>
                        <div class="skill-progress">
                            <div>Adobe InDesign</div>
                            <div class="progress">
                                <div class="progress-bar javascript wow fadeInLeft" data-wow-delay="2s" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="web-bar bar5 wow fadeInLeft" data-wow-delay="2s">95%</span> </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Start -->
    <section id="services" class="services">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>Our <span>Services</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="service-callouts">
                    <div class="col-sm-6 col-md-4">
                        <div class="service-box"> <i class="fa fa-desktop" aria-hidden="true"></i>
                            <h3 class="subtitle">Website Design</h3>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="service-box"> <i class="fa fa-code" aria-hidden="true"></i>
                            <h3 class="subtitle">Web Development</h3>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="service-box"> <i class="fa fa-android" aria-hidden="true"></i>
                            <h3 class="subtitle">App Development</h3>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="service-box"><i class="fa fa-wordpress" aria-hidden="true"></i>
                            <h3 class="subtitle">WordPress</h3>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="service-box"><i class="fa fa-flag" aria-hidden="true"></i>
                            <h3 class="subtitle">Social Media Marketing</h3>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="service-box"><i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                            <h3 class="subtitle">Logo Design</h3>

                        </div>

                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="service-box"><i class="fa fa-sitemap" aria-hidden="true"></i>
                            <h3 class="subtitle">Banner Design</h3>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="service-box"><i class="fa fa-camera-retro" aria-hidden="true"></i>
                            <h3 class="subtitle">Photography</h3>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="service-box"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
                            <h3 class="subtitle">Newspaper Ads</h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services End -->
    <!-- Portfolio Start -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>Our <span>Portfolio</span></h2>
                </div>
            </div>
            <div class="row">

              <div class="toolbar portfolio-bar mb2 mt2">
                <button class="btn-portfolio fil-cat" href="" data-rel="all">All</button>
                <button class="btn-portfolio fil-cat" data-rel="web">Website Design</button>
                <button class="btn-portfolio fil-cat" data-rel="development">App / Web Development</button>
                <button class="btn-portfolio fil-cat" data-rel="logo">Logo Design</button>
                <button class="btn-portfolio fil-cat" data-rel="banner">Banner Design</button>
                <button class="btn-portfolio fil-cat" data-rel="photography">Photography</button>
                <button class="btn-portfolio fil-cat" data-rel="newspaper">Newspaper Ads</button>
                </div>

                <div id="gallery">
                    <div class="tile scale-anm banner all">
                        <img src="images/wall-banner.jpg" alt="" />
                    </div>
                    <div class="tile scale-anm logo all">
                        <img src="images/logo1.png" alt="" />
                    </div>
                    <div class="tile scale-anm logo all">
                        <img src="images/logo2.png" alt="" />
                    </div>
                    <div class="tile scale-anm logo all">
                        <img src="images/logo3.png" alt="" />
                    </div>
                    <div class="tile scale-anm logo all">
                        <img src="images/logo4.png" alt="" />
                    </div>
                    <div class="tile scale-anm logo all">
                        <img src="images/logo5.png" alt="" />
                    </div>
                    <div class="tile scale-anm logo all">
                        <img src="images/logo6.png" alt="" />
                    </div>
                    <div class="tile scale-anm logo all">
                        <img src="images/logo7.png" alt="" />
                    </div>
                    <div class="tile scale-anm logo all">
                        <img src="images/logo8.png" alt="" />
                    </div>
                    <div class="tile scale-anm logo all">
                        <img src="images/logo9.png" alt="" />
                    </div>
                    <div class="tile scale-anm logo all">
                        <img src="images/logo10.gif" alt="" />
                    </div>
                    <div class="tile scale-anm logo all">
                        <img src="images/logo11.png" alt="" />
                    </div>
                    <div class="tile scale-anm development all">
                        <img src="images/app1.png" alt="" />
                    </div>
                    <div class="tile scale-anm development all">
                        <img src="images/app2.png" alt="" />
                    </div>
                    <div class="tile scale-anm development all">
                        <img src="images/app3.png" alt="" />
                    </div>
                    <div class="tile scale-anm development all">
                        <img src="images/app4.png" alt="" />
                    </div>
                    <div class="tile scale-anm development all">
                        <img src="images/app5.png" alt="" />
                    </div>
                    <div class="tile scale-anm development all">
                        <img src="images/app6.png" alt="" />
                    </div>
                    <div class="tile scale-anm development all">
                        <img src="images/app7.png" alt="" />
                    </div>
                    <div class="tile scale-anm all">
                        <img src="images/all1.png" alt="" />
                    </div>
                    <div class="tile scale-anm all">
                        <img src="images/all2.png" alt="" />
                    </div>
                    <div class="tile scale-anm all">
                        <img src="images/all3.png" alt="" />
                    </div>
                    <div class="tile scale-anm all">
                        <img src="images/poster1.jpg" alt="" />
                    </div>
                    <div class="tile scale-anm web all">
                        <img src="images/web1.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio End -->
    <!-- Testimonials Wrapper Start -->
    <section id="testimonials" class="testimonials-wrapper white">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>What Clients<span> Say</span></h2>
                </div>
            </div>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Testimonials Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Testimonials slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="col-md-3">
                            <div class="testimonial-img"> <img src="images/thoko_avatar.png" alt=""> <i class="fa fa-quote-left"></i> </div>
                        </div>
                        <div class="col-md-9">
                            <div class="textimonial-text">
                                <p>
                                    I love the devotion and time Anthem CS invests in every client. We are pleased to have been serviced by them. I recommend them to any business that wants to stand out in the respective industries.
                                </p>
                                <p class="client-name">Thokozile Kgopa</p>
                                <div class="testimonial-rating">
                                    <p>Eyecap Modelling Agency</p>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <i class="fa fa-quote-right"></i> </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-3">
                            <div class="testimonial-img"> <img src="images/tshepo.JPG" alt=""> <i class="fa fa-quote-left"></i> </div>
                        </div>
                        <div class="col-md-9">
                            <div class="textimonial-text">
                                <p>I am extremely pleased with Anthem Creative Studios level of services.They are very helpful and
                                  has such great turnaround timing.THANK YOU ANTHEM CREATIVE STUDIOS & Co.</p>
                                <p class="client-name">Tshepo Raseala</p>
                                <div class="testimonial-rating">
                                    <p>PDGGC, CEO</p>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                                <i class="fa fa-quote-right"></i> </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-3">
                            <div class="testimonial-img"> <img src="images/france.png" alt=""> <i class="fa fa-quote-left"></i> </div>
                        </div>
                        <div class="col-md-9">
                            <div class="textimonial-text">
                                <p>We have had the pleasure in dealing with Anthem Creative Studios from just perfect.They perfectly
                                   knows marketing and i would recommend them to anyone looking to boost their website.</p>
                                <p class="client-name">Matsobane Matsaung</p>
                                <div class="testimonial-rating">
                                    <p>University of Venda, IT Tech</p>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                                <i class="fa fa-quote-right"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Wrapper End -->
    <!-- Pricing Table Start -->
    <section id="pricing" class="pricing-table-wrapper">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>Our Affordable <span>Pricing</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="pricing_item">
                        <div class="pricebox clearfix">
                            <div class="price_title">
                                <h3> Basic</h3>
                                <span class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </span> </div>
                            <div class="price">
                                <p><strong>R 2500</strong><span class="month"></span></p>
                            </div>
                        </div>
                        <p class="availability">Logo Design</p>
                        <p class="availability">FB Banner</p>
                        <p class="availability">Landing Page Website</p>

                        <a href="#contactus" class="readmore smoth-scroll">GET IT NOW</a> </div>
                </div>
                <!--end item-->

                <div class="col-sm-4">
                    <div class="pricing_item active">
                        <div class="pricebox clearfix">
                            <div class="price_title">
                                <h3>Professional</h3>
                                <span class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-full"></i> <i class="fa fa-star-o"></i> </span> </div>
                            <div class="price">
                                <p><strong>R 3000</strong><span class="month"></span></p>
                            </div>
                        </div>
                        <p class="availability">Logo Design</p>
                        <p class="availability">Business Card</p>
                        <p class="availability">Facebook Banner</p>
                        <p class="availability">Poster/Flyer Design</p>
                        <p class="availability">Website + Basic SEO</p>

                        <a href="#contactus" class="readmore smoth-scroll">GET IT NOW</a> </div>
                </div>
                <!--end item-->



                <div class="col-sm-4">
                    <div class="pricing_item">
                        <div class="pricebox clearfix">
                            <div class="price_title">
                                <h3>Ultimate</h3>
                                <span class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </span> </div>
                            <div class="price">
                                <p><strong>R 8000</strong><span class="month"></span></p>
                            </div>
                        </div>
                        <p class="availability">Logo Design</p>
                        <p class="availability">Business Card</p>
                        <p class="availability">Facebook Banner</p>
                        <p class="availability">Roll up Banner Design</p>
                        <p class="availability">Poster/Flyer Design</p>
                        <p class="availability">Letterhead + Envelope Branding</p>
                        <p class="availability">Website + Advanced SEO</p>
                        <p class="availability">Wordpress CMS</p>

                        <a href="#contactus" class="readmore smoth-scroll">GET IT NOW</a> </div>
                </div>
                <!--end item-->
            </div>
        </div>
    </section>
    <!-- Pricing Table Start -->
    <section id="our-team" class="our-team">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>Our <span>Awesome</span> Team</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="our-team-single">
                        <div class="our-team-img">
                            <a href="javascript:void(0)"> <img src="images/given.png" alt="" title=""> </a>
                            <div class="team-overlay"></div>
                            <div class="team-social">
                                <ul>
                                    <li><a href="https://www.facebook.com/givengivey.danguru" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/Danguru_Given"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/in/given-danguru-04418011b/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="caption-text">
                            <h3><a href="javascript:void(0)">Given Danguru</a></h3>
                            <span>Founder|Front-end Developer|Back-end Developer &amp; Chief Design Officer </span> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="our-team-single">
                        <div class="our-team-img">
                            <a href="javascript:void(0)"> <img src="images/vusi.png" alt="" title=""> </a>
                            <div class="team-overlay"></div>
                            <div class="team-social">
                                <ul>
                                    <li><a href="https://www.facebook.com/profile.php?id=100010218097084" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="caption-text">
                            <h3><a href="javascript:void(0)">Vusi Mosena</a></h3>
                            <span>Founder|Back-end Developer|Database Administrator &amp; Coordinator</span> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="our-team-single">
                        <div class="our-team-img">
                            <a href="javascript:void(0)"> <img src="images/thato.png" alt="" title=""> </a>
                            <div class="team-overlay"></div>
                            <div class="team-social">
                                <ul>
                                    <li><a href="https://www.facebook.com/sthandwa.kekana" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://www.instagram.com/thatego_kekana/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="caption-text">
                            <h3><a href="javascript:void(0)">Thato Kekana</a></h3>
                            <span>Secretory|Marketing Manager|CFO &amp; Front-end Developer</span> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="our-team-single">
                        <div class="our-team-img">
                            <a href="javascript:void(0)"> <img src="images/thabo.png" alt="" title=""> </a>
                            <div class="team-overlay"></div>
                            <div class="team-social">
                                <ul>
                                    <li><a href="https://www.facebook.com/thaboIrvin" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/matetati" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/in/thabo-irvin-05545911b/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://www.instagram.com/__t_h_a_b_o__i_r_v_i_n__/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="caption-text">
                            <h3><a href="javascript:void(0)">Thabo Mateta</a></h3>
                            <span>Programmer|Back-end Developer|Production Manager &amp; Database Administrator</span> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Start -->
    <section id="contactus" class="contactus">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2><span>Contact</span> us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <form id="contact-form" action="send_mail.php" class="contact-form" method="post">
                        <div class="row">
                            <div class="col-sm-6"> <span>Name</span>
                                <div class="form-group"> <i class="fa fa-user-o"></i>
                                    <input name="name" id="name" class="form-control" required type="text">
                                </div>
                            </div>
                            <div class="col-sm-6"> <span>E-mail</span>
                                <div class="form-group"> <i class="fa fa-envelope-o"></i>
                                    <input name="email" id="email" class="form-control" required type="email">
                                </div>
                            </div>
                            <div class="col-sm-12"> <span>Phone</span>
                                <div class="form-group"> <i class="fa fa-phone"></i>
                                    <input name="subject" id="subject" class="form-control" required type="text">
                                </div>
                            </div>
                            <div class="col-sm-12"> <span>Message</span>
                                <div class="form-group"> <i class="fa fa-comments-o"></i>
                                    <textarea rows="4" name="message" id="message" class="form-control" required></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- / .row -->
                        <button type="submit" class="readmore">Send Message</button>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <!-- contact address start-->
                    <div class="contact-address text-center">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <i class="fa fa-map-marker fa-2x fa-cont"></i> <h5><small>University of Venda</small><br><small>Thohoyandou, Limpopo</small></h5>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <i class="fa fa-envelope-o fa-2x fa-cont"></i> <h5><small>anthemcreativestudios@gmail.com</small></h5>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <i class="fa fa-mobile fa-2x fa-cont"></i>
                        <h5>
                          <small><b>Given : </b>076 195 8601</small><br>
                          <small><b>Vusi  : </b>072 447 3317</small><br>
                          <small><b>Thato : </b>079 452 5867</small><br>
                          <small><b>Thabo : </b>078 672 2730</small>
                        </h5>
                        <br>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="cont-list">
                          <li class="cont-list">
                            <a href="https://www.facebook.com/Anthem-Creative-Studios-483616838644674"><i class="fa fa-facebook-square fa-3x fa-cont"></i></a>
                          </li>
                          <li class="cont-list">
                            <a href="https://www.linkedin.com/company/18187566/"><i class="fa fa-twitter-square fa-3x fa-cont"></i></a>
                          </li>
                          <li class="cont-list">
                            <a href="#"><i class="fa fa-linkedin-square fa-3x fa-cont"></i></a>
                          </li>
                          <li class="cont-list">
                            <a href="https://www.instagram.com/anthemcreativestudio/"><i class="fa fa-instagram fa-3x fa-cont"></i></a>
                          </li>
                        </ul>

                      </div>
                    </div>
                </div>
                <!-- contact address end-->
            </div>
        </div>
    </section>
    <!-- Contact Us End -->
    <!-- Google Map Start -->
    <div class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.2961386011602!2d30.444291014608606!3d-22.97613528497657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ec5c688650ab8cf%3A0x507f331174fe941f!2sUniversity+of+Venda!5e0!3m2!1sen!2sza!4v1504210595580"
            allowfullscreen></iframe>
    </div>
    <!-- Google Map end -->
    <!-- Copy Rights Start -->
    <footer>
        <div class="container">
            <p>&copy; Copyright
                <script type="text/javascript">
                    var d = new Date();
                    document.write(d.getFullYear());
                </script> Anthem Creative Studios & CO | All Rights Reserved.</p>
        </div>
    </footer>
    <!-- Copy Rights End -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/jquery/jquery-3.1.1.min.js"></script>
    <script src="assets/jquery/jquery.animateNumber.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/jquery/plugins.js"></script>
    <script src="assets/easing/jquery.easing.min.js"></script>
    <script src="assets/jquery/morphext.min.js"></script>
    <script src="assets/wow/wow.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/index.js"></script>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-83282272-2', 'auto');
        ga('send', 'pageview');
        (function() {
            var documentEl = $(document),
                parallaxBg = $('.body');
            documentEl.on('scroll', function() {
                var currScrollPos = documentEl.scrollTop();
                parallaxBg.css('background-position', '0' + -currScrollPos / 4 + 'px');
            });
        });
    </script>
</body>

</html>
