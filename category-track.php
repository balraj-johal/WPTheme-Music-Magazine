<?php get_header(); ?>

<div class="content container tracks-all">
  <h1 class="block-title">NEW MUSIC</h1>
  <div class="row">
    <?php while(have_posts()) : the_post(); ?>
      <div class="col-6 col-lg-4">
        <div class="card track-card">
          <a class="fix-a" href="<?php the_permalink(); ?>">
            <div class="track-card-img-wrap">
              <?php 
                $image = get_field('artist_info');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if( $image ) {
                    echo wp_get_attachment_image( $image, $size );
                }
              ?>
            </div>
          </a>
          <a class="fix-a" href="<?php the_permalink(); ?>">
            <h2 class="titles">
              <?php the_field('track_name'); ?> - 
              <?php the_field('artist'); ?>
            </h2>
          </a>
          <div class="excerpt">
            <?php the_excerpt(); ?>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>  
</div>


<?php get_footer(); ?>