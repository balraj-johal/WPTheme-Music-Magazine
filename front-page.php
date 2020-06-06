<?php get_header(); ?>

<div class="content">
  <!-- <div class="your-class">
    <div>your content</div>
    <div>your content</div>
    <div>your content</div>
  </div> -->

  <div class="container">
    <div class="row">
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

          <!-- TODO: add socials under featured -->

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <div class="twitter col-lg-4 col-12">
        <h1 class="block-title">
          FEED
        </h1>
        <div class="twitter-timeline-wrapper">
          <a class="twitter-timeline" data-height="488" data-theme="light" href="https://twitter.com/paradoujin?ref_src=twsrc%5Etfw">Tweets by paradoujin</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
      </div>
    </div>
    <div class="row playlists">
      <a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        <img class="playlist-img" src="<?php echo get_bloginfo('template_url') ?>/resources/images/rap-royalty.png" draggable="false"/>
      </a>
      <div class="spotify-container collapse" id="collapseExample">
        <iframe src="https://open.spotify.com/embed/playlist/1a2lGzQxf5AdipnKmPpb9I" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>

  <?php get_template_part('latest-tracks'); ?>
  <?php get_template_part('latest-articles'); ?>
</div>

<?php get_footer(); ?>