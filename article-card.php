<div class="card article-card">
  <?php
    $posttags = get_the_tags();
    $count=0;
    $firstTag = null;
    if ($posttags) {
      foreach($posttags as $tag) {
        $count++;
        if (1 == $count) {
          $firstTag = $tag->name;
        }
      }
    }
    if ($firstTag):
  ?>
    <a class="fix-a-white" href="tag/<?php echo $firstTag ?>">
      <div class="article-tag">
        <?php echo $firstTag ?>
      </div>
    </a>
  <?php endif; ?>
  <div class="contents">
    <a class="fix-a" href="<?php the_permalink(); ?>">
      <div class="article-card-img-wrap">
        <?php 
          $image = get_field('image'); // TODO change to correct field
          $size = 'full'; // (thumbnail, medium, large, full or custom size)
          if( $image ) {
              echo wp_get_attachment_image( $image, $size );
          }
        ?>
      </div>
    </a>
    <a class="fix-a" href="<?php the_permalink(); ?>">
      <h2 class="titles">
        <?php the_title(); ?>
      </h2>
    </a>
    <div class="excerpt">
      <?php the_excerpt(); ?>
    </div>
  </div>
</div>