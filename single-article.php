<div class="content article">

  <div class="img-top-wrap no-dragging-dickhead">
    <?php 
      $image = get_field('image'); // TODO change to correct field
      $size = 'full'; // (thumbnail, medium, large, full or custom size)
      if( $image ) {
          echo wp_get_attachment_image( $image, $size );
      }
    ?>
    <div class="img-top-title no-dragging-dickhead">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>

  <div class="container-o">
    <?php while(have_posts()) : the_post(); ?>
      <div class="details">
        <span class="post-date"><?php the_time(get_option('date_format')); ?></span> - <span class="author"><?php the_author() ?></span><br />
      </div>
      <div class="content">
        <?php the_content(); ?><br />
      </div>
    <?php endwhile; ?>
  </div>

</div>