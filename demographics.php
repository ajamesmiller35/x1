<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

    <title>Welcome!</title>
  </head>
  <body>
    <div class="container">
      <h1>Demographic Information</h1>
      <h4>Please fill out the form below:</h4>
      
      <form method="POST" action="demographics-action.php">
      <label for="age">Age:</label><br>
        <input type="text" name="age" id="age">
        <br>
      <label for="age">Gender:</label><br>
      <select class="custom-select mr-sm-2" name="gender" id="gender">
          <option value="" selected disabled>Choose...</option>
          <option value="M">Male</option>
          <option value="F">Female</option>
          <option value="Other">Other</option>
          <option value="Prefer not to say">Prefer not to say</option>
        </select>
        <br>
      <label for="age">Nationality:</label><br>
        <select class="custom-select mr-sm-2 nationality" name="nationality" id="nationality">
          <option selected>USA</option>
          <option>Canada</option>
          <option>China</option>
          <option>India</option>
          <option>Saudi Arabia</option>
          <option>South Korea</option>
          <option>Other</option>
        </select>
        <div class="nationality-other hidden">
        <label for="age">If other please specify nationality:</label><br>
        <input type="text" name="nationality-other" id="nationality-other"><br>
        </div>
      <label for="internet-usage">How much time do you estimate you spend using the internet daily?</label>
        <select class="custom-select mr-sm-2" name="usage" id="usage">
          <option value="" selected disabled>Choose...</option>
          <option value="0-1">0-1 Hours Daily</option>
          <option value="1-2">1-2 Hours Daily</option>
          <option value="2-4">2-4 Hours Daily</option>
          <option value="4-8">4-8 Hours Daily</option>
          <option value="8+">8 or More Hours Daily</option>
        </select>
      <label for="internet-usage">How often do you shop or browse products on Amazon?</label>
        <select class="custom-select mr-sm-2" name="usage-amazon" id="usage-amazon">
          <option value="" selected disabled>Choose...</option>
          <option value="0">I have never heard of Amazon</option>
          <option value="1">Never</option>
          <option value="2">A few times a year or less</option>
          <option value="3">Monthly </option>
          <option value="4">Weekly</option>
          <option value="5">Daily</option>
        </select>
        <p class="text-bold">I certify that the above information is correct.</p>
        <button class="goButton" type="submit">Submit</button>
      </form>
    </div><!--container-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>

      $(document).ready(function(){
        let type='';
        //set mobile or desktop version
        if($(window).width() < 1400){
            type = 'm';
            localStorage.setItem('type', type);
        }
        else{
            type = 'd';
            localStorage.setItem('type', type);
        }

        $('select.nationality').change(function(){
          let selected = $(this).children('option:selected').val();
          if(selected == 'Other'){
            $('.nationality-other').removeClass('hidden');
          }
        });
      });

      
    </script>
  </body>
</html>