<?php

require_once 'Crud.php';

class Clinicas extends Crud {

    protected $table = 'parceiro';
  
    private $nome;
    private $cpf;
    private $cnpj;
    private $email;
    private $telefone1;
    private $telefone2;
    private $telefone3;
    private $data_cadastro;
    private $ultimoId;
    function getEmail() {
        return $this->email;
    }

    function setEmail($email) {
        $this->email = $email;
    }

        function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function getTelefone1() {
        return $this->telefone1;
    }

    function getTelefone2() {
        return $this->telefone2;
    }

    function getTelefone3() {
        return $this->telefone3;
    }

    function getData_cadastro() {
        return $this->data_cadastro;
    }

    function getUltimoId() {
        return $this->ultimoId;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    function setTelefone1($telefone1) {
        $this->telefone1 = $telefone1;
    }

    function setTelefone2($telefone2) {
        $this->telefone2 = $telefone2;
    }

    function setTelefone3($telefone3) {
        $this->telefone3 = $telefone3;
    }

    function setData_cadastro($data_cadastro) {
        $this->data_cadastro = $data_cadastro;
    }

    function setUltimoId($ultimoId) {
        $this->ultimoId = $ultimoId;
    }

        
    public function insert() {
        
        $sql  = 'INSERT INTO '.$this->table.'(`nome`, `cnpj`, `cpf`, `email`, `telefone1`, `telefone2`, `telefone3`, `data_cadastro`)';
        $sql .= "VALUES (:nome,:cnpj,:cpf,:email,:telefone1,:telefone2,:telefone3,:data_cadastro)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':cnpj', $this->cnpj);
        $stmt->bindParam(':cpf', $this->cpf);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':telefone1', $this->telefone1);
        $stmt->bindParam(':telefone2', $this->telefone2);
        $stmt->bindParam(':telefone3', $this->telefone3);
        $stmt->bindParam(':data_cadastro', $this->data_cadastro);
               
        $stmt->execute();
        $ultimo = DB::ultimoid();
        return $ultimo;
       

    }
    public function findcod($cod) {
        
        $sql = "SELECT * FROM $this->table WHERE cod = :cod";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':cod', $cod, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update($cod) {

        $sql = "UPDATE $this->table SET nome = :nome, endereco_residencia = :endereco_residencia, endereco_cobranca = :endereco_cobranca, telefone1 = :telefone1, telefone2 = :telefone2  WHERE cod = :cod";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':cod', $this->cod);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':endereco_residencia', $this->endereco_residencia);
        $stmt->bindParam(':endereco_cobranca', $this->endereco_cobranca);
        $stmt->bindParam(':telefone1', $this->telefone1);
        $stmt->bindParam(':telefone2', $this->telefone2);

        return $stmt->execute();
    }
    public function dadosform($c){
        $this->setNome($c['nome']);
        $this->setCpf($c['cpf']);
        $this->setCnpj($c['cpf']);
        $this->setEmail($c['email']);
        $this->setTelefone1($c['residencial']);
        $this->setTelefone2($c['comercial']);
        $this->setTelefone3($c['celular']);
        $this->setData_cadastro(date('Y-m-d H:i:s'));
        
    }
}
