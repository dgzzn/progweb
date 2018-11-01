<?php include_once '../cabecalho.php';
include_once 'Aluno.php';

$alunos = (new aluno())->selectDados();
?>

<h1>Alunos</h1>

<br/>
<a name="" id="" class="btn btn-success" href="formulario.php" role="button">Inserir</a><br><br>
<table class="table table-bordered table-hover">
    <thead class="thead-dark">
        <tr> 
            <th>Matrícula</th>   
            <th>Aluno</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Data de Nascimento</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($alunos as $aluno){
        echo "
        <tr>
            <td scope='row'>{$aluno['matricula']}</td>
            <td scope='row'>{$aluno['nome']}</td>
            <td scope='row'>{$aluno['telefone']}</td>
            <td scope='row'>{$aluno['endereco']}</td>
            <td scope='row'>{$aluno['data_nascimento']}</td>
            <td><a class='btn btn-primary' href='formulario.php?id_aluno={$aluno['id_aluno']}' role='button'>Alterar</a>
            <a class='btn btn-danger' href='processamento.php?id_aluno={$aluno['id_aluno']}&acao=excluir' role='button'>Excluir</a></td>
        </tr>
        ";
    }
    ?>

    </tbody>
</table>

<?php include_once '../rodape.php'; ?>