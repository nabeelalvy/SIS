<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url();?>assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo base_url();?>assets/css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">S.I.S</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="#about">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="#services">Services</a>
                </li>
                <li>
                    <a class="page-scroll" href="#portfolio">Portfolio</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>
                <li>
                    <a class="page-scroll" href="logout">Logout</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<header>
    <div class="header-content">
        <div class="header-content-inner">
            <h1 id="homeHeading">Welcome to <br> School Information System</h1>
            <hr>
            <p>S.I.S is the Only Platform to Bridge the Gap between Parents and Teachers that Will Analyze Your Child's Progress and Provide help in Every Aspect.</p>
            <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
        </div>
    </div>
</header>

<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">At Your Service</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 text-center">
                <div class="service-box">
                    <a href="search">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                        <h3>Search School</h3>
                        <p class="text-muted">You can use feature to search the schools!</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-center">
                <div class="service-box">
                    <a href="career">
                        <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
                        <h3>Career Counselling</h3>
                        <p class="text-muted">Use this feature to check your Career</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-center">
                <div class="service-box">
                    <a href="ranking">
                    <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                    <h3>Ranking of Schools</h3>
                    <p class="text-muted">Use this feature to see the ranking of different schools.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="no-padding" id="portfolio">
    <div class="container-fluid">
        <div class="row no-gutter popup-gallery">
            <div class="col-lg-4 col-sm-6">
                <a href="<?php echo base_url();?>assets/img/portfolio/fullsize/1.jpg" class="portfolio-box">
                    <img src="<?php echo base_url();?>assets/img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                1
                            </div>
                            <div class="project-name">
                                A.S.S.
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="<?php echo base_url();?>assets/img/portfolio/fullsize/2.jpg" class="portfolio-box">
                    <img src="<?php echo base_url();?>assets/img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                2
                            </div>
                            <div class="project-name">
                                A.S.S.
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="<?php echo base_url();?>assets/img/portfolio/fullsize/3.jpg" class="portfolio-box">
                    <img src="<?php echo base_url();?>assets/img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                3
                            </div>
                            <div class="project-name">
                                A.S.S.
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="<?php echo base_url();?>assets/img/portfolio/fullsize/4.jpg" class="portfolio-box">
                    <img src="<?php echo base_url();?>assets/img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                4
                            </div>
                            <div class="project-name">
                                A.S.S.
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="<?php echo base_url();?>assets/img/portfolio/fullsize/5.jpg" class="portfolio-box">
                    <img src="<?php echo base_url();?>assets/img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                5
                            </div>
                            <div class="project-name">
                                A.S.S.
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="<?php echo base_url();?>assets/img/portfolio/fullsize/6.jpg" class="portfolio-box">
                    <img src="<?php echo base_url();?>assets/img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                6
                            </div>
                            <div class="project-name">
                                A.S.S.
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!--    <aside class="bg-dark">-->
<!--        <div class="container text-center">-->
<!--            <div class="call-to-action">-->
<!--                <h2>SO GET STARTED</h2>-->
<!--                <a href="login" class="btn btn-default btn-xl sr-button">LOGIN</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </aside>-->

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Let's Get In Touch!</h2>
                <hr class="primary">
                <p>For any questions or query, feel free to contact us. We'll provide our best service that will satisfy you about your child.</p>
            </div>
            <div class="col-lg-4 col-lg-offset-2 text-center">
                <a onclick="myFunction()">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>0337-048-1973</p>
            </div>
            <div class="col-lg-4 text-center">
                <a onclick="myFunction()">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com">asadmasood451@gmail.com</a></p>
            </div>
        </div>
    </div>
</section>

<script>
    function myFunction() {
        alert("Contact Info");
    }
</script>

<!-- jQuery -->
<script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/scrollreveal/scrollreveal.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Theme JavaScript -->
<script src="<?php echo base_url();?>assets/js/creative.min.js"></script>

</body>

</html>
