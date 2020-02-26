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

    header('location: ./' . $next . '/' . 'survey.php');
    
?>