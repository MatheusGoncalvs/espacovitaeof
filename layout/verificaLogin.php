<?php
    $valor = isset($_SESSION['email']) ? 'S' : 'N';
	if($valor == 'N'){
		header('Location: ../login.php');
		exit();
	}
?>