<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>TuguPerdana Official Website</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo get_template_directory(dirname(__FILE__), 'img');?>/favicon.png" rel="icon">
  <link href="<?php echo get_template_directory(dirname(__FILE__), 'img');?>/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo get_template_directory(dirname(__FILE__), 'lib');?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo get_template_directory(dirname(__FILE__), 'lib');?>/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="<?php echo get_template_directory(dirname(__FILE__), 'lib');?>/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="<?php echo get_template_directory(dirname(__FILE__), 'lib');?>/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="<?php echo get_template_directory(dirname(__FILE__), 'lib');?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory(dirname(__FILE__), 'lib');?>/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory(dirname(__FILE__), 'lib');?>/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="<?php echo get_template_directory(dirname(__FILE__), 'css');?>/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo get_template_directory(dirname(__FILE__), 'css');?>/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="<?php echo get_template_directory(dirname(__FILE__), 'css');?>/responsive.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="<?=base_url();?>">
                  <h1><span>Tugu</span>Perdana</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right"><?=post_menu('artikel', TRUE);?><?=post_menu('halaman', TRUE);?></ul>   
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->