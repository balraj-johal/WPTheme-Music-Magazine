<?php get_header(); ?>
<div class="content track-page">
  <!-- 
    Track details, i.e. title and description
  -->
  <div class="container-override">
    <h1 class="title">yo it's a 404 we don't have that page here. listen to some
        music instead:</h1>
    
    <?php 
        $related_args = array(
        'post_type' => 'track',
        'posts_per_page' => 4,
        'post_status' => 'publish',
        'orderby' => 'rand',
        );
        $related = new WP_Query( $related_args );
        if ( $related->have_posts() ) :
            $video_ID = get_field('video_id') 
    ?>
          <p><?php the_field('video_id') ?></p>
          <div class="iframe-container container-override">
              <iframe src="https://www.youtube.com/embed/<?php echo $video_ID ?>" allowfullscreen></iframe>
          </div>
      <?php wp_reset_postdata(); ?>
    <?php else : ?>
      <p>No tracks!!</p>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>