<?php

require_once 'Crud.php';

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

    
    public function insert($c) {
        
        $this->setNome($c['nome'] = mysqli_real_escape_string($conexao,$_POST['nome']));
        $this->setCpf($c['cpf'] = mysqli_real_escape_string($conexao,$_POST['cpf']));
        $this->setNascimento($c['nascimento'] = mysqli_real_escape_string($conexao,$_POST['nascimento']));
        $this->setCivil($c['civil'] = mysqli_real_escape_string($conexao,$_POST['civil']));
        $this->setSexo($c['sexo'] = mysqli_real_escape_string($conexao,$_POST['sexo']));
        $this->setObs($c['obs'] = mysqli_real_escape_string($conexao,$_POST['Obs']));
        $this->setEmail($c['email'] = mysqli_real_escape_string($conexao,$_POST['email']));
        $this->setTelefone1($c['telefone1'] = mysqli_real_escape_string($conexao,$_POST['residencial']));
        $this->setTelefone2($c['telefone2'] = mysqli_real_escape_string($conexao,$_POST['comercial']));
        $this->setTelefone3($c['telefone3'] = mysqli_real_escape_string($conexao,$_POST['celular']));
        $this->setData_cadastro($c['data_cadastro'] = date('Y-m-d H:i:s'));
        $this->setNascimento($c['nascimento']= implode("-",array_reverse(explode("/",$c['nascimento']))));
         if (in_array('', $c)){
             return "2";
        }  else {
            $campos = implode(',', array_keys($c));
            $values = "'".implode("', '", array_values($c))."'";
            $query = "INSERT INTO paciente (".$campos.") VALUES (".$values.")";
            $st= mysqli_query($conexao, $query) or die(mysqli_error($conexao));
            if(!empty($st)){
                //print_r($d);
                $id= mysqli_insert_id($conexao);
                $d['Paciente_idPaciente'] = $id;
                $campos = utf8_decode(implode(',', array_keys($d)));
                $values = utf8_decode("'".implode("', '", array_values($d))."'");
                
               $query = "INSERT INTO endereco (".$campos.") VALUES (".$values.")";
               $st= mysqli_query($conexao, $query) or die(mysqli_error($conexao));
               echo 'Cliente <strong>'.$c['nome']. '</strong> cadastrado com sucesso';
            }else{
                echo '42';
        
            }
        }
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

}
