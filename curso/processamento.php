<?php
include_once 'Curso.php';

$curso = new Curso();
$curso->inserir($_POST);

header('location: formulario.php');


?>