var height = $(window).height() - 64;
var width = $(window).width();

$('.white-section').css('height', height);
$('.grey-section').css('height', height);

$(window).on('load', function(){

    /*var locationImgMargin = (height - 280)/10;

    $('.location-img').css('margin-top', locationImgMargin);
    $('.location-img').css('margin-bottom', locationImgMargin);*/

    var locationImgHeight = ((height - 280)/5) + 48;

    $('.location-table .location-img').css('height', locationImgHeight);
    
    console.log($('#hours-table').height());

    var vcLocationMargin = (height - $('.vc').height())/2;
    $('.vc').css('padding-top', vcLocationMargin);

    //var hoursTableMargin = (height - 232)/2;
    var hoursTDMargin = (height - 232)/16;
    //$('#hours-table').css('margin-top', hoursTableMargin);

    $('.hours-td').css('padding-top', hoursTDMargin);
    $('.hours-td').css('padding-bottom', hoursTDMargin);

    if(height > 600){
    var cardsMargin = (height - $('.card').height())/6;
    $('.card').css('margin-top', cardsMargin);
    }

    var contactMargin = (height - 380)/10;
    $('.contact-icon').css('margin-top', contactMargin);
    $('.contact-icon').css('margin-bottom', contactMargin);

    if(width > 600){
    var tdWidth = width/3;
    $('.find td').css('width', tdWidth);
    $('.find td').css('padding-left', tdWidth/10);
    $('.find td').css('padding-right', tdWidth/10);
    }


});

