<?php
include_once('Aluno.php');
$aluno = new Aluno();

switch($_GET['acao']){
    case "excluir":
        $msg = 2;
        $resultado = $aluno->excluir($_GET['id_aluno']);
        break;

    case "salvar":
        if(!empty($_POST['id_aluno'])){
            $msg = 2;
            $resultado = $aluno->alterar($_POST);
        }else{
            $msg = 1;
            $resultado = $aluno->inserir($_POST);
        }
        break;
}

?>
<script>
    var mensagem = '<?php if($msg==1){echo $resultado ? 'Sucesso' : 'Ocorreu um erro';}else{echo $resultado ? 'Ocorreu um erro' : 'Sucesso';} ?>';
    alert(mensagem);
    window.location.href = 'index.php';
</script>