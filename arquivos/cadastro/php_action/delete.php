<?php
//Conexão
require_once 'db_connect.php';

session_start();

if(isset($_POST['btn-deletar'])):
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM tecnicos WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Deletado com sucesso";
        header('Location: ../../listar/index_lista.php?');
    else:
        $_SESSION['mensagem'] = "Erro ao Deletar";
        header('Location: ../../listar/index_lista.php? ');

    endif;
endif;

?>