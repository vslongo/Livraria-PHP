<?php
require_once "src/livroDAO.php";
?>
<div>
    <?php
    $id = $_GET['id'];

    $livroDAO = new livroDAO();
    $livroDAO->deletarLivros($id);
    header('Location: lista.php');
    ?>
</div>