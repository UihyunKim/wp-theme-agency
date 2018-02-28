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
<body id='bootstrap-overrides' class='prx-1'>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-lg-0">
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
            <a class="nav-link" href="#">Home <span class="sr-only d-lg-none">(current)</span></a>
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

    <!-- section 1 -->
    <section id="section1" class="section" data-anchor="slide1">

      <div class="content-wrapper container d-flex flex-column justify-content-center align-items-center position-relative">
        <div class="text-center">
          <h1 class="font-weight-bold text-white m-0">CREATIVES</h1>
          <h2>POWER BY OLDERTHANYESTERDAY.COM</h2>
        </div>

        <a href="#slide2" class="scroll-down position-absolute">
          <p class="text-white text-center" >Scroll Down</p>
          <div class="arrow border border-white rounded-circle m-auto">
            <div class="d-flex align-items-center w-100 h-100 block">
              <img class="m-auto" src="<?php bloginfo('template_url') ?>/img/down-arrow.png" alt="down-arrow">
            </div>
          </div>
        </a>
      </div>

    </section> <!-- End section 1 -->

    <!-- section 2 -->
    <section id="section2" class="section" data-anchor="slide2">
      <div class="content-wrapper container d-flex flex-column justify-content-center align-items-center">

        <section class="awesome w-100 position-relative">
          <div class="text-center text-white position-absolute d-flex align-items-center justify-content-center">
            <h1> WE ARE AN AWESOME AGENCY </h1>
          </div>
          <div class="w-100 text-center font-weight-bold">W</div>
        </section>

        <section class="features container row d-flex">

          <article class="col-md-3 col-6 d-flex flex-column align-items-center">
            <figure class="position-relative">
              <div class="rounded-circle position-absolute d-flex justify-content-center align-items-center">
                <img src="<?php bloginfo('template_url') ?>/img/icon-write.png" alt="write icon">
              </div>
            </figure>
            <h1 class="text-white font-weight-bold mt-0 mt-md-1 mb-3 mb-md-0">FEATURE ONE</h1>
            <p class="text-white text-center mt-2 d-none d-md-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, autem!</p>
          </article>

          <article class="col-md-3 col-6 d-flex flex-column align-items-center">
            <figure class="position-relative">
              <div class="rounded-circle position-absolute d-flex justify-content-center align-items-center">
                <img src="<?php bloginfo('template_url') ?>/img/icon-write.png" alt="write icon">
              </div>
            </figure>
            <h1 class="text-white font-weight-bold mt-0 mt-md-1 mb-3 mb-md-0">FEATURE TWO</h1>
            <p class="text-white text-center mt-2 d-none d-md-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, autem!</p>
          </article>

          <article class="col-md-3 col-6 d-flex flex-column align-items-center">
            <figure class="position-relative">
              <div class="rounded-circle position-absolute d-flex justify-content-center align-items-center">
                <img src="<?php bloginfo('template_url') ?>/img/icon-search.png" alt="search icon">
              </div>
            </figure>
            <h1 class="text-white font-weight-bold mt-0 mt-md-1">FEATURE THREE</h1>
            <p class="text-white text-center mt-2 d-none d-md-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, autem!</p>
          </article>

          <article class="col-md-3 col-6 d-flex flex-column align-items-center">
            <figure class="position-relative">
              <div class="rounded-circle position-absolute d-flex justify-content-center align-items-center">
                <img src="<?php bloginfo('template_url') ?>/img/icon-bubble.png" alt="bubble icon">
              </div>
            </figure>
            <h1 class="text-white font-weight-bold mt-0 mt-md-1">FEATURE FOUR</h1>
            <p class="text-white text-center mt-2 d-none d-md-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, autem!</p>
          </article>
        </section>
      </div>
    </section> <!-- End section 2 -->

    <!-- section 3 -->
    <section id="section3" class="section" data-anchor="slide3">
      <div class="content-wrapper container-fluid">
        <div class="row h-100">

          <!-- NEWS -->
          <article class="order-1 order-md-0 h-50 col-12 col-md-6 d-flex align-items-center align-items-md-end">
            <div class="row d-flex align-items-center">
              <div class="news-container col-12 col-xl-8 offset-xl-4">
                <div class="col-12 text-white">Jan 4. 2018 | In Culture</div>
                <div class="col-12 text-white">
                  <h1> Lorem, ipsum dolor. </h1>
                </div>
                <div class="col-12 text-white">
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit laborum rem perspiciatis expedita similique eos.</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, ipsa!</p>
                </div>
              </div>
            </div>
          </article>

          <!-- PHOTO -->
          <article class="h-50 col-12 col-md-6 p-0">
            <img class="h-100 w-100" src="<?php bloginfo('template_url') ?>/img/news1.png" alt="a man working in front of a computer">
          </article>

          <!-- PHOTO -->
          <article class="d-none d-md-block h-50 col-12 col-md-6 p-0">
            <img class="h-100 w-100" src="<?php bloginfo('template_url') ?>/img/news2.png" alt="a man working in front of a computer">
          </article>

          <!-- NEWS -->
          <article class="d-none d-md-flex h-50 container col-12 col-md-6 align-items-center bg-white">
            <div class="row">
              <div class="news-container col-12 col-xl-8 offset-xl-1">
                <div class="col-12">Jan 4. 2018 | In Culture</div>
                <div class="col-12">
                  <h1> Lorem, ipsum dolor. </h1>
                </div>
                <div class="col-12">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque debitis, explicabo magnam suscipit facilis, sunt iure iste obcaecati ipsum excepturi labore quae pariatur illum eligendi?</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur consequatur voluptates veritatis atque. Delectus, accusamus.</p>
                </div>
              </div>
            </div>
          </article>
        </div>
      </div>

    </section> <!-- End section 3 -->

    <!-- section 4 -->
    <section id="section4" class="section bg-white" data-anchor="slide4">
      <div class="content-wrapper container d-flex flex-column justify-content-end align-items-center">

        <div class="height-without-nav d-flex flex-column justify-content-around">
          <div class="blog-header">
            <div class="blog-title w-100 position-relative">
              <div class="text-center position-absolute d-flex align-items-center justify-content-center">
                <h1 class="font-weight-bold">LET'S BLOG</h1>
              </div>
              <div class="w-100 text-center font-weight-bold">B</div>
            </div>
    
            <div class="text-center d-none d-md-block"><h2>We love clean design and advanced digital solutions.</h2></div>
          </div>
  
          <div class="blog-container row">
  
            <article class="col-6 col-md-4 col-lg-3">
                <img class="img-fluid" src="<?php bloginfo('template_url') ?>/img/blog1.png" alt="a meeting with 3 colleagues">
                <h1 class="text-uppercase text-center">Fresh Summer Campaign</h1>
                <p class="d-none d-md-block text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident accusantium ducimus tempore recusandae, deserunt inventore!</p>
            </article>
  
            <article class="col-6 col-md-4 col-lg-3">
              <img class="img-fluid" src="<?php bloginfo('template_url') ?>/img/blog2.png" alt="a man seeing tablet">
              <h1 class="text-uppercase text-center">Fresh Summer Campaign</h1>
              <p class="d-none d-md-block text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident accusantium ducimus tempore recusandae, deserunt inventore!</p>
            </article>
  
            <article class="col-6 col-md-4 col-lg-3">
              <img class="img-fluid" src="<?php bloginfo('template_url') ?>/img/blog3.png" alt="hands on computer keyboard">
              <h1 class="text-uppercase text-center">Fresh Summer Campaign</h1>
              <p class="d-none d-md-block text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident accusantium ducimus tempore recusandae, deserunt inventore!</p>
            </article>
  
            <article class="col-6 d-xl-block d-md-none d-lg-block col-md-4 col-lg-3">
              <img class="img-fluid" src="<?php bloginfo('template_url') ?>/img/blog1.png" alt="a meeting with 3 colleagues">
              <h1 class="text-uppercase text-center">Fresh Summer Campaign</h1>
              <p class="d-none d-lg-block text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident accusantium ducimus tempore recusandae, deserunt inventore!</p>
            </article>
  
          </div>
        </div>
      </div>
    </section> <!-- end section 4 -->

    <!-- section 5 -->
    <section id="section5" class="section" data-anchor="slide5">
      <div class="content-wrapper container d-flex flex-column justify-content-end align-items-center">
        <div class="height-without-nav d-flex justify-content-around w-100">
          <div class="row">

            <div class="col-12 col-sm-6 col-md-5 offset-md-1 d-flex align-items-center">

              <article>
                <h1 class="text-white">Lorem, ipsum dolor.</h1>
                <p class="text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus earum placeat, cumque distinctio, nihil reiciendis expedita quos deleniti aliquid nisi magni esse! Perspiciatis laborum inventore aliquam cupiditate nesciunt tenetur deleniti.</p>
                <div>
                  <div class="progress mb-3" style="height: 30px;">
                    <div  class="progress-bar prb-1 text-left text-uppercase" 
                          role="progressbar" 
                          style="width: 0%;" 
                          aria-valuenow="80" 
                          aria-valuemin="0" 
                          aria-valuemax="100">
                          <span class="pl-3">Fully Responsive Design</span>
                    </div>
                  </div>
                  <div class="progress mb-3" style="height: 30px;">
                    <div  class="progress-bar prb-2 text-left text-uppercase" 
                          role="progressbar" 
                          style="width: 0%;" 
                          aria-valuenow="90" 
                          aria-valuemin="0" 
                          aria-valuemax="100">
                          <span class="pl-3">High Quality Code</span>
                    </div>
                  </div>
                  <div class="progress mb-3" style="height: 30px;">
                    <div  class="progress-bar prb-3 text-left text-uppercase" 
                          role="progressbar" 
                          style="width: 0%;" 
                          aria-valuenow="100" 
                          aria-valuemin="0" 
                          aria-valuemax="100">
                          <span class="pl-3">Different Headers & layout</span>
                    </div>
                  </div>
                </div>
              </article>
            </div>

            <div class="col-12 col-sm-6 col-md-4 offset-md-1 d-flex flex-row align-items-end align-items-sm-center">
              <img class="img-fluid" src="<?php bloginfo('template_url') ?>/img/mockup.png" alt="smartphone design mockup">
            </div>

          </div>
        </div>
      </div>
    </section> <!-- End section 5 -->

    <!-- section 6 -->
    <section id="section6" class="section" data-anchor="slide6">
      <div class="content-wrapper container d-flex flex-column justify-content-end align-items-center">
        <div class="height-without-nav d-flex flex-column justify-content-around w-100">
          <div class="row">

          </div>
        </div>
      </div>
    </section> <!-- End section 5 -->

  </div>

  
    


  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.fullPage.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>


  <?php wp_footer(); ?>
</body>
</html>