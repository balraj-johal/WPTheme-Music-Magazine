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
  </div>

  <?php get_template_part('latest-tracks'); ?>
  <?php get_template_part('latest-articles'); ?>
</div>

<?php get_footer(); ?>