<?php
  $queryLatestArticles = new WP_Query( array(
    'post_type' => 'article',
    'posts_per_page' => 8,
  )); 
?>

<?php if ( $queryLatestArticles->have_posts() ) : ?>
  <div class="articles container">
    <h1 class="block-title">
      ARTICLES
    </h1>
    <div class="row">
      <?php while ( $queryLatestArticles->have_posts() ) : $queryLatestArticles->the_post(); ?>
        <div class="col-12 col-md-10 col-lg-6 fade-in-section">
          <?php get_template_part('article-card'); ?>
        </div>  
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </div>
    <h1 class="block-title last">
      <a href="article/" class="fix-a">SEE MORE ></a>
    </h1>
  </div>
<?php else : ?>
  <p>No articl;es!!</p>
<?php endif; ?>