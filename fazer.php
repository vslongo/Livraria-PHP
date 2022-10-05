<?php
//Edita_livro
if($_FILES['imagem']['size'] >0)
{
    $imagem = pegarImagem($_FILES);
}
else
    $imagem = "";

//LivroDAO
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
    
            $sql = "update livros set titulo = '$titulo',autor = '$autor',isbn = '$isbn',editora = '$editora',edicao = '$edicao',data = '$data',estilo = '$estilo',valor = '$valor',text = '$text',capa = '$capa',promo = '$promo' WHERE id='$id' ";
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
    
            $sql = "update livros set titulo = '$titulo',autor = '$autor',isbn = '$isbn',editora = '$editora',edicao = '$edicao',data = '$data',estilo = '$estilo',valor = '$valor',text = '$text',promo = '$promo' WHERE id='$id' ";
            $conexaoBD->exec($sql);
        }


//Criar tabela estilo com ID e Estilo varchar(45)


//Criar estilo.php com 
/*
private int $id;
private string $estilos;

getters e setters
*/

//Criar estiloDAO.php com 
/*
requeire- src/ConexaoBD.php

    function obterEstilos()
    {
        $conexaoBD = ConexaoBD::getConexao();
        $sql = "select * from estilos";
        $stmt = $conexaoBD->query($sql);
        $estilos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $estilos;
    }
*/


//Form de cadastro

/*
    Banco de Dados


    
*/