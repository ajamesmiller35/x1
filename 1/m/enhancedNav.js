$(document).ready(function(){

    let testNum = localStorage['testNum'];
    let navType = localStorage['navOrder'][testNum];

    if(navType == 1){
        enhance();
    }

    function enhance(){
        $('.nav-all').css('display', 'block');

        //Set section widths
    let screenWidth = $(window).width();

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
        s6/sTotal * screenWidth
    );

    $('#1').css('width', (s1/sTotal * screenWidth) - 2);
    $('#2').css('width', (s2/sTotal * screenWidth) - 2);
    $('#3').css('width', (s3/sTotal * screenWidth) - 2);
    $('#4').css('width', (s4/sTotal * screenWidth) - 2);
    $('#5').css('width', (s5/sTotal * screenWidth) - 2);
    $('#6').css('width', (s6/sTotal * screenWidth) - 2);

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

    //control navbar position

    let navOffset = $('#nav-enhanced').offset().top;

    $(document).scroll(function(){
        let scrolled = $(window).scrollTop();
        
        if((navOffset - scrolled) < 0){
            $('#nav-enhanced').css('position', 'fixed');
            $('#nav-enhanced').css('top', 0);
            
            $('.odd').css('position', 'fixed');
            $('.odd').css('top', 1);

            $('.even').css('position', 'fixed');
            $('.even').css('top', 42);

            $('.triangle-up').css('position', 'fixed');
            $('.triangle-up').css('top', 15);

            $('.triangle-down').css('position', 'fixed');
            $('.triangle-down').css('top', 35);

            $('#nav-push').css('height', '36');

            $('#indicator').css('position', 'fixed');
            $('#indicator').css('top', 20);

        }
        else{
            $('#nav-enhanced').css('position', 'unset');
            $('#nav-enhanced').css('top', 'unset');

            $('.odd').css('position', 'absolute');
            $('.odd').css('top', 138);

            $('.even').css('position', 'absolute');
            $('.even').css('top', 179);

            $('.triangle-up').css('position', 'absolute');
            $('.triangle-up').css('top', 153);

            $('.triangle-down').css('position', 'absolute');
            $('.triangle-down').css('top', 173);

            $('#nav-push').css('height', '0');

            $('#indicator').css('position', 'absolute');
            $('#indicator').css('top', 158);
        }
    });

    //Control indicator motion

    let scrollArea = $(document).height() - $(window).height() - s7;

    $(document).scroll(function(){
        let scrollFrac = $(window).scrollTop()/scrollArea;
        let displacement = scrollFrac * ($(window).width() - $('#indicator').width());

        if(displacement < ($(window).width() - 10)){
            $('#indicator').css('left', displacement);
            $('#indicator').css('background-color', '#febd69');
        }
        else{
            $('#indicator').css('background-color', 'black');
        }
    });

    //set section title and section triangle position

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

        if(x%2 == 1){
            $(`#c${x}`).css('top', 138);
            $(`#ct${x}`).css('top', 153);
        }
        else{
            $(`#c${x}`).css('top', 175);
            $(`#ct${x}`).css('top', 173);
        }
    }

    //Allow indicator drag

    /*$('#indicator').draggable({
        axis: 'x',
        scroll: 'true'
    });*/
    }

});

