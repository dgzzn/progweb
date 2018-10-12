<?php

include_once('../Conexao.php');

class Curso{

    protected $id_curso;
    protected $nome;

    public function getIdCurso(){
        return $this->$id_curso;
    }

    public function setIdCurso($id_curso){
        $this->id_curso = $id_curso;
    }

    public function getNome(){
        return $this->$nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function inserir($dados)
    {          
        $nome = $dados['nome'];
        $sql = "insert into curso (nome) values ('$nome')";
        return (new Conexao())->executar($sql);
    }
    public function selectDados()
    {
        $sql = "select * from curso order by nome";
        return (new Conexao())->recuperarDados($sql);
    }

    public function excluir($id)
    {
        $sql = "delete from curso where id_curso=$id";
        return (new Conexao())->executar($sql);
    }
}

?>