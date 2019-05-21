<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Espaço Vitae - Marcação de consultas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">Espaço Vitae</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"></li>
                <li class="active">
                    <a href="index.php">
                        <i class="fas fa-user-plus"></i> Novo cadastro
                    </a>
                </li>
                <li class="active">
                    <a href="formPesquisaUsuario.php">
                    <i class="fas fa-laptop-medical"></i>  Marcação de consultas
                    </a>
                </li>
            </ul>
            <form class="navbar-form navbar-right" action="busca.html">
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
