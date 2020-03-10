$(document).ready(function() {
    var indicatorStart = ($(window).width()-$('.nav-horizontal').width())/2;
    $('.indicator').css('display', 'block');
    $('.indicator').css('left', indicatorStart);

    $(window).on('scroll', function() {
        console.log($(window).scrollTop());
        console.log($(document).height());

        var navWidth = $('.nav-horizontal').width() + 12;
        var docHeight = $(document).height();
        
        var indicatorDisplace = indicatorStart + ( $(window).scrollTop()/docHeight ) * navWidth;

        $('.indicator').css('left', indicatorDisplace);

    });

});