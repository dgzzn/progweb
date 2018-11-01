<?php
include_once('Responsavel.php');

$responsavel = new Responsavel();
switch($_GET['acao']){
    case "excluir":
        $msg = 2;
        $resultado = $responsavel->excluir($_GET['id_responsavel']);
        break;

    case "salvar":
        if(!empty($_POST['id_responsavel'])){
            $msg = 2;
            $resultado = $responsavel->alterar($_POST);
        }else{
            $msg = 1;
            $resultado = $responsavel->inserir($_POST);
        }
        break;
}
?>

<script>
    var mensagem = '<?php if($msg==1){echo $resultado ? 'Sucesso' : 'Ocorreu um erro';}else{echo $resultado ? 'Ocorreu um erro' : 'Sucesso';} ?>';
    alert(mensagem);
    window.location.href = 'index.php';
</script>