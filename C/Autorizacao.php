<?php

require_once 'Crud.php';

class Autorizacao extends Crud{
	
	protected $table = 'autorizacao';
       
	private $id_autorizado;
        private $cod_cliente;
        private $status;
        private $relacao;
        private $inicio;
        private $fim;
    
       
        public function setIdAutorizado($id_autorizado){
		$this->id_autorizado = $id_autorizado;
	}
        public function setCod_cliente($cod_cliente){
		$this->cod_cliente = $cod_cliente;
	}
        public function setStatus($status){
		$this->status = $status;
	}
      
        public function setRelacao($relacao){
		$this->relacao = $relacao;
	}
        public function setInicio($inicio){
		$this->inicio = $inicio;
	}
        public function setFim($fim){
		$this->fim = $fim;
	}
       
      public function findcod($cod_cliente){
		$sql  = "SELECT * FROM $this->table WHERE cod_cliente = :cod_cliente";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':cod_cliente', $cod_cliente, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	
	public function insert(){

		$sql  = 'INSERT INTO '.$this->table.'(id_autorizado,cod_cliente,status,relacao,inicio,fim)';
                $sql .= "VALUES (:id_autorizado,:cod_cliente,:status,:relacao,:inicio,:fim)";
		$stmt = DB::prepare($sql);
                $stmt->bindParam(':id_autorizado', $this->id_autorizado);
		$stmt->bindParam(':cod_cliente', $this->cod_cliente);
		$stmt->bindParam(':status', $this->status);
                $stmt->bindParam(':relacao', $this->relacao);
                $stmt->bindParam(':inicio', $this->inicio);
                $stmt->bindParam(':fim', $this->fim);
                
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET nome = :nome, telefone1 = :telefone1, telefone2 = :telefone2, foto = :foto, relacao = :relacao, senha = :senha, status = :status  WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':telefone1', $this->telefone1);
		$stmt->bindParam(':telefone2', $this->telefone2);
                $stmt->bindParam(':foto', $this->foto);
                $stmt->bindParam(':relacao', $this->relacao);
                $stmt->bindParam(':senha', $this->senha);
                $stmt->bindParam(':status', $this->status);
		
		return $stmt->execute();

	}

}