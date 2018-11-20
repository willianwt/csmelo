<?php
include "conexao.php";
$sql = "DELETE FROM produto WHERE id=".$_REQUEST["id"];

$res = $conexao->query($sql) or die($conexao->error);

if($res==true){
    print "<script>alert('Excluiu com sucesso!');</script>";
    print "<script>location.href='index.php';</script>";
}else{
    print "<br><div class='alert alert-danger'>Não foi possível cadastrar.</div>";
}