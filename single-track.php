<div class="content container">
  <h1>TRACK: <?php the_title(); ?></h1>

  <?php while(have_posts()) : the_post(); ?>
    <?php the_time(get_option('date_format')); ?><br />
    <?php the_content(); ?><br />
  <?php endwhile; ?>
</div>