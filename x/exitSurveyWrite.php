<?php
    session_start();

    $id = $_COOKIE['id'];

    $data = json_encode($_POST);

    file_put_contents('./results/' . $id . '.txt', "\n", FILE_APPEND);
    file_put_contents('./results/' . $id . '.txt', "\n", FILE_APPEND);
    file_put_contents('./results/' . $id . '.txt', $data, FILE_APPEND);
    file_put_contents('./results/' . $id . '.txt', "\n", FILE_APPEND);
    file_put_contents('./results/' . $id . '.txt', '{"complete":"yes"}', FILE_APPEND);

    header('location: ./finished.php');
?>