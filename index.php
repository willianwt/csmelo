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
    <link rel="stylesheet" href="plugins/bootstrap.css">
    <link rel="stylesheet" href="plugins/estilo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <title>Cs Melo</title>

</head>
<body>

<!-- BARRA DE NAVEGAÇÃO -->
<?php menu(); ?>


<div class="container-fluid">
    <div class="row mb-3">
        <?php
        $sql = "SELECT * FROM produto ORDER BY id DESC";
        $res = $conexao->query($sql);
        while ($row = $res->fetch_assoc()) {
            echo '<div class="col-md-4 mt-2" >
                     <div class="border rounded px-2 py-2 cardbg">
                        <div id="produto' . $row['id'] . '" class="carousel slide" data-ride="carousel" data-interval="false">
                          <ol class="carousel-indicators">
                            <li data-target="#produto' . $row['id'] . '" data-slide-to="0" class="active"></li>
                            <li data-target="#produto' . $row['id'] . '" data-slide-to="1"></li>
                            <li data-target="#produto' . $row['id'] . '" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="imagens/' . $row['galeria1'] . '" alt="First slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="imagens/' . $row['galeria2'] . '" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="imagens/' . $row['galeria3'] . '" alt="Third slide">
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#produto' . $row['id'] . '" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#produto' . $row['id'] . '" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                      </div>
                        <div class="mt-2 pt-2">
                            <a href="javascript:void(0);" data-href="conteudo.php?id=' . $row['id'] . '" class="btn btn-info toggle-btn modalDetalhes"><i class="fas fa-info-circle fa-md"></i> Detalhes</a>
                            <a href="javascript:void(0);" data-href="enviarMensagem.php?id=' . $row['id'] . '" class="float-right btn btn-warning gosteiDeste"><i class="fas fa-comments fa-md"></i> Gostei deste!</a>';
            if (isset($_SESSION['usuario'])) {
                echo '<a href="editar.php?id_produto=' . $row['id'] . '" class="btn btn-secondary"><i class="far fa-edit fa-md"></i></a>

                                <button onclick="if(confirm(\'tem certeza que deseja excluir o PRODUTO ' . $row['nome_produto'] . '?\')){location.href=\'deletar.php?id=' . $row['id'] . '\';}else{false;}"  class=\'btn btn-danger\'><i class="fas fa-trash-alt"></i></button>';
            }

            echo '</div>
                    </div>
                </div>';
        }
        ?>
    </div>

</div>
<!-- Modal Detalhes -->
<div class="modal fade" id="modal_detalhes" tabindex="-1" role="dialog" aria-labelledby="modalInformacoesTitulo"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalInformacoesTitulo">Detalhes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Gostei Deste - Enviar Mensagem -->

<div class="modal fade" id="gostei_deste" tabindex="-1" role="dialog" aria-labelledby="modalInformacoesTitulo"
     aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="enviarMensagem.php" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalInformacoesTitulo">Enviar Mensagem</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mr-auto" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="plugins/jquery-3.3.1.js"></script>
<script src="plugins/popper.js"></script>
<script src="plugins/bootstrapJS.js"></script>
<script>
    $(document).ready(function () {
        $('.modalDetalhes').on('click', function () {
            var dataURL = $(this).attr('data-href');
            $('.modal-body').load(dataURL, function () {
                $('#modal_detalhes').modal({show: true});
            });
        });
    });

    $(document).ready(function () {
        $('.gosteiDeste').on('click', function () {
            var dataURL = $(this).attr('data-href');
            $('.modal-body').load(dataURL, function () {
                $('#gostei_deste').modal({show: true});
            });
        });
    });
</script>


</body>
</html>