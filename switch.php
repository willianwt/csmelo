<?php
switch (@$_REQUEST["page"]){
    //advogado
    case 'mensagens';
        include("mensagens.php");
        break;
    default:
        include("anuncios.php");
        break;

}