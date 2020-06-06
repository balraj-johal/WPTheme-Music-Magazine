jQuery(document).ready(function() {
  jQuery('#mci div:first-child').addClass('active');
  
  
  jQuery('#myCarousel .carousel-item').each(function() {
    var minPerSlide = 4;
    var next = jQuery(this).next();
    if (!next.length) {
        next = jQuery(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo(jQuery(this));

    for (var i = 0; i < minPerSlide; i++) {
      next = next.next();
      if (!next.length) {
          next = jQuery(this).siblings(':first');
      }

      next.children(':first-child').clone().appendTo(jQuery(this));
    }
  });

  jQuery('#myCarousel').carousel({
    interval: 1000
  });

});


// jQuery(document).ready(function($) {
//   var $header = $("header"),
//       $clone = $header.before($header.clone().addClass("clone"));

//   $(window).on("scroll", function() {
//       var fromTop = $(window).scrollTop();
//       console.log(fromTop);
//       $("body").toggleClass("down", (fromTop > 200));
//   });
// }