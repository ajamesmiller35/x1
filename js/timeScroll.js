timeScroll();

function timeScroll() {
  
    var startTime= 0, stopTime = 0, totalTime = 0, timeCount = 0;
    
    $('#begin').on('click', function(){
        startTime = Date.now();
        window.scrollTo(0,0);
        console.log(startTime);
        $('#find').css('display', 'none');
    });
    $(document).on('click', '#continue-button', function(){
        console.log('clicked');
        stopTime = Date.now();
        console.log(stopTime);
        totalTime = stopTime - startTime;
        console.log('recorded time: ' + totalTime);
    });
    /*$('.target').click(function() {
        stopTime = Date.now();
        console.log(stopTime);
        totalTime = stopTime - startTime;
        console.log('recorded time: ' + totalTime);

        var testNum = Number(localStorage.getItem('testNum'));
        testNum++;
        
        var order = localStorage.getItem('order').split(',');

        if(testNum < 3){
            localStorage.setItem('testNum', testNum);
            //location.href = "/scrolltests/" + order[testNum] + "/index.php";
        }
        else{
            localStorage.setItem('testNum', 0);
            //location.href = "/scrolltests/complete.php";
        }

    });*/
    
}