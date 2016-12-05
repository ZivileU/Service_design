<?php

  session_start();

if(isset($_SESSION['id'])){
  $id = $_SESSION['id'];
  $firstname = $_SESSION['firstname'];
  $lastname = $_SESSION['lastname'];
  $photo = $_SESSION['photo'];
  $email = $_SESSION['email'];
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
            <a class="navbar-brand page-scroll" href="index.php#page-top">
                <img src="img/logo_transparent.png" id="logo">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a class="page-scroll" href="index.php#page-top"></a>
                </li>

                <!--About-->
                <li><a class="page-scroll" href="index.php#about">About</a>
                </li>

                <!--Features-->
                <li><a class="page-scroll" href="index.php#features">Features</a></li>


                <!--Screens-->
                <li><a class="page-scroll" href="index.php#screens">Screens</a>
                </li>

                <!--Video-->
                <li>
                <a class="page-scroll" href="index.php#video">Video</a>
                </li>

                <!--Demo-->
                <li>
                <a class="page-scroll" href="index.php#demo">Demo</a>
                </li>

                <!--Contact-->
                <li>
                <a class="page-scroll" href="index.php#contact">Contact</a>
                </li>

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
            <a class="navbar-brand page-scroll" href="index.php#page-top">
                <img src="img/logo_transparent.png" id="logo">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a class="page-scroll" href="index.php#page-top"></a>
                </li>

                <!--About-->
               <li><a class="page-scroll" href="index.php#about">About</a>
                </li>

                <!--Features-->
                <li><a class="page-scroll" href="index.php#features">Features</a></li>


                <!--Screens-->
                <li><a class="page-scroll" href="index.php#screens">Screens</a>
                </li>

                <!--Video-->
                <li>
                <a class="page-scroll" href="index.php#video">Video</a>
                </li>

                <!--Demo-->
                <li>
                <a class="page-scroll" href="index.php#demo">Demo</a>
                </li>

                <!--Contact-->
                <li>
                <a class="page-scroll" href="index.php#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<br>
<section id="admin" class="admin-section">
    <div class="container">
        <div class="row text-center clearfix">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="video-heading">
                    <h1 class="title-one">Profile page</h1>
                    <hr>
                    <h3><?php echo $firstname.$lastname?></h3>
                    <img src="img/<? echo $photo ?>" alt="profile image of <?php $name ?>">
                    <p id="logout"><a href="logout.php">Log out</a></p>
                </div>
              </div>
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

<?php
  }else{
    header('Location: index.php?rejected');
  }
?>

