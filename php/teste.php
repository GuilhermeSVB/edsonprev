<?php
function __autoload($class_name){
require_once '../C/' . $class_name . '.php';
}
  

$c =  $_POST;
//print_r($c);
$cliente = new Clientes();
$cliente->dadosform($c);  
$id=($cliente->insert($c));
$endereco = new Enderecos();
$endereco->dadosform($c);
$endereco->setPaciente_idPaciente($id);

if($endereco->insert()){
    echo 'cadastrado';
}else{
    echo 'Erro ao cadastrar';
}
print_r($endereco);
    


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

