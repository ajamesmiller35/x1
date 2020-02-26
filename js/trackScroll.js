var distanceDown = 0;
var distanceUp = 0;
var last = 0;

function trackScroll() {

    $(document).on('click','#begin', function(){
        distanceDown = 0;
        distanceUp = 0;
        console.log(distanceUp);
        console.log(distanceDown);
    });

    $(document).on('scroll', function() {
        if (last <= $(window).scrollTop()){
            distanceDown += $(window).scrollTop() - last;
        }
        if (last > $(window).scrollTop()){
            distanceUp += last - $(window).scrollTop();
        }
        console.log('distanceDown:' + distanceDown);
        console.log('distanceUp:' + distanceUp);
        last = $(window).scrollTop();
    });

}

trackScroll();