<?php
    session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Survey</title>
  </head>
  <body>

    <form method="POST" action="./feedbackWrite.php">
    <h3 id="survey-title">What did you think?</h3>
    <div class="version-box">
        <h5>Version 1:</h5>
        <img class="hidden dem-d" src="images/nav-dem0-d.png" alt="">
        <img class="hidden dem-m" src="images/nav-dem0-m.png" alt="">
      </div>
      <div class="version-box">
        <h5>Version 2:</h5>
        <img class="hidden dem-d" src="images/nav-dem1-d.png" alt="">
        <img class="hidden dem-m" src="images/nav-dem1-m.png" alt="">
      </div>
        <div class="form-group">
            <label for="feedback"><h6>Considering the two versions included in this study, what did you think of the additional navigation features included in Version 2? How could they be improved? (optional)</h6></label>
            <textarea class="form-control" id="feedback" name="feedback" rows="4"></textarea>
        </div>
        
        <button id="feedback-button" class="goButton" type="submit">Continue</button>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
       $(document).ready(function(){

            var order = localStorage.getItem('order').split(',');
            var testNum = localStorage.getItem('testNum');
            var type = localStorage.getItem('type');
            testNum++;
            var next = order[testNum];

            localStorage.setItem('testNum', testNum);

            $('#version').val('1'); 
            $('#next').val(next);
            $('#type').val(type);

            if(type == 'm'){
            $('.dem-m').removeClass('hidden');
            }
            else{
            $('.dem-d').removeClass('hidden');
            }
            });
    </script>
    </body>
</html>