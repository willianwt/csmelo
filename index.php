<?php
    session_start();
    header('Content-type: text/html; charset=UTF-8');
    include "conexao.php";
    include "funcoes.php";
    include "loginModal.php";
    include "novoPostModal.php";

?>

<!doctype html>

<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="plugins/bootstrap.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <title>Cs Melo</title>
</head>
<body>

<!-- BARRA DE NAVEGAÇÃO -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#">Cs Melo Cutelaria Artesanal</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse dropdown" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a href="?page=anuncios"><i class="fas fa-home fa-2x allign-middle mx-1"></i></span></a>
            </li>
            <li class="nav-item">
                <button onclick="location.href='?page=mensagens';" class="btn btn-success"><i class="fas fa-comments fa-md"></i> Mensagens</button>
            </li>

        </ul>
        <ul class="navbar-nav ml-auto">
            <?php if (!isset($_SESSION['usuario'])){ ?>
                <li class="nav-item active">
                    <a class="nav-link" data-toggle="modal" data-target="#login_modal" style="cursor:pointer;"><i class="fas fa-lock"></i></a>
                </li>
            <?php }else{ ?>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#novoPostModal">Inserir Novo</button>
                <a class="nav-link" href="logout.php" style="cursor:pointer;"><i class="fas fa-sign-out-alt"></i></a>

            <?php } ?>
        </ul>
    </div>
</nav>
<!-- -->



<div class="container-fluid">
    <?php
    include "switch.php";
    ?>

</div>


<footer class=" container-fluid footer fixed-bottom text-right" style="background-color: #e3f2fd;">
        <span>Place sticky footer content here.</span>
    </footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="plugins/jquery-3.3.1.js"></script>
<script src="plugins/popper.js"></script>
<script src="plugins/bootstrapJS.js"></script>




</body>
</html>