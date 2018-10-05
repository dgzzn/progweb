<?php
include_once 'Curso.php';

$curso = new Curso();
$resultado = $curso->inserir($_POST);



?>
<script>
    var mensagem = '<?php echo $resultado ? 'Sucesso' : 'Ocorreu um erro' ?>';
    alert(mensagem);
    window.location.href = 'formulario.php';
</script>