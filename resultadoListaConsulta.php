<?php
    include_once 'DB/connection.php';
    include_once 'layout/header.php';
    $dataInicial = $_GET['dataInicial'];
    $dataFinal = $_GET['dataFinal'];
    $especialista = $_GET['especialista'];
?>
<div class="titulos">
    <h2><strong>Buscar consultas</strong></h2>
        <div class="row">
        <div class="col-md-3">
            <div class="form-group onBlue">
                <label for="dataInicial">Data Inicial: </label>
                <input type="date" class="form-control" name="dataInicial" id="dataInicial" width="100px" readonly
                    value="<?php echo $dataInicial; ?>">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group onBlue">
                <label for="dataFinal">Data Final:</label>
                <input type="date" class="form-control" name="dataFinal" id="dataFinal" width="100px" readonly
                    value="<?php echo $dataFinal; ?>">
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group onBlue">
                <label class="control-label" for    ="estado">Especialista:</label>
                    <select class="form-control" id="estado" name="estado" width="200px" readonly>
                    <option value="$especialista"><?php echo $especialista; ?></option>
                    </select>
            </div>
        </div>
        <div class="col-md-1 btn-consulta">
            <a href="listarConsulta.php">
                <input type="submit" class="btn btn-success" value="Novo filtro">
            </a>   
        </div>
        
    </div>
</div>
<section id="resultadoListaConsulta">
<div class="container">
    <?php
        $consulta = ("SELECT id_consulta, id_pessoa, nome, data, hora, tipo_servico, especialista FROM cadastro_consulta
                            INNER JOIN cadastro_pessoa
                            ON cadastro_consulta.pessoa_id_fk = cadastro_pessoa.id_pessoa
                            WHERE data BETWEEN '$dataInicial' AND '$dataFinal'
                            AND especialista = '$especialista'
                            ORDER BY data DESC");
                            $conn = $db->query($consulta) or die($mysqli->error);
            //Verifica se o select retornou linhas senao apresenta mensagem de erro.                
            if($conn ->num_rows <= 0){
                include_once 'mensagens/resultadoNaoEncontrado.php';
            }else { 
    ?>
            
    <label></label>
    <table class="table">
    <thead>
      <tr>
        <th>Data de atendimento</th>
        <th>Nome do paciente</th>
        <th>Hora</th>
        <th>Especialista</th>
        <th>Tipo serviço</th>
      </tr>
    </thead>
    <tbody>
        <?php
          while($dado = $conn->fetch_array()){
        ?>
        <?php
            //$dbEspecialista = $dado['especialista'];
            //echo $dbEspecialista ;
           // echo $especialista ;
            if($especialista == $dado['especialista']) {
                echo $especialista ;
            }else {
            }
        ?>
      <tr>
        <td><?php echo date("d/m/y", strtotime($dado['data'])); ?></td>
        <td><?php echo $dado['nome'];?></td>
        <td><?php echo $dado['hora'];?></td>
        <td><?php echo $dado['especialista'];?></td>
        <td><?php echo $dado['tipo_servico'];?></td>
        <td><a href="imprimirConsulta.php?id_consulta=<?php echo $dado['id_consulta'];?>"><i class="fas fa-print"></i>  Imprimir</a></td>
      </tr>
      <?php
          }
            }
      ?>
    </tbody>
  </table>
</div>
</section>
<?php include_once 'layout/footer.php'?>