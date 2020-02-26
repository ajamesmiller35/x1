$(document).ready(function(){

    //Set section widths
    let screenWidth = $(window).width() - 15;

    let s1 = $('#division2').offset().top - $('#division1').offset().top;
    let s2 = $('#division3').offset().top - $('#division2').offset().top;
    let s3 = $('#division4').offset().top - $('#division3').offset().top;
    let s4 = $('#division5').offset().top - $('#division4').offset().top;
    let s5 = $('#division6').offset().top - $('#division5').offset().top;
    let s6 = $('#division7').offset().top - $('#division6').offset().top;
    let s7 = $('#division8').offset().top - $('#division7').offset().top;

    let sTotal = s1 + s2 + s3 + s4 + s5 + s6;

    $('#1').css('width', (s1/sTotal * screenWidth) - 0);
    $('#2').css('width', (s2/sTotal * screenWidth) - 0);
    $('#3').css('width', (s3/sTotal * screenWidth) - 0);
    $('#4').css('width', (s4/sTotal * screenWidth) - 0);
    $('#5').css('width', (s5/sTotal * screenWidth) - 0);
    $('#6').css('width', (s6/sTotal * screenWidth) - 1);

    //Set triangle width if section width less that 30px
    for(let x = 1; x < 7; x++){
        let sWidth = $(`#${x}`).width(); 
        let newWidth = sWidth/2;
        console.log('sWidth: ' + sWidth );
        if(sWidth < 30){
            console.log('triggered');
            $(`#ct${x}`).css('border-left', `${newWidth}px solid transparent`);
            $(`#ct${x}`).css('border-right', `${newWidth}px solid transparent`);
        }
    }

    //Set indicator width
    let indicatorWidth = $(window).height()/$(document).height() * $(window).width();
    $('#indicator').css('width', indicatorWidth);

    //Control indicator motion

    let scrollArea = $(document).height() - $(window).height() - s7;

    $(document).scroll(function(){
        let scrollFrac = $(window).scrollTop()/scrollArea;
        let displacement = scrollFrac * ($(window).width() - $('#indicator').width());

        if(displacement < ($(window).width()) - 10){
            $('#indicator').css('left', displacement);
            $('#indicator').css('background-color', '#febd69');
        }
        else{
            $('#indicator').css('background-color', 'black');
        }
    });

    //set section title position

    for(let x = 1; x < 7; x++){
        let sectionWidth = $(`#${x}`).width();
        let textWidth = $(`#c${x}`).width();
        let leftOffset = $(`#${x}`).offset().left;
        let triangleWidth = 30;
        if(sectionWidth < 30){
            triangleWidth = sectionWidth;
        }
        let pushLeft = leftOffset + (sectionWidth/2) - (textWidth/2);
        if(pushLeft < 0){
            pushLeft = 0;
        }
        let tPushLeft = leftOffset + (sectionWidth/2) - (triangleWidth/2);

        $(`#c${x}`).css('left', pushLeft);
        $(`#ct${x}`).css('left', tPushLeft);

        $(`#c${x}`).css('left', pushLeft);
        $(`#ct${x}`).css('left', tPushLeft);

        if(x%2 == 1){
            $(`#c${x}`).css('top', 3);
            $(`#ct${x}`).css('top', 15);
        }
        else{
            $(`#c${x}`).css('top', 41);
            $(`#ct${x}`).css('top', 35);
        }
    }

});

