window.onload = function() {

// shift article title up and down depending
    if ($(window).width() > 768) {
        if ($('.article .img-top-title').height() > 78) {
            $('.article .img-top-title').addClass('shift-up');
            $('.article .img-top-title').css('top', '-10.5em');
        }
    } else if ($(window).width() > 576) {
        if ($('.article .img-top-title').height() > 50) {
            // $('.article .img-top-title').addClass('shift-up');
            $('.article .img-top-title').css('top', '-5.5em');
        }
    }

// navbar shit
    $(".navbar-toggler").click(() => {
        if ($("#navbarSupportedContent").hasClass("show")) {
            $(".navbar").removeClass("bg-transition")
        } else {
            $(".navbar").addClass("bg-transition")
        }
    })

// show hide twitter widget code
    const showTwitter = () => {
        if ($(window).width() > 992) {
            $("#twitterCollapse").addClass("show")
        }
    }
    showTwitter();
    $(window).resize(function() {
        showTwitter();
    });


// fade in on scroll
    const intersectionObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (entry.intersectionRatio > 0) {
                entry.target.classList.add("is-visible");
                observer.unobserve(entry.target);
            }
        });
    });
    // get your elements, by class name '.js-item'
    const elements = [...document.querySelectorAll('.fade-in-section')];
    // const elements = [].filter.call(
    //     document.querySelectorAll('.fade-in-section'),
    //     // element => !element.classList.contains(element, "is-visible"),
    // );
    // start observing your elements
    elements.forEach((element) => intersectionObserver.observe(element));
}