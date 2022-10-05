<?php

function pegarImagem(Array $files):string{
    $nome_img = $files['capa']['name'];
    $tipo_img = $files['capa']['type'];
    $tam_img = $files['capa']['size'];
    $capa = $files['capa']['tmp_name'];

    $fp = fopen($capa, "rb");
    $capa = fread($fp, $tam_img);
    $capa = addslashes($capa);
    fclose($fp);

    return $capa;
}