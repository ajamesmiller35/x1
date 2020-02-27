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
    <h3 id="survey-title">How did it go?</h3>
    <h5>Please fill out the form below based on your experience with the Amazon product page for the DEWALT drill.</h5>
    <h6>For the following statements, select the option most closely matching how you feel.</h6>
        <input type="text" name="version" id="version" class="hidden">
        <div class="form-group">
                <label for="s1">I have the knowledge necessary to use the navigation features of this webpage.</label>
                <select class="form-control" id="s1" name="s1">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option> 
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div>
        <div class="form-group">
                <label for="s2">Using the navigation features was a pleasurable experience.</label>
                <select class="form-control" id="s2" name="s2">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option>
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div>
        <div class="form-group">
                <label for="s3">It would be preferable for me if websites included these features in the future.</label>
                <select class="form-control" id="s3" name="s3">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option>
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div>
        <div class="form-group">
                <label for="s4">The navigation features of this webpage helped me locate information.</label>
                <select class="form-control" id="s4" name="s4">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option>
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div>
        <div class="form-group">
                <label for="s5">It was simple for me to navigate the webpage using the navigation features included.</label>
                <select class="form-control" id="s5" name="s5">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option>
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div>
        <div class="form-group">
                <label for="s6">The navigation features of this webpage were fun to use.</label>
                <select class="form-control" id="s6" name="s6">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option>
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div><div class="form-group">
                <label for="s7">I could get help from others if I had difficulty using the navigation features of this webpage</label>
                <select class="form-control" id="s7" name="s7">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option>
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div>
        <div class="form-group">
                <label for="s8">I enjoyed using the navigation features on this webpage.</label>
                <select class="form-control" id="s8" name="s8">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option>
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div>
        <div class="form-group">
                <label for="s9">Learning how to use the navigation features of this webpage was easy for me.</label>
                <select class="form-control" id="s9" name="s9">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option>
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div>
        <div class="form-group">
                <label for="s10">I have used navigation features on other websites that were similar to this one.</label>
                <select class="form-control" id="s10" name="s10">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option>
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div>
        <div class="form-group">
                <label for="s11">My interaction with the navigation features of the webpage was easy and understandable.</label>
                <select class="form-control" id="s11" name="s11">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option>
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div>
        <div class="form-group">
                <label for="s12">I would be more likely to use a website in the future if it included these navigation features.</label>
                <select class="form-control" id="s12" name="s12">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option>
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div>
        <div class="form-group">
                <label for="s13">I would prefer using websites that included these navigation features.</label>
                <select class="form-control" id="s13" name="s13">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option>
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div>
        <div class="form-group">
                <label for="s14">The navigation features of this webpage increased my chances of finding what I was looking for.</label>
                <select class="form-control" id="s14" name="s14">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option>
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div>
        <div class="form-group">
                <label for="s15">The navigation features of this webpage were useful for finding what I was looking for.</label>
                <select class="form-control" id="s15" name="s15">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Disagree</option>
                    <option value="3">Somewhat Disagree</option>
                    <option selected value="4">Neither Agree nor Disagree</option>
                    <option value="5">Somewhat Agree</option>
                    <option value="6">Agree</option>
                    <option value="7">Strongly Agree</option>
                </select>
        </div>
        <input type="text" name="next" id="next" class="hidden">
        <input type="text" name="type" id="type" class="hidden">
        <input type="text" name="navType" id="navType" class="hidden">
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
            let navOrder = localStorage.getItem('navOrder').split(',');
            let navType = navOrder[testNum];
            $('#navType').val(navType);
            testNum++;
            var next = order[testNum];

            localStorage.setItem('testNum', testNum);

            $('#version').val('0'); 
            $('#next').val(next);
            $('#type').val(type);
            
        });
    </script>
    </body>
</html>