<?php get_header(); ?>
  <?php 
    if ( in_category( 'article' ) ) {
      get_template_part('single-article');
    } else if ( in_category( 'track' ) ) {
      get_template_part('single-track');
    }
  ?>
<?php get_footer(); ?>