window.onload = function() {
    if ($('.article .img-top-title').height() > 100) {
        $('.article .img-top-title').addClass('shift-up');
        $('.article .img-top-title').css('top', '-10.5em');
    }
}