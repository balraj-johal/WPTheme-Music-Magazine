<!DOCTYPE html>
<html lang="en">

  <!-- this is the HTML head bit NOT the site header -->

  <head>
      <!-- Required meta tags -->
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      <!-- idk bout all the following shit this tutorial aint looking right ngl -->

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]--> 
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Share+Tech+Mono&display=swap&family=Share+Tech&display=swap" rel="stylesheet"> 
      <link rel="stylesheet" type="text/css" href="css/carousel-style.css"/>
      <link rel="stylesheet" type="text/css" href="css/carousel-style.css"/>
      
      <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
      <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
      <link rel="manifest" href="/site.webmanifest">
      <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
      <meta name="msapplication-TileColor" content="#da532c">
      <meta name="theme-color" content="#ffffff">

      <title>
          <?php bloginfo('name'); ?>
      </title>
      <?php wp_head(); ?> <!-- "hook" for plugin code !-->
  </head>
  <body <?php body_class(); ?> >


<div class="header-nav">
  <div class="header-nav-bg-wrapper">
    <img class="no-dragging-dickhead" src="<?php echo get_bloginfo('template_url') ?>/resources/images/static.gif" draggable="false"/>
  </div>

  <h1 class="site-title">
    <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
  </h1>

  <nav class="navbar navbar-expand-sm navbar-dark bg-dark-on-collapse navbar-override">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php wp_nav_menu(array(
        'theme_location' => 'header-menu',
        'menu_class' => 'navbar-nav mr-auto' 
        )); 
      ?>
    </div>
  </nav>
</div>