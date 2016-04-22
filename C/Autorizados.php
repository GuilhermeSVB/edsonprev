<?php

require_once 'Crud.php';

class Autorizados extends Crud{
	
	protected $table = 'Autorizados';
       
	private $nome;
        private $telefone1;
        private $telefone2;
        private $relacao;
        private $senha;
        private $status;
        private $foto;
        
        
       
	
        

	
        public function setNome($nome){
		$this->nome = $nome;
	}
        public function setTelefone1($telefone1){
		$this->telefone1 = $telefone1;
	}
        public function setTelefone2($telefone2){
		$this->telefone2 = $telefone2;
	}
      
        public function setSenha($senha){
		$this->senha = $senha;
	}
        
        
        public function setFoto($foto){
                $this->foto = $foto;
        }
     
        

	
	public function insert(){

		$sql  = 'INSERT INTO '.$this->table.'(nome,telefone1,telefone2,senha,foto)';
                $sql .= "VALUES (:nome,:telefone1,:telefone2,:senha, :foto)";
		$stmt = DB::prepare($sql);
                $stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':telefone1', $this->telefone1);
		$stmt->bindParam(':telefone2', $this->telefone2);
             
               ;
                $stmt->bindParam(':senha', $this->senha);
              
                $stmt->bindParam(':foto', $this->foto);
               
                
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