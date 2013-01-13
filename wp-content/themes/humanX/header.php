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
    <!-- <link href="<?php echo get_template_directory_uri(); ?>/stylesheets/bootstrap/bootstrap-responsive.css" rel="stylesheet" type="text/css" /> -->
   
    <link href="<?php echo get_template_directory_uri(); ?>/stylesheets/animate-custom.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/stylesheets/print.css" media="print" rel="stylesheet" type="text/css" />
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
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">The Human Experiment</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>




  <!-- Prompt IE 6 users to install Chrome Frame..
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <a href="http://localhost/humanX/wp-login.php?loginFacebook=1&redirect=http://localhost/humanX" onclick="window.location = 'http://localhost/humanX/wp-login.php?loginFacebook=1&redirect='+window.location.href; return false;">Click here to login or register with Facebook</a>
  <div class="container"><div class="inner">
    <header id="branding" role="banner">
      <h1 id="site-title"><a href="<?php bloginfo( 'siteurl' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    </header><!-- #branding -->
