<?php get_header(); ?>

<div class="content">
  <!-- <div class="your-class">
    <div>your content</div>
    <div>your content</div>
    <div>your content</div>
  </div> -->

  <div class="container">
    <div class="row">
      <?php get_template_part('featured-block'); ?>
      <div class="twitter col-lg-4 col-12">
        <h1 class="block-title">
          FEED
        </h1>
        <h1 class="title">
          @paradoujin
        </h1>
        <div class="twitter-timeline-wrapper">
          <a class="twitter-timeline" data-height="471" data-theme="light" href="https://twitter.com/paradoujin?ref_src=twsrc%5Etfw" data-chrome="nofooter transparent noheader">Tweets by paradoujin</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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