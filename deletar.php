<?php
include "conexao.php";
if (isset($_GET['id'])) {
    $sql = "DELETE FROM produto WHERE id=" . $_REQUEST["id"];

    $res = $conexao->query($sql) or die($conexao->error);

    if ($res == true) {
        print "<script>alert('Excluiu com sucesso!');</script>";
        print "<script>location.href='index.php';</script>";
    } else {
        print "<br><div class='alert alert-danger'>Não foi possível cadastrar.</div>";
    }
}

if (isset($_GET['id_mensagem'])) {
    $sql = "DELETE FROM mensagens WHERE id_mensagem=" . $_REQUEST["id_mensagem"];

    $res = $conexao->query($sql) or die($conexao->error);

    if ($res == true) {
        print "<script>alert('Excluiu a mensagem com sucesso!');</script>";
        print "<script>location.href='mensagens.php';</script>";
    } else {
        print "<br><div class='alert alert-danger'>Não foi possível cadastrar.</div>";
    }
}