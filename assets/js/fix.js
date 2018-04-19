$(window).bind('scroll', function () {
    if ($(window).scrollTop() > 0) {
        $("header").animate({
        	'animHead': $('header').addClass('fix')
        }, 5000)
        $(this).animate({
        	'animCont': $('#cont').addClass('content')
        }, 5000)
    } else {
         $("header").animate({
        	'animHead': $('header').removeClass('fix')
        }, 5000)
        $("#cont").animate({
        	'animCont': $('#cont').removeClass('content')
        }, 5000)
    }
});