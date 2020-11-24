<?php get_header(); ?>

<div class="content container category-all articles-all">
  <h1 class="block-title">ARTICLES</h1>
  <div class="row">
    <?php while(have_posts()) : the_post(); ?>
        <div class="col-12 col-md-10 col-lg-6 fade-in-section">
          <?php get_template_part('article-card'); ?>
        </div>  
    <?php endwhile; ?>
  </div>  
</div>


<?php get_footer(); ?>