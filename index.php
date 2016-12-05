<?php
    include_once('login.php');
    $error = "";

    if (isset($_GET['rejected'])) {
        $error = "Wrong name or password";
    }
?>
<!DOCTYPE html>
<html lang="en" id="bootstrap-overrides">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>NHN Connect</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="slick/slick.css" rel="stylesheet">
    <link href="slick/slick-theme.css" rel="stylesheet">
    <link href="css/stylemain.css" rel="stylesheet">
    <link href="css/stylez.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" />

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">
                <img src="img/logo_transparent.png" id="logo">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a class="page-scroll" href="#page-top"></a>
                </li>

                <!--About-->
                <li><a class="page-scroll" href="#about">About</a>
                </li>

                <!--Features-->
                <li><a class="page-scroll" href="#features">Features</a></li>


                <!--Screens-->
                <li><a class="page-scroll" href="#screens">Screens</a>
                </li>

                <!--Video-->
                <li>
                <a class="page-scroll" href="#video">Video</a>
                </li>

                <!--Demo-->
                <li>
                <a class="page-scroll" href="#demo">Demo</a>
                </li>

                <!--Contact-->
                <li>
                <a class="page-scroll" href="#contact">Contact</a>
                </li>
               <!-- <form class="navbar-form  navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>-->
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">
                <img src="img/logo_transparent.png" id="logo">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a class="page-scroll" href="#page-top"></a>
                </li>

                <!--About-->
               <li><a class="page-scroll" href="#about">About</a>
                </li>

                <!--Features-->
                <li><a class="page-scroll" href="#features">Features</a></li>


                <!--Screens-->
                <li><a class="page-scroll" href="#screens">Screens</a>
                </li>

                <!--Video-->
                <li>
                <a class="page-scroll" href="#video">Video</a>
                </li>

                <!--Demo-->
                <li>
                <a class="page-scroll" href="#demo">Demo</a>
                </li>

                <!--Contact-->
                <li>
                <a class="page-scroll" href="#contact">Contact</a>
                </li>
                <!--<form class="navbar-form  navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>-->
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Intro Section -->
        <section id="intro" class="intro-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <img src="img/map_top.png" id="intro-image">
                    </div>
                    <div class="col-sm-12 col-md-6" id="intro-text">
                        <p>NHN Connect</p>
                        <p class="lighter">Find a colleague on the spot</p>
                        </p>
                    </div>
                </div>
            </div>
            <a href="#about">
                <span id="arrowdown"></span></a>
        </section>



        <!-- Intro Section XS-->
        <section id="intro1" class="intro-section-xs hidden-sm hidden-md hidden-lg">
            <div class="container">
                <div class="row">

                    <p class="col-lg-8 col-lg-offset-2"></p>

                </div>
            </div>

        </section>


<!-- About Section -->
<section id="about" class="about-section">
     <h1>About</h1>
    <hr>

        <div class="container" >
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="about-item scrollpoint sp-effect2 active animated fadeInUp">
                <i class="fa fa-download fa-2x" ></i>
                <h3>Easy setup</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12" >
            <div class="about-item scrollpoint active animated fadeInUp">
                <i class="fa fa-map-marker fa-2x" aria-hidden="true" ></i>
                <h3>Live map</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12" >
             <div class="about-item scrollpoint active animated fadeInUp">
               <i class="fa fa-calendar fa-2x"></i>
                <h3>Online schedule</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12" >
           <div class="about-item scrollpoint active animated fadeInUp">
                <i class="fa fa-users fa-2x"></i>
                <h3>Fast connection</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
        </div>
            </div>
        </div>
</section>

<!-- Features section -->
<section id="features" class="features-section">
    <div class="container">
        <h1>Features</h1>
        <hr class="features-hr">
        <p class="features-title">Learn more about this feature packed App</p>
    </div>
        <div class="row">
            <div class="col-md-4 hidden-sm hidden-xs left-column">
                <div class="media text-right feature">
                    <a class="pull-right" href="#">
                            <i class="fa fa-cogs fa-2x"></i>
                    </a>
                    <div class="media-body">
                            <h3 class="media-heading">User Settings</h3>
                    </div>
                </div>
                <div class="media text-right feature">
                    <a class="pull-right" href="#">
                            <i class="fa fa-calendar fa-2x"></i>
                    </a>
                    <div class="media-body">
                            <h3 class="media-heading">Online schedule</h3>
                    </div>
                </div>
                <div class="media text-right feature">
                    <a class="pull-right" href="#">
                            <i class="fa fa-users fa-2x"></i>
                    </a>
                    <div class="media-body">
                            <h3 class="media-heading">Colleagues list</h3>
                    </div>
                </div>
            </div>

             <div class="col-xs-12 hidden-md hidden-lg right-column">
                <div class="media text-left feature">
                    <a class="pull-left" href="#">
                            <i class="fa fa-cogs fa-2x"></i>
                    </a>
                    <div class="media-body">
                            <h3 class="media-heading">User Settings</h3>
                    </div>
                </div>
                <div class="media text-left feature">
                    <a class="pull-left" href="#">
                            <i class="fa fa-calendar fa-2x"></i>
                    </a>
                    <div class="media-body">
                            <h3 class="media-heading">Online schedule</h3>
                    </div>
                </div>
                <div class="media text-left feature">
                    <a class="pull-left" href="#">
                            <i class="fa fa-users fa-2x"></i>
                    </a>
                    <div class="media-body">
                            <h3 class="media-heading">Colleagues list</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4 hidden-sm hidden-xs">
           <img src="img/map.png" class="img-responsive scrollpoint sp-effect5" alt="">
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12 right-column">
               <div class="media text-left feature">
                    <a class="pull-left" href="#">
                            <i class="fa fa-map-marker fa-2x"></i>
                    </a>
                    <div class="media-body">
                            <h3 class="media-heading">Live map</h3>
                    </div>
                </div>
                <div class="media text-left feature">
                    <a class="pull-left" href="#">
                            <i class="fa fa-comments fa-2x"></i>
                    </a>
                    <div class="media-body">
                            <h3 class="media-heading">Message chat</h3>
                    </div>
                </div>
                 <div class="media text-left feature">
                    <a class="pull-left" href="#">
                            <i class="fa fa-search fa-2x"></i>
                    </a>
                    <div class="media-body">
                            <h3 class="media-heading">Search for a person</h3>
                    </div>
                </div>
            </div>
        </div>
</section>



<!-- Screens-->
<section id="screens" class="screens-section">
    <h1>Screens</h1>
    <hr>

    <div class="container">
       <div class="row">
           <div class="slider">
              <div class="sl_slide"><img class="sl_img" src="img/signup.png" alt="sign_up"></div>
              <div class="sl_slide"><img  class="sl_img"src="img/map.png" alt="map"></div>
              <div class="sl_slide"><img class="sl_img" src="img/callendar.png" alt="calendar"></div>
              <div class="sl_slide"><img class="sl_img" src="img/callendar1.png" alt="calendar1"></div>
              <div class="sl_slide"><img class="sl_img" src="img/doctors_info.png" alt="doctors_info"></div>
              <div class="sl_slide"><img class="sl_img" src="img/message_chat.png" alt="messages"></div>
              <div class="sl_slide"><img class="sl_img" src="img/profile.png" alt="profile"></div>
              <div class="sl_slide"><img class="sl_img" src="img/search.png" alt="search"></div>
           </div>
        </div>
    </div>
</section>

<!--Video-->
<section id="video" class="video-section">
    <div class="container">
        <div class="row text-center clearfix">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="video-heading">
                    <h1 class="title-one">Video</h1>
                    <hr>
                </div>
                <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cWRzt_eUpWM"></iframe>
</div>
            </div>
        </div>
    </div>

</section>

<!--Demo-->
<section id="demo" class="demo-section">
    <div class="container">
        <div class="row text-center clearfix">
            <h1 class="title-one">Demo</h1>
            <div class="demo-heading">
            <hr>
            <div class="col-sm-12 col-md-6">
                        <div id="search-block">
                            <h2>Search by first and last name</h2>
                            <div class="custom-search-input" id="input-field">
                                <form action="index.php" method="post" class="input-group col-md-12">
                                    <input type="text" name="search" class="form-control input-lg search-input" placeholder="Search by name" onkeydown="searchq();" />
                                    <span class="input-group-btn">
                                        <button class="btn btn-info btn-lg" type="submit">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </button>
                                    </span>
                                </form>
                            </div>
                        </div>
                    <div id="output"></div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6" id="loginarea">
                <form class="form-horizontal" action="login.php" method="post" id="loginForm">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox" id="remember-me">
                        <label>
                          <input type="checkbox" class="unstyled"> Remember me
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default" name="button">Log in</button>
                    </div>
                  </div>
                </form>
                <h3><?php echo $error ?></h3>
            </div>
            <div class="col-sm-12" id="profile">
            </div>
        </div>
    </div>

</section>

<!--CONTACT-->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row text-center clearfix">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="contact-heading">
                        <h1 class="title-one">Contact Us</h1>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="contact-details">
                <div class="pattern"></div>
                <div class="row text-center clearfix">
                    <div class="col-sm-6">
                        <div class="contact-address"><address><img src="img/kea.png" alt="Kea logo"> <br><p>Lygten 16<br>Norrebro<br> 2400, Kobenhavn NV <br> Phone: 46 46 04 00</p></address>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div id="contact-form-section">
                            <div class="status alert alert-success" style="display: none"></div>
                            <form id="contact-form" class="contact" name="contact-form" method="post" action="send-mail.php">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control name-field" required="required" placeholder="Your Name"></div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control mail-field" required="required" placeholder="Your Email">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-success btn-outline-rounded green white-btn" id="submit-button"> Submit </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="slick/slick.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scriptmain.js"></script>
<script src="js/scriptz.js"></script>

</body>
</html>
