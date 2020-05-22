<?php get_header(); ?>

<div class="header-nav">
  <div class="header-nav-bg-wrapper">
    <img src="<?php echo get_bloginfo('template_url') ?>/resources/images/static.gif"/>
  </div>

  <h1 class="site-title">
    <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
  </h1>

  <nav class="navbar navbar-expand-sm navbar-dark bg-dark-on-collapse navbar-override">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php wp_nav_menu(array(
        'theme_location' => 'header-menu',
        'menu_class' => 'navbar-nav mr-auto' 
        )); 
      ?>
    </div>
  </nav>
</div>

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
              <div class="card">
                <?php the_field('track_name'); ?>
                <?php the_field('artist'); ?>
                <div class="track-card-img-wrap">
                  <?php 
                    $image = get_field('artist_info');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if( $image ) {
                        echo wp_get_attachment_image( $image, $size );
                    }
                  ?>
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

</div>

<?php get_footer(); ?>