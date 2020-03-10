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
    <input type="text" name="version" id="version" class="hidden">
    <h3 id="survey-title">How did it go?</h3>
    <h5>Please fill out the form below based on your experience with the Amazon product page for the MacBook Air</h5>
        <div class="form-group">
            <label for="problem"><h6>Did you experience any technical difficulties?</h6></label><br>
            <select class="form-control" id="problem" name="problem">
                <option selected>No</option>
                <option>Yes</option>
            </select>
        </div>
        <div class="form-group">
            <label for="problem-explanation"><h6>If yes, please explain:</h6></label>
            <textarea class="form-control" id="problem-explanation" rows="3" name="problem-explanation"></textarea>
    </div>
    <div class="horizontal-divider"></div>
    <h5>For the following statements, select the option most closely matching how you feel.</h5>
        <div class="form-group">
                <h6>I have the knowledge necessary to use the navigation features of this webpage.</h6>
                <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary"><input type="radio" name="s1" id="s1" value="1" autocomplete="off"> Strongly Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s1" id="s1" value="2" autocomplete="off"> Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s1" id="s1" value="3" autocomplete="off"> Somewhat Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s1" id="s1" value="4" autocomplete="off"> Neither Agree nor Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s1" id="s1" value="5" autocomplete="off"> Somewhat Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s1" id="s1" value="6" autocomplete="off"> Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s1" id="s1" value="7" autocomplete="off"> Strongly Agree </label>
                </div>
        </div>
        <div class="form-group">
                <h6>Using the navigation features was a pleasurable experience.</h6>
                <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary"><input type="radio" name="s2" id="s2" value="1" autocomplete="off"> Strongly Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s2" id="s2" value="2" autocomplete="off"> Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s2" id="s2" value="3" autocomplete="off"> Somewhat Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s2" id="s2" value="4" autocomplete="off"> Neither Agree nor Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s2" id="s2" value="5" autocomplete="off"> Somewhat Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s2" id="s2" value="6" autocomplete="off"> Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s2" id="s2" value="7" autocomplete="off"> Strongly Agree </label>
                </div>
        </div>
        <div class="form-group">
                <h6>It would be preferable for me if websites included these features in the future.</h6>
                <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary"><input type="radio" name="s3" id="s3" value="1" autocomplete="off"> Strongly Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s3" id="s3" value="2" autocomplete="off"> Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s3" id="s3" value="3" autocomplete="off"> Somewhat Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s3" id="s3" value="4" autocomplete="off"> Neither Agree nor Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s3" id="s3" value="5" autocomplete="off"> Somewhat Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s3" id="s3" value="6" autocomplete="off"> Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s3" id="s3" value="7" autocomplete="off"> Strongly Agree </label>
                </div>
        </div>
        <div class="form-group">
                <h6>The navigation features of this webpage helped me locate information.</h6>
                <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary"><input type="radio" name="s4" id="s4" value="1" autocomplete="off"> Strongly Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s4" id="s4" value="2" autocomplete="off"> Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s4" id="s4" value="3" autocomplete="off"> Somewhat Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s4" id="s4" value="4" autocomplete="off"> Neither Agree nor Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s4" id="s4" value="5" autocomplete="off"> Somewhat Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s4" id="s4" value="6" autocomplete="off"> Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s4" id="s4" value="7" autocomplete="off"> Strongly Agree </label>
                </div>
        </div>       
        <div class="form-group">
                <h6>It was simple for me to navigate the webpage using the navigation features included.</h6>
                <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary"><input type="radio" name="s5" id="s5" value="1" autocomplete="off"> Strongly Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s5" id="s5" value="2" autocomplete="off"> Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s5" id="s5" value="3" autocomplete="off"> Somewhat Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s5" id="s5" value="4" autocomplete="off"> Neither Agree nor Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s5" id="s5" value="5" autocomplete="off"> Somewhat Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s5" id="s5" value="6" autocomplete="off"> Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s5" id="s5" value="7" autocomplete="off"> Strongly Agree </label>
                </div>
        </div>
        <div class="form-group">
                <h6>The navigation features of this webpage were fun to use.</h6>
                <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary"><input type="radio" name="s6" id="s6" value="1" autocomplete="off"> Strongly Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s6" id="s6" value="2" autocomplete="off"> Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s6" id="s6" value="3" autocomplete="off"> Somewhat Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s6" id="s6" value="4" autocomplete="off"> Neither Agree nor Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s6" id="s6" value="5" autocomplete="off"> Somewhat Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s6" id="s6" value="6" autocomplete="off"> Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s6" id="s6" value="7" autocomplete="off"> Strongly Agree </label>
                </div>
        </div>
        <div class="form-group">
                <h6>I could get help from others if I had difficulty using the navigation features of this webpage.</h6>
                <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary"><input type="radio" name="s7" id="s7" value="1" autocomplete="off"> Strongly Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s7" id="s7" value="2" autocomplete="off"> Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s7" id="s7" value="3" autocomplete="off"> Somewhat Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s7" id="s7" value="4" autocomplete="off"> Neither Agree nor Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s7" id="s7" value="5" autocomplete="off"> Somewhat Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s7" id="s7" value="6" autocomplete="off"> Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s7" id="s7" value="7" autocomplete="off"> Strongly Agree </label>
                </div>
        </div>
        <div class="form-group">
                <h6>I enjoyed using the navigation features on this webpage.</h6>
                <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary"><input type="radio" name="s8" id="s8" value="1" autocomplete="off"> Strongly Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s8" id="s8" value="2" autocomplete="off"> Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s8" id="s8" value="3" autocomplete="off"> Somewhat Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s8" id="s8" value="4" autocomplete="off"> Neither Agree nor Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s8" id="s8" value="5" autocomplete="off"> Somewhat Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s8" id="s8" value="6" autocomplete="off"> Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s8" id="s8" value="7" autocomplete="off"> Strongly Agree </label>
                </div>
        </div>
        <div class="form-group">
                <h6>Learning how to use the navigation features of this webpage was easy for me.</h6>
                <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary"><input type="radio" name="s9" id="s9" value="1" autocomplete="off"> Strongly Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s9" id="s9" value="2" autocomplete="off"> Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s9" id="s9" value="3" autocomplete="off"> Somewhat Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s9" id="s9" value="4" autocomplete="off"> Neither Agree nor Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s9" id="s9" value="5" autocomplete="off"> Somewhat Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s9" id="s9" value="6" autocomplete="off"> Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s9" id="s9" value="7" autocomplete="off"> Strongly Agree </label>
                </div>
        </div>
        <div class="form-group">
                <h6>I have used navigation features on other websites that were similar to this one.</h6>
                <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary"><input type="radio" name="s10" id="s10" value="1" autocomplete="off"> Strongly Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s10" id="s10" value="2" autocomplete="off"> Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s10" id="s10" value="3" autocomplete="off"> Somewhat Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s10" id="s10" value="4" autocomplete="off"> Neither Agree nor Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s10" id="s10" value="5" autocomplete="off"> Somewhat Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s10" id="s10" value="6" autocomplete="off"> Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s10" id="s10" value="7" autocomplete="off"> Strongly Agree </label>
                </div>
        </div>
        <div class="form-group">
                <h6>My interaction with the navigation features of the webpage was easy and understandable.</h6>
                <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary"><input type="radio" name="s11" id="s11" value="1" autocomplete="off"> Strongly Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s11" id="s11" value="2" autocomplete="off"> Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s11" id="s11" value="3" autocomplete="off"> Somewhat Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s11" id="s11" value="4" autocomplete="off"> Neither Agree nor Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s11" id="s11" value="5" autocomplete="off"> Somewhat Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s11" id="s11" value="6" autocomplete="off"> Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s11" id="s11" value="7" autocomplete="off"> Strongly Agree </label>
                </div>
        </div>
        <div class="form-group">
                <h6>I would be more likely to use a website in the future if it included these navigation features.</h6>
                <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary"><input type="radio" name="s12" id="s12" value="1" autocomplete="off"> Strongly Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s12" id="s12" value="2" autocomplete="off"> Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s12" id="s12" value="3" autocomplete="off"> Somewhat Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s12" id="s12" value="4" autocomplete="off"> Neither Agree nor Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s12" id="s12" value="5" autocomplete="off"> Somewhat Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s12" id="s12" value="6" autocomplete="off"> Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s12" id="s12" value="7" autocomplete="off"> Strongly Agree </label>
                </div>
        </div>
        <div class="form-group">
                <h6>I would prefer using websites that included these navigation features.</h6>
                <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary"><input type="radio" name="s13" id="s13" value="1" autocomplete="off"> Strongly Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s13" id="s13" value="2" autocomplete="off"> Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s13" id="s13" value="3" autocomplete="off"> Somewhat Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s13" id="s13" value="4" autocomplete="off"> Neither Agree nor Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s13" id="s13" value="5" autocomplete="off"> Somewhat Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s13" id="s13" value="6" autocomplete="off"> Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s13" id="s13" value="7" autocomplete="off"> Strongly Agree </label>
                </div>
        </div>
        <div class="form-group">
                <h6>The navigation features of this webpage increased my chances of finding what I was looking for.</h6>
                <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary"><input type="radio" name="s14" id="s14" value="1" autocomplete="off"> Strongly Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s14" id="s14" value="2" autocomplete="off"> Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s14" id="s14" value="3" autocomplete="off"> Somewhat Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s14" id="s14" value="4" autocomplete="off"> Neither Agree nor Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s14" id="s14" value="5" autocomplete="off"> Somewhat Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s14" id="s14" value="6" autocomplete="off"> Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s14" id="s14" value="7" autocomplete="off"> Strongly Agree </label>
                </div>
        </div>
        <div class="form-group">
                <h6>The navigation features of this webpage were useful for finding what I was looking for.</h6>
                <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary"><input type="radio" name="s15" id="s15" value="1" autocomplete="off"> Strongly Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s15" id="s15" value="2" autocomplete="off"> Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s15" id="s15" value="3" autocomplete="off"> Somewhat Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s15" id="s15" value="4" autocomplete="off"> Neither Agree nor Disagree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s15" id="s15" value="5" autocomplete="off"> Somewhat Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s15" id="s15" value="6" autocomplete="off"> Agree </label>
                    <label class="btn btn-secondary"><input type="radio" name="s15" id="s15" value="7" autocomplete="off"> Strongly Agree </label>
                </div>
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
    <script src="../js/adjust.js"></script>
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

            $('#version').val('1'); 
            $('#next').val(next);
            $('#type').val(type);
            
        });
    </script>
    </body>
</html>