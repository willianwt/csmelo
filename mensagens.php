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
 conteudo aqui

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