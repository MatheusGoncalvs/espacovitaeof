<?php 
     //include_once 'layout/header.inc.php';
     include('DB/connection.php');
     $id_pessoa = $_POST['id_pessoa'];
     $dataMarcacao = $_POST['dataMarcacao'];
     $horaMarcacao = $_POST['horaMarcacao'];
     $tipoServicoMarcacao = $_POST['tipoServicoMarcacao'];
     $especialistaMarcacao = $_POST['especialistaMarcacao'];
     $queixasMarcacao = $_POST['queixasMarcacao'];
     $PNEMarcacao = $_POST['PNEMarcacao'];
     try{
        $query = "INSERT INTO cadastro_consulta (data, hora, tipo_servico, especialista, queixas, pne, pessoa_id_fk)
            VALUES ('$dataMarcacao', '$horaMarcacao',  '$tipoServicoMarcacao', '$especialistaMarcacao' , '$queixasMarcacao', '$PNEMarcacao', '$id_pessoa')";
        $db->query($query);
        include("mensagens/confirmacaoCadastroPaciente.php");
        $db->close();
    }catch (PDOException $e){
        printf("Fique tranquilo, resolveremos este erro: %s\n", $e->getMessage());
    }
?>