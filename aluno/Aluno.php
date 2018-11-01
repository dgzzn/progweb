<?php

include_once '../Conexao.php';

class Aluno{
    protected $id_aluno;
    protected $matricula;
    protected $nome;
    protected $telefone;
    protected $endereco;
    protected $data_nascimento;
    protected $sexo;

    public function getIdAluno(){
        return $this->id_aluno;
    }

    public function setIdAluno($id_aluno){
        $this->$id_aluno = $id_aluno;
    }
    
    /**
     * Get the value of matricula
     */ 
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     *
     * @return  self
     */ 
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
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
        $matricula = $dados['matricula'];
        $nome = $dados['nome'];
        $telefone = $dados['telefone'];
        $endereco = $dados['endereco'];
        $data_nascimento = $dados['data_nascimento'];
        $sexo = $dados['sexo'];
        $sql = "insert into aluno(matricula, nome, telefone, endereco, data_nascimento, sexo, id_curso)
        values ('$matricula', '$nome', '$telefone', '$endereco', '$data_nascimento', '$sexo', 3)";
        
        return (new Conexao())->executar($sql);
    }

    public function selectDados()
    {
        $sql = "select * from aluno order by nome";
        return (new Conexao())->recuperarDados($sql);
    }
    public function excluir($id)
    {
        $sql = "delete from aluno where id_aluno=$id";
        return (new Conexao())->executar($sql);
    }
    public function selecionarId($id_aluno)
    {
        $sql = "select * from aluno where id_aluno=$id_aluno";
        $aluno = (new Conexao())->recuperarDados($sql);

        $this->id_aluno = $aluno[0]['id_aluno'];
        $this->matricula = $aluno[0]['matricula'];
        $this->nome = $aluno[0]['nome'];
        $this->telefone = $aluno[0]['telefone'];
        $this->endereco = $aluno[0]['endereco'];
        $this->data_nascimento = $aluno[0]['data_nascimento'];
        $this->sexo = $aluno[0]['sexo'];

    }
    public function alterar($dados)
    {         
        $matricula = $dados['matricula'] ;
        $nome = $dados['nome'];
        $id_aluno = $dados['id_aluno'];
        $telefone = $dados['telefone'];
        $endereco = $dados['endereco'];
        $data_nascimento = $dados['data_nascimento'];
        $sexo = $dados['sexo'];
        //(nome, telefone, endereco, data_nascimento, sexo, id_curso)
        $sql = "update aluno set matricula='$matricula', nome='$nome', telefone='$telefone', endereco='$endereco', data_nascimento='$data_nascimento', sexo='$sexo' where id_aluno=$id_aluno";
        return (new Conexao())->executar($sql);
    }

}




?>