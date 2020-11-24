<?php get_header(); ?>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
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
        <a class="fix-a" data-toggle="collapse" href="#twitterCollapse" role="button" aria-expanded="false" aria-controls="twitterCollapse">
          <h1 class="block-title" style="text-transform: lowercase;">show ˅</h1>
        </a>
        <div class="twitter-timeline-wrapper">
          <div class="collapse" id="twitterCollapse">
            <a class="twitter-timeline" data-height="471" data-theme="light" href="https://twitter.com/paradoujin?ref_src=twsrc%5Etfw" data-chrome="nofooter transparent noheader">Tweets by paradoujin</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="row playlists">
      <a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        <img class="playlist-img" src="<?php echo get_bloginfo('template_url') ?>/resources/images/rap-royalty.png" draggable="false"/>
      </a>
      <div class="spotify-container collapse" id="collapseExample">
        <iframe src="https://open.spotify.com/embed/playlist/1a2lGzQxf5AdipnKmPpb9I" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div> -->

    <!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            <img class="playlist-img" src="<?php echo get_bloginfo('template_url') ?>/resources/images/rap-royalty.png" draggable="false"/>
          </a>
          <div class="spotify-container collapse" id="collapseExample">
            <iframe src="https://open.spotify.com/embed/playlist/1a2lGzQxf5AdipnKmPpb9I" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
          </div>
        </div>
        <div class="carousel-item">
          <a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            <img class="playlist-img" src="<?php echo get_bloginfo('template_url') ?>/resources/images/rap-royalty.png" draggable="false"/>
          </a>
          <div class="spotify-container collapse" id="collapseExample">
            <iframe src="https://open.spotify.com/embed/playlist/1a2lGzQxf5AdipnKmPpb9I" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
          </div>
        </div>
        <div class="carousel-item">
          <a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            <img class="playlist-img" src="<?php echo get_bloginfo('template_url') ?>/resources/images/rap-royalty.png" draggable="false"/>
          </a>
          <div class="spotify-container collapse" id="collapseExample">
            <iframe src="https://open.spotify.com/embed/playlist/1a2lGzQxf5AdipnKmPpb9I" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div> -->
  </div>

  <?php get_template_part('latest-tracks'); ?>
  <?php get_template_part('latest-articles'); ?>
</div>

<?php get_footer(); ?>