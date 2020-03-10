$.fn.inView = function() {

    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();
    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();
    
    return elementBottom > viewportTop && elementTop < viewportBottom;
}

setInterval(function locate(){

    if($('.n1').inView()){
        $('#nav-li-8 h6').addClass('active');
        $('#nav-li-8').addClass('low-margin');
    }
    else{
        $('#nav-li-8 h6').removeClass('active');
        $('#nav-li-8').removeClass('low-margin');
    }
    if($('.n2').inView()){
        $('#nav-li-4 h6').addClass('active');
        $('#nav-li-4').addClass('low-margin');
    }
    else{
        $('#nav-li-4 h6').removeClass('active');
        $('#nav-li-4').removeClass('low-margin');
    }
    if($('.n3').inView()){
        $('#nav-li-5 h6').addClass('active');
        $('#nav-li-5').addClass('low-margin');
    }
    else{
        $('#nav-li-5 h6').removeClass('active');
        $('#nav-li-5').removeClass('low-margin');
    }
    if($('.n4').inView()){
        $('#nav-li-6 h6').addClass('active');
        $('#nav-li-6').addClass('low-margin');
    }
    else{
        $('#nav-li-6 h6').removeClass('active');
        $('#nav-li-6').removeClass('low-margin');
    }
    if($('.n5').inView()){
        $('#nav-li-7 h6').addClass('active');
        $('#nav-li-7').addClass('low-margin');
    }
    else{
        $('#nav-li-7 h6').removeClass('active');
        $('#nav-li-7').removeClass('low-margin');
    }
    

}, 100);

