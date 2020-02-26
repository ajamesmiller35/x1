$(document).ready(function() {
    $('.indicator').css('display', 'block');

    $(window).on('scroll', function() {

        var navHeight = $('.nav-vertical').height();
        var docHeight = $(document).height() - 64;
        
        var indicatorDisplace = 80 + ( $(window).scrollTop()/docHeight ) * navHeight;

        $('.indicator').css('top', indicatorDisplace);

    });

});