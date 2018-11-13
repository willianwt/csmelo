<?php
    header('Content-type: text/html; charset=UTF-8');

    $host = "localhost";
    $user = "csmelo";
    $pass = "3Saucuu0GrigE372";
    $db = "csmelo";

    $conexao = new mysqli($host,$user,$pass,$db) or die($conn -> error);
    if (!mysqli_set_charset($conexao, 'utf8')) {
        printf('Error ao usar utf8: %s', mysqli_error($db));
        exit;
    }