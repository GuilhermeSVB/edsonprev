<?php
function __autoload($class_name){
require_once '../C/' . $class_name . '.php';
}
  

$c =  $_POST;
$cliente = new Clientes();
$cliente->dadosform($c);  
$id=($cliente->insert($c));
$endereco = new Enderecos();
$endereco->dadosform($c);
$endereco->setPaciente_idPaciente($id);
if($endereco->insert()){
    $retorno = array(
    'msg' => $cliente->getNome()." cadastrado com sucesso",
    'typo' => 'alert-success'
     );
    $json = json_encode($retorno);
    echo $json;
}else{
    $retorno = array(
    'msg' =>" Erro ao cadastrar",
    'typo' => 'alert-danger'
     );
    $json = json_encode($retorno);
    echo $json;
    
}

    


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

