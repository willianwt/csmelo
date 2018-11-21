<?php
session_start();
include "conexao.php";
include "funcoes.php";
if (isset($_POST["nome"])) {
    $nome = $_POST["nome"];
    $tam_total = $_POST["tamanho_total"];
    $cor = $_POST["cor"];
    $mat_lamina = $_POST["material_lamina"];
    $comp_lamina = $_POST["comprimento_lamina"];
    $larg_lamina = $_POST["largura_lamina"];
    $mat_cabo = $_POST["material_cabo"];
    $comp_cabo = $_POST["comprimento_cabo"];
    $dorso = $_POST["dorso"];
    $galeria1 = upload_file($_FILES["galeria1"]);
    $galeria2 = upload_file($_FILES["galeria2"]);
    $galeria3 = upload_file($_FILES["galeria3"]);
    $insediro_por = $_SESSION['usuario'];

    $sql = "INSERT INTO produto 
            (nome_produto, tamanho_total, cor, material_lamina, comprimento_lamina, largura_lamina, material_cabo, comprimento_cabo, dorso, galeria1, galeria2, galeria3, inserido_por)
             VALUES 
            ('$nome', '$tam_total','$cor','$mat_lamina','$comp_lamina','$larg_lamina','$mat_cabo','$comp_cabo','$dorso','$galeria1','$galeria2','$galeria3','$insediro_por')";

    $res = $conexao->query($sql) or die($conexao->error);

    if($res==true){
        print "<br><div class='alert alert-success'>Cadastrou com sucesso!</div>";
    }else{
        print "<br><div class='alert alert-danger'>Não foi possível cadastrar.</div>";
    }

}
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
<?php menu(); ?><!-- -->



<div class="container mb-4 mt-2">
    <form action="novoPost.php" method="POST" class="border rounded cardbg px-2 py-2" enctype="multipart/form-data">
            <div class="mb-2 border-bottom">
                <h1 class="text-center">Inserir Novo Anúncio</h1>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="tamanho_total">Tamanho total:</label>
                    <input type="text" class="form-control" id="tamanho_total" name="tamanho_total" placeholder="Tamanho total" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="cor">Cor:</label>
                    <input type="text" class="form-control" id="cor" name="cor" placeholder="Cor">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputAddress">Material da Lâmina:</label>
                    <input type="text" class="form-control" id="material_lamina" name="material_lamina" placeholder="Material da Lâmina">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputAddress">Comprimento da Lâmina:</label>
                    <input type="text" class="form-control" id="comprimento_lamina" name="comprimento_lamina" placeholder="Comprimento da Lâmina">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputAddress">Largura da Lâmina:</label>
                    <input type="text" class="form-control" id="largura_lamina" name="largura_lamina" placeholder="Largura da Lâmina">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputAddress">Material do Cabo:</label>
                    <input type="text" class="form-control" id="material_cabo" name="material_cabo" placeholder="Material do Cabo">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputAddress">Comprimento do Cabo:</label>
                    <input type="text" class="form-control" id="comprimento_cabo" name="comprimento_cabo" placeholder="Comprimento do Cabo">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputAddress">Dorso:</label>
                    <input type="text" class="form-control" id="dorso" name="dorso" placeholder="Dorso">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="galeria1">Galeria 1*</label>
                    <input type="file" class="form-control-file" id="galeria1" name="galeria1" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="galeria2">Galeria 2*</label>
                    <input type="file" class="form-control-file" id="galeria2" name="galeria2" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="galeria3">Galeria 3*</label>
                    <input type="file" class="form-control-file" id="galeria3" name="galeria3" required>
                </div>
                <p class="ml-auto" style="font-size: 0.7rem;">*as fotos devem ter a mesma proporção! (todas em pé ou todas deitadas)</p>
            </div>

        <div class="form-row mx-1">
            <a href="index.php" class="btn btn-secondary mr-auto">Cancelar</a>
            <button type="submit" class="btn btn-success ml-auto">Enviar</button>
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