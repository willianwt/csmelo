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
    <link rel="stylesheet" href="plugins/estilo.css" >

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <title>Cs Melo</title>
</head>
<body>

<!-- BARRA DE NAVEGAÇÃO -->
<?php menu();


    $sql = "SELECT m.*, p.* FROM mensagens AS m
    INNER JOIN produto AS p
    ON m.id_produto = p.id";

    $res = $conexao->query($sql);

    $qtd = $res->num_rows;

    ?>

<div class="container-fluid">
    <table class="table table-striped table-hover table-responsive-md" style="background-color: whitesmoke;">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Produto</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col" class="w-50">Mensagem</th>
            <th scope="col" class="w-10">Excluir</th>
        </tr>
        </thead>
        <tbody>
        <?php while($row = $res->fetch_assoc()){ ?>
        <tr>
            <th scope="row"><?php echo $row['id_mensagem']; ?></th>
            <td><a class="modalDetalhes" href="javascript:void(0);" data-href="conteudo.php?id=<?php echo $row['id_produto']?>"><?php echo $row['nome_produto'] . " "; ?><i class="fas fa-info-circle fa-md"></i></a></td>
            <td><?php echo $row['nome_cliente']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['telefone']; ?></td>
            <td><?php echo $row['mensagem']; ?></td>
            <td><?php echo '<button onclick="if(confirm(\'tem certeza que deseja excluir a Mensagem '.$row['id_mensagem'].'?\')){location.href=\'deletar.php?id_mensagem='.$row['id_mensagem'].'\';}else{false;}"  class=\'btn btn-danger\'><i class="fas fa-trash-alt"></i></button>'; ?></td>

        </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<div class="modal fade" id="modal_detalhes" tabindex="-1" role="dialog" aria-labelledby="modalInformacoesTitulo" aria-hidden="true">
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

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="plugins/jquery-3.3.1.js"></script>
<script src="plugins/popper.js"></script>
<script src="plugins/bootstrapJS.js"></script>
<script>
    $(document).ready(function(){
        $('.modalDetalhes').on('click',function(){
            var dataURL = $(this).attr('data-href');
            $('.modal-body').load(dataURL,function(){
                $('#modal_detalhes').modal({show:true});
            });
        });
    });
</script>



</body>
</html>