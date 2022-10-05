<?php
require_once "ConexaoBD.php";
class livroDAO
{
    function cadastrarLivros(livros $livros)
    {
        $conexaoBD = ConexaoBD::getConexao();
        $titulo = $livros->getTitulo();
        $autor = $livros->getAutor();
        $isbn = $livros->getIsbn();
        $editora = $livros->getEditora();
        $edicao = $livros->getEdicao();
        $data = $livros->getData();
        $estilo = $livros->getEstilo();
        $valor = $livros->getValor();
        $text = $livros->getText();
        $capa = $livros->getCapa();
        $promo = $livros->getPromo();

        $sql = "insert into livros (titulo, autor, isbn, editora, edicao, data, estiloId, valor, text, capa, promo) values ('$titulo', '$autor','$isbn','$editora','$edicao','$data','$estilo','$valor','$text','$capa','$promo')";

        $conexaoBD->exec($sql);
    }


    function obterLivros()
    {
        $conexaoBD = ConexaoBD::getConexao();
        $sql = "select l.*, e.estilo from livros as l, estilos as e where l.estiloId=e.id";
        $stmt = $conexaoBD->query($sql);
        $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $livros;
    }

    function obterLivrosPeloID($id)
    {
        $conexaoBD = ConexaoBD::getConexao();
        $sql = "select * from Livros where id=$id";
        $stmt = $conexaoBD->query($sql);
        $livros = $stmt->fetch(PDO::FETCH_ASSOC);
        return $livros;
    }


    function deletarLivros($id)
    {
        $conexaoBD = ConexaoBD::getConexao();
        $sql = "delete from livros where id=$id";
        $conexaoBD->exec($sql);
    }

    function editarLivros(Livros $livros)
    {

        if($livros->getCapa()=="")
        {
            $conexaoBD = ConexaoBD::getConexao();
            $id = $livros->getId();
            $titulo = $livros->getTitulo();
            $autor = $livros->getAutor();
            $isbn = $livros->getIsbn();
            $editora = $livros->getEditora();
            $edicao = $livros->getEdicao();
            $data = $livros->getData();
            $estilo = $livros->getEstilo();
            $valor = $livros->getValor();
            $text = $livros->getText();
            $capa = $livros->getCapa();
            $promo = $livros->getPromo();
    
            $sql = "update livros set titulo = '$titulo',autor = '$autor',isbn = '$isbn',editora = '$editora',edicao = '$edicao',data = '$data',estiloId = '$estilo',valor = '$valor',text = '$text',capa = '$capa',promo = '$promo' WHERE id='$id' ";
            $conexaoBD->exec($sql);
        }else
        {
            $conexaoBD = ConexaoBD::getConexao();
            $id = $livros->getId();
            $titulo = $livros->getTitulo();
            $autor = $livros->getAutor();
            $isbn = $livros->getIsbn();
            $editora = $livros->getEditora();
            $edicao = $livros->getEdicao();
            $data = $livros->getData();
            $estilo = $livros->getEstilo();
            $valor = $livros->getValor();
            $text = $livros->getText();
            $promo = $livros->getPromo();
    
            $sql = "update livros set titulo = '$titulo',autor = '$autor',isbn = '$isbn',editora = '$editora',edicao = '$edicao',data = '$data',estiloId = '$estilo',valor = '$valor',text = '$text',promo = '$promo' WHERE id='$id' ";
            $conexaoBD->exec($sql);
        }

    }
}
