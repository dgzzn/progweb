<?php include_once '../cabecalho.php';

include_once 'Aluno.php';

$aluno = new Aluno();

if(!empty($_GET['id_aluno'])){
    $aluno->selecionarId($_GET['id_aluno']);
} ?>

<h1>Aluno</h1>

<br/>

<div class="jumbotron">
    <form action="processamento.php?acao=salvar" method="post">
        <div class="form-group">
            <input type="hidden" name="id_aluno" value="<?php echo $aluno->getIdAluno(); ?>">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="<?php echo $aluno->getNome(); ?>" class="form-control"/>
            <label for="matricula">Matrícula</label>
            <input type="text" id="matricula" name="matricula" value="<?php echo $aluno->getMatricula(); ?>" class="form-control"/>
            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone" value="<?php echo $aluno->getTelefone(); ?>" class="form-control"/>
            <label for="endereco">Endereço</label>
            <input type="text" id="endereco" name="endereco" value="<?php echo $aluno->getEndereco(); ?>" class="form-control"/>
            <div class="form-group">
              <label for="data_nascimento">Data de nascimento</label>
              <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" value="<?php echo $aluno->getDataNascimento(); ?>" aria-describedby="helpId" placeholder="">
            </div>
            <label for="form-sexo">Sexo</label><br>
            <div class="form-check" id="form-sexo">
                <input type="radio" class="form-check-input" id="Masc" name="sexo" value="M" <?=$aluno->getSexo()=="M" ? "checked" : ""?>/>
                <label class="form-check-label" for="Masc">Masculino</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="Fem" name="sexo" value="F" <?=$aluno->getSexo()=="F" ? "checked" : ""?>/>
                <label class="form-check-label" for="Fem">Feminino</label>
            </div>


            <br><input class="btn btn-primary" type="submit" value="Enviar"/><br>


        </div>

    </form>
</div>
