<?php
//conexão
require_once 'db_connect_login.php';
//sessão
session_start();

//verificação para abrir pagina HOME
if(!isset($_SESSION['logado'])):
    header('Location: ../index.php');
endif;

//dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);
?>

<html>
    <head>
        <title>Home Teste</title>
        <meta charset="utf-8">

        <style>
            div{
                text-align: center;
                font-size: 10px;
                align-items: center;
                width: 500px;
                border: 5px solid gray;
                padding: 25px;
                margin: 0 auto;
                margin-top: 10em;
            }
        </style>
    </head>

    <body>
        <div>
            <h1>Ola, <?php echo $dados['nome']; ?></h1>
            
            <a href="../cadastro/index.php"><button>Cadastro</button></a>
            
            <a href="../listar/index_lista.php"><button>Listar técnicos</button></a>
            <br>
            <br>
            <a href="logout.php"><button>Sair</button></a>
        </div>
    </body>

</html>