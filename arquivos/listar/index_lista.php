<?php
//conexão com o DB para listar os nomes já cadastrados
include_once '../cadastro/php_action/db_connect.php';
//header
include_once '../includes/header.php';
//mensagem
include_once '../includes/mensagem.php';

?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Lista de técnicos</h3>

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

                 <?php
                 // busca no DB os cadastros ja realizados para apresentar na INDEX
                    $sql = "SELECT * FROM tecnicos";
                    $resultado = mysqli_query($connect, $sql);
                    //se tiver algum dado na tabela (DB) mostra na tela
                    if(mysqli_num_rows($resultado) > 0):
                            
                            while($dados = mysqli_fetch_array($resultado)):
                ?>

                        <tr>
                                <!--Inserir na tabelas os dados ja digitados e salvos no DB -->
                                <td><?php echo $dados['nome']; ?></td>
                                <td><?php echo $dados['usuario']; ?></td>
                                <td><?php echo $dados['cpf']; ?></td>
                                <td><?php echo $dados['telefone']; ?></td>
                                <td><?php echo $dados['endereco']; ?></td>
                                <td><?php echo $dados['curso']; ?></td>
                                <td><?php echo $dados['validade']; ?></td>
                                <td><?php echo $dados['instituicao']; ?></td>
                                <td><?php echo $dados['cidade']; ?></td>

                           

                          


                           
                            <td><a href="../qrcode/qrCode.php?id=<?php echo $dados['id'] ?>" class="btn-floating black"><i class="material-icons">attach_file</i></a></td>                         

                        
                            <td><a href="../cadastro/editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating green"><i class="material-icons">edit</i></a></td>
          
                              
                              <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>
                               
                                <!-- Modal Structure -->
                                <div id="modal<?php echo $dados['id']; ?>" class="modal">
                                    <div class="modal-content">
                                    <h4>Opa!</h4>
                                    <p>Tem certeza que deseja excluir esse client?</p>
                                    </div>
                                    <div class="modal-footer">
                                    
                                    <form action="../cadastro/php_action/delete.php" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

                                        <button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>
                                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                    </form>

                                    </div>
                                </div>

                       
                        </tr>

                    <?php
                            endwhile;
                    // Se não tiver informaçãona tabela mostrar - - - 
                    else: ?>
                     
                        <tr>
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

                <?php
                    endif;
                ?>

            </tbody>

        </table>

        <br>
    
        <a href="../login/home.php" class="btn-floating red"><i class="material-icons">arrow_back</i></a>
    
    </div>
</div>




<?php
//footer
include_once '../includes/footer.php';

?>
