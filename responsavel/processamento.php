<?php
include_once('../mysql.php');

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$data_nascimento = $_POST['data_nascimento'];
$sexo = $_POST['sexo'];

#$sql = "insert into responsavel(nome, telefone, endereco, data_nascimento, sexo) VALUES ('$nome', '$telefone',
#'$endereco', '$data_nascimento', '$sexo')";

#$sql = "update responsavel set nome=$nome, where id_responsavel=1";

$sql = "insert into responsavel(nome, telefone, endereco, data_nascimento, sexo)
        values ('$nome', '$telefone', '$endereco', '$data_nascimento', '$sexo')";
echo $sql;
$conexao->query($sql);

?>