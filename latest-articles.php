<?php
  $queryLatestArticles = new WP_Query( array(
    'category_name' => 'article',
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
        <div class="col-10 col-lg-6">
          <?php get_template_part('article-card'); ?>
        </div>  
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </div>
    <h1 class="block-title last">
      <a href="category/article/" class="fix-a">SEE MORE ></a>
    </h1>
  </div>
<?php else : ?>
  <p>No articl;es!!</p>
<?php endif; ?>