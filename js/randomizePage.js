$(document).ready(function(){
    var pageOrder = [];

    pageOrder[0] = getRandomInt(4);
    pageOrder[1] = getRandomInt(4);
    pageOrder[2] = getRandomInt(4);

    while(pageOrder[0] == pageOrder[1]){
        pageOrder[1] = getRandomInt(4);
    }
    while(pageOrder[0] == pageOrder[2] || pageOrder[1] == pageOrder[2]){
        pageOrder[2] = getRandomInt(4);
    }

    pageOrder[3] = 6 - pageOrder[0] - pageOrder[1] - pageOrder[2];

    for(let i = 0; i < 4; i++){
        $('#nav-li-' + (i+4)).append($('#nav-li-'+ pageOrder[i]).html());
        $('#content' + (i+4)).append($('#content' + pageOrder[i]).html());
    }

});

$(document).ready(function(){
    let option = Math.round(Math.random());
    if(option == 1){
    $('#l2').prependTo('.location-box');
    }
    option = Math.round(Math.random());
    if(option == 1){
    $('#c2').prependTo('.contact-box');
    }
    option = Math.round(Math.random());
    if(option == 1){
    $('#h2').prependTo('.hours-box');
    }
    option = Math.round(Math.random());
    if(option == 1){
    $('#p2').prependTo('.pricing-box');
    }

});


function getRandomInt(max) {
    return Math.floor(Math.random() * Math.floor(max));
  }
