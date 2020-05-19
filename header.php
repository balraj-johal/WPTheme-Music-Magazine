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
      <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
      <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

      <title>
          <?php bloginfo('name'); ?>
      </title>
      <?php wp_head(); ?> <!-- "hook" for plugin code !-->
  </head>
  <body <?php body_class(); ?> >

  