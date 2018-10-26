<?php include_once '../cabecalho.php';
include_once 'Curso.php';

$curso = new Curso();

if(!empty($_GET['id_curso'])){
    $curso->selecionarId($_GET['id_curso']);
}
?>

<h1>Curso</h1>

<br/>

<div class="jumbotron">
    <form action="processamento.php?acao=salvar" method="post">

        <div class="form-group">
            <input type="hidden" name="id_curso" value="<?php echo $curso->getIdCurso(); ?>">
            <label for="nome">Curso</label>
            <input type="text" id="nome" name="nome" value="<?php echo $curso->getNome(); ?>"/> <br/><br/>
            <input class="btn btn-primary" type="submit" value="Enviar"/><a name="" id="" class="btn btn-success" href="index.php" role="button">Voltar</a>
        </div>
    </form>
</div>


<?php include_once '../rodape.php';?>