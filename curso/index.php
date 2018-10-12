<?php include_once '../cabecalho.php';
include_once 'Curso.php';

$cursos = (new Curso())->selectDados();
?>

<h1>Curso</h1>

<br/>
<a name="" id="" class="btn btn-success" href="formulario.php" role="button">Inserir</a><br><br>
<table class="table table-bordered table-hover">
    <thead class="thead-dark">
        <tr>
            <th>Curso</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($cursos as $curso){
        echo "
        <tr>
            <td scope='row'>{$curso['nome']}</td>
            <td><a class='btn btn-primary' href='#' role='button'>Alterar</a>
            <a class='btn btn-danger' href='processamento.php?id_curso={$curso['id_curso']}&acao=excluir' role='button'>Excluir</a></td>
        </tr>
        ";
    }
    ?>

    </tbody>
</table>

<?php include_once '../rodape.php'; ?>