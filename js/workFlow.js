var startTime= 0, stopTime = 0, totalTime = 0, timeCount = 0;

  $('#begin').on('click', function(){
      $('body').css('position', 'static');
      startTime = Date.now();
      $('.find').css('display', 'none');
  });
  $(document).on('click', '#continue-button', function(){
      stopTime = Date.now();
      totalTime = stopTime - startTime;

        let testNum = localStorage.getItem('testNum');
        let navOrder = localStorage.getItem('navOrder').split(',');
        let navType = navOrder[testNum];

      var data = {
          version: version,
          navType: navType,
          type: type,
          totalTime: totalTime,
          distanceUp: distanceUp,
          distanceDown: distanceDown
      };

      data = JSON.stringify(data);

      $.ajax({
          url: '../../writeResults.php',
          method: 'POST',
          data: {data: data}
      }).done(function(){
        location.href="../review.php";
        });

    });