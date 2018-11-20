
<?php

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



<div class="container mb-4 mt-2">
    <form action="novoPost.php" method="POST" class="border px-2 py-2">
            <div class="mb-2 border-bottom">
                <h1 class="text-center">Inserir Novo Anúncio</h1>
            </div>
            <div class="form-group">
                <label for="galeria1">Foto Principal</label>
                <input type="file" class="form-control-file" id="foto_principal">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="Nome">
                </div>
                <div class="form-group col-md-4">
                    <label for="tamanho_total">Tamanho total:</label>
                    <input type="text" class="form-control" id="tamanho_total" placeholder="Tamanho total">
                </div>
                <div class="form-group col-md-4">
                    <label for="cor">Cor:</label>
                    <input type="text" class="form-control" id="cor" placeholder="Cor">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputAddress">Material da Lâmina:</label>
                    <input type="text" class="form-control" id="material_lamina" placeholder="Material da Lâmina">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputAddress">Comprimento da Lâmina:</label>
                    <input type="text" class="form-control" id="tamanho_lamina" placeholder="Comprimento da Lâmina">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputAddress">Largura da Lâmina:</label>
                    <input type="text" class="form-control" id="largura_lamina" placeholder="Largura da Lâmina">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputAddress">Material do Cabo:</label>
                    <input type="text" class="form-control" id="material_lamina" placeholder="Material do Cabo">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputAddress">Comprimento do Cabo:</label>
                    <input type="text" class="form-control" id="tamanho_lamina" placeholder="Comprimento do Cabo">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputAddress">Dorso:</label>
                    <input type="text" class="form-control" id="largura_lamina" placeholder="Dorso">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="galeria1">Galeria 1</label>
                    <input type="file" class="form-control-file" id="galeria1">
                    <input type="hidden" name="galeria1" id="galeria1" />
                    <span id="galeria1"></span>
                </div>
                <div class="form-group col-md-4">
                    <label for="galeria2">Galeria 2</label>
                    <input type="file" class="form-control-file" id="galeria2">
                    <input type="hidden" name="galeria1" id="galeria2" />
                    <span id="galeria2"></span>
                </div>
                <div class="form-group col-md-4">
                    <label for="galeria3">Galeria 3</label>
                    <input type="file" class="form-control-file" id="galeria3">
                    <input type="hidden" name="galeria3" id="galeria3" />
                    <span id="galeria3"></span>
                </div>
            </div>

        <div class="form-row">
            <button type="button" class="btn btn-secondary mr-auto" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-success ml-auto">Enviar</button>
        </div>
</form>
</div>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="plugins/jquery-3.3.1.js"></script>
<script src="plugins/popper.js"></script>
<script src="plugins/bootstrapJS.js"></script>




</body>
</html>
