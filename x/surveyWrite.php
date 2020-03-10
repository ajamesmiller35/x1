<?php
    session_start();

    $id = $_COOKIE['id'];

    $next = (int) $_POST['next'];

    $type = (string) $_POST['type'];

    unset($_POST['next']);

    $data = json_encode($_POST);

    file_put_contents('./results/' . $id . '.txt', "\n", FILE_APPEND);
    file_put_contents('./results/' . $id . '.txt', "\n", FILE_APPEND);
    file_put_contents('./results/' . $id . '.txt', $data, FILE_APPEND);
    file_put_contents('./results/' . $id . '.txt', "\n", FILE_APPEND);

    if($next == 4){
        header('location: feedback.php');
    }
    else{
        header('location: ./' . $next . '/' . $type . '/0.html');
    }
    
?>