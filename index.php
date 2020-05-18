<?php get_header(); ?>
  <div class="header-nav">
    <div class="header-nav-bg-wrapper">
      <img src="<?php echo get_bloginfo('template_url') ?>/resources/images/static.gif"/>
    </div>
    <h1 class="site-title">
      <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
    </h1>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark-on-collapse navbar-override">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php wp_nav_menu(array(
          'theme_location' => 'header-menu',
          'menu_class' => 'navbar-nav mr-auto' 
          )); 
        ?>
      </div>
    </nav>
  </div>

  <div class="content container">
    <?php
      if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
          <h2><?php the_title() ?></h2>
          <?php the_content() ?>
        <?php endwhile;
      else :
        echo '<p>Aint shit here!</p>';
      endif;
    ?>
  </div>

<?php get_footer(); ?>