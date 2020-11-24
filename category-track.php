<?php get_header(); ?>

<div class="content container category-all tracks-all">
  <h1 class="block-title">NEW MUSIC</h1>
  <div class="row">
    <?php while(have_posts()) : the_post(); ?>
      <div class="col-11 col-md-6 col-lg-4">
        <?php get_template_part('track-card'); ?>
      </div>
    <?php endwhile; ?>
  </div>  
</div>

<?php get_footer(); ?>