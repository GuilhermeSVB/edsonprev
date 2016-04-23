<?php

require_once '../C/Crud.php';

class Clientes extends Crud {

    protected $table = 'paciente';
  
    private $nome;
    private $cpf;
    private $nascimento;
    private $civil;
    private $sexo;
    private $email;
    private $pai;
    private $mae;
    private $obs;
    private $telefone1;
    private $telefone2;
    private $telefone3;
    private $data_cadastro;
    private $ultimoId;
    
    function getUltimoId() {
        return $this->ultimoId;
    }

    function setUltimoId($ultimoId) {
        $this->ultimoId = $ultimoId;
    }

        function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getNascimento() {
        return $this->nascimento;
    }

    function getCivil() {
        return $this->civil;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getEmail() {
        return $this->email;
    }

    function getPai() {
        return $this->pai;
    }

    function getMae() {
        return $this->mae;
    }

    function getObs() {
        return $this->obs;
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

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

    function setCivil($civil) {
        $this->civil = $civil;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPai($pai) {
        $this->pai = $pai;
    }

    function setMae($mae) {
        $this->mae = $mae;
    }

    function setObs($obs) {
        $this->obs = $obs;
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

    function getData_cadastro() {
        return $this->data_cadastro;
    }

    function setData_cadastro($data_cadastro) {
        $this->data_cadastro = $data_cadastro;
    }

    
    public function insert() {
        
        $sql  = 'INSERT INTO '.$this->table.'(`nome`, `cpf`, `nascimento`, `civil`, `sexo`, `email`, `obs`, `telefone1`, `telefone2`, `telefone3`, `data_cadastro`)';
        $sql .= "VALUES (:nome,:cpf,:nascimento,:civil,:sexo,:email,:obs,:telefone1,:telefone2,:telefone3,:data_cadastro)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':cpf', $this->cpf);
        $stmt->bindParam(':nascimento', $this->nascimento);
        $stmt->bindParam(':civil', $this->civil);
        $stmt->bindParam(':sexo', $this->sexo);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':obs', $this->obs);
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
        $this->setNascimento($c['nascimento']);
        $this->setCivil($c['civil']);
        $this->setSexo($c['sexo']);
        $this->setObs($c['Obs']);
        $this->setEmail($c['email']);
        $this->setTelefone1($c['residencial']);
        $this->setTelefone2($c['comercial']);
        $this->setTelefone3($c['celular']);
        $this->setData_cadastro(date('Y-m-d H:i:s'));
        $this->setNascimento(implode("-",array_reverse(explode("/",$c['nascimento']))));
    }
}
