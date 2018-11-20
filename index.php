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
    	<style>
        nav{
          background: url("menu.jpg") no-repeat !important;
          background-size: 100% 100% !important;
        }

	    </style>
</head>
<body>

<!-- BARRA DE NAVEGAÇÃO -->
<?php menu(); ?>



<div class="container-fluid">
    <div class="row mb-3">
        <?php
        $sql = "SELECT * FROM produto";
        $res = $conexao -> query($sql);
        while($row = $res->fetch_assoc()) {
            echo '<div class="col-md-4 mt-2" >
                     <div class="border px-2 py-2">
                        <div id="produto'.$row['id'].'" class="carousel slide" data-ride="carousel" data-interval="false">
                          <ol class="carousel-indicators">
                            <li data-target="#produto'.$row['id'].'" data-slide-to="0" class="active"></li>
                            <li data-target="#produto'.$row['id'].'" data-slide-to="1"></li>
                            <li data-target="#produto'.$row['id'].'" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="imagens/'.$row['galeria1'].'" alt="First slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="imagens/'.$row['galeria2'].'" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="imagens/'.$row['galeria3'].'" alt="Third slide">
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#produto'.$row['id'].'" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#produto'.$row['id'].'" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                      </div>
                        <div class="mt-2 pt-2">
                            <a href="#" class="btn btn-info toggle-btn"><i class="fas fa-info-circle fa-md"></i> Detalhes</a>
                            <a href="#" class="float-right btn btn-warning"><i class="fas fa-comments fa-md"></i> Contato</a>';
                            if (isset($_SESSION['usuario'])){
                                echo '<button onclick="if(confirm(\'tem certeza que deseja excluir o PRODUTO '.$row['nome'].'?\')){location.href=\'deletar.php?id='.$row['id'].'\';}else{false;}"  class=\'btn btn-danger\'>Excluir</button>'; }

                       echo '</div>
                    </div>
                </div>';
        }
         ?>
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