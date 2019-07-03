<?php
session_start();
include('verificaLogin.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Espaço Vitae - Marcação de consultas</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="owl/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="owl/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css" type="text/css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <script src="owl/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
    <script src="owl/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>

</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">Espaço Vitae</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"></li>
                <li class="active">
                    <a href="cadastrarPaciente.php">
                        <i class="fas fa-user-plus"></i> Novo cadastro
                    </a>
                </li>
                <li class="active">
                    <a href="formPesquisaUsuario.php">
                        <i class="fas fa-laptop-medical"></i><span class="font-verde"> Marcação de consultas</span>
                    </a>
                </li>
                <li class="active">
                    <a href="listarConsulta.php">
                        <i class="far fa-list-alt"></i></i><span class="font-amarela"> Consultas</span>
                    </a>
                </li>
                <li class="active">
                    <a href="logout.php">
                        <i class="fas fa-sign-out-alt"></i> Sair da conta
                    </a>
                </li>
            </ul>
            <form class="navbar-form navbar-right" action="busca.php">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Busca" name="search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </nav>