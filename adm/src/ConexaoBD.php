<?php
class ConexaoBD
{
    public static function getConexao(): PDO
    {
        $conexao = new PDO("mysql:host=localhost;dbname=terceiro_olho", "root", "coringa");
        return $conexao;
    }
}
