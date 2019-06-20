<?php
    session_start();
    include('DB/connection.php');
    
    if(empty($_POST['email']) || empty($_POST['senha'])) {
	    header('Location: ../login.php');
	    exit();
    }
    $email= mysqli_real_escape_string($db, $_POST['email']);
    $senha = mysqli_real_escape_string($db, $_POST['senha']);
    $query = "SELECT * FROM usuario 
			    WHERE email = '{$email}' AND senha = ('{$senha}')";
    $result = mysqli_query($db, $query);
    $row = mysqli_num_rows($result);
    //Pega o nome do cliente logado
    $resultObj = $db->query($query);
    $cliente_linha = $resultObj->fetch_array();
    $cliente_id = $cliente_linha['id_usuario'];
    if($row == 1) {
	    $_SESSION['email'] = $email;
	    $_SESSION['cliente_id'] = $cliente_id;
	    header('Location: ../index.php');
	    exit();
    } else {
	    $_SESSION['nao_autenticado'] = true;
	    header('Location: ../login.php');
	    exit();
    }
?>