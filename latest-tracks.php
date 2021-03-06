<?php
  $queryLatestTracks = new WP_Query( array(
    'post_type' => 'track',
    'posts_per_page' => 9,
  )); 
?>
<?php if ( $queryLatestTracks->have_posts() ) : ?>
  <div class="latest-tracks" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/resources/images/noise1.gif);">
    <div class="bg"></div>
    <video class="parallaxed-vid" autoplay muted loop nocontrols>
      <source src="<?php echo get_stylesheet_directory_uri(); ?>/resources/videos/noise.mp4" type="video/mp4">
    </video>
    <div class="container wider">
      <h1 class="block-title">
        NEW MUSIC
      </h1>
      <div class="row">
        <div class="carousel slide w-100" data-ride="carousel" id="myCarousel">
            <div class="carousel-inner w-100" role="listbox" id="mci">
              <?php while ( $queryLatestTracks->have_posts() ) : $queryLatestTracks->the_post(); ?>
                <div class="carousel-item">
                  <div class="col-11 col-md-6 col-lg-4">     
                    <?php get_template_part('track-card'); ?>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          <a class="carousel-control-prev w-auto" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next w-auto" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
        </div>
        <?php wp_reset_postdata(); ?>
      </div>
      <h1 class="block-title see-more">
        <a href="track/" class="fix-a-white">SEE MORE ></a>
      </h1>
    </div>
  </div>
<?php else : ?>
  <p>No tracks!!</p>
<?php endif; ?>