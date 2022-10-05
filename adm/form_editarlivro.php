<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/05f770ec8f.js" crossorigin="anonymous"></script>
</head>

<body class="bg-fundo text-light">
    <header class="bg-principal">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <div style="width: 60px;" class="me-3">
                    <a class="" href="Home.html"><img src="../img/logo_1.png" alt="" class="w-100"></a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 me-auto ms-4">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="Admin.php">Cadastrar Produtos</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" aria-current="page" href="lista.php">Lista de Produtos</a>
                        </li>
                    </ul>



                </div>
            </div>
        </nav>
    </header>
    <div class="bg-secundaria">
        <nav id="navbar" class="navbar navbar-light mx-3">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link text-light p-0" href="#">Administração</a>
                </li>
            </ul>
        </nav>

    </div>

    <?php


include "funcoes.php";
require_once "src/ConexaoBD.php";
require_once "src/Livro.php";
require_once "src/livroDAO.php";
require_once "src/estiloDAO.php";


$id = $_GET['id'];

    $livroDAO = new livroDAO();
    $Livros = $livroDAO->obterLivrosPeloID($id);

?>

    <main>
        <div class="Form-Cadastro d-flex justify-content-center bg-principal text-light my-5">
            <form action="editarlivro.php" method="POST" class="row mx-2">

                <label for="id_contato" class="form-label text-center fs-2">Cadastrar um novo livro:</label>

                <!-- titutlo -->
                <div class="col-6 mb-2">
                    <i class="far fa-address-card"></i>
                    <label for="titulo" class="form-label mt-3">Titulo:</label>
                    <input type="text" name="titulo" id="titulo" value="<?=$Livros['titulo']?>" placeholder="Titulo:" required class="form-control">
                </div>
                <!-- titutlo -->

                <!-- autor -->
                <div class="col-6">
                    <i class="far fa-address-card"></i>
                    <label for="autor" class="form-label mt-3">Autor:</label>
                    <input type="text" name="autor" id="autor" value="<?=$Livros['autor']?>" placeholder="Autor:" required class="form-control">
                </div>
                <!-- autor -->

                <!-- ISBN -->
                <div class="col-12">
                    <i class="far fa-address-card"></i>
                    <label for="isbn" class="form-label mt-3">ISBN:</label>
                    <input type="text" name="isbn" id="isbn" value="<?=$Livros['isbn']?>" placeholder="ISBN:" required class="form-control">
                </div>
                <!-- ISBN -->

                <!-- editora -->
                <div class="col-6">
                    <i class="far fa-address-card mt-2"></i>
                    <label for="editora" class="form-label mt-3">Editora:</label>
                    <input type="text" name="editora" id="editora" value="<?=$Livros['editora']?>" placeholder="Editora:" required class="form-control">
                </div>
                <!-- editora -->

                <!-- edição -->
                <div class="col-6">
                    <i class="far fa-address-card mt-2"></i>
                    <label for="edicao" class="form-label mt-3">Edição:</label>
                    <input type="text" name="edicao" id="edicao" value="<?=$Livros['edicao']?>" placeholder="Edição:" required class="form-control">
                </div>
                <!-- edição -->

                <!-- data -->
                <div class="col-6 mb-2">
                    <i class="far fa-address-card mt-2"></i>
                    <label for="data" class="form-label mt-3">Ano de publicação:</label>
                    <input type="date" name="data" id="data" value="<?=$Livros['data']?>" placeholder="" required class="form-control">
                </div>
                <!-- data -->
                
                <!-- Estilo -->
                <div class="col-6">
                    <i class="far fa-address-card mt-2"></i>
                    <label for="estiloId" class="form-label mt-3">Estilo:</label>
                    <select name="estilo" id="estiloId" style="height: 35px; width:408px; text-align:center;">
                        <?php
                        $estiloDAO = new EstiloDAO();
                        $estilos = $estiloDAO->obterEstilos();
                        foreach($estilos as $estilo)
                        {
                            if($Livros['estiloId'] == $estilo['id'])
                            echo "<option selected value='" . $estilo['id'] . "'>" . $estilo['estilo'] . "</option>";
                            else
                            echo "<option value='" . $estilo['id'] . "'>" . $estilo['estilo'] . "</option>";
                        }
                        ?>
                    </select>                 
                </div>
                <!-- Estilo -->

                <!-- Valor -->
                <div class="col-6">
                    <i class="far fa-address-card"></i>
                    <label for="valor" class="form-label mt-3">Valor:</label>
                    <input type="text" name="valor" id="valor" value="<?=$Livros['valor']?>" placeholder="Valor:" required class="form-control">
                </div>
                <!-- Valor -->

                <!-- promoção -->
                <div class="form-check form-switch col-6 d-flex align-items-end">
                    <label class="checkbox-inline"><input name="promo" id="promo" type="checkbox" value="1">Promoção</label>
                </div>
                <!-- promoção -->

                <!-- text -->
                <div class="col-12 mb-5">
                    <i class="far fa-address-card mt-2"></i>
                    <label for="text" class="form-label mt-3">Resumo:</label>
                    <input type="text" name="text" id="text" value="<?=$Livros['text']?>" placeholder="Resumo:" required class="form-control h-100">
                <br>
                </div>
                <!-- text -->

                
                <!-- capa -->
                <div class="col-12 mt-5">
                    <i class="far fa-address-card"></i>
                    <label for="capa" class="form-label "> Seu Arquivo: </label> 
                    <input type="file" id="capa" class="input-padrao" name="capa"> 
                </div>
                <!-- capa -->
                    
                    
                <!-- enviar -->
                <div class="col-10 mt-5 mb-3 mx-auto">
                    <button type="subimit" id="botaoId" class="btn d-block btn-outline-light mx-auto w-50" data-bs-toggle="modal" data-bs-target="#exampleModal">Enviar</button>
                    <input type="hidden" name="id" value="<?=$Livros['id']?>">
                </div>
                <!-- enviar -->


            </form>
        </div>
    </main>

    <footer class="text-center text-light bg-principal mt-3">
        <!-- Grid container -->
        <div class="container pt-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-link btn-floating btn-lg text-light m-1" href="#!" role="button" data-mdb-ripple-color="dark">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <!-- Twitter -->
                <a class="btn btn-link btn-floating btn-lg text-light m-1" href="#!" role="button" data-mdb-ripple-color="dark">
                    <i class="fab fa-twitter"></i>
                </a>

                <!-- Google -->
                <a class="btn btn-link btn-floating btn-lg text-light m-1" href="#!" role="button" data-mdb-ripple-color="dark">
                    <i class="fab fa-google"></i>
                </a>

                <!-- Instagram -->
                <a class="btn btn-link btn-floating btn-lg text-light m-1" href="#!" role="button" data-mdb-ripple-color="dark">
                    <i class="fab fa-instagram"></i>
                </a>

                <!-- Linkedin -->
                <a class="btn btn-link btn-floating btn-lg text-light m-1" href="#!" role="button" data-mdb-ripple-color="dark">
                    <i class="fab fa-linkedin"></i>
                </a>
                <!-- Github -->
                <a class="btn btn-link btn-floating btn-lg text-light m-1" href="#!" role="button" data-mdb-ripple-color="dark">
                    <i class="fab fa-github"></i>
                </a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center text-light p-3 bg-secundaria">
            © 2021 Copyright
        </div>
        <!-- Copyright -->
    </footer>
</body>
<script src="teste.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</html>