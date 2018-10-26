<?php
include_once 'Curso.php';

$curso = new Curso();

switch($_GET['acao']){
    case "excluir":
        $msg = 2;
        $resultado = $curso->excluir($_GET['id_curso']);
        break;

    case "salvar":
        if(!empty($_POST['id_curso'])){
            $msg = 2;
            $resultado = $curso->alterar($_POST);
        }else{
            $msg = 1;
            $resultado = $curso->inserir($_POST);
        }
        break;
}

?>
<script>
    var mensagem = '<?php if($msg==1){echo $resultado ? 'Sucesso' : 'Ocorreu um erro';}else{echo $resultado ? 'Ocorreu um erro' : 'Sucesso';} ?>';
    alert(mensagem);
    window.location.href = 'index.php';
</script>