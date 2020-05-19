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
  <?php
    $queryLatestFeatured = new WP_Query( array(
      'category_name' => 'track',
      'posts_per_page' => 1,
    )); 
  ?>
  <?php if ( $queryLatestFeatured->have_posts() ) : ?>
    <div class="featured container">
      <?php while ( $queryLatestFeatured->have_posts() ) : $queryLatestFeatured->the_post(); ?>
        <?php the_title(); ?>
        <?php 
          $image = get_field('artist_info');
          $size = 'full'; // (thumbnail, medium, large, full or custom size)
          if( $image ) {
              echo wp_get_attachment_image( $image, $size );
          }
        ?>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </div>
  <?php else : ?>
    <p>No tracks!!</p>
  <?php endif; ?>

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
      </div>
    </div>
  <?php else : ?>
    <p>No tracks!!</p>
  <?php endif; ?>

</div>

<?php get_footer(); ?>