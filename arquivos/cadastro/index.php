<?php
//conexão com o DB para listar os nomes já cadastrados
include_once 'php_action/db_connect.php';
//header
include_once '../includes/header.php';
//mensagem
include_once '../includes/mensagem.php';


?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Cadastrar novos técnicos</h3>

        <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Usuário:</th>
                    <th>cpf:</th>
                    <th>telefone:</th>
                    <th>Endereço:</th>
                    <th>Curso:</th>
                    <th>Validade:</th>
                    <th>Instituição:</th>
                    <th>Cidade:</th>
                </tr>
            </thead>

            <tbody>
                  <tr>
                      <!--Inserir na tabelas os dados ja digitados e salvos no DB -->
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>

                   </tr>

            </tbody>

        </table>

        <a href="adicionar.php" class="btn">adicionar funcionários</a>
        <br>
        <br>
       <a href="../login/home.php" class="btn-floating red"><i class="material-icons">arrow_back</i></a>        
    
    </div>
</div>




<?php
//footer
include_once '../includes/footer.php';

?>
