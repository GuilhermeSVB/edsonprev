<?php
require_once './conexao.php';

switch ($_POST["acao"]){
    case 'cadastrouser':
        //print_r($_POST);
    
        $c['nome'] = mysqli_real_escape_string($conexao,$_POST['nome']);
        $c['cpf'] = mysqli_real_escape_string($conexao,$_POST['cpf']);
       $c['nascimento'] = mysqli_real_escape_string($conexao,$_POST['nascimento']);
        $c['civil'] = mysqli_real_escape_string($conexao,$_POST['civil']);
        $c['sexo'] = mysqli_real_escape_string($conexao,$_POST['sexo']);
       //$c['marketing'] = mysqli_real_escape_string($conexao,$_POST['marketing']);
        $c['obs'] = mysqli_real_escape_string($conexao,$_POST['Obs']);
        $c['email'] = mysqli_real_escape_string($conexao,$_POST['email']);
        $c['telefone1'] = mysqli_real_escape_string($conexao,$_POST['residencial']);
        $c['telefone2'] = mysqli_real_escape_string($conexao,$_POST['comercial']);
        $c['telefone3'] = mysqli_real_escape_string($conexao,$_POST['celular']);
        //endereços
        $d['lagradouro'] = mysqli_real_escape_string($conexao,$_POST['lagradouro']);
        $d['numero'] = mysqli_real_escape_string($conexao,$_POST['numero']);
        $d['bairro'] = mysqli_real_escape_string($conexao,$_POST['bairro']);
        $d['estado'] = mysqli_real_escape_string($conexao,$_POST['estado']);
        $d['cidade'] = mysqli_real_escape_string($conexao,$_POST['cidade']);
         
        if (in_array('', $c)){
            echo '1';
        }  else {
            $c['data_cadastro'] = date('Y-m-d H:i:s');
            $c['nascimento']= implode("-",array_reverse(explode("/",$c['nascimento'])));
            $campos = implode(',', array_keys($c));
            $values = "'".implode("', '", array_values($c))."'";
            //echo $values;
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
               print_r($c);
            }else{
                echo '2';
            }
        }
        break;
    default :
        echo 'Erro ao selecionar ação';
    
}