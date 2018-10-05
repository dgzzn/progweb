<?php include_once '../cabecalho.php';
include_once '../mysql.php' ?>

<h1>Curso</h1>

<br/>

<div class="jumbotron">
    <form action="processamento.php" method="post">
        <div class="form-group">
            <label for="nome">Curso</label>
            <input type="text" id="nome" name="nome"/> <br/><br/>
            <input class="btn btn-default" type="submit" value="Enviar"/>
        </div>
    </form>
</div>


