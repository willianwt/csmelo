<?php
$foto_principal = $_POST['foto_principal'];
$nome = $_POST['nome'];
$tam_total = $_POST['tamanho_total'];
$cor = $_POST['cor'];
$mat_lamina = $_POST['material_lamina'];
$comp_lamina = $_POST['comprimento_lamina'];
$larg_lamina = $_POST['largura_lamina'];
$mat_cabo = $_POST['material_cabo'];
$comp_cabo = $_POST['comprimento_cabo'];
$dorso = $_POST['dorso'];
$galeria1 = $_POST['galeria1'];
$galeria2 = $_POST['galeria2'];
$galeria3 = $_POST['galeria3'];

$sql = "INSERT INTO produto (nome, tamanho_total, cor, material_lamina, comprimento_lamina, largura_lamina, material_cabo, comprimento_cabo, dorso, galeria1, galeria2, galeria3, foto_principal ) VALUES ('{$nome}', '$tam_total',)";