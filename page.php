<?php get_header(); ?>
<div class="content page">

  <div class="container">
    <h1 class="title"><?php the_title(); ?></h1>
    
    <?php while(have_posts()) : the_post(); ?>
      <div class="content">
        <?php the_content(); ?><br />
      </div>
    <?php endwhile; ?>
  </div>

</div>
<?php get_footer(); ?>