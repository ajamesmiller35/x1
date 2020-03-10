<?php
    session_start();

    $id = $_COOKIE['id'];

    $data = $_POST['data'];

    file_put_contents('./results/' . $id . '.txt', "\n", FILE_APPEND);
    file_put_contents('./results/' . $id . '.txt', $data, FILE_APPEND);
?>