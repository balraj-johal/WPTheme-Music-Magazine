<div class="content track-page">
  <div class="img-top-wrap no-dragging-dickhead">
    
    <?php $video_ID = get_field('video_id') ?>
    <div class="iframe-container container-override">
      <iframe src="https://www.youtube.com/embed/<?php echo $video_ID ?>" allowfullscreen></iframe>
    </div>

    <!-- <div class="img-top-title no-dragging-dickhead">
      <h1><?php the_title(); ?></h1>
    </div> -->
  </div>

  <div class="container-override">
    <?php while(have_posts()) : the_post(); ?>
      <!-- <div class="details">
        <span class="post-date"><?php the_time(get_option('date_format')); ?></span> - <span class="author"><?php the_author() ?></span><br />
      </div> -->
      <div class="content">
        <h1 class="block-title"><?php the_title(); ?></h1>
        <br />
        <?php the_content(); ?><br />
      </div>
      <br />
      <br />
      <br />
    <?php endwhile; ?>

    <?php
      $randTracks = new WP_Query( array(
        'category_name' => 'track',
        'orderby'   => 'rand',
        'posts_per_page' => 3,
      )); 
    ?>

    <?php if ( $randTracks->have_posts() ) : ?>
      <div class="container">
        <h1 class="block-title">other shit you might like</h1>
        <div class="row tracks-all">
          <?php while ( $randTracks->have_posts() ) : $randTracks->the_post(); ?>
            <div class="col-6 col-lg-4">
              <?php get_template_part('track-card'); ?>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
      <?php wp_reset_postdata(); ?>
    <?php else : ?>
      <p>No tracks!!</p>
    <?php endif; ?>
  </div>
</div>