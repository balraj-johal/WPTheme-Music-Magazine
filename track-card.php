<div class="card track-card">
  <a class="fix-a" href="<?php the_permalink(); ?>">
    <div class="track-card-img-wrap">
      <?php 
        $image = get_field('track_image');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if( $image ) {
          //echo wp_get_attachment_image( $image, $size );
        }
      ?>
      <img src="https://img.youtube.com/vi/<?php the_field('video_id') ?>/maxresdefault.jpg"></img>
    </div>
  </a>
  <a class="fix-a" href="<?php the_permalink(); ?>">
    <h2 class="titles">
      <?php the_field('track_name'); ?> - 
      <?php the_field('artist'); ?>
    </h2>
    <div class="excerpt">
      <?php the_excerpt(); ?>
    </div>
  </a>
</div>