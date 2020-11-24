<div class="col-12 col-sm-6 col-lg-4">
  <div class="playlist-card">
    <a class="fix-a" href="<?php the_field('spotify_link'); ?>" target=”_blank”>
      <div class="playlist-img-wrap">
        <?php 
          $image = get_field('playlist_image'); // TODO change to correct field
          $size = 'full'; // (thumbnail, medium, large, full or custom size)
          if( $image ) {
              echo wp_get_attachment_image( $image, $size );
          }
        ?>
      </div>
    </a>
  </div>
</div>