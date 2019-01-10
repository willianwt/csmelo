<?php
    $host = "localhost";
    $user = "id8001784_csmelocutelaria";
    $pass = "csmelo2018";
    $db = "id8001784_csmelo";

    $conexao = new mysqli($host,$user,$pass,$db) or die($conexao -> error);
    if (!mysqli_set_charset($conexao, 'utf8')) {
        printf('Error ao usar utf8: %s', mysqli_error($conexao));
        exit;
    }

