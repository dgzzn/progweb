<?php include_once '../cabecalho.php';
include_once 'Responsavel.php';

$responsaveis = (new Responsavel())->selectDados();
?>

<h1>Responsável</h1>

<br/>
<a name="" id="" class="btn btn-success" href="formulario.php" role="button">Inserir</a><br><br>
<table class="table table-bordered table-hover">
    <thead class="thead-dark">
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Data de nascimento</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($responsaveis as $responsavel){
        echo "
        <tr>
            <td scope='row'>{$responsavel['nome']}</td>
            <td scope='row'>{$responsavel['telefone']}</td>
            <td scope='row'>{$responsavel['endereco']}</td>
            <td scope='row'>{$responsavel['data_nascimento']}</td>
            <td><a class='btn btn-primary' href='#' role='button'>Alterar</a>
            <a class='btn btn-danger' href='#' role='button'>Excluir</a></td>
        </tr>
        ";
    }
    ?>

    </tbody>
</table>

<?php include_once '../rodape.php'; ?>