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
    
    <div class="social-links">
      <?php 
        $twitter = get_field('twitter_@'); 
        if ($twitter):
      ?>
        <a href="https://www.twitter.com/<?php echo $twitter; ?>">
          <img class="no-dragging-dickhead social-logo" src="<?php echo get_bloginfo('template_url') ?>/resources/images/twitter.png" draggable="false"/>
          @<?php echo $twitter; ?>
        </a>
      <?php endif; ?>
      <?php 
        $insta = get_field('insta_name'); 
        if ($insta):
      ?>
        <a href="https://www.instagram.com/<?php echo $insta; ?>">
          <img class="no-dragging-dickhead social-logo" src="<?php echo get_bloginfo('template_url') ?>/resources/images/insta.png" draggable="false"/>
          @<?php echo $insta; ?>
        </a>
      <?php endif; ?>
      <?php 
        $sc = get_field('soundcloud_name');
        if ($sc):
      ?>
        <a href="https://soundcloud.com/<?php echo $sc; ?>">
          <img class="no-dragging-dickhead social-logo" src="<?php echo get_bloginfo('template_url') ?>/resources/images/sc.png" draggable="false"/>
          @<?php echo $sc; ?>
        </a>
      <?php endif; ?>
    </div>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

</div>