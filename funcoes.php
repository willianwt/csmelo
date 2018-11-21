<?php

function make_hash($str){
    return sha1(md5($str));
}

function menu(){
    include "modals.php";
    $menu = '<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <a class="navbar-brand" href="index.php"><i class="fas fa-fire"></i> Cs Melo Cutelaria Artesanal <i class="fas fa-fire"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a href="index.php"><i id="home" class="fas fa-home fa-2x text-center mx-1"></i></span></a>
                <a target="_blank" rel="noopener noreferrer" href="https://wa.me/5561983133640"><i id="whatsapp" class="fab fa-whatsapp fa-2x"></i></span></a>
                <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/csmelocutelaria"><i id="facebook" class="fab fa-facebook-square fa-2x text-center mx-1"></i></span></a>
                <a target="_blank" rel="noopener noreferrer" href="https://instagram.com/metalcdf/"><i id="instagram" class="fab fa-instagram fa-2x text-center mx-1"></i></span></a>
            </li>';
    if (isset($_SESSION['usuario'])){
        $menu .= '<li class="nav-item">
                <button onclick="location.href=\'mensagens.php\';" class="btn btn-success btn-block"><i class="fas fa-comments fa-md"></i> Mensagens</button>
            </li>';
    }
        $menu .= '</ul>
        <ul class="navbar-nav ml-auto my-2">';
            if (!isset($_SESSION['usuario'])){
               $menu .= '<li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#login_modal" style="cursor:pointer;"><i class="fas fa-lock"></i></a>
                </li>';
            }else{
                $menu .= '<li class="nav-item">
                            <a class="btn btn-success btn-block" href="novoPost.php">Inserir Novo</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="logout.php" style="cursor:pointer;"><i class="fas fa-sign-out-alt"></i></a>
                          </li>';

            }
        $menu .= '</ul>
            </div>
        </nav>';
        echo $menu;
}

function upload_file($file)
    {
            $extension = explode('.', strtolower($file["name"]));
            $new_name = md5(uniqid(time())) . '.' . $extension[1];
            $destination = 'imagens/' . $new_name;
            move_uploaded_file($file['tmp_name'], $destination);
            return $new_name;

    }