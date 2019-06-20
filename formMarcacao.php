<?php include_once 'layout/header.php';
$c = $_GET['nomeMarcacao'];
$id_pessoa = $_GET['id_pessoa'];
?>
<div class="titulos">
    <h2>Marcação de consulta</h2>
</div>
<div class="container">
    <label></label>
    <form class="form-horizontal" action="cadastrarConsulta.php" method="POST">
        <input type="hidden" id="id_pessoa" name="id_pessoa" value="<?php echo $id_pessoa; ?>">
        <div class="form-group">
            <label class="control-label col-sm-2" for="nomeMarcacao">Nome:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="nomeMarcacao" placeholder="Informe o nome do paciente"
                    value="<?php echo $c; ?>" name="nomeMarcacao" readonly required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="dataMarcacao">Data:</label>
            <div class="col-sm-5">
                <input type="date" class="form-control" id="dataMarcacao" name="dataMarcacao" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="horaMarcacao">Hora:</label>
            <div class="col-sm-5">
                <input type="time" class="form-control" id="horaMarcacao" name="horaMarcacao" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="tipoServicoMarcacao">Tipo serviço:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="tipoServicoMarcacao" placeholder="Informe o tipo de serviço"
                    name="tipoServicoMarcacao" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="especialistaMarcacao">Especialista:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="especialistaMarcacao"
                    placeholder="Informe o nome do especialista" name="especialistaMarcacao" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="queixasMarcacao">Queixas:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="queixasMarcacao"
                    placeholder="Informe as queixas do paciente" name="queixasMarcacao" required required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="PNEMarcacao">PNE(Portador de necessidades especiais):</label>
            <label class="radio-inline"><input id="PNEMarcacao" name="PNEMarcacao" type="radio" value="s">Sim</label>
            <label class="radio-inline"><input id="PNEMarcacao" name="PNEMarcacao" type="radio" value="n"
                checked="checked">Não</label>
        </div>
        <div class="confirma-consulta">
            <button type="submit" id="btnConfirmarConsulta" class="btn btn-success">Confirmar consulta</button>
        </div>
    </form>
</div>
<?php include_once 'layout/footer.php' ?>