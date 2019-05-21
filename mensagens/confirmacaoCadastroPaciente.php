<link rel="stylesheet" href="../assets/css/main.css"/>
<div class="row center-text">
    <div class="row">
        <h1>Cadastro efetuado com sucesso!</h1>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <h3><strong>Agurde!</strong> Você será redirecionado para a página anterior</h3>
        </div>
        <div class="col-sm-5">
            <div class="loader"></div>
        </div>
    </div>
</div>

<?php
    //Dá um refresh para a para a url defida em 3 segundos;
    header("refresh:4;url=../index.php");
?>