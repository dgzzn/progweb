<?php
include_once('../mysql.php');

$matricula = $_POST['matricula'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$sexo = $_POST['sexo'];
$data_nascimento = $_POST['data_nascimento'];

#$sql = "insert into aluno(matricula, nome, telefone, endereco, sexo) values ('$matricula', '$nome', '$telefone', '$endereco', '$sexo')";
$sql = "insert into aluno (matricula, nome, telefone, endereco, data_nascimento, sexo, id_curso) 
    values ('$matricula', '$nome', '$telefone', '$endereco', '$data_nascimento', '$sexo', 11)";

$conexao->query($sql);


?>