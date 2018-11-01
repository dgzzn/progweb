<?php

include_once '../Conexao.php';

class Responsavel{
    protected $id_responsavel;
    protected $nome;
    protected $telefone;
    protected $endereco;
    protected $data_nascimento;
    protected $sexo;

    public function getIdResponsavel(){
        return $this->id_responsavel;
    }

    public function setIdResponsavel($id_responsavel){
        $this->id_responsavel = $id_responsavel;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    public function getDataNascimento(){
        return $this->data_nascimento;
    }

    public function setDataNascimento($data_nascimento){
        $this->data_nascimento = $data_nascimento;
    }
    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function inserir($dados)
    {          
        $nome = $dados['nome'];
        $telefone = $dados['telefone'];
        $endereco = $dados['endereco'];
        $data_nascimento = $dados['data_nascimento'];
        $sexo = $dados['sexo'];
        $sql = "insert into responsavel(nome, telefone, endereco, data_nascimento, sexo)
        values ('$nome', '$telefone', '$endereco', '$data_nascimento', '$sexo')";
        
        return (new Conexao())->executar($sql);
    }

    public function selectDados(){
        $sql = "select * from responsavel order by nome";
        return (new Conexao())->recuperarDados($sql);
    }
    public function excluir($id)
    {
        $sql = "delete from responsavel where id_responsavel=$id";
        return (new Conexao())->executar($sql);
    }
    public function selecionarId($id_responsavel)
    {
        $sql = "select * from responsavel where id_responsavel=$id_responsavel";
        $responsavel = (new Conexao())->recuperarDados($sql);

        $this->id_responsavel = $responsavel[0]['id_responsavel'];
        $this->nome = $responsavel[0]['nome'];
        $this->telefone = $responsavel[0]['telefone'];
        $this->endereco = $responsavel[0]['endereco'];
        $this->data_nascimento = $responsavel[0]['data_nascimento'];
        $this->sexo = $responsavel[0]['sexo'];

    }
    public function alterar($dados)
    {         
        $nome = $dados['nome'];
        $id_responsavel = $dados['id_responsavel'];
        $telefone = $dados['telefone'];
        $endereco = $dados['endereco'];
        $data_nascimento = $dados['data_nascimento'];
        $sexo = $dados['sexo'];
        //(nome, telefone, endereco, data_nascimento, sexo, id_curso)
        $sql = "update responsavel set nome='$nome', telefone='$telefone', endereco='$endereco', data_nascimento='$data_nascimento', sexo='$sexo' where id_responsavel=$id_responsavel";
        return (new Conexao())->executar($sql);
    }
}




?>