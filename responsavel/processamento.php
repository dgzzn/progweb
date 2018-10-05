<?php
include_once('Responsavel.php');

$responsavel = new Responsavel();
$resultado = $responsavel->inserir($_POST);
?>

<script>
    var mensagem = '<?php echo $resultado ? 'Sucesso' : 'Ocorreu um erro' ?>';
    alert(mensagem);
    window.location.href = 'formulario.php';
</script>