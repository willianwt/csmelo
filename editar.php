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
    if($_FILES["galeria1"]["name"] != '') {
        $galeria1 = upload_file($_FILES["galeria1"]);
    }else{
        $galeria1 = $_POST['galeria1_upada'];
    }
    if($_FILES["galeria1"]["name"] != '') {
        $galeria2 = upload_file($_FILES["galeria2"]);
    }else{
        $galeria2 = $_POST['galeria2_upada'];
    }
    if($_FILES["galeria1"]["name"] != '') {
        $galeria3 = upload_file($_FILES["galeria3"]);
    }else{
        $galeria3 = $_POST['galeria3_upada'];
    }
    $insediro_por = $_SESSION['usuario'];

    $sql = "UPDATE produto SET nome_produto='$nome', tamanho_total='$tam_total', cor='$cor', material_lamina='$mat_lamina', comprimento_lamina='$comp_lamina', largura_lamina='$larg_lamina', material_cabo='$mat_cabo', comprimento_cabo='$comp_cabo', dorso='$dorso', galeria1='$galeria1', galeria2='$galeria2', galeria3='$galeria3', inserido_por='$insediro_por' WHERE id=".$_POST['id_produto'];

    $res = $conexao->query($sql) or die($conexao->error);

    if($res==true){
        echo '<script type="application/javascript">alert("Editado com sucesso!"); window.location.href ="index.php";;</script>';
    }else{
        echo '<script type="application/javascript">alert("Não foi possível editar.."); window.location.href ="index.php";;</script>';
    }

}
$listar = "SELECT * FROM produto WHERE id=".$_GET["id_produto"];

$resultado = $conexao->query($listar);

$row = $resultado->fetch_assoc();
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
    <form action="editar.php" method="POST" class="border rounded cardbg px-2 py-2" enctype="multipart/form-data">
            <div class="mb-2 border-bottom">
                <h1 class="text-center">Editar Anúncio</h1>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?php echo $row['nome_produto']; ?>" required>
                    <input type="hidden" name="id_produto" value="<?php echo $row['id']; ?>">

                </div>
                <div class="form-group col-md-4">
                    <label for="tamanho_total">Tamanho total:</label>
                    <input type="text" class="form-control" id="tamanho_total" name="tamanho_total" placeholder="Tamanho total" value="<?php echo $row['tamanho_total']; ?>" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="cor">Cor:</label>
                    <input type="text" class="form-control" id="cor" name="cor" placeholder="Cor" value="<?php echo $row['cor']; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputAddress">Material da Lâmina:</label>
                    <input type="text" class="form-control" id="material_lamina" name="material_lamina" placeholder="Material da Lâmina" value="<?php echo $row['material_lamina']; ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputAddress">Comprimento da Lâmina:</label>
                    <input type="text" class="form-control" id="comprimento_lamina" name="comprimento_lamina" placeholder="Comprimento da Lâmina" value="<?php echo $row['comprimento_lamina']; ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputAddress">Largura da Lâmina:</label>
                    <input type="text" class="form-control" id="largura_lamina" name="largura_lamina" placeholder="Largura da Lâmina" value="<?php echo $row['largura_lamina']; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputAddress">Material do Cabo:</label>
                    <input type="text" class="form-control" id="material_cabo" name="material_cabo" placeholder="Material do Cabo" value="<?php echo $row['material_cabo']; ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputAddress">Comprimento do Cabo:</label>
                    <input type="text" class="form-control" id="comprimento_cabo" name="comprimento_cabo" placeholder="Comprimento do Cabo" value="<?php echo $row['comprimento_cabo']; ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputAddress">Dorso:</label>
                    <input type="text" class="form-control" id="dorso" name="dorso" placeholder="Dorso" value="<?php echo $row['dorso']; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="galeria1">Galeria 1*</label>
                    <input type="file" class="form-control-file" id="galeria1" name="galeria1" value="<?php echo $row['galeria1']; ?>">
                    <input type="hidden" name="galeria1_upada" value="<?php echo $row['galeria1']; ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="galeria2">Galeria 2*</label>
                    <input type="file" class="form-control-file" id="galeria2" name="galeria2" value="<?php echo $row['galeria2']; ?>">
                    <input type="hidden" name="galeria2_upada" value="<?php echo $row['galeria2']; ?>">

                </div>
                <div class="form-group col-md-4">
                    <label for="galeria3">Galeria 3*</label>
                    <input type="file" class="form-control-file" id="galeria3" name="galeria3" value="<?php echo $row['galeria3']; ?>">
                    <input type="hidden" name="galeria3_upada" value="<?php echo $row['galeria3']; ?>">

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