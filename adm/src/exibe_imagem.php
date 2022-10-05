<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    
<?php
    require "ConexaoBD.php";
    require "livroDAO.php";
    require "Livro.php";

    $id = $_GET['id'];
    
    $livroDAO = new livroDAO();
    $Livros = $livroDAO->obterLivrosPeloID($id);

?>
    <h2><?=$Livros['titulo']?></h2>
    <h3><?=$Livros['artista']?></h3>
    <img src = "data:image/png;base64,<?=base64_encode($Livros['imagem'])?>" class="img-card-disco"/>         

</body>
</html>
