<?php get_header(); ?>

<div class="content container">
  <h3>This is the core page (index.php):</h3>

  <?php while(have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    time: <?php the_time(get_option('date_format')); ?><br />
    excerpt: <?php the_excerpt(); ?><br />
    link: <a href="<?php the_permalink(); ?>">link</a><br />
    <hr />
  <?php endwhile; ?>
</div>


<?php get_footer(); ?>