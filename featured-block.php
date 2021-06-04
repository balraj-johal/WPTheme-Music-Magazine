<div class="featured col-lg-8 col-12">

  <?php
    $queryLatestFeatured = new WP_Query( array(
      'post_type' => 'featured',
      'posts_per_page' => 1,
    )); 
  ?>
  <?php while ( $queryLatestFeatured->have_posts() ) : $queryLatestFeatured->the_post(); ?>
    <h1 class="block-title">
      FEATURED
    </h1>
    <h1 class="title">
      <?php the_title(); ?>
    </h1>

    <div class="img-wrapper">
      <?php 
        $image = get_field('corner_image');
        $size = 'medium'; // (thumbnail, medium, large, full or custom size)
        if( $image ) {
            echo wp_get_attachment_image( $image, $size );
        } 
      ?>
    </div>

    <?php $video_URL = get_field('video_id') ?>
    <div class="iframe-container">
      <iframe src="https://www.youtube.com/embed/<?php echo $video_URL ?>?wmode=opaque&modestbranding=1" allowfullscreen></iframe>
    </div>
    
    <div class="social-links">
      <?php 
        $twitter = get_field('twitter_@'); 
        if ($twitter):
      ?>
        <a target="_blank" href="https://www.twitter.com/<?php echo $twitter; ?>">
          <img class="no-dragging-dickhead social-logo" src="<?php echo get_bloginfo('template_url') ?>/resources/images/twitter.png" draggable="false"/>
          @<?php echo $twitter; ?>
        </a>
      <?php endif; ?>
      <?php 
        $insta = get_field('insta_name'); 
        if ($insta):
      ?>
        <a target="_blank" href="https://www.instagram.com/<?php echo $insta; ?>">
          <img class="no-dragging-dickhead social-logo" src="<?php echo get_bloginfo('template_url') ?>/resources/images/insta.png" draggable="false"/>
          <?php echo $insta; ?>
        </a>
      <?php endif; ?>
      <?php 
        $sc = get_field('soundcloud_name');
        if ($sc):
      ?>
        <a target="_blank" href="https://soundcloud.com/<?php echo $sc; ?>">
          <img class="no-dragging-dickhead social-logo" src="<?php echo get_bloginfo('template_url') ?>/resources/images/sc.png" draggable="false"/>
          <?php echo $sc; ?>
        </a>
      <?php endif; ?>
    </div>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
</div>