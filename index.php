<?php
    session_start();
    header('Content-type: text/html; charset=UTF-8');
    include "conexao.php";
    include "funcoes.php";


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
<?php menu(); ?><!-- -->



<div class="container-fluid">
    <div class="row mb-3">
        <?php for ($i=0; $i < 12 ; $i++) {
            echo '
                 <div class="col-md-3 mt-2" >
                     <div class="border">
                        <img src="imagens/faca1%20(3).jpg" class="img-fluid px-1 py-1" alt="Responsive image" style="height: auto;" >
                        <div class="px-1 pb-1">
                        <a href="#" class="btn btn-info toggle-btn"><i class="fas fa-info-circle fa-md"></i> Detalhes</a>
                        <a href="#" class="float-right btn btn-warning"><i class="fas fa-comments fa-md"></i> Contato</a>
                        </div>
                    </div>
                </div>';
        } ?>
    </div>

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