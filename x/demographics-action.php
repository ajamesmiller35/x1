<?php
    session_start();

    if(isset($_POST['age'])){
        $age = $_POST['age'];
    }
    if(isset($_POST['gender'])){
        $gender = $_POST['gender'];
    }
    if(isset($_POST['nationality'])){
        $nationality = $_POST['nationality'];
    }
    if(isset($_POST['nationality-other'])){
        $nationalityOther = $_POST['nationality-other'];
    }
    if(isset($_POST['usage'])){
        $usage = $_POST['usage'];
    }
    if(isset($_POST['usage-amazon'])){
        $usageAmazon = $_POST['usage-amazon'];
    }

    $id = uniqid();

    $participant->id = $id;
    $participant->age = $age;
    $participant->gender = $gender;
    $participant->nationality = $nationality;
    $participant->nationalityOther = $nationalityOther;
    $participant->usage = $usage;
    $participant->usageAmazon = $usageAmazon;
    
    
    
    $participant = json_encode($participant);

    file_put_contents('./results/' . $id . '.txt', $participant);

    setcookie('id', $id, time() + 7200);

    header('location: instructions.html');
?>