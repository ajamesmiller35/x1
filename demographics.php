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
        <input type="number" class="form-control" name="age" id="age">
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
      
        </select>
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

        var countries={1:"Afghanistan",2:"Aland Islands",3:"Albania",4:"Algeria",5:"American Samoa",6:"Andorra",7:"Angola",8:"Anguilla",9:"Antarctica",10:"Antigua and Barbuda",11:"Argentina",12:"Armenia",13:"Aruba",14:"Australia",15:"Austria",16:"Azerbaijan",17:"Bahamas",18:"Bahrain",19:"Bangladesh",20:"Barbados",21:"Belarus",22:"Belgium",23:"Belize",24:"Benin",25:"Bermuda",26:"Bhutan",27:"Bolivia",28:"Bonaire, Sint Eustatius and Saba",29:"Bosnia and Herzegovina",30:"Botswana",31:"Bouvet Island",32:"Brazil",33:"British Indian Ocean Territory",34:"Brunei",35:"Bulgaria",36:"Burkina Faso",37:"Burundi",38:"Cambodia",39:"Cameroon",40:"Canada",41:"Cape Verde",42:"Cayman Islands",43:"Central African Republic",44:"Chad",45:"Chile",46:"China",47:"Christmas Island",48:"Cocos Keeling) Islands",49:"Colombia",50:"Comoros",51:"Congo",52:"Cook Islands",53:"Costa Rica",54:"Cote d'ivoire Ivory Coast)",55:"Croatia",56:"Cuba",57:"Curacao",58:"Cyprus",59:"Czech Republic",60:"Democratic Republic of the Congo",61:"Denmark",62:"Djibouti",63:"Dominica",64:"Dominican Republic",65:"Ecuador",66:"Egypt",67:"El Salvador",68:"Equatorial Guinea",69:"Eritrea",70:"Estonia",71:"Ethiopia",72:"Falkland Islands Malvinas)",73:"Faroe Islands",74:"Fiji",75:"Finland",76:"France",77:"French Guiana",78:"French Polynesia",79:"French Southern Territories",80:"Gabon",81:"Gambia",82:"Georgia",83:"Germany",84:"Ghana",85:"Gibraltar",86:"Greece",87:"Greenland",88:"Grenada",89:"Guadaloupe",90:"Guam",91:"Guatemala",92:"Guernsey",93:"Guinea",94:"Guinea-Bissau",95:"Guyana",96:"Haiti",97:"Heard Island and McDonald Islands",98:"Honduras",99:"Hong Kong",100:"Hungary",101:"Iceland",102:"India",103:"Indonesia",104:"Iran",105:"Iraq",106:"Ireland",107:"Isle of Man",108:"Israel",109:"Italy",110:"Jamaica",111:"Japan",112:"Jersey",113:"Jordan",114:"Kazakhstan",115:"Kenya",116:"Kiribati",117:"Kosovo",118:"Kuwait",119:"Kyrgyzstan",120:"Laos",121:"Latvia",122:"Lebanon",123:"Lesotho",124:"Liberia",125:"Libya",126:"Liechtenstein",127:"Lithuania",128:"Luxembourg",129:"Macao",130:"Macedonia",131:"Madagascar",132:"Malawi",133:"Malaysia",134:"Maldives",135:"Mali",136:"Malta",137:"Marshall Islands",138:"Martinique",139:"Mauritania",140:"Mauritius",141:"Mayotte",142:"Mexico",143:"Micronesia",144:"Moldava",145:"Monaco",146:"Mongolia",147:"Montenegro",148:"Montserrat",149:"Morocco",150:"Mozambique",151:"Myanmar Burma)",152:"Namibia",153:"Nauru",154:"Nepal",155:"Netherlands",156:"New Caledonia",157:"New Zealand",158:"Nicaragua",159:"Niger",160:"Nigeria",161:"Niue",162:"Norfolk Island",163:"North Korea",164:"Northern Mariana Islands",165:"Norway",166:"Oman",167:"Pakistan",168:"Palau",169:"Palestine",170:"Panama",171:"Papua New Guinea",172:"Paraguay",173:"Peru",174:"Phillipines",175:"Pitcairn",176:"Poland",177:"Portugal",178:"Puerto Rico",179:"Qatar",180:"Reunion",181:"Romania",182:"Russia",183:"Rwanda",184:"Saint Barthelemy",185:"Saint Helena",186:"Saint Kitts and Nevis",187:"Saint Lucia",188:"Saint Martin",189:"Saint Pierre and Miquelon",190:"Saint Vincent and the Grenadines",191:"Samoa",192:"San Marino",193:"Sao Tome and Principe",194:"Saudi Arabia",195:"Senegal",196:"Serbia",197:"Seychelles",198:"Sierra Leone",199:"Singapore",200:"Sint Maarten",201:"Slovakia",202:"Slovenia",203:"Solomon Islands",204:"Somalia",205:"South Africa",206:"South Georgia and the South Sandwich Islands",207:"South Korea",208:"South Sudan",209:"Spain",210:"Sri Lanka",211:"Sudan",212:"Suriname",213:"Svalbard and Jan Mayen",214:"Swaziland",215:"Sweden",216:"Switzerland",217:"Syria",218:"Taiwan",219:"Tajikistan",220:"Tanzania",221:"Thailand",222:"Timor-Leste East Timor)",223:"Togo",224:"Tokelau",225:"Tonga",226:"Trinidad and Tobago",227:"Tunisia",228:"Turkey",229:"Turkmenistan",230:"Turks and Caicos Islands",231:"Tuvalu",232:"Uganda",233:"Ukraine",234:"United Arab Emirates",235:"United Kingdom",236:"United States",237:"United States Minor Outlying Islands",238:"Uruguay",239:"Uzbekistan",240:"Vanuatu",241:"Vatican City",242:"Venezuela",243:"Vietnam",244:"Virgin Islands, British",245:"Virgin Islands, US",246:"Wallis and Futuna",247:"West Bank",248:"Western Sahara",249:"Yemen",250:"Zambia",251:"Zimbabwe"};
      
        console.log(Object.keys(countries).length);

        for(let i = 1; i < Object.keys(countries).length+1; i++){
          if( i == 236){
            $('#nationality').append(`<option selected value="${countries[i]}">${countries[i]}</option>`);
          }
          else{
            $('#nationality').append(`<option value="${countries[i]}">${countries[i]}</option>`);
          }
          
        }

      });

      
    </script>
  </body>
</html>