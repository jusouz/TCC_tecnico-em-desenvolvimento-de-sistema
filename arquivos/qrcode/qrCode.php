<?php
//conexão com o DB para listar os nomes já cadastrados
include_once '../cadastro/php_action/db_connect.php';

?>

<!DOCTYPE html>
<html>
    <head>
         <title> código indentificação</title>
    </head>

    <body >
        <h1>Verificação de segurança: </h1>
        <?php

        //Pegar o ID que veio pela URL e dar um SELECT no DB
        if(isset($_GET['id'])):
            $id = mysqli_escape_string($connect, $_GET['id']);

        endif;

            $aux =  'qr_img0.50j/php/qr_img.php?';
            $aux .= 'd=localhost/projeto_final_FINAL/qrcode/dados_tec.php?id='. $id .'&';
            $aux .= 'e=L&';
            $aux .= 's=4&';
            $aux .= 't=J';
       
        ?>

        <img src="<?php echo $aux ?>"/>
    
    </body>
</html>

