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

    <form method="POST" action="../reviewWrite.php">
    <h3 id="survey-title">Remember your three items?</h3>
    <h5>Please fill out the multiple choice form below:</h5>
        <input type="text" name="version" id="version" class="hidden">
        <div class="form-group">
            <label for="item1">What is the item's weight?</label><br>
            <select class="form-control" id="item1" name="item1">
                <option>9.1 pounds</option>
                <option>8.6 pounds</option>
                <option>10.5 pounds</option>
                <option>I could not find this information</option>
                <option>I don't remember</option>
            </select>
        </div>
        <div class="form-group">
            <label for="item2">What is the name of the first reviewer on the page?</label><br>
            <select class="form-control" id="item2" name="item2">
                <option>jhawk1966</option>
                <option>The Wulph</option>
                <option>TCosgrove29</option>
                <option>I could not find this information</option>
                <option>I don't remember</option>
            </select>
        </div>
        <div class="form-group">
            <label for="item3">How many upvotes did the question "Does the drill have a hammer setting?" get?</label><br>
            <select class="form-control" id="item3" name="item3">
                <option>23</option>
                <option>42</option>
                <option>19</option>
                <option>I could not find this information</option>
                <option>I don't remember</option>
            </select>
        </div>
        <input type="text" name="next" id="next" class="hidden">
        <input type="text" name="type" id="type" class="hidden">
        <button class="goButton" type="submit">Continue</button>
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
            testNum;
            var next = order[testNum];

            localStorage.setItem('testNum', testNum);

            $('#version').val('0'); 
            $('#next').val(next);
            $('#type').val(type);
        });
    </script>
    </body>
</html>