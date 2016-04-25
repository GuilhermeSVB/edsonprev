<?php

function __autoload($class_name) {
    require_once '../C/' . $class_name . '.php';
}

switch ($_POST["acao"]) {
    case 'cadastrouser':
        $c = $_POST;
        $cliente = new Clientes();
        $cliente->dadosform($c);
        $id = ($cliente->insert($c));
        $endereco = new Enderecos();
        $endereco->dadosform($c);
        $endereco->setPaciente_idPaciente($id);
        if ($endereco->insert()) {
            $retorno = array(
                'msg' => $cliente->getNome() . " cadastrado com sucesso",
                'typo' => 'alert-success'
            );
            $json = json_encode($retorno);
            echo $json;
        } else {
            $retorno = array(
                'msg' => " Erro ao cadastrar",
                'typo' => 'alert-danger'
            );
            $json = json_encode($retorno);
            echo $json;
        }
        break;

    case 'selecionauser':
        $id = $_POST["id"];
        $cliente = new Clientes();
        $endereco = new Enderecos();
        $retorno = array(
            'id' => $id,
            'nome' => $cliente->find($id)->nome,
            'cpf' => $cliente->find($id)->cpf,
            'nascimento' => $cliente->find($id)->nascimento,
            'civil' => $cliente->find($id)->civil,
            'sexo' => $cliente->find($id)->sexo,
            'email' => $cliente->find($id)->email,
            'obs' => $cliente->find($id)->obs,
            'telefone1' => $cliente->find($id)->telefone1,
            'telefone2' => $cliente->find($id)->telefone2,
            'telefone3' => $cliente->find($id)->telefone3,
            'data_cadastro' => $cliente->find($id)->data_cadastro,
            'lagradouro' => $endereco->findPacidente($id)->lagradouro,
            'numero' => $endereco->findPacidente($id)->numero,
            'bairro' => $endereco->findPacidente($id)->bairro,
            'cep' => $endereco->findPacidente($id)->cep,
            'complemento' => $endereco->findPacidente($id)->complemento,
            'estado' => $endereco->findPacidente($id)->estado,
            'cidade' => $endereco->findPacidente($id)->cidade
        );
        $json = json_encode($retorno);
        echo $json;
        break;

    case "cadastrarclinica":
        $c = $_POST;
        $clinica = new Clinicas();
        $clinica->dadosform($c);
        $id = ($clinica->insert($c));
        $endereco = new Enderecos();
        $endereco->dadosform($c);
        $endereco->setParceiro_idparceiro($id);
        if ($endereco->insert()) {
            $retorno = array(
                'msg' => $clinica->getNome() . " cadastrada com sucesso",
                'typo' => 'alert-success'
            );
            $json = json_encode($retorno);
            echo $json;
        } else {
            $retorno = array(
                'msg' => " Erro ao cadastrar",
                'typo' => 'alert-danger'
            );
            $json = json_encode($retorno);
            echo $json;
        }

        break;
    default :
        $retorno = array(
            'msg' => "Erro ao selecionar ação",
            'typo' => 'alert-danger'
        );
        $json = json_encode($retorno);
        echo $json;
}