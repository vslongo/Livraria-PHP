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
                    <a class="nav-link text-light p-0" href="#">Administra????o</a>
                </li>
            </ul>
        </nav>
    </div>

    <?php

    require_once "src/ConexaoBD.php";
    require_once "src/Livro.php";
    require_once "src/LivroDAO.php";
    $pesquisa = $_POST['pesquisa'];
    $produtoDAO = new LivroDao();
    $produtos = $produtoDAO->pesquisaProduto($pesquisa);

    ?>

    <main>
        <h2>Pesquisar Produto</h2>
        <form action="busca.php" method="post">
            <label for="">Digite nome do autor ou t??tulo do livro: </label>
            <input type="text" name="pesquisa" id="" class="input-padrao" required="true" size=50>

            <button type="submit" id="botaoId">Pesquisar</button>
        </form>
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
            ?? 2021 Copyright
        </div>
        <!-- Copyright -->
    </footer>
</body>
<script src="teste.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</html>