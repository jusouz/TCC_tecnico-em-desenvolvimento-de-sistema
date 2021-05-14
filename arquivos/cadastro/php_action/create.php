<?php
///conexão
require_once 'db_connect.php';
//session
session_start();

if(isset($_POST['btn-cadastrar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $usuario = mysqli_escape_string($connect, $_POST['usuario']);
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $endereco = mysqli_escape_string($connect, $_POST['endereco']);
    
    $curso = mysqli_escape_string($connect, $_POST['curso']);
    $validade = mysqli_escape_string($connect, $_POST['validade']);
    $instituicao = mysqli_escape_string($connect, $_POST['instituicao']);
    $cidade = mysqli_escape_string($connect, $_POST['cidade']);

    $sql = "INSERT INTO tecnicos (nome, usuario, cpf, telefone ,endereco, curso, validade, instituicao, cidade) VALUES('$nome', '$usuario', '$cpf', '$telefone', '$endereco', '$curso', '$validade', '$instituicao', '$cidade')";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] =  "cadastrado com sucesso";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] =  "Erros ao cadastrar";
        header('Location: ../index.php');
    endif;
endif;

?>