<?php
//conexão
include_once '../cadastro/php_action/db_connect.php';
//header
include_once '../includes/header.php';

//Pegar o ID que veio pela URL e dar um SELECT no DB
if(isset($_GET['id']))://filta o ID antes de verificar o DB
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM tecnicos WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);

endif;
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Informações do técnico</h3>
       
        <!--Processar infomração do formulário -->
        <form action="php_action/update.php" method="POST">

        <!--Criar um Id escondido para enviar ao UPDATE -->
        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">


            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="curso" id="curso" value="<?php echo $dados['curso']; ?>">
                <label for="curso">Curso</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="validade" id="validade" value="<?php echo $dados['validade']; ?>">
                <label for="validade">Validade</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="instituicao" id="instituicao" value="<?php echo $dados['instituicao']; ?>">
                <label for="instituicao">Instituicao</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="cidade" id="cidade" value="<?php echo $dados['cidade']; ?>">
                <label for="cidade">Cidade</label>
            </div>



            <a href="../listar/index_lista.php" class="btn-floating red"><i class="material-icons">arrow_back</i></a>           
        
        </form>
    
    </div>
</div>

<?php
//footer
include_once '../includes/footer.php'
?>