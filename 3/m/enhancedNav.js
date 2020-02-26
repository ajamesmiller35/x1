$(document).ready(function(){

    //set nav width
    $('#nav-enhanced').css('width', $(window).height() );

    //set nav position
    $('#nav-enhanced').css('top', ( $(window).height() * .5 ) - ( $('#nav-enhanced').height() / 2 ) - 10 );
    $('#nav-enhanced').css('left', -(($('#nav-enhanced').width() / 2) - ($('#nav-enhanced').height() / 2) - 10));

    console.log($(window).height());
    console.log($('#nav-enhanced').width());

    console.log($('#nav-enhanced').css('top'));

    //Set section widths
    let screenWidth = $(window).height();

    let s1 = $('#division2').offset().top - $('#division1').offset().top;
    let s2 = $('#division3').offset().top - $('#division2').offset().top;
    let s3 = $('#division4').offset().top - $('#division3').offset().top;
    let s4 = $('#division5').offset().top - $('#division4').offset().top;
    let s5 = $('#division6').offset().top - $('#division5').offset().top;
    let s6 = $('#division7').offset().top - $('#division6').offset().top;
    let s7 = $('#division8').offset().top - $('#division7').offset().top;

    let sTotal = s1 + s2 + s3 + s4 + s5 + s6;

    console.log('s1: ' + s1);
    console.log('s2: ' + s2);
    console.log('s3: ' + s3);
    console.log('s4: ' + s4);
    console.log('s5: ' + s5);
    console.log('s6: ' + s6);
    console.log('sTotal: ' + sTotal);
    console.log('screenWidth: ' + screenWidth);
    console.log(s1/sTotal * screenWidth);
    console.log(s2/sTotal * screenWidth);
    console.log(s3/sTotal * screenWidth);
    console.log(s4/sTotal * screenWidth);
    console.log(s5/sTotal * screenWidth);
    console.log(s6/sTotal * screenWidth);
    console.log(
        s1/sTotal * screenWidth +
        s2/sTotal * screenWidth +
        s3/sTotal * screenWidth +
        s4/sTotal * screenWidth +
        s5/sTotal * screenWidth +
        s5/sTotal * screenWidth
    );

    $('#1').css('width', (s1/sTotal * screenWidth) - 3);
    $('#2').css('width', (s2/sTotal * screenWidth) - 3);
    $('#3').css('width', (s3/sTotal * screenWidth) - 3);
    $('#4').css('width', (s4/sTotal * screenWidth) - 4);
    $('#5').css('width', (s5/sTotal * screenWidth) - 4);
    $('#6').css('width', (s6/sTotal * screenWidth) - 4);

    //Set indicator width
    let indicatorWidth = $(window).height()/$(document).height() * $(window).height();
    $('#indicator').css('width', indicatorWidth);

    //Control indicator motion

    let scrollArea = $(document).height() - $(window).height() - s7;

    $(document).scroll(function(){
        let scrollFrac = $(window).scrollTop()/scrollArea;
        let displacement = scrollFrac * ($(window).height() - $('#indicator').width());

        if(displacement < ($(window).height() - 30)){
            $('#indicator').css('left', displacement);
            $('#indicator').css('background-color', '#febd69');
            console.log($(window).width());
            console.log(displacement);
        }
        else{
            $('#indicator').css('background-color', 'black');
        }
    });

    //set section title position

    for(let x = 1; x < 7; x++){
        let sectionWidth = $(`#${x}`).width();
        let textWidth = $(`#c${x}`).width();
        let leftOffset = $(`#${x}`).offset().top;
        let pushLeft = leftOffset + (sectionWidth/2) - (textWidth/2);
        let tPushLeft = leftOffset + (sectionWidth/2) - (30/2);

        console.log("x: " + x);
        console.log('push left: ' + pushLeft);

        $(`#c${x}`).css('left', pushLeft);
        $(`#ct${x}`).css('left', tPushLeft);

        if(x%2 == 1){
            $(`#c${x}`).css('top', 0);
            $(`#ct${x}`).css('top', 15);
        }
        else{
            $(`#c${x}`).css('top', 41);
            $(`#ct${x}`).css('top', 35);
        }
    }

});

