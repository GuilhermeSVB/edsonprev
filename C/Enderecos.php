<?php

require_once '../C/Crud.php';

class Enderecos extends Crud {

    protected $table = 'endereco';
  
    private $lagradouro;
    private $numero;
    private $bairro;
    private $cep;
    private $complemento;
    private $Paciente_idPaciente;
    private $cidade;
    private $estado;
    private $parceiro_idparceiro;
    
    function getLagradouro() {
        return $this->lagradouro;
    }

    function getNumero() {
        return $this->numero;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCep() {
        return $this->cep;
    }

    function getComplemento() {
        return $this->complemento;
    }

    function getPaciente_idPaciente() {
        return $this->Paciente_idPaciente;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEstado() {
        return $this->estado;
    }

    function getParceiro_idparceiro() {
        return $this->parceiro_idparceiro;
    }

    function setLagradouro($lagradouro) {
        $this->lagradouro = utf8_decode($lagradouro);
    }

    function setNumero($numero) {
        $this->numero = utf8_decode($numero);
    }

    function setBairro($bairro) {
        $this->bairro = utf8_decode($bairro);
    }

    function setCep($cep) {
        $this->cep = utf8_decode($cep);
    }

    function setComplemento($complemento) {
        $this->complemento = utf8_decode($complemento);
    }

    function setPaciente_idPaciente($Paciente_idPaciente) {
        $this->Paciente_idPaciente = utf8_decode($Paciente_idPaciente);
    }

    function setCidade($cidade) {
        $this->cidade = utf8_decode($cidade);
    }

    function setEstado($estado) {
        $this->estado = utf8_decode($estado);
    }

    function setParceiro_idparceiro($parceiro_idparceiro) {
        $this->parceiro_idparceiro = utf8_decode($parceiro_idparceiro);
    }

       
    
    public function insert() {
        
        $sql  = 'INSERT INTO '.$this->table.'(`lagradouro`, `numero`, `bairro`, `cep`, `complemento`, `Paciente_idPaciente`, `cidade`, `estado`, `parceiro_idparceiro`)';
        $sql .= "VALUES (:lagradouro,:numero,:bairro,:cep,:complemento,:Paciente_idPaciente,:cidade,:estado,:parceiro_idparceiro)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':lagradouro', $this->lagradouro);
        $stmt->bindParam(':numero', $this->numero);
        $stmt->bindParam(':bairro', $this->bairro);
        $stmt->bindParam(':cep', $this->cep);
        $stmt->bindParam(':complemento', $this->complemento);
        $stmt->bindParam(':Paciente_idPaciente', $this->Paciente_idPaciente);
        $stmt->bindParam(':cidade', $this->cidade);
        $stmt->bindParam(':estado', $this->estado);
        $stmt->bindParam(':parceiro_idparceiro', $this->parceiro_idparceiro);
      
               
        return $stmt->execute();
        
    }
    public function findPacidente($id) {
        
        $sql = "SELECT * FROM $this->table WHERE Paciente_idPaciente = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
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
        $this->setLagradouro($c['lagradouro']);
        $this->setNumero($c['numero']);
        $this->setBairro($c['bairro']);
        $this->setEstado($c['estado']);
        $this->setCidade($c['cidade']);
        $this->setComplemento($c['complemento']);
        $this->setCep($c['cep']);
        $this->setPaciente_idPaciente(0);
        $this->setParceiro_idparceiro(0);
    }
}
