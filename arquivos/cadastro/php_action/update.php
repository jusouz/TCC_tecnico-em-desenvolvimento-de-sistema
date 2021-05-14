<?php
//Conexão
require_once 'db_connect.php';
//Sessão - inicia a sessão para apresentar as mensagens de SUCESSO ou ERRO
session_start();

if(isset($_POST['btn-editar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $usuario = mysqli_escape_string($connect, $_POST['usuario']);
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $endereco = mysqli_escape_string($connect, $_POST['endereco']);

    $curso = mysqli_escape_string($connect, $_POST['curso']);
    $validade = mysqli_escape_string($connect, $_POST['validade']);
    $instituicao = mysqli_escape_string($connect, $_POST['instituicao']);
    $cidade = mysqli_escape_string($connect, $_POST['cidade']);

    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE tecnicos SET nome = '$nome', usuario = '$usuario', cpf = '$cpf', telefone = '$telefone', endereco = '$endereco', curso = '$curso', validade = '$validade', instituicao = '$instituicao', cidade = '$cidade' WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso";
        header('Location: ../../listar/index_lista.php ');
    else:
        $_SESSION['mensagem'] = "Erro ao Atualizar";
        header('Location: ../../listar/index_lista.php');
    endif;

endif;
?>