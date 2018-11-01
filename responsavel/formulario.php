<?php include_once '../cabecalho.php' ;
include_once 'Responsavel.php';

$responsavel = new Responsavel();

if(!empty($_GET['id_responsavel'])){
    $responsavel->selecionarId($_GET['id_responsavel']);
} ?>

<h1>Responsável</h1>

<br/>

<div class="jumbotron">
    <form action="processamento.php?acao=salvar" method="post">
        <div class="form-group">
            <input type="hidden" name="id_responsavel" value="<?php echo $responsavel->getIdResponsavel(); ?>">
            <label for="nome" >Nome</label>
            <input type="text" id="nome" name="nome" value="<?php echo $responsavel->getNome(); ?>" class="form-control"/>

            <label for="telefone" >Telefone</label>
            <input type="text" id="telefone" name="telefone" value="<?php echo $responsavel->getTelefone(); ?>" class="form-control"/>

            <label for="endereco" >Endereço</label>
            <input type="text" id="endereco" name="endereco" value="<?php echo $responsavel->getEndereco(); ?>" class="form-control"/>

            <label for="data" >Data de Nascimento</label><br>
            <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $responsavel->getDataNascimento(); ?>" /> <br>

            <label for="form-sexo">Sexo</label><br>
            <div class="form-check" id="form-sexo">
                <input type="radio" class="form-check-input" id="Masc" name="sexo" value="M"  <?=$responsavel->getSexo()=="M" ? "checked" : ""?>/>
                <label class="form-check-label" for="Masc">Masculino</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="Fem" name="sexo" value="F" <?=$responsavel->getSexo()=="F" ? "checked" : ""?>/>
                <label class="form-check-label" for="Fem">Feminino</label>
            </div>


            <br><input class="btn btn-primary" type="submit" value="Enviar"/><br>


        </div>

    </form>
</div>
