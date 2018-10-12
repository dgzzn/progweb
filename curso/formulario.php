<?php include_once '../cabecalho.php';
include_once 'Curso.php' ?>

<h1>Curso</h1>

<br/>

<div class="jumbotron">
    <form action="processamento.php" method="post">
        <div class="form-group">
            <label for="nome">Curso</label>
            <input type="text" id="nome" name="nome"/> <br/><br/>
            <input class="btn btn-primary" type="submit" value="Enviar"/><a name="" id="" class="btn btn-success" href="index.php" role="button">Voltar</a>
        </div>
    </form>
</div>


<?php include_once '../rodape.php';?>