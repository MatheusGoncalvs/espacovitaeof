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
     $observacoes = $_POST['observacoes'];
     try{
        $query = "UPDATE cadastro_pessoa 
                    SET nome = '$nome', 
                        rg = '$rg', 
                        cpf = '$cpf', 
                        celular = '$celular', 
                        data_nascimento = '$data_nascimento', 
                        rua = '$rua', 
                        numero = '$numero', 
                        bairro = '$bairro', 
                        cidade = '$cidade', 
                        estado = '$estado',
                        observacoes = '$observacoes'
            WHERE cpf = '$cpf'";
        $db->query($query);
        include("mensagens/confirmacaoCadastroPaciente.php");
        $db->close();
    }catch (PDOException $e){
        printf("Fique tranquilo, resolveremos este erro: %s\n", $e->getMessage());
    }
?>