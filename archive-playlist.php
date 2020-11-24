<?php get_header(); ?>
<div class="content page">

  <?php
    $queryPlaylists = new WP_Query( array(
      'post_type' => 'playlist'
    )); 
  ?>
  <?php if ( $queryPlaylists->have_posts() ) : ?>
    <div class="playlists-all row">
      <?php while ( $queryPlaylists->have_posts() ) : $queryPlaylists->the_post(); ?>
        <?php get_template_part('playlist-card'); ?>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </div>
    <h1 class="block-title">
      <a href="track/" class="fix-a-white">SEE MORE ></a>
    </h1>
  <?php else : ?>
    <p>No playlists!!</p>
  <?php endif; ?>

</div>
<?php get_footer(); ?>