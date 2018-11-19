<?php
    $host = "localhost";
    $user = "csmelo";
    $pass = "3Saucuu0GrigE372";
    $db = "csmelo";

    $conexao = new mysqli($host,$user,$pass,$db) or die($conexao -> error);
    if (!mysqli_set_charset($conexao, 'utf8')) {
        printf('Error ao usar utf8: %s', mysqli_error($db));
        exit;
    }

