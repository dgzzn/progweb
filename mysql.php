<?php

echo "<h1>Conexão com o Danco de Dados</h1>";

$conexao = new PDO("mysql:host=localhost; dbname=escola;charset=utf8", 'root', '');

#$sql = "update curso set nome='Português' where id_curso=12";

#$conexao->query($sql);


#echo '<pre>'; print_r($conexao); die;


?>