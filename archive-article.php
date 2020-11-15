<?php get_header(); ?>

<div class="content container category-all articles-all">
  <h1 class="block-title">LATEST ARTICLES</h1>
  <div class="row">
    <?php while(have_posts()) : the_post(); ?>
      <div class="col-10 col-lg-6">
        <?php get_template_part('article-card'); ?>
      </div>
    <?php endwhile; ?>
  </div>  
</div>


<?php get_footer(); ?>