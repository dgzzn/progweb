<?php
include_once 'Curso.php';

$curso = new Curso();

switch($_GET['acao']){
    case "excluir":
        $resultado = $curso->excluir($_GET['id_curso']);
        break;

    case "salvar":
        $resultado = $curso->inserir($_POST);
        break;
}

?>
<script>
    var mensagem = '<?php echo $resultado ? 'Sucesso' : 'Ocorreu um erro' ?>';
    alert(mensagem);
    window.location.href = 'index.php';
</script>