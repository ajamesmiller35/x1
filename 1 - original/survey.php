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

    <form method="POST" action="../surveyWrite.php">
    h3 id="survey-title">How did it go?</h3>
    <h5>Please fill out the form below based on your experience with the Amazon product page for the KitchenAid Mixer.</h5>
    <h6>For the following statements, select the option most closely matching how you feel.</h6>
        <input type="text" name="version" id="version" class="hidden">
        <div class="form-group">
                <label for="s1-1">It would be preferable for me if websites included these features in the future.</label>
                <select class="form-control" id="s1-1" name="s1-1">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option> 
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Strongly Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div>
        <div class="form-group">
                <label for="s1-2">The navigation of this webpage helped me locate information.</label>
                <select class="form-control" id="s1-2" name="s1-2">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option>
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Strongly Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div>
        <div class="form-group">
                <label for="s1-3">It is easy for me to navigate the webpage using the navigation features included.</label>
                <select class="form-control" id="s1-3" name="s1-3">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option>
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Strongly Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div>
        <div class="form-group">
                <label for="s1-4">II would prefer using websites that included these navigation features.</label>
                <select class="form-control" id="s1-4" name="s1-4">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option>
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Strongly Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div>
        <div class="form-group">
                <label for="s1-5">Learning how to use the navigation features of this webpage was easy for me.</label>
                <select class="form-control" id="s1-5" name="s1-5">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option>
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Strongly Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div>
        <div class="form-group">
                <label for="s1-6">I have the knowledge necessary to use the navigation features of this webpage.</label>
                <select class="form-control" id="s1-6" name="s1-6">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option>
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Strongly Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div><div class="form-group">
                <label for="s1-7">The webpage displayed properly on my device.</label>
                <select class="form-control" id="s1-7" name="s1-7">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option>
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Strongly Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div>
        <div class="form-group">
                <label for="s1-8">I would be more likely to use a website in the future if it included these navigation features.</label>
                <select class="form-control" id="s1-8" name="s1-8">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option>
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Strongly Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div>
        <div class="form-group">
                <label for="s1-9">The navigation features of this webpage were fun to use.</label>
                <select class="form-control" id="s1-9" name="s1-9">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option>
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Strongly Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div>
        <div class="form-group">
                <label for="s1-10">I enjoyed using the navigation features of this webpage.</label>
                <select class="form-control" id="s1-10" name="s1-10">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option>
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Strongly Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div>
        <div class="form-group">
                <label for="s1-11">The navigation features of this webpage increase my chances of finding what I am looking for.</label>
                <select class="form-control" id="s1-11" name="s1-11">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option>
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Strongly Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div>
        <div class="form-group">
                <label for="s1-12">Using the navigation features made my interaction with this website more enjoyable.</label>
                <select class="form-control" id="s1-12" name="s1-12">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option>
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Strongly Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div>
        <div class="form-group">
                <label for="s1-13">My interaction with the navigation features of the webpage were easy and understandable.</label>
                <select class="form-control" id="s1-13" name="s1-13">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option>
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Strongly Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div>
        <div class="form-group">
                <label for="s1-14">I find the navigation features of this webpage useful for finding what I am looking for.</label>
                <select class="form-control" id="s1-14" name="s1-14">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option>
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Strongly Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div>
        <div class="form-group">
                <label for="s1-15">The navigation features of the webpage worked well on my device.</label>
                <select class="form-control" id="s1-15" name="s1-15">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option>
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Strongly Agree</option>
                    <option value="7">Strongly Agree</option>
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
            testNum++;
            var next = order[testNum];

            localStorage.setItem('testNum', testNum);

            $('#version').val('1'); 
            $('#next').val(next);
            $('#type').val(type);
        });
    </script>
    </body>
</html>