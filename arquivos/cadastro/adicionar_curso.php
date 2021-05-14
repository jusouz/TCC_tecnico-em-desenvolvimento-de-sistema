<?php
//header
include_once '../includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Ficha técnico</h3>
       
        <!--Processar infomração do formulário -->
        <form action="php_action/create.php" method="POST">

            <div class="input-field col s12">
                <input type="text" name="curso" id="curso">
                <label for="curso">Curso</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="validade" id="validade">
                <label for="validade">Validade</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="instituicao" id="instituicao">
                <label for="instituicao">Instituicao</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="cidade" id="cidade">
                <label for="cidade">Cidade</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn">
                cadastrar
            </button>            
            
        
        </form>
    
    </div>
</div>

<?php
//footer
include_once '../includes/footer.php'
?>