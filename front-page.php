<?php get_header(); ?>

<div class="content">
  <!-- <div class="your-class">
    <div>your content</div>
    <div>your content</div>
    <div>your content</div>
  </div> -->

  <div class="container">
    <div class="row">
      <div class="featured col-lg-8 col-12">
        <?php
          $queryLatestFeatured = new WP_Query( array(
            'category_name' => 'featured',
            'posts_per_page' => 1,
          )); 
        ?>
        <?php while ( $queryLatestFeatured->have_posts() ) : $queryLatestFeatured->the_post(); ?>
          <h1 class="block-title">
            FEATURED TRACK
          </h1>
          <h1 class="title">
            <?php the_title(); ?>
          </h1>
          <div class="img-wrapper">
            <?php 
              $image = get_field('artist_photo');
              $size = 'medium'; // (thumbnail, medium, large, full or custom size)
              if( $image ) {
                  echo wp_get_attachment_image( $image, $size );
              } 
            ?>
          </div>
          <?php $video_URL = get_field('video_url') ?>
          <div class="iframe-container">
            <iframe src="<?php echo $video_URL ?>" allowfullscreen></iframe>
          </div>

          <!-- TODO: add socials under featured -->

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <div class="playlists col-lg-4 col-12">
        <div class="title-group">
          <h1 class="block-title">
            PLAYLISTS
          </h1>
          <h1 class="title">
            Best underground selections
          </h1>
        </div>
        <div class="iframe-container">
          <iframe src="https://open.spotify.com/embed/playlist/1a2lGzQxf5AdipnKmPpb9I" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        </div>
      </div>
    </div>
  </div>

  <?php
    $queryLatestTracks = new WP_Query( array(
      'category_name' => 'track',
      'posts_per_page' => 3,
    )); 
  ?>
  <?php if ( $queryLatestTracks->have_posts() ) : ?>
    <div class="latest-tracks">
      <div class="bg"></div>
      <div class="container">
        <h1 class="block-title">
          NEW MUSIC
        </h1>
        <div class="row">
          <?php while ( $queryLatestTracks->have_posts() ) : $queryLatestTracks->the_post(); ?>
            <div class="col-12 col-lg-4">
              <div class="card track-card">
                <div class="track-card-img-wrap">
                  <?php 
                    $image = get_field('artist_info');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if( $image ) {
                        echo wp_get_attachment_image( $image, $size );
                    }
                  ?>
                </div>
                <h2 class="titles">
                  <?php the_field('track_name'); ?> - 
                  <?php the_field('artist'); ?>
                </h2>
                <div class="excerpt">
                  <?php the_excerpt(); ?>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </div>
        <h1 class="block-title">
          SEE MORE >
        </h1>
      </div>
    </div>
  <?php else : ?>
    <p>No tracks!!</p>
  <?php endif; ?>

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
          <div class="col-12 col-lg-6">
            <div class="card article-card">
              <div class="article-card-img-wrap">
                <?php 
                  $image = get_field('artist_info'); // TODO change to correct field
                  $size = 'full'; // (thumbnail, medium, large, full or custom size)
                  if( $image ) {
                      echo wp_get_attachment_image( $image, $size );
                  }
                ?>
              </div>
              <h2 class="titles">
                <?php the_title(); ?>
              </h2>
              <div class="excerpt">
                <?php the_excerpt(); ?>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <h1 class="block-title">
        SEE MORE >
      </h1>
    </div>
  <?php else : ?>
    <p>No articl;es!!</p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>