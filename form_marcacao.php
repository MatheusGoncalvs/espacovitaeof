<?php include_once 'layout/header.php'?>
<div class="container">
    <h2>Marcação de consulta</h2>
    <form class="form-horizontal" action="/action_page.php">
        <div class="form-group">
            <label class="control-label col-sm-2" for="nomeMarcacao">Nome:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="nomeMarcacao" placeholder="Informe o nome do paciente"
                    name="nomeMarcacao">
            </div>
            <div class="col-sm-3">
                <button type="submit" class="form-control">Pesquisar</button>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="dataMarcacao">Data:</label>
            <div class="col-sm-5">
                <input type="date" class="form-control" id="dataMarcacao" name="dataMarcacao">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="horaMarcacao">Hora:</label>
            <div class="col-sm-5">
                <input type="time" class="form-control" id="horaMarcacao" name="horaMarcacao">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="tipoServicoMarcacao">Tipo serviço:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="tipoServicoMarcacao" placeholder="Informe o tipo de serviço"
                    name="tipoServicoMarcacao">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="especialistaMarcacao">Especialista:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="especialistaMarcacao"
                    placeholder="Informe o nome do especialista" name="especialistaMarcacao">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="queixasMarcacao">Queixas:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="queixasMarcacao"
                    placeholder="Informe as queixas do paciente" name="queixasMarcacao">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="PNEMarcacao">PNE(Portador de necessidades especiais):</label>
            <label class="radio-inline"><input id="PNEMarcacao" name="PNEMarcacao" type="radio">Sim</label>
            <label class="radio-inline"><input id="PNEMarcacao" name="PNEMarcacao" type="radio">Não</label>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Confirmar consulta</button>
            </div>
        </div>
    </form>
</div>
<?php include_once 'layout/footer.php' ?>