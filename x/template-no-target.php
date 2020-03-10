<?php
    session_start();

    $priceOption = rand(0,1);
    $hoursOption = rand(0,1);

    $address1 = array('1283 Marigold Lane', '261 Seltice Way', '554 Grim Avenue', '2503 Simpson Street','2122 Park Avenue','766 Cedar Court','719 N. Grandrose St.','9916 Rockwell Rd.','8120 Tarkiln Hill Lane','793 N. Ridgeview Drive','7584 Liberty Rd.','9608 King Court','312 Gregory Street','945 Argyle Ave.','9853 Baker Street','50 North Bradford Ave.','7 Dunbar St.','95 South Mayfair Rd.','8935 Magnolia Drive','75 South St.','8800 Baker St.','66 Dogwood Dr.','7106 Glenwood Lane','956 Woodsman St.','8328 Bald Hill Ave.');
    $address2 = array('Westport, CT 06880', 'Middle River, MD 21220', 'Winston Salem, NC 27103', 'Westport, CT 06880', 'Meriden, CT 06450', 'Kissimmee, FL 34741', 'Cartersville, GA 30120', 'Milledgeville, GA 31061', 'Hackensack, NJ 07601', 'Evansville, IN 47711', 'Bowie, MD 20715','Harrisonburg, VA 22801', 'Monroe Township, NJ 08831', 'San Jose, CA 95127', 'Middle River, MD 21220', 'Wantagh, NY 11793', 'Kokomo, IN 46901', 'Richardson, TX 75080', 'Hillsboro, OR 97124', 'Belleville, NJ 07109', 'Brentwood, NY 11717', 'Amarillo, TX 79106', 'Nazareth, PA 18064', 'Loveland, OH 45140', 'Crown Point, IN 46307');
    $phone = array('(419) 598-3370', '(370) 310-1511', '(433) 741-5569', '(329) 637-6827', '(683) 564-8282','(552) 755-2611', '(584) 626-5931', '(747) 643-6493', '(341) 353-2101', '(819) 472-5832','(818) 214-7066', '(283) 935-0899', '(584) 875-3591', '(929) 287-0276', '(206) 898-6625','(442) 783-2060', '(456) 207-6120', '(217) 930-5219', '(240) 268-2517', '(545) 578-3430','(580) 574-0484', '(890) 371-1659', '(276) 546-9992', '(759) 318-5808', '(751) 679-3598');
    
    $p[0] = $phone[rand(0,24)];
    $p[1] = $phone[rand(0,24)];
    $a1[0] = $address1[rand(0,24)];
    $a2[0] = $address2[rand(0,24)];
    

    $counter = 1;
    do{
        $a1[$counter] = $address1[rand(0,24)];
        if($a1[$counter - 1] != $a1[$counter]){
            $counter++;
        }
    }while($counter < 6);

    $counter = 1;
    do{
        $a2[$counter] = $address2[rand(0,24)];
        if($a2[$counter - 1] != $a2[$counter]){
            $counter++;
        }
    }while($counter < 6);

    while($p[0] == $p[1]){
        $p[1] = $phone[rand(0,24)];
    }

    $ct = array(
        '<td><img class="contact-icon" src="../images/phone.png" alt=""></td><td>Technical Support:</td><td><p>' . $p[0] . '</p></td>',
        '<td><img class="contact-icon" src="../images/phone.png" alt=""></td><td>Sales:</td><td><p>' . $p[1] . '</p></td>', 
        '<td><img class="contact-icon" src="../images/chat.png" alt=""></td><td>Chat Support:</td><td><p>Chat Now</p></td>', 
        '<td><img class="contact-icon" src="../images/email.png" alt=""></td><td>Email:</td><td><p>help@this.com</p></td>', 
        '<td><img class="contact-icon" src="../images/mail.png" alt=""></td><td>Corporate Offices:</td><td><p>' . $a1[5] . '<br>' . $a2[5] . '</p></td>'
    );

    $ct2 = range(0,4);
    shuffle($ct2);
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

    <title>Welcome!</title>
  </head>
  <body>
      <div class="find">
            <h4 id="find-title">Find the following information on this page:</h4>
            <div id="target-clone" class="table"></div>
            <br>
            <h5 id="find-warning">Do not click "BEGIN" until you understand what you are supposed to find on this page.</h5>
            <button class="goButton" id="begin">BEGIN</button>
      </div>
    <div class="nav1">
        <div class="indicator"></div>
        <ul class="nav-horizontal">
            <li><h6 class="nav-item">Home</h6></li>
            <li id="nav-li-4"></li>
            <li id="nav-li-5"></li>
            <li id="nav-li-6"></li>
            <li id="nav-li-7"></li>
            <div class="hidden">
                <li id="nav-li-0"><h6 class="nav-item">Locations</h6></li>
                <li id="nav-li-1"><h6 class="nav-item">Hours</h6></li>
                <li id="nav-li-2"><h6 class="nav-item">Pricing</h6></li>
                <li id="nav-li-3"><h6 class="nav-item">Contact</h6></li>
            </div>
        </ul>
    </div>
    <div class="push"></div>
    <div class="n1">
        
        <div class="container white-section">
            <img id="down-arrow" src="../images/down-arrow.png" alt="">
        </div>
        <div class="container grey-section">
            <div class="vc row">
                <div class="col-lg-6">
                    <img class="business-photo" src="../images/b2.png" alt="">
                </div>
                <div class="col-lg-6">
                    <h2 class="text-center">Welcome!</h2>
                    <h6>Our company is inspired by the way you work. Dedicated to helping busy professionals acheive their best, our services can help your business grow. Take collaboration to the next level with our custom business solutions. </h6>
                </div>
            </div>
        </div>
    </div><!--n1-->
    <div id="content4" class="n2"></div><!--n2-->
    <div id="content5" class="n3"></div><!--n3-->
    <div id="content6" class="n4"></div><!--n4-->
    <div id="content7" class="n5"></div><!--n5-->

    <div class="hidden">
        <div id="content0" class="location-content">
            <div class="location-box">
                <div class="container white-section">
                        <table id="location-table">
                            <tr>
                                <td><img class="location-img" src="../images/0.png" alt=""></td>
                                <td>
                                    <p><?php echo $a1[0];?></p>
                                    <p><?php echo $a2[0];?></p>
                                </td>
                            </tr>
                            <tr>
                                <td><img class="location-img" src="../images/1.png" alt=""></td>
                                <td>
                                    <p><?php echo $a1[1];?></p>
                                    <p><?php echo $a2[1];?></p>
                                </td>
                            </tr>
                            <tr>
                                <td><img class="location-img" src="../images/2.png" alt=""></td>
                                <td>
                                    <p><?php echo $a1[2];?></p>
                                    <p><?php echo $a2[2];?></p>
                                </td>
                            </tr>
                            <tr>
                                <td><img class="location-img" src="../images/3.png" alt=""></td>
                                <td>
                                    <p><?php echo $a1[3];?></p>
                                    <p><?php echo $a2[3];?></p>
                                </td>
                            </tr>
                            <tr>
                                <td><img class="location-img" src="../images/4.png" alt=""></td>
                                <td>
                                        <p><?php echo $a1[4];?></p>
                                        <p><?php echo $a2[4];?></p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div id="l2" class="container grey-section">
                        <div class="vc row">
                            <div class="col-lg-6">
                                <img class="business-photo" src="../images/locations.png" alt="">
                            </div><!--col-lg-6-->
                            <div class="col-lg-6">
                                <h6>Our business has five locations across the US to better suit your needs.</h6>
                                <p>Our business centers can analyze your needs, finding the solutions right for your company. No two companies are the same, so at our company you can expect a custom solution for every business, and every situation.</p>
                            </div><!--col-lg-6-->
                        </div>
                    </div>
                </div><!--location-box-->
        </div>
        <div id="content1" class="hours-content">
            <div class="hours-box">
                <div class="container white-section">
                        <table
                            <?php
                                if($hoursOption == 0){
                                    echo 'class="hidden"';
                                }
                            ?>
                         id="hours-table" class="table">
                            <tr>
                                <td class="hours-td">Monday</td>
                                <td class="hours-td">6am - 7pm</td>
                            </tr>
                            <tr>
                                <td class="hours-td">Tuesday</td>
                                <td class="hours-td">6am - 7pm</td>
                            </tr>
                            <tr>
                                <td class="hours-td">Wednesday</td>
                                <td class="hours-td">6am - 4pm</td>
                            </tr>
                            <tr>
                                <td class="hours-td">Thursday</td>
                                <td class="hours-td">6am - 7pm</td>
                            </tr>
                            <tr>
                                <td class="hours-td">Friday</td>
                                <td class="hours-td">6am - 9pm</td>
                            </tr>
                            <tr>
                                <td class="hours-td">Saturday</td>
                                <td class="hours-td">10am - 2pm</td>
                            </tr>
                            <tr>
                                <td class="hours-td">Sunday</td>
                                <td class="hours-td">Closed</td>
                            </tr>
                            <tr>
                                <td class="hours-td" colspan="2">Closed: Christmas, Thanksgiving, New Years Day</td>
                            </tr>
                        </table>
                        <div class="row vc
                            <?php
                                if($hoursOption == 1){
                                    echo 'hidden';
                                }
                            ?>
                         " id="hours-no-table">
                        <div class="sales-box col-lg-6">
                            <h3>Sales:</h3>
                            <h4>Open Monday-Friday 9am-5pm.</h4>
                            <h4>Open Saturday 10am-2pm.</h4>
                            <h6>Closed: Christmas, Thanksgiving, New Years Day.</h6>
                        </div>
                        <div class="support-box col-lg-6">
                            <h3>Support:</h3>
                            <h4>Open Monday-Friday 8am-9pm.</h4>
                            <h4>Open Saturday 9am-6pm.</h4>
                            <h6>Closed: Christmas, Thanksgiving, New Years Day.</h6>
                        </div>
                        </div>
                    </div>
                    <div id="h2" class="container grey-section">
                    <div class="vc">
                            <h5 class="text-center">Open 6 days a week.</h5>
                            <img class="clock" src="../images/clock.png" alt="">
                            <h6 class="text-center">Stop by any time during business hours!</h6>
                        </div>
                    </div>
                </div><!--hours-box-->
        </div>
        <div id="content2" class="pricing-content">
            <div class="pricing-box">
            <div class="container white-section">
                <div <?php 
                    if($priceOption == 0){ 
                        echo 'class="hidden"';
                    } ?>
                    id="price-cards">
                <div class="card price-card">
                    <div class="card-body">
                        <h5 class="card-title">Silver</h5>
                        <h6 class="card-subtitle mb-2 text-muted">$150/month</h6>
                        <p class="card-text">Includes everything you need to get started.</p>
                    </div>
                </div>
                <div class="card price-card">
                    <div class="card-body">
                        <h5 class="card-title">Gold</h5>
                        <h6 class="card-subtitle mb-2 text-muted">$250/month</h6>
                        <p class="card-text">Includes unlimited data.</p>
                    </div>
                </div>
                <div class="card price-card">
                    <div class="card-body">
                        <h5 class="card-title">Platinum</h5>
                        <h6 class="card-subtitle mb-2 text-muted">$300/month</h6>
                        <p class="card-text">Includes unlimited data, and unlimited support.</p>
                    </div>
                </div>
                </div>
                
                <div <?php 
                    if($priceOption == 1){ 
                        echo 'class="hidden"';
                    } ?>
                id="price-table">
                    <table id="hours-table" class="table">
                            <tr>
                                <td class="hours-td" colspan="2"><h4 class="text-center">Options</h4></td>
                            </tr>
                            <tr>
                                <td class="hours-td">Option 1</td>
                                <td class="hours-td">$50</td>
                            </tr>
                            <tr>
                                <td class="hours-td">Option 2</td>
                                <td class="hours-td">$100</td>
                            </tr>
                            <tr>
                                <td class="hours-td">Option 3</td>
                                <td class="hours-td">$150</td>
                            </tr>
                            <tr>
                                <td class="hours-td">Option 4</td>
                                <td class="hours-td">$200</td>
                            </tr>
                            <tr>
                                <td class="hours-td">Option 5</td>
                                <td class="hours-td">$250</td>
                            </tr>
                            <tr>
                                <td class="hours-td" colspan="2">Or let us customize the perfect plan for you.</td>
                            </tr>
                        </table>
                        </div>
                </div>
                <div id="p2" class="container grey-section">
                    <div class="vc row">
                        <div class="col-lg-6">
                            <img class="business-photo" src="../images/money.png" alt="">
                        </div><!--col-lg-6-->
                        <div class="col-lg-6">
                            <h4 class="text-center">We have options!</h4>  
                            <p>We off a variety of services and pricing options that can be customized to meet the needs of any business. Our experts will analyze you business needs and work with you to find the best options for your team. Call today!</p>
                        </div><!--col-lg-6-->
                    </div>
                </div>
            </div><!--pricing-box-->
        </div>
        <div id="content3" class="contact-content">
        <div class="contact-box">
            <div class="container white-section">
                <table class="table contact-table">
                    <tr><?php echo $ct[$ct2[0]]; ?></tr>
                    <tr><?php echo $ct[$ct2[1]]; ?></tr>
                    <tr><?php echo $ct[$ct2[2]]; ?></tr>
                    <tr><?php echo $ct[$ct2[3]]; ?></tr>
                    <tr><?php echo $ct[$ct2[4]]; ?></tr>
                </table>
            </div>
            <div id="c2" class="container grey-section">
                <div class="vc row">
                    <div class="col-lg-6">
                        <img class="business-photo" src="../images/contact-us.png" alt="">
                    </div><!--col-lg-6-->
                    <div class="col-lg-6">
                        <h4 class="text-center">Get the help you need.</h4>
                        <p>We offer a variety of contact options to best suit your support needs. Drop us an email or chat online with our representatives 24/7, or call during business hours.</p>
                    </div><!--col-lg-6-->
                </div>
            </div>
            </div><!--contact-box-->
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/randomizePage.js"></script>
    <script src="../js/setHeights.js"></script>
    <script src="../js/trackScroll.js"></script>
    <script src="../js/getCookie.js"></script>
    <script>console.log(getCookie('id'))</script>
    <!--<script src="../js/timeScroll.js"></script>-->
    <script>

        $(document).ready(function(){
            $('body').css('position', 'fixed');
            let clone = $('#target').clone();
            clone[0].id = 'clone';
            $('#target-clone').html(clone);
        });
        
        var startTime= 0, stopTime = 0, totalTime = 0, timeCount = 0;

        $('#begin').on('click', function(){
            $('body').css('position', 'static');
            startTime = Date.now();
            window.scrollTo(0,0);
            $('.find').css('display', 'none');
        });
        $(document).on('click', '#target', function(){
            stopTime = Date.now();
            totalTime = stopTime - startTime;

            var data = {
                version: '0',
                trial: '1',
                totalTime: totalTime,
                distanceUp: distanceUp,
                distanceDown: distanceDown
            };

            data = JSON.stringify(data);

            $.ajax({
                url: '../writeResults.php',
                method: 'POST',
                data: {data: data}
            }).done(function(){ location.href='2.php'; });

        });
    </script>
  </body>
</html>