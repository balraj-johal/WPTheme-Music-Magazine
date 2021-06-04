<?php get_header(); ?>
<div class="content track-page">
  <div class="img-top-wrap no-dragging-dickhead">
    
    <?php $video_ID = get_field('video_id') ?>
    <div class="iframe-container container-override">
      <iframe src="https://www.youtube.com/embed/<?php echo $video_ID ?>?wmode=opaque&modestbranding=1" allowfullscreen></iframe>
    </div>

    <!-- <div class="img-top-title no-dragging-dickhead">
      <h1><?php the_title(); ?></h1>
    </div> -->
  </div>

  <!-- 
    Track details, i.e. title and description
  -->
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
    <?php endwhile; ?>
  </div>

  <div class="">
    <!-- 
      Tracks related by tags, not including current post
      sorted randomly
    -->
    <?php 
      //get tags as comma seperated string, get_the_tags_list() had dumb formatting on it
      //that stopped it from being quieried
      $term_list = join(',', array_map(function($t) { return $t->name; }, get_the_tags()));
      $related_args = array(
        'post_type' => 'track',
        'posts_per_page' => 4,
        'post_status' => 'publish',
        'post__not_in' => array(get_the_ID()),
        'orderby' => 'rand',
        'tag' => $term_list
      );
      $related = new WP_Query( $related_args );
      if ( $related->have_posts() ) : ?>
        <div class="other-shit">
          <div class="bg"></div>
          <div class="container">
            <h1 class="block-title">other shit you might like</h1>
            
            <div class="row">
              <div class="carousel slide w-100" data-ride="carousel" id="myCarousel">
                  <div class="carousel-inner w-100" role="listbox" id="mci">
                    <?php while ( $related->have_posts() ) : $related->the_post(); ?>
                      <div class="carousel-item">
                        <div class="col-11 col-md-6 col-lg-4">     
                          <?php get_template_part('track-card'); ?>
                        </div>
                      </div>
                    <?php endwhile; ?>
                  </div>
                <a class="carousel-control-prev w-auto" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next w-auto" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
              </div>
              <?php wp_reset_postdata(); ?>
            </div>
          </div>
      </div>
      <?php wp_reset_postdata(); ?>
    <?php else : ?>
      <p>No tracks!!</p>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>