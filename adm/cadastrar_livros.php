<?php
include "funcoes.php";
require_once "src/ConexaoBD.php";
require_once "src/Livro.php";
require_once "src/livroDAO.php";
?>
<h2>Cadastro de Livros</h2>
<div>
    <?php
    $conexao = ConexaoBD::getConexao();
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $isbn = $_POST['isbn'];
    $editora = $_POST['editora'];
    $edicao = $_POST['edicao'];
    $data = $_POST['data'];
    $estilo = $_POST['estilo'];
    $valor = $_POST['valor'];
    $text = $_POST['text'];
    if($_FILES['capa']['size'] >0)
    {
        $imagem = pegarImagem($_FILES);
    }
    else
        $imagem = "";

    if ($_POST['promo']=='')
        $promo = 0;
    else
        $promo = $_POST['promo'];  
    
    $livros = new Livros();

    
    $livros->setTitulo($titulo);
    $livros->setAutor($autor);
    $livros->setIsbn($isbn);
    $livros->setEditora($editora);
    $livros->setEdicao($edicao);
    $livros->setData($data);
    $livros->setEstilo($estilo);
    $livros->setValor($valor);
    $livros->setText($text);
    $livros->setCapa($imagem);
    $livros->setPromo($promo);

    $livroDAO = new livroDAO();
    $livroDAO->cadastrarLivros($livros);
    header('Location: lista.php');
    ?>
    
</div>