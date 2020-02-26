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

    /*$results = file_get_contents('./' . $resultFiles[0]);

    $results = explode("\n", $results);

    var_dump($results);

    $result1 = json_decode($results[0]);

    echo '<br><br>';

    var_dump($result1);

    echo '<br><br>';

    echo $result1->id;*/

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
            if(isset($results[$j][$z]->complete)){
                array_push($completeResults, $results[$j]);
            }
        }
    }

    /*for($j = 0; $j < sizeof($completeResults); $j++){
        var_dump($completeResults[$j]);
        echo '<br><br>';
    }*/

    $version0TotalTime = 0;
    $version0TotalDown = 0;
    $version0TotalUp = 0;
    $version0Count = 0;

    for($j = 0; $j < sizeof($results); $j++){
        for($z = 0; $z < sizeof($results[$j]); $z++){
            if(isset($results[$j][$z]->version)){
                if($results[$j][$z]->version === '0' && isset($results[$j][$z]->trial)){
                    $version0TotalTime += $results[$j][$z]->totalTime;
                    $version0TotalDown += $results[$j][$z]->distanceDown;
                    $version0TotalUp += $results[$j][$z]->distanceUp;
                    $version0Count++;
                }
            }
        }
    }

    $version1TotalTime = 0;
    $version1TotalDown = 0;
    $version1TotalUp = 0;
    $version1Count = 0;

    for($j = 0; $j < sizeof($results); $j++){
        for($z = 0; $z < sizeof($results[$j]); $z++){
            if(isset($results[$j][$z]->version)){
                if($results[$j][$z]->version === '1' && isset($results[$j][$z]->trial)){
                    $version1TotalTime += $results[$j][$z]->totalTime;
                    $version1TotalDown += $results[$j][$z]->distanceDown;
                    $version1TotalUp += $results[$j][$z]->distanceUp;
                    $version1Count++;
                }
            }
        }
    }

    $version2TotalTime = 0;
    $version2TotalDown = 0;
    $version2TotalUp = 0;
    $version2Count = 0;
    $es = array(
        0 => 0,
        1 => 0,
        2 => 0,
        3 => 0,
        4 => 0,
        5 => 0,
        6 => 0,
        7 => array(
            0 => 0,
            1 => 0,
            2 => 0,
            3 => 0,
        ),
        8 => array(
            0 => 0,
            1 => 0,
            2 => 0,
            3 => 0,
        ),
        9 => array(
            0 => 0,
            1 => 0,
            2 => 0,
            3 => 0,
        ),
        10 => array(
            0 => 0,
            1 => 0,
            2 => 0,
            3 => 0,
        )

    );
    
    $esChoice = array();
    $esTotal = 0;

    for($j = 0; $j < sizeof($results); $j++){
        for($z = 0; $z < sizeof($results[$j]); $z++){
            if(isset($results[$j][$z]->version)){
                if($results[$j][$z]->version === '2' && isset($results[$j][$z]->trial)){
                    $version2TotalTime += $results[$j][$z]->totalTime;
                    $version2TotalDown += $results[$j][$z]->distanceDown;
                    $version2TotalUp += $results[$j][$z]->distanceUp;
                    $version2Count++;
                }
            }
            if(isset($results[$j][$z]->s11)){
                $es[0] += $results[$j][$z]->s1;
                $es[1] += $results[$j][$z]->s2;
                $es[2] += $results[$j][$z]->s3;
                $es[3] += $results[$j][$z]->s4;
                $es[4] += $results[$j][$z]->s5;
                $es[5] += $results[$j][$z]->s6;
                $es[6] += $results[$j][$z]->s7;

                if($results[$j][$z]->s8 == 1){
                    $es[7][0]++;
                }
                if($results[$j][$z]->s8 == 2){
                    $es[7][1]++;
                }
                if($results[$j][$z]->s8 == 3){
                    $es[7][2]++;
                }
                if($results[$j][$z]->s8 == 4){
                    $es[7][3]++;
                }

                if($results[$j][$z]->s9 == 1){
                    $es[8][0]++;
                }
                if($results[$j][$z]->s9 == 2){
                    $es[8][1]++;
                }
                if($results[$j][$z]->s9 == 3){
                    $es[8][2]++;
                }
                if($results[$j][$z]->s9 == 4){
                    $es[8][3]++;
                }

                if($results[$j][$z]->s10 == 1){
                    $es[9][0]++;
                }
                if($results[$j][$z]->s10 == 2){
                    $es[9][1]++;
                }
                if($results[$j][$z]->s10 == 3){
                    $es[9][2]++;
                }
                if($results[$j][$z]->s10 == 4){
                    $es[9][3]++;
                }

                if($results[$j][$z]->s11 == 1){
                    $es[10][0]++;
                }
                if($results[$j][$z]->s11 == 2){
                    $es[10][1]++;
                }
                if($results[$j][$z]->s11 == 3){
                    $es[10][2]++;
                }
                if($results[$j][$z]->s11== 4){
                    $es[10][3]++;
                }

                array_push($esChoice, $results[$j][$z]->s12);
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
    

    for($n = 0; $n < 3; $n++){
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
                    if($results[$j][$z]->version == $n && isset($results[$j][$z]->distracted)){
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
    }

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
                <td><h6>Total Time Trials Completed: <?php echo $version0Count + $version1Count + $version2Count ?></h6></td>
            </tr>
            <tr>
                
            </tr>
        </tbody>
    </table>
    <div class="row">
        <div class="col-lg-4">
        <h3>Version 0 Analysis (No Highlighting):</h3>
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
        </div><!--col-lg-4-->
        <div class="col-lg-4">
            <h3>Version 1 Analysis (Scrolling Red Indicator):</h3>
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
        </div><!--col-lg-4-->
        <div class="col-lg-4">
            <h3>Version 2 Analysis (Enlarged Text):</h3>
            <table class="table">
                <tbody>
                    <tr>
                        <td><h6>Average Time:</h6></td>
                        <td><h6><?php echo round($version2TotalTime/$version2Count, 2); ?></h6></td>
                    </tr>
                    <tr>
                        <td><h6>Average Up:</h6></td>
                        <td><h6><?php echo round($version2TotalUp/$version2Count, 2); ?></h6></td>
                    </tr>
                    <tr>
                        <td><h6>Average Down:</h6></td>
                        <td><h6><?php echo round($version2TotalDown/$version2Count, 2); ?></h6></td>
                    </tr>
                    <tr>
                        <td><h6>Up/Down Ratio:</h6></td>
                        <td><h6><?php echo round(($version2TotalUp/$version2Count) / ($version2TotalDown/$version2Count), 5); ?></h6></td>
                    </tr>
                    <tr>
                        <td><h6>Average Total Travel:</h6></td>
                        <td><h6><?php echo round( (($version2TotalDown + $version2TotalUp)/$version2Count) , 2) ?></h6></td>
                    </tr>
                    <tr>
                        <td><h6>N = </h6></td>
                        <td><h6><?php echo $version2Count; ?></h6></td>
                    </tr>
                </tbody>
            </table>
        </div><!--col-lg-4-->
    </div><!--row-->
    <div class="row">
        <div class="col-lg-12">
            <h3>Version 0 Survey</h3>
            <table class="table">
                <tr>
                    <td><p>At any time during the previous four information finding tasks were you interrupted by an outside distraction?</p></td>
                    <td><p><?php echo 'No: ' . $distracted[0][0] ?></p></td>
                    <td><p><?php echo 'Yes: ' . $distracted[0][1] ?></p></td>
                </tr>
                <tr>
                    <td><p>At any time during the previous four information finding tasks did you forget or fail to understand what you were intended to find on the page?</p></td>
                    <td><p><?php echo 'No: ' . $confused[0][0] ?></p></td>
                    <td><p><?php echo 'Yes: ' . $confused[0][1] ?></p></td>
                </tr>
                <tr>
                    <td><p>The site design made it easy to find what I was looking for.</p></td>
                    <td colspan="2"><p><?php echo round($ptq0[0]/$ptq0Total[0], 2); ?></p></td>
                </tr>
                <tr>
                    <td><p>I was able to find what I was looking for very quickly on this site.</p></td>
                    <td colspan="2"><p><?php echo round($ptq1[0]/$ptq1Total[0], 2); ?></p></td>
                </tr>
                <tr>
                    <td><p>I liked the site design.</p></td>
                    <td colspan="2"><p><?php echo round($ptq2[0]/$ptq2Total[0], 2); ?></p></td>
                </tr>
                <tr>
                    <td><p>It was obvious when I found what I was looking for.</p></td>
                    <td colspan="2"><p><?php echo round($ptq3[0]/$ptq3Total[0], 2); ?></p></td>
                </tr>
                <tr>
                    <td><p>N = </p></td>
                    <td colspan="2"><p><?php echo $ptq1Total[0]; ?></p></td>
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
        <h3>Exit Survey</h3>
            <table class="table">
                <tr>
                    <td colspan="3"><h4>General Questions</h4></td>
                </tr>
                <tr>
                    <td><p>Having some additional location indicator (such as with Versions 2 and 3 of the site) was helpful in finding what I was looking for.</p></td>
                    <td colspan="2"><p><?php echo round($es[0]/$esTotal, 2); ?></p></td>
                </tr>
                <tr>
                    <td><p>I completely understood all of the directions given to me during this study.</p></td>
                    <td colspan="2"><p><?php echo round($es[1]/$esTotal, 2); ?></p></td>
                </tr>
                <tr>
                    <td colspan="3"><h4>Questions about Version 0</h4></td>
                </tr>
                <tr>
                    <td><p>The navigation bar in version 1 (with sections placed in the order they appeared on the page) made it easier to understand where I was on the site.</p></td>
                    <td colspan="2"><p><?php echo round($es[2]/$esTotal, 2); ?></p></td>
                </tr>
                <tr>
                    <td colspan="3"><h4>Questions about Version 1</h4></td>
                </tr>
                <tr>
                    <td><p>The highlighting in version 2 (moving red highlighting) made it easier to understand where I was at on the site.</p></td>
                    <td colspan="2"><p><?php echo round($es[3]/$esTotal, 2); ?></p></td>
                </tr>
                <tr>
                    <td colspan="3"><h4>Questions about Version 2</h4></td>
                </tr>
                <tr>
                    <td><p>The highlighting in version 3 (enlarged/emboldened text) made it easier to understand where I was at on the site.</p></td>
                    <td colspan="2"><p><?php echo round($es[5]/$esTotal, 2); ?></p></td>
                </tr>
                <tr>
                    <td><p>The highlighting in version 3 (enlarged text) made it easier to understand where I was at on the site.</p></td>
                    <td colspan="2"><p><?php echo round($es[6]/$esTotal, 2); ?></p></td>
                </tr>
            </table>
            <table class="table">
                <tr>
                    <td><h4>Questions Comparing each site</h4></td>
                    <td><h6>Version 0:</h6></td>
                    <td><h6>Version 1:</h6></td>
                    <td><h6>Version 2:</h6></td>
                    <td><h6>No Preference:</h6></td>
                </tr>
                <tr>
                    <td><p>I found it easiest to understand where I was at on the page in the following site design:</p></td>
                    <td><p><?php echo $es[7][0] . '(' . round($es[7][0]/$esTotal, 3) * 100 . '%)'; ?></p></td>
                    <td><p><?php echo $es[7][1] . '(' . round($es[7][1]/$esTotal, 3) * 100 . '%)'; ?></p></td>
                    <td><p><?php echo $es[7][2] . '(' . round($es[7][2]/$esTotal, 3) * 100 . '%)'; ?></p></td>
                    <td><p><?php echo $es[7][3] . '(' . round($es[7][3]/$esTotal, 3) * 100 . '%)'; ?></p></td>
                </tr>
                <tr>
                    <td><p>I found it easiest to find information in the following site design:</p></td>
                    <td><p><?php echo $es[8][0] . '(' . round($es[8][0]/$esTotal, 3) * 100 . '%)'; ?></p></td>
                    <td><p><?php echo $es[8][1] . '(' . round($es[8][1]/$esTotal, 3) * 100 . '%)'; ?></p></td>
                    <td><p><?php echo $es[8][2] . '(' . round($es[8][2]/$esTotal, 3) * 100 . '%)'; ?></p></td>
                    <td><p><?php echo $es[8][3] . '(' . round($es[8][3]/$esTotal, 3) * 100 . '%)'; ?></p></td>
                </tr>
                <tr>
                    <td><p>I found the following site the design the most pleasing to look at:</p></td>
                    <td><p><?php echo $es[9][0] . '(' . round($es[9][0]/$esTotal, 3) * 100 . '%)'; ?></p></td>
                    <td><p><?php echo $es[9][1] . '(' . round($es[9][1]/$esTotal, 3) * 100 . '%)'; ?></p></td>
                    <td><p><?php echo $es[9][2] . '(' . round($es[9][2]/$esTotal, 3) * 100 . '%)'; ?></p></td>
                    <td><p><?php echo $es[9][3] . '(' . round($es[9][3]/$esTotal, 3) * 100 . '%)'; ?></p></td>
                </tr>
                <tr>
                    <td><p>Considering all factors, my favorite website design is:</p></td>
                    <td><p><?php echo $es[10][0] . '(' . round($es[10][0]/$esTotal, 3) * 100 . '%)'; ?></p></td>
                    <td><p><?php echo $es[10][1] . '(' . round($es[10][1]/$esTotal, 3) * 100 . '%)'; ?></p></td>
                    <td><p><?php echo $es[10][2] . '(' . round($es[10][2]/$esTotal, 3) * 100 . '%)'; ?></p></td>
                    <td><p><?php echo $es[10][3] . '(' . round($es[10][3]/$esTotal, 3) * 100 . '%)'; ?></p></td>
                </tr>
            </table>
            <table class="table">
                <tr>
                    <td><h4>Briefly, please explain how you chose your favorite (or why you didn't have one):</h4></td>
                    <?php 
                        foreach($esChoice as $choice){
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