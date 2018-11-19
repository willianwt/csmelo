<?php

function make_hash($str){
    return sha1(md5($str));
}

function menu(){
    include "loginModal.php";
    include "novoPostModal.php";
    $menu = '<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="index.php"><i class="fas fa-fire"></i> Cs Melo Cutelaria Artesanal <i class="fas fa-fire"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse dropdown" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a href="index.php"><i class="fas fa-home fa-2x allign-middle mx-1"></i></span></a>
            </li>';
    if (isset($_SESSION['usuario'])){
        $menu .= '<li class="nav-item">
                <button onclick="location.href=\'mensagens.php\';" class="btn btn-success"><i class="fas fa-comments fa-md"></i> Mensagens</button>
            </li>';
    }
        $menu .= '</ul>
        <ul class="navbar-nav ml-auto">';
            if (!isset($_SESSION['usuario'])){
               $menu .= '<li class="nav-item active">
                    <a class="nav-link" data-toggle="modal" data-target="#login_modal" style="cursor:pointer;"><i class="fas fa-lock"></i></a>
                </li>';
            }else{
                $menu .= '<button type="button" class="btn btn-success" data-toggle="modal" data-target="#novoPostModal">Inserir Novo</button>
                <a class="nav-link" href="logout.php" style="cursor:pointer;"><i class="fas fa-sign-out-alt"></i></a>';
            }
        $menu .= '</ul>
            </div>
        </nav>';
        echo $menu;
}

function upload_file($file)
    {
        if(isset($file))
        {
            $extension = explode('.', $file["name"]);
            $new_name = date('Y-m-d_H.i.s') . '.' . $extension[1];
            $destination = './imagens/' . $new_name;
            move_uploaded_file($file['tmp_name'], $destination);
            return $new_name;
        }
    }