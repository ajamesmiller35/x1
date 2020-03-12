<?php
    $resultFiles = array();
    $results = array();
    $completeResults = array();
    $i = 0;

    foreach (new DirectoryIterator(__DIR__) as $file) {
        if ($file->isFile()) {
            if($file->getFilename() != 'analyze.php'){
                $resultFiles[$i] = $file->getFilename();
                $i++;
            }
        }
      }

  

    for($j = 0; $j < sizeof($resultFiles); $j++){
        $results[$j] = file_get_contents('./' . $resultFiles[$j]);
        $results[$j] = explode("\n", $results[$j]);
        for($z = 0; $z < sizeof($results[$j]); $z++){
            if(json_decode($results[$j][$z] != null)){
                $results[$j][$z] = json_decode($results[$j][$z]);
            }
        }
    }

    //var_dump($results);

    for($j = 0; $j < sizeof($results); $j++){
        for($z = 0; $z < sizeof($results[$j]); $z++){
            if(isset($results[$j][$z]->feedback)){
                array_push($completeResults, $results[$j]);
            }
        }
    }

    /*for($j = 0; $j < sizeof($completeResults); $j++){
        var_dump($completeResults[$j]);
        echo '<br><br>';
    }*/

    ////-----------------VERSION 0----------------------

    //Calculate Version 0 Totals
    $version0TotalTime = 0;
    $version0TotalDown = 0;
    $version0TotalUp = 0;
    $version0Count = 0;
    $feedback = array();

    for($j = 0; $j < sizeof($results); $j++){
        for($z = 0; $z < sizeof($results[$j]); $z++){
            if(isset($results[$j][$z]->totalTime)){
                if($results[$j][$z]->version == '0' && isset($results[$j][$z]->totalTime)){
                    $version0TotalTime += $results[$j][$z]->totalTime;
                    $version0TotalDown += $results[$j][$z]->distanceDown;
                    $version0TotalUp += $results[$j][$z]->distanceUp;
                    $version0Count++;
                }
            }
            if(isset($results[$j][$z]->feedback)){
                array_push($feedback, $results[$j][$z]->feedback);
            }
        }
    }

    //Calculate Version 0 Nav 0 Totals
    $version0TotalTime0 = 0;
    $version0TotalDown0 = 0;
    $version0TotalUp0 = 0;
    $version0Count0 = 0;

    for($j = 0; $j < sizeof($results); $j++){
        for($z = 0; $z < sizeof($results[$j]); $z++){
            if(isset($results[$j][$z]->totalTime) && isset($results[$j][$z]->navType)){
                if($results[$j][$z]->version == '0' && $results[$j][$z]->navType == '0' && isset($results[$j][$z]->totalTime)){
                    $version0TotalTime0 += $results[$j][$z]->totalTime;
                    $version0TotalDown0 += $results[$j][$z]->distanceDown;
                    $version0TotalUp0 += $results[$j][$z]->distanceUp;
                    $version0Count0++;
                }
            }
        }
    }

    //Calculate Version 0 Nav 1 Totals
    $version0TotalTime1 = 0;
    $version0TotalDown1 = 0;
    $version0TotalUp1 = 0;
    $version0Count1 = 0;
    $version0NavClicks = 0;

    for($j = 0; $j < sizeof($results); $j++){
        for($z = 0; $z < sizeof($results[$j]); $z++){
            if(isset($results[$j][$z]->totalTime) && isset($results[$j][$z]->navType)){
                if($results[$j][$z]->version == '0' && $results[$j][$z]->navType == '1' && isset($results[$j][$z]->totalTime)){
                    $version0TotalTime1 += $results[$j][$z]->totalTime;
                    $version0TotalDown1 += $results[$j][$z]->distanceDown;
                    $version0TotalUp1 += $results[$j][$z]->distanceUp;
                    $version0Count1++;
                    $version0NavClicks += $results[$j][$z]->navClicks;
                }
            }
        }
    }

    ////-----------------VERSION 1----------------------

    //Calculate Version 1 Totals
    $version1TotalTime = 0;
    $version1TotalDown = 0;
    $version1TotalUp = 0;
    $version1Count = 0;

    for($j = 0; $j < sizeof($results); $j++){
        for($z = 0; $z < sizeof($results[$j]); $z++){
            if(isset($results[$j][$z]->totalTime)){
                if($results[$j][$z]->version == '1' && isset($results[$j][$z]->totalTime)){
                    $version1TotalTime += $results[$j][$z]->totalTime;
                    $version1TotalDown += $results[$j][$z]->distanceDown;
                    $version1TotalUp += $results[$j][$z]->distanceUp;
                    $version1Count++;
                }
            }
        }
    }

    //Calculate Version 1 Nav 0 Totals
    $version1TotalTime0 = 0;
    $version1TotalDown0 = 0;
    $version1TotalUp0 = 0;
    $version1Count0 = 0;

    for($j = 0; $j < sizeof($results); $j++){
        for($z = 0; $z < sizeof($results[$j]); $z++){
            if(isset($results[$j][$z]->totalTime)){
                if($results[$j][$z]->version == '1' && $results[$j][$z]->navType == '0' && isset($results[$j][$z]->totalTime)){
                    $version1TotalTime0 += $results[$j][$z]->totalTime;
                    $version1TotalDown0 += $results[$j][$z]->distanceDown;
                    $version1TotalUp0 += $results[$j][$z]->distanceUp;
                    $version1Count0++;
                }
            }
        }
    }

    //Calculate Version 1 Nav 1 Totals
    $version1TotalTime1 = 0;
    $version1TotalDown1 = 0;
    $version1TotalUp1 = 0;
    $version1Count1 = 0;
    $version1NavClicks = 0;

    for($j = 0; $j < sizeof($results); $j++){
        for($z = 0; $z < sizeof($results[$j]); $z++){
            if(isset($results[$j][$z]->totalTime)){
                if($results[$j][$z]->version == '1' && $results[$j][$z]->navType == '1' && isset($results[$j][$z]->totalTime)){
                    $version1TotalTime1 += $results[$j][$z]->totalTime;
                    $version1TotalDown1 += $results[$j][$z]->distanceDown;
                    $version1TotalUp1 += $results[$j][$z]->distanceUp;
                    $version1Count1++;
                    $version1NavClicks += $results[$j][$z]->navClicks;
                }
            }
        }
    }

    /*or($j = 0; $j < sizeof($results); $j++){
        for($z = 0; $z < sizeof($results[$j]); $z++){
            var_dump($results[$j]);
            echo '<br><br>';
        }
    }*/
    
    $es = array(
        0 => array(
            0 => 0,
            1 => 0
        ),
        1 => array(
            0 => 0,
            1 => 0
        ),
        2 => array(
            0 => 0,
            1 => 0
        ),
        3 => array(
            0 => 0,
            1 => 0
        ),
        4 => array(
            0 => 0,
            1 => 0
        ),
        5 => array(
            0 => 0,
            1 => 0
        ),
        6 => array(
            0 => 0,
            1 => 0
        ),
        7 => array(
            0 => 0,
            1 => 0
        ),
        8 => array(
            0 => 0,
            1 => 0
        ),
        9 => array(
            0 => 0,
            1 => 0
        ),
        10 => array(
            0 => 0,
            1 => 0
        ),
        11 => array(
            0 => 0,
            1 => 0
        ),
        12 => array(
            0 => 0,
            1 => 0
        ),
        13 => array(
            0 => 0,
            1 => 0
        ),
        14 => array(
            0 => 0,
            1 => 0
        ),
        15 => array(
            0 => 0,
            1 => 0
        ),
        16 => array(
            0 => 0,
            1 => 0
        ) 
    );
    
    $esChoice = array();
    $esTotal = 0;

    for($j = 0; $j < sizeof($results); $j++){
        for($z = 0; $z < sizeof($results[$j]); $z++){
            
            if(isset($results[$j][$z]->s11)){
                var_dump($results[$j][$z]);

                //echo $results[$j][$z]->problem;
                
                echo "<br><br>";

                if($results[$j][$z]->problem == 'Yes'){
                    $es[16][0]++;
                }
                else{
                    $es[16][1]++;
                }

                if(isset($results[$j][$z]->s1)){
                    $es[0][0] += $results[$j][$z]->s1;
                    $es[0][1]++;
                }

                /*$es[0] += $results[$j][$z]->s1;
                $es[1] += $results[$j][$z]->s2;
                $es[2] += $results[$j][$z]->s3;
                $es[3] += $results[$j][$z]->s4;
                $es[4] += $results[$j][$z]->s5;
                $es[5] += $results[$j][$z]->s6;
                $es[6] += $results[$j][$z]->s7;
                $es[7] += $results[$j][$z]->s8;
                $es[8] += $results[$j][$z]->s9;
                $es[9] += $results[$j][$z]->s10;
                $es[10] += $results[$j][$z]->s11;
                $es[11] += $results[$j][$z]->s12;
                $es[12] += $results[$j][$z]->s13;
                $es[13] += $results[$j][$z]->s14;
                $es[14] += $results[$j][$z]->s15;*/

                $esTotal++;
            }
        }
    }

    $ptq0 = array();
    $ptq0Total = array();
    $ptq1 = array();
    $ptq1Total = array();
    $ptq2 = array();
    $ptq2Total = array();
    $ptq3 = array();
    $ptq3Total = array();
    

    /*for($n = 0; $n < 3; $n++){
        $distracted[$n] = array();
        $distracted[$n][0] = 0;
        $distracted[$n][1] = 0;
        $confused[$n] = array();
        $confused[$n][0] = 0;
        $confused[$n][1] = 0;
        $ptq0Total[$n] = 0;
        $ptq0[$n] = 0;
        $ptq1Total[$n] = 0;
        $ptq1[$n] = 0;
        $ptq2Total[$n] = 0;
        $ptq2[$n] = 0;
        $ptq3Total[$n] = 0;
        $ptq3[$n] = 0;
        
        for($j = 0; $j < sizeof($results); $j++){
            for($z = 0; $z < sizeof($results[$j]); $z++){
                if(isset($results[$j][$z]->version)){
                    if($results[$j][$z]->version == $n && isset($results[$j][$z]->problem)){
                        if($results[$j][$z]->distracted == 'No'){
                            $distracted[$n][0]++;
                        }
                        if($results[$j][$z]->distracted == 'Yes'){
                            $distracted[$n][1]++;
                        }
                        if($results[$j][$z]->confused == 'No'){
                            $confused[$n][0]++;
                        }
                        if($results[$j][$z]->confused == 'Yes'){
                            $confused[$n][1]++;
                        }
                        $ptq0[$n] += $results[$j][$z]->s1;
                        $ptq0Total[$n]++;
                        $ptq1[$n] += $results[$j][$z]->s2;
                        $ptq1Total[$n]++;
                        $ptq2[$n] += $results[$j][$z]->s3;
                        $ptq2Total[$n]++;
                        $ptq3[$n] += $results[$j][$z]->s4;
                        $ptq3Total[$n]++;
                    }
                }
                
            }
        }
    }*/

    //var_dump($results);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
    <h1 class="text-center">Result Analysis</h1>

    <h3>Participation Numbers:</h3>
    <table class="table">
        <tbody>
            <tr>
                <td><h6>Total Participants: <?php echo sizeof($resultFiles) ?></h6></td>
                <td><h6>Total Complete Results: <?php echo sizeof($completeResults) ?></h6></td>
                <td><h6>Completion Percentage: <?php echo round(sizeof($completeResults)/sizeof($resultFiles)*100, 2) ?>%</h6></td>
                <td><h6>Total Page Tests Completed: <?php echo $version0Count + $version1Count ?></h6></td>
            </tr>
            <tr>
                
            </tr>
        </tbody>
    </table>
    <div class="row">
        <div class="col-lg-6">
        <h3>Version 0 Analysis:</h3>
        <table class="table">
            <tbody>
                <tr>
                    <td><h6>Average Time:</h6></td>
                    <td><h6><?php echo round($version0TotalTime/$version0Count, 2); ?></h6></td>
                </tr>
                <tr>
                    <td><h6>Average Up:</h6></td>
                    <td><h6><?php echo round($version0TotalUp/$version0Count, 2); ?></h6></td>
                </tr>
                <tr>
                    <td><h6>Average Down:</h6></td>
                    <td><h6><?php echo round($version0TotalDown/$version0Count, 2); ?></h6></td>
                </tr>
                <tr>
                    <td><h6>Up/Down Ratio:</h6></td>
                    <td><h6><?php echo round(($version0TotalUp/$version0Count) / ($version0TotalDown/$version0Count), 5); ?></h6></td>
                </tr>
                <tr>
                    <td><h6>Average Total Travel:</h6></td>
                    <td><h6><?php echo round( (($version0TotalDown + $version0TotalUp)/$version0Count) , 2) ?></h6></td>
                </tr>
                <tr>
                    <td><h6>N = </h6></td>
                    <td><h6><?php echo $version0Count; ?></h6></td>
                </tr>
            </tbody>
        </table>
        </div><!--col-lg-6-->
        <div class="col-lg-6">
            <h3>Version 1 Analysis:</h3>
            <table class="table">
                <tbody>
                    <tr>
                        <td><h6>Average Time:</h6></td>
                        <td><h6><?php echo round($version1TotalTime/$version1Count, 2); ?></h6></td>
                    </tr>
                    <tr>
                        <td><h6>Average Up:</h6></td>
                        <td><h6><?php echo round($version1TotalUp/$version1Count, 2); ?></h6></td>
                    </tr>
                    <tr>
                        <td><h6>Average Down:</h6></td>
                        <td><h6><?php echo round($version1TotalDown/$version1Count, 2); ?></h6></td>
                    </tr>
                    <tr>
                        <td><h6>Up/Down Ratio:</h6></td>
                        <td><h6><?php echo round(($version1TotalUp/$version1Count) / ($version1TotalDown/$version1Count), 5); ?></h6></td>
                    </tr>
                    <tr>
                        <td><h6>Average Total Travel:</h6></td>
                        <td><h6><?php echo round( (($version1TotalDown + $version1TotalUp)/$version1Count) , 2) ?></h6></td>
                    </tr>
                    <tr>
                        <td><h6>N = </h6></td>
                        <td><h6><?php echo $version1Count; ?></h6></td>
                    </tr>
                </tbody>
            </table>
        </div><!--col-lg-6-->
    </div><!--row-->
    <div class="row">
    <div class="col-lg-3">
        <h3>Version 0 Nav 0:</h3>
        <table class="table">
            <tbody>
                <tr>
                    <td><h6>Average Time:</h6></td>
                    <td><h6><?php echo round($version0TotalTime0/$version0Count0, 2); ?></h6></td>
                </tr>
                <tr>
                    <td><h6>Average Up:</h6></td>
                    <td><h6><?php echo round($version0TotalUp0/$version0Count0, 2); ?></h6></td>
                </tr>
                <tr>
                    <td><h6>Average Down:</h6></td>
                    <td><h6><?php echo round($version0TotalDown0/$version0Count0, 2); ?></h6></td>
                </tr>
                <tr>
                    <td><h6>Up/Down Ratio:</h6></td>
                    <td><h6><?php echo round(($version0TotalUp0/$version0Count0) / ($version0TotalDown0/$version0Count0), 5); ?></h6></td>
                </tr>
                <tr>
                    <td><h6>Average Total Travel:</h6></td>
                    <td><h6><?php echo round( (($version0TotalDown0 + $version0TotalUp0)/$version0Count0) , 2) ?></h6></td>
                </tr>
                <tr>
                    <td><h6>Nav Clicks:  </h6></td>
                    <td><h6><?php echo '0'; ?></h6></td>
                </tr>
                <tr>
                    <td><h6>N = </h6></td>
                    <td><h6><?php echo $version0Count0; ?></h6></td>
                </tr>
            </tbody>
        </table>
        </div><!--col-lg-3-->
        <div class="col-lg-3">
        <h3>Version 0 Nav 1:</h3>
        <table class="table">
            <tbody>
                <tr>
                    <td><h6>Average Time:</h6></td>
                    <td><h6><?php echo round($version0TotalTime1/$version0Count1, 2); ?></h6></td>
                </tr>
                <tr>
                    <td><h6>Average Up:</h6></td>
                    <td><h6><?php echo round($version0TotalUp1/$version0Count1, 2); ?></h6></td>
                </tr>
                <tr>
                    <td><h6>Average Down:</h6></td>
                    <td><h6><?php echo round($version0TotalDown1/$version0Count1, 2); ?></h6></td>
                </tr>
                <tr>
                    <td><h6>Up/Down Ratio:</h6></td>
                    <td><h6><?php echo round(($version0TotalUp1/$version0Count1) / ($version0TotalDown1/$version0Count1), 5); ?></h6></td>
                </tr>
                <tr>
                    <td><h6>Average Total Travel:</h6></td>
                    <td><h6><?php echo round( (($version0TotalDown1 + $version0TotalUp1)/$version0Count1) , 2) ?></h6></td>
                </tr>
                <tr>
                    <td><h6>Nav Clicks:  </h6></td>
                    <td><h6><?php echo $version0NavClicks; ?></h6></td>
                </tr>
                <tr>
                    <td><h6>N = </h6></td>
                    <td><h6><?php echo $version0Count1; ?></h6></td>
                </tr>
            </tbody>
        </table>
        </div><!--col-lg-3-->
        <div class="col-lg-3">
        <h3>Version 0 Nav 0:</h3>
        <table class="table">
            <tbody>
                <tr>
                    <td><h6>Average Time:</h6></td>
                    <td><h6><?php echo round($version1TotalTime0/$version1Count0, 2); ?></h6></td>
                </tr>
                <tr>
                    <td><h6>Average Up:</h6></td>
                    <td><h6><?php echo round($version1TotalUp0/$version1Count0, 2); ?></h6></td>
                </tr>
                <tr>
                    <td><h6>Average Down:</h6></td>
                    <td><h6><?php echo round($version1TotalDown0/$version1Count0, 2); ?></h6></td>
                </tr>
                <tr>
                    <td><h6>Up/Down Ratio:</h6></td>
                    <td><h6><?php echo round(($version1TotalUp0/$version1Count0) / ($version1TotalDown0/$version1Count0), 5); ?></h6></td>
                </tr>
                <tr>
                    <td><h6>Average Total Travel:</h6></td>
                    <td><h6><?php echo round( (($version1TotalDown0 + $version1TotalUp0)/$version1Count0) , 2) ?></h6></td>
                </tr>
                <tr>
                    <td><h6>Nav Clicks:  </h6></td>
                    <td><h6><?php echo '0'; ?></h6></td>
                </tr>
                <tr>
                    <td><h6>N = </h6></td>
                    <td><h6><?php echo $version1Count0; ?></h6></td>
                </tr>
            </tbody>
        </table>
        </div><!--col-lg-3-->
        <div class="col-lg-3">
        <h3>Version 0 Nav 1:</h3>
        <table class="table">
            <tbody>
                <tr>
                    <td><h6>Average Time:</h6></td>
                    <td><h6><?php echo round($version1TotalTime1/$version1Count1, 2); ?></h6></td>
                </tr>
                <tr>
                    <td><h6>Average Up:</h6></td>
                    <td><h6><?php echo round($version1TotalUp1/$version1Count1, 2); ?></h6></td>
                </tr>
                <tr>
                    <td><h6>Average Down:</h6></td>
                    <td><h6><?php echo round($version1TotalDown1/$version1Count1, 2); ?></h6></td>
                </tr>
                <tr>
                    <td><h6>Up/Down Ratio:</h6></td>
                    <td><h6><?php echo round(($version1TotalUp1/$version1Count1) / ($version1TotalDown1/$version1Count1), 5); ?></h6></td>
                </tr>
                <tr>
                    <td><h6>Average Total Travel:</h6></td>
                    <td><h6><?php echo round( (($version1TotalDown1 + $version1TotalUp1)/$version1Count1) , 2) ?></h6></td>
                </tr>
                <tr>
                    <td><h6>Nav Clicks:  </h6></td>
                    <td><h6><?php echo $version1NavClicks; ?></h6></td>
                </tr>
                <tr>
                    <td><h6>N = </h6></td>
                    <td><h6><?php echo $version1Count1; ?></h6></td>
                </tr>
            </tbody>
        </table>
        </div><!--col-lg-3-->
    </div><!--row-->
    <div class="row">
        <div class="col-lg-12">
            <h3>Version 0 Survey</h3>
            <table class="table">
                <tr>
                    <td><h5>Question</h5></td>
                    <td><h5>Nav Type 0</h5></td>
                    <td><h5>Nav Type 1</h5></td>
                    <td><h5>Total</h5></td>
                </tr>
                <tr>
                    <td><p>Technical Difficulties:</p></td>
                    <td>Yes: No:</td>
                    <td>Yes: No:</td>
                    <td>Yes: <?php echo $es[16][0]; ?> No: <?php echo $es[16][1]; ?></td>
                </tr>
                <tr>
                    <td colspan="4">Performance Expectancy</td>
                </tr>
                <tr>
                    <td><p>PE1</p></td>
                    <td><p>PE1</p></td>
                    <td><p>PE1</p></td>
                    <td><p>PE1</p></td>
                </tr>
                <tr>
                    <td colspan="4">Effort Expectancy</td>
                </tr>
                <tr>
                    <td><p>EE1</p></td>
                    <td><p>EE1</p></td>
                    <td><p>EE1</p></td>
                    <td><p>EE1</p></td>
                </tr>
                <tr>
                    <td colspan="4">Facilitation Conditions</td>
                </tr>
                <tr>
                    <td><p>FC1</p></td>
                    <td><p>FC1</p></td>
                    <td><p>FC1</p></td>
                    <td><p>FC1</p></td>
                </tr>
                <tr>
                    <td><p>FC2</p></td>
                    <td><p>FC1</p></td>
                    <td><p>FC1</p></td>
                    <td><p><?php echo round($es[0][0]/$es[0][1], 2); ?></p></td>
                </tr>

            </table>
        </div><!--col-lg-12-->
    </div><!--row-->
    <div class="row">
        <div class="col-lg-12">
            <h3>Version 1 Survey</h3>
            <table class="table">
                <tr>
                    <td><p>At any time during the previous four information finding tasks were you interrupted by an outside distraction?</p></td>
                    <td><p><?php echo 'No: ' . $distracted[1][0] ?></p></td>
                    <td><p><?php echo 'Yes: ' . $distracted[1][1] ?></p></td>
                </tr>
                <tr>
                    <td><p>At any time during the previous four information finding tasks did you forget or fail to understand what you were intended to find on the page?</p></td>
                    <td><p><?php echo 'No: ' . $confused[1][0] ?></p></td>
                    <td><p><?php echo 'Yes: ' . $confused[1][1] ?></p></td>
                </tr>
                <tr>
                    <td><p>The site design made it easy to find what I was looking for.</p></td>
                    <td colspan="2"><p><?php echo round($ptq0[1]/$ptq0Total[1], 2); ?></p></td>
                </tr>
                <tr>
                    <td><p>I was able to find what I was looking for very quickly on this site.</p></td>
                    <td colspan="2"><p><?php echo round($ptq1[1]/$ptq1Total[1], 2); ?></p></td>
                </tr>
                <tr>
                    <td><p>I liked the site design.</p></td>
                    <td colspan="2"><p><?php echo round($ptq2[1]/$ptq2Total[1], 2); ?></p></td>
                </tr>
                <tr>
                    <td><p>It was obvious when I found what I was looking for.</p></td>
                    <td colspan="2"><p><?php echo round($ptq3[1]/$ptq3Total[1], 2); ?></p></td>
                </tr>
                <tr>
                    <td><p>N = </p></td>
                    <td colspan="2"><p><?php echo $ptq1Total[1]; ?></p></td>
                </tr>
            </table>
        </div><!--col-lg-12-->
    </div><!--row-->
    <div class="row">
        <div class="col-lg-12">
            <h3>Version 2 Survey</h3>
            <table class="table">
                <tr>
                    <td><p>At any time during the previous four information finding tasks were you interrupted by an outside distraction?</p></td>
                    <td><p><?php echo 'No: ' . $distracted[2][0] ?></p></td>
                    <td><p><?php echo 'Yes: ' . $distracted[2][1] ?></p></td>
                </tr>
                <tr>
                    <td><p>At any time during the previous four information finding tasks did you forget or fail to understand what you were intended to find on the page?</p></td>
                    <td><p><?php echo 'No: ' . $confused[2][0] ?></p></td>
                    <td><p><?php echo 'Yes: ' . $confused[2][1] ?></p></td>
                </tr>
                <tr>
                    <td><p>The site design made it easy to find what I was looking for.</p></td>
                    <td colspan="2"><p><?php echo round($ptq0[2]/$ptq0Total[2], 2); ?></p></td>
                </tr>
                <tr>
                    <td><p>I was able to find what I was looking for very quickly on this site.</p></td>
                    <td colspan="2"><p><?php echo round($ptq1[2]/$ptq1Total[2], 2); ?></p></td>
                </tr>
                <tr>
                    <td><p>I liked the site design.</p></td>
                    <td colspan="2"><p><?php echo round($ptq2[2]/$ptq2Total[2], 2); ?></p></td>
                </tr>
                <tr>
                    <td><p>It was obvious when I found what I was looking for.</p></td>
                    <td colspan="2"><p><?php echo round($ptq3[2]/$ptq3Total[2], 2); ?></p></td>
                </tr>
                <tr>
                    <td><p>N = </p></td>
                    <td colspan="2"><p><?php echo $ptq1Total[2]; ?></p></td>
                </tr>
            </table>
        </div><!--col-lg-12-->
    </div><!--row-->
    <div class="row">
        <div class="col-lg-12">
        
            <table class="table">
                <tr>
                    <td><h4>Briefly, please explain how you chose your favorite (or why you didn't have one):</h4></td>
                    <?php 
                        foreach($feedback as $choice){
                            if($choice != ''){
                            echo '<tr><td><p>"' . $choice . '"</p></td></tr>';
                            }
                        }
                    ?>
                </tr>
            </table>
        </div><!--col-lg-12-->
    </div><!--row-->
    </div><!--container-->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>