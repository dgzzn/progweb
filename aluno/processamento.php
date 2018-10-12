<?php
include_once('Aluno.php');
$aluno = new Aluno();
$resultado = $aluno->inserir($_POST);

?>
<script>
    var mensagem = '<?php echo $resultado ? 'Sucesso' : 'Ocorreu um erro' ?>';
    alert(mensagem);
    window.location.href = 'index.php';
</script>