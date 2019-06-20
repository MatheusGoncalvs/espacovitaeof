<?php 
    include_once 'layout/header.php';
    include_once 'DB/connection.php';
?>
<?php
    //Utilizo DISTINCT para não trazer resultados iguais no SELECT
    $consulta = ("SELECT DISTINCT especialista FROM cadastro_consulta
        ORDER BY data ASC");
        $conn = $db->query($consulta) or die($mysqli->error);
        
?>
<div class="titulos">
    <h2><strong>Buscar consultas</strong></h2>
    <form action="resultadoListaConsulta.php#resultadoListaConsulta">
        <div class="row">
        <div class="col-md-3">
            <div class="form-group onBlue">
                <label for="dataInicial">Data Inicial:</label>
                <input type="date" class="form-control" name="dataInicial" id="dataInicial" width="100px" required>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group onBlue">
                <label for="dataFinal">Data Final:</label>
                <input type="date" class="form-control" name="dataFinal" id="dataFinal" width="100px" required>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group onBlue">
                <label class="control-label" for    ="estado">Especialista:</label>
                    <select class="form-control" id="especialista" name="especialista" width="200px">
                    <!-- <option>Selecione</option> -->
                    <?php while($dado = $conn->fetch_array()){ ?>
                    <option value="<?php echo $dado['especialista']; ?> "> <?php echo $dado['especialista']; ?> </option>
                    <?php } ?>
                    </select>
            </div>
        </div>
        <div class="col-md-1 btn-consulta">
            <input type="submit" class="btn btn-success" value="Filtrar">    
        </div>
    </form>
    </div>
</div>
<div class="container-dois">
    
</div>
<?php include_once 'layout/footer.php'?>