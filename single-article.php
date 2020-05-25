<div class="content article">

  <div class="img-top-wrap">
    <?php 
      $image = get_field('image'); // TODO change to correct field
      $size = 'full'; // (thumbnail, medium, large, full or custom size)
      if( $image ) {
          echo wp_get_attachment_image( $image, $size );
      }
    ?>
    <div class="img-top-title">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>

  <div class="container">
    <?php while(have_posts()) : the_post(); ?>
      <?php the_time(get_option('date_format')); ?><br />
      <?php the_content(); ?><br />
    <?php endwhile; ?>
  </div>

</div>