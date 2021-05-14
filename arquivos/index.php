<?php
//Conexão
require_once 'login/db_connect_login.php';

//SESSÂO
session_start();

if(isset($_POST['btn-entrar'])):
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if(empty($login) or empty($senha)):
        $erros[] = "preencher login/senha";
   
    else:

        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) > 0):

            $senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
            $resultado = mysqli_query($connect, $sql);
            
            if(mysqli_num_rows($resultado) == 1):
                
                $dados = mysqli_fetch_array($resultado);
                mysqli_close($connect);
                
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: login/home.php');

                else:
                    $erros[] = "<li>Usuário e senha não conferem</li>";
            endif;

            else:
                $erros[] = "<li>Usuário inexistente</li>";
        endif;

    endif;

endif;

?>

<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">

        <style>
            div{
                text-align: center;
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
            <h1>Login Página inicial</h1>
            <?php
                if(!empty($erros)):
                    foreach($erros as $erro):
                        echo $erro;
                    endforeach;
                endif;
            ?>

            <hr>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                Login: <input type="text" name="login">
                <br>
                Senha: <input type="password" name="senha">
                <br>
                <button type="submit" name="btn-entrar">Entrar</button>
            </form>
        </div>
        </body>
</html>

