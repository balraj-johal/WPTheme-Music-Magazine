<?php
  $queryLatestTracks = new WP_Query( array(
    'category_name' => 'track',
    'posts_per_page' => 3,
  )); 
?>
<?php if ( $queryLatestTracks->have_posts() ) : ?>
  <div class="latest-tracks">
    <div class="bg"></div>
    <div class="container wider">
      <h1 class="block-title">
        NEW MUSIC
      </h1>
      <div class="row">
        <div class="carousel slide w-100" data-ride="carousel" id="myCarousel">
            <div class="carousel-inner w-100" role="listbox" id="mci">
              <?php while ( $queryLatestTracks->have_posts() ) : $queryLatestTracks->the_post(); ?>
                <div class="carousel-item">
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
      <h1 class="block-title">
        <a href="category/track/" class="fix-a-white">SEE MORE ></a>
      </h1>
    </div>
  </div>
<?php else : ?>
  <p>No tracks!!</p>
<?php endif; ?>