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
    <link rel="stylesheet" href="./css/style.css">

    <title>Survey</title>
  </head>
  <body>

    <div class="container">
    <form method="POST" action="./exitSurveyWrite.php">
        <div class="section-box">
            <h3>Almost finished!</h3>
            <h6>We have just a few more questions. For these questions, please consider each version of the site you tested.</h6>
            <h6>The three versions are:</h6>
            <h5>Version 1</h5>
            <p>The sections on the navigation bar appeared in the order each section appeared on the site.</p>
            <img src="./images/nav0.png" class="nav-img" alt="">
            <h5>Version 2</h5>
            <p>Version 2 was just like Version 1, but also featured a moving red indicator to help users understand their location on the site.</p>
            <img src="./images/nav1.png" class="nav-img" alt="">
            <h5>Version 3</h5>
            <p>Version 3 was like Version 1, but also featured enlarged emboldened text to help users understand their location on the site.</p>
            <p></p>
            <img src="./images/nav2.png" class="nav-img" alt="">
            
            <h6>For each statement below, please choose that answer that corresponds most closely to how you feel.</h6>
        </div><!--section-box-->
        <div class="divider"></div>
        <div class="section-box">
            <h5>General Questions</h5>
            <div class="form-group">
                <label for="s1">Having some additional location indicator (such as with Versions 2 and 3 of the site) was helpful in finding what I was looking for.</label>
                <select class="form-control" id="s1" name="s1">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Somewhat Disagree</option>
                    <option value="3">Neither Agree nor Disagree</option>
                    <option value="4">Somewhat Agree</option>
                    <option value="5">Strongly Agree</option>
                </select>
            </div>
            <div class="form-group">
                <label for="s2">I completely understood all of the directions given to me during this study.</label>
                <select class="form-control" id="s2" name="s2">
                    <option value="1">Strongly Disagree</option>
                    <option value="2">Somewhat Disagree</option>
                    <option value="3">Neither Agree nor Disagree</option>
                    <option value="4">Somewhat Agree</option>
                    <option value="5">Strongly Agree</option>
                </select>
            </div>
            </div><!--section-box-->
            <div class="divider"></div>
            <div class="section-box">
                <h5>Questions about Version 1</h5>
                <img src="./images/nav0.png" class="nav-img" alt="">
                <div class="form-group">
                    <label for="s3">The navigation bar in version 1 (with sections placed in the order they appeared on the page) made it easier to understand where I was on the site.</label>
                    <select class="form-control" id="s3" name="s3">
                        <option value="1">Strongly Disagree</option>
                        <option value="2">Somewhat Disagree</option>
                        <option value="3">Neither Agree nor Disagree</option>
                        <option value="4">Somewhat Agree</option>
                        <option value="5">Strongly Agree</option>
                    </select>
                </div>
            </div><!--section-box-->
            <div class="divider"></div>
            <div class="section-box">
                <h5>Questions about Version 2</h5>
                <img src="./images/nav1.png" class="nav-img" alt="">
                <div class="form-group">
                    <label for="s4">The highlighting in version 2 (moving red highlighting) made it easier to understand where I was at on the site.</label>
                    <select class="form-control" id="s4" name="s4">
                        <option value="1">Strongly Disagree</option>
                        <option value="2">Somewhat Disagree</option>
                        <option value="3">Neither Agree nor Disagree</option>
                        <option value="4">Somewhat Agree</option>
                        <option value="5">Strongly Agree</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="s5">The highlighting in version 2 (moving red highlighting) made it easier to find what I was looking for on the site.</label>
                    <select class="form-control" id="s5" name="s5">
                        <option value="1">Strongly Disagree</option>
                        <option value="2">Somewhat Disagree</option>
                        <option value="3">Neither Agree nor Disagree</option>
                        <option value="4">Somewhat Agree</option>
                        <option value="5">Strongly Agree</option>
                    </select>
                </div>
            </div><!--section-box-->
            <div class="divider"></div>
            <div class="section-box">
                <h5>Questions about Version 3</h5>
                <img src="./images/nav2.png" class="nav-img" alt="">
                <div class="form-group">
                    <label for="s6">The highlighting in version 3 (enlarged/emboldened text) made it easier to understand where I was at on the site.</label>
                    <select class="form-control" id="s6" name="s6">
                        <option value="1">Strongly Disagree</option>
                        <option value="2">Somewhat Disagree</option>
                        <option value="3">Neither Agree nor Disagree</option>
                        <option value="4">Somewhat Agree</option>
                        <option value="5">Strongly Agree</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="s7">The highlighting in version 3 (enlarged text) made it easier to understand where I was at on the site.</label>
                    <select class="form-control" id="s7" name="s7">
                        <option value="1">Strongly Disagree</option>
                        <option value="2">Somewhat Disagree</option>
                        <option value="3">Neither Agree nor Disagree</option>
                        <option value="4">Somewhat Agree</option>
                        <option value="5">Strongly Agree</option>
                    </select>
                </div>
            </div><!--section-box-->
            <div class="divider"></div>
            <div class="section-box">
                <h5>Questions comparing each site:</h5>
                <div class="form-group">
                    <label for="s8">I found it easiest to understand where I was at on the page in the following site design:</label>
                    <select class="form-control" id="s8" name="s8">
                        <option value="1">Version 1 – Navigation bar with no highlighting</option>
                        <option value="2">Version 2 – Navigation bar with highlighting</option>
                        <option value="3">Version 3 – Navigation bar with text highlighting</option>
                        <option value="4">No preference</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="s9">I found it easiest to find information in the following site design:</label>
                    <select class="form-control" id="s9" name="s9">
                        <option value="1">Version 1 – Navigation bar with no highlighting</option>
                        <option value="2">Version 2 – Navigation bar with highlighting</option>
                        <option value="3">Version 3 – Navigation bar with text highlighting</option>
                        <option value="4">No preference</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="s10">I found the following site the design the most pleasing to look at:</label>
                    <select class="form-control" id="s10" name="s10">
                        <option value="1">Version 1 – Navigation bar with no highlighting</option>
                        <option value="2">Version 2 – Navigation bar with highlighting</option>
                        <option value="3">Version 3 – Navigation bar with text highlighting</option>
                        <option value="4">No preference</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="s11">Considering all factors, my favorite website design is:</label>
                    <select class="form-control" id="s11" name="s11">
                        <option value="1">Version 1 – Navigation bar with no highlighting</option>
                        <option value="2">Version 2 – Navigation bar with highlighting</option>
                        <option value="3">Version 3 – Navigation bar with text highlighting</option>
                        <option value="4">No preference</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="s12">Briefly, please explain how you chose your favorite (or why you didn't have one):</label>
                    <textarea class="form-control" id="s12" name="s12" rows="5"></textarea>
                </div>
            </div><!--section-box-->
            
            <button class="goButton" type="submit">Continue</button>

    </form>
    </div><!--container-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>