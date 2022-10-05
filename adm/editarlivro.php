<?php
require_once "src/ConexaoBD.php";
require_once "src/Livro.php";
require_once "src/livroDAO.php";
?>
<h2>Editar Livros</h2>
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
else{
    $imagem = "";
}
    
    $id = $_POST['id'];

if ($_POST['promo']=='')
    $promo = 0;
else
    $promo = $_POST['promo'];  
    
    

    $livros = new Livros();
    $livros->setId($id);
    $livros->setTitulo($titulo);
    $livros->setAutor($autor);
    $livros->setIsbn($isbn);
    $livros->setEditora($editora);
    $livros->setEdicao($edicao);
    $livros->setData($data);
    $livros->setEstilo($estilo);
    $livros->setValor($valor);
    $livros->setText($text);
    $livros->setCapa($capa);
    $livros->setPromo($promo);

    $livroDAO = new livroDAO();
    $livroDAO->editarLivros($livros);
    header('Location: lista.php');
    ?>
    <span class="destaque">A atualização do produto foi efetuado com sucesso!</span>
</div>