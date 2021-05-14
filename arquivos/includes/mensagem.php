<?php
//sessão -> mensagem de ERRO/SUCESSO ao cadastrar funcionários
session_start();

if(isset($_SESSION['mensagem'])): ?>

<script>
//---------Mensagem ao adicionar funcionários
window.onload = function(){
    M.toast({html: '<?php echo $_SESSION['mensagem'] ?>'});
}
</script>

<?php
endif;
//limpar sessão
session_unset();
?>