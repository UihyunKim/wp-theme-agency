<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <title> <?php is_front_page() ? bloginfo('name') : wp_title() ; ?> </title>

  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/animate.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/jquery.fullPage.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">

  <?php wp_head(); ?>
</head>
<body id='bootstrap-overrides'>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="<?php bloginfo('template_url') ?>/img/logo.png" width="70px" height="auto" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse col-lg-9" id="navbarNavDropdown">
        <ul class="navbar-nav col justify-content-between">
          <li class="nav-item active d-flex align-items-center">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item d-flex align-items-center">
            <a class="nav-link" href="#">Pages</a>
          </li>
          <li class="nav-item d-flex align-items-center">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item d-flex align-items-center">
            <a class="nav-link" href="#">Extensions</a>
          </li>
          <li class="nav-item d-flex align-items-center">
            <a class="nav-link" href="#">Tutorials</a>
          </li>
          <li class="nav-item d-flex align-items-center">
            <a class="nav-link" href="#">Contact us</a>
          </li>
          <li class="nav-item d-flex align-items-center nav-sns">
            <img src="<?php bloginfo('template_url') ?>/img/sns-facebook.png" alt="sns link for facebook">
            <img src="<?php bloginfo('template_url') ?>/img/sns-twitter.png" alt="sns link for twitter">
            <img src="<?php bloginfo('template_url') ?>/img/sns-skype.png" alt="sns link for skype">
            <img src="<?php bloginfo('template_url') ?>/img/sns-linkedin.png" alt="sns link for linked in">
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="fullpage">

    <section class="section section1" data-anchor="slide1">
      <div class="content-wrapper container d-flex flex-column justify-content-center align-items-center position-relative">
        <div class="text-center">
          <h1>CREATIVES</h1>
          <h2>POWER BY OLDERTHANYESTERDAY.COM</h2>
        </div>
        <div class="scroll-down position-absolute">
          <p>Scroll Down</p>
          <div class="arrow">
            <a href="#slide2" class="d-flex align-items-center">
              <img src="<?php bloginfo('template_url') ?>/img/down-arrow.png" alt="down-arrow">
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="section section2" data-anchor="slide2">
      <div class="content-wrapper container d-flex flex-column justify-content-center align-items-center">
        <h1>next section</h1>
      </div>
    </section>

  </div>

  
    


  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.fullPage.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>


  <?php wp_footer(); ?>
</body>
</html>