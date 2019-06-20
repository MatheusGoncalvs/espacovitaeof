<?php include_once 'layout/header.php'?>
<div class="titulos">
    <h2>Marcação de consulta</h2>
</div>
<div class="container">
    <div class="content-title">
        <h2>Qual o nome do paciente?</h2>
    </div>
    <label></label>
    <form class="form-horizontal" action="resultadoPesquisaUsuario.php">
        <div class="form-group">
            <label class="control-label col-sm-2" for="nomeMarcacao">Nome:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="nomeMarcacao" placeholder="Informe o nome do paciente"
                    name="nomeMarcacao">
            </div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-success">Pesquisar</button>
            </div>
        </div>
    </form>
</div>
<?php include_once 'layout/footer.php'?>