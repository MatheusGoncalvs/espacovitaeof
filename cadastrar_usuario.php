<?php 
     //include_once 'layout/header.inc.php';
     include('DB/connection.php');
     $nome = $_POST['nome'];
     $rg = $_POST['rg'];
     $cpf = $_POST['cpf'];
     $celular = $_POST['celular'];
     $data_nascimento = $_POST['data_nascimento'];
     $rua = $_POST['rua'];
     $numero = $_POST['numero'];
     $bairro = $_POST['bairro'];
     $cidade = $_POST['cidade'];
     $estado = $_POST['estado'];
     $sexo = $_POST['sexo'];
     $observacoes = $_POST['observacoes'];
     try{
        $query = "INSERT INTO cadastro_pessoa (nome, rg, cpf, celular, data_nascimento, rua, numero, bairro, cidade, estado, sexo, observacoes)
            VALUES ('$nome', '$rg',  '$cpf', '$celular' , '$data_nascimento', '$rua', '$numero'
            , '$bairro' , '$cidade', '$estado', '$sexo', '$observacoes')";
        $db->query($query);
        include("mensagens/confirmacaoCadastroPaciente.php");
        $db->close();
    }catch (PDOException $e){
        printf("Fique tranquilo, resolveremos este erro: %s\n", $e->getMessage());
    }
?>