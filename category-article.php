<?php get_header(); ?>

<div class="content container articles-all">
  <h1 class="block-title">ARTICLES</h1>
  <div class="row">
    <?php while(have_posts()) : the_post(); ?>
      <div class="col-10 col-lg-6">
        <div class="card article-card">
          <div class="article-tag">
            PROFILE <!-- TODO: add the functionality for this -->
          </div>
          <div class="contents">
            <a class="fix-a" href="<?php the_permalink(); ?>">
              <div class="article-card-img-wrap">
                <?php 
                  $image = get_field('image'); // TODO change to correct field
                  $size = 'full'; // (thumbnail, medium, large, full or custom size)
                  if( $image ) {
                      echo wp_get_attachment_image( $image, $size );
                  }
                ?>
              </div>
            </a>
            <a class="fix-a" href="<?php the_permalink(); ?>">
              <h2 class="titles">
                <?php the_title(); ?>
              </h2>
            </a>
            <div class="excerpt">
              <?php the_excerpt(); ?>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>  
</div>


<?php get_footer(); ?>