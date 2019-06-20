<?php session_start(); ?>
<?php include_once 'layout/headerLogout.php'?>

<div class="titulo-login onBlue">
    <h2>Entre no sistema</h2>
</div>
<div class="section-login">
<div class="">
    <form action="logar.php" method="POST">
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" class="form-control" id="senha" name="senha">
    </div>
    <input class="btn btn-success" type="submit" value="Entrar na conta">
    
     <div class="row">
        <?php
            if(isset($_SESSION['nao_autenticado'])):
        ?>
        <div class="notification is-danger">
            <h4>O email ou senha digitados não conferem. Por favor verifique os dados informados.</h4>
        </div>
        <?php
            endif;
                unset($_SESSION['nao_autenticado']);
        ?>
    </div>
    </form>
</div>
</div>
<?php include_once 'layout/footer.php' ?>