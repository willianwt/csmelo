<?php
include "conexao.php";
if(!empty($_GET['id'])){

    if ($conexao->connect_error) {
        die("Unable to connect database: " . $conexao->connect_error);
    }

    //get content from database
    $sql = $conexao->query("SELECT * FROM produto WHERE id = {$_GET['id']}");

    if($sql->num_rows > 0){
        $row = $sql->fetch_assoc();
        echo '<h4 class="text-center"><b><u> '.$row['nome_produto'].'</u></b></h4>';
        echo '<p class="texto_modal_detalhes"><b>Tamanho Total:</b> '.$row['tamanho_total'].'</p>';
        echo '<p class="texto_modal_detalhes"><b>Cor: </b>'.$row['cor'].'</p>';
        echo '<p class="texto_modal_detalhes"><b>Material da Lâmina: </b>'.$row['material_lamina'].'</p>';
        echo '<p class="texto_modal_detalhes"><b>Comprimento da Lâmina: </b>'.$row['comprimento_lamina'].'</p>';
        echo '<p class="texto_modal_detalhes"><b>Largura da Lâmina: </b>'.$row['largura_lamina'].'</p>';
        echo '<p class="texto_modal_detalhes"><b>Material do Cabo: </b>'.$row['material_cabo'].'</p>';
        echo '<p class="texto_modal_detalhes"><b>Comprimento do Cabo: </b>'.$row['comprimento_cabo'].'</p>';
        echo '<p class="texto_modal_detalhes"><b>Dorso: </b>'.$row['dorso'].'</p>';


    }else{
        echo 'Conteudo não encontrado..';
    }
}else{
    echo 'Contudo não encontrado..';
}
?>