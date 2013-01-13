<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?> class="no-js">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?> class="no-js">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?> class="no-js">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="" />
    <title><?php
      /*
       * Print the <title> tag based on what is being viewed.
       */
      global $page, $paged;

      wp_title( '|', true, 'right' );

      // Add the blog name.
      bloginfo( 'name' );

      // Add the blog description for the home/front page.
      $site_description = get_bloginfo( 'description', 'display' );
      if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";

      ?></title>
    <link rel="image_src" href="<?php echo get_template_directory_uri(); ?>/images/logo.png" />
    <link rel="shortcut icon" type="image/x-png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php
      if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
      wp_head();
    ?>
     <link href="<?php echo get_template_directory_uri(); ?>/stylesheets/bootstrap/bootstrap.css" rel="stylesheet" type="text/css" />
  
   
    <link href="<?php echo get_template_directory_uri(); ?>/stylesheets/animate-custom.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/stylesheets/print.css" media="print" rel="stylesheet" type="text/css" />


<style>

  .home-container {
    padding: 1px 40px;
  }

  .hero-unit-home {
    padding: 10px;
    margin-top: 20px;
    font-size: 18px;
    font-weight: 200;
    line-height: 30px;
    color: inherit;
     background-color: #eeeeee;
     border-bottom: 1px solid #ddd;
     margin-bottom: 50px;
    }

  .hero-unit-home .quiz {
    padding: 20px;
  }



  #products header .description {
    text-align: center;
    color: #666;
  }

  #products header h2 {
    background: url("<?php echo get_template_directory_uri(); ?>/images/wing-header-bg.gif") repeat-x scroll 0 7px transparent;
    margin: 0 20px 10px 0px;
    text-align: center;
  }
  #products header h2 span {
    background: #FFF;
    padding: 30px;
    margin-top: 2px;

  }

  .footer-widgets  {
        text-align: center;
  }


  /* fluid video */
  .videoWrapper {
    position: relative;
    padding-bottom: 56.25%; /* 16:9 */
    padding-top: 25px;
    height: 0;
  }
  .videoWrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }

.main-content h3 {
  font-size: .75em;
}

.right {
  float: right;
}
/* lame attempt at responsive for the hero, fix later */
@media all and (max-width: 500px) {
    .hero-unit-home .quiz,  .hero-unit-home .span5 {
      width: 100%;
    }
}


</style>


       


  <!--[if IE]>
      <link href="<?php echo get_template_directory_uri(); ?>/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
  <![endif]-->
    
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->


    
  </head>

  <body <?php body_class(); ?>>
     <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="  <?php if(!is_home()) { echo "container"; } else { echo "home-container"; } //temp fix to justify the logo on homepage?>">

          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">The Human Experiment</a>
        
           
            <div class="nav-collapse collapse">
           <!--  <ul class="nav">
              <li> <a href="#about">View All Products</a></li>
            </ul> -->
            <div class="right">
             <a href="http://ktffilms.us2.list-manage.com/subscribe?u=1c8de06a1993ad04e9cc4793c&id=af9e5e9ca5&codekitCB=379811086.098911" target="_blank" class="btn btn-danger">Sign Our Newsletter for Updates!</a>
            </div>
            
          </div><!--/.nav-collapse -->

        </div>
      </div>
    </div>





  <!-- Prompt IE 6 users to install Chrome Frame..
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <a href="http://localhost/humanX/wp-login.php?loginFacebook=1&redirect=http://localhost/humanX" onclick="window.location = 'http://localhost/humanX/wp-login.php?loginFacebook=1&redirect='+window.location.href; return false;">Click here to login or register with Facebook</a>

  <?php if (is_home()) { ?>
     <div class="hero-unit-home">
         <div class="row-fluid">
            <div class="span7">
              <div class="videoWrapper">
                <!-- Copy & Pasted from YouTube -->
                   <iframe src="http://player.vimeo.com/video/31683038?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
              </div>
            </div>


            <div class="span5 quiz">
                <h1>Are You Exposed?</h1>
                <?php get_template_part('section', 'quiz');?>
            
            </div>

         </div> 
      </div>
    <?php } //end if home ?>


  <div class="container"><div class="inner">


   
