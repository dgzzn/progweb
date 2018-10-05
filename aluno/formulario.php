<?php include_once '../cabecalho.php' ?>

<h1>Aluno</h1>

<br/>

<div class="jumbotron">
    <form action="processamento.php" method="post">
        <div class="form-group">

            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" class="form-control"/>
            <label for="matricula">Matrícula</label>
            <input type="text" id="matricula" name="matricula" class="form-control"/>
            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone" class="form-control"/>
            <label for="endereco">Endereço</label>
            <input type="text" id="endereco" name="endereco" class="form-control"/>
            <label for="form-sexo">Sexo</label><br>
            <div class="form-group">
              <label for="data_nascimento">Data de nascimento</label>
              <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" aria-describedby="helpId" placeholder="">
            </div>

            <div class="form-check" id="form-sexo">
                <input type="radio" class="form-check-input" id="Masc" name="sexo" value="M"/>
                <label class="form-check-label" for="Masc">Masculino</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="Fem" name="sexo" value="F"/>
                <label class="form-check-label" for="Fem">Feminino</label>
            </div>


            <br><input class="btn btn-primary" type="submit" value="Enviar"/><br>


        </div>

    </form>
</div>
