<?php
    include_once 'DB/connection.php';
    include_once 'layout/header.php';
    $id_consulta = $_GET['id_consulta'];
?>
<link rel="stylesheet" src="assets/css/print.css" type="text/css">
<div class="titulos titulo-impressao">
    <h2><strong>Impressão da consulta</strong></h2>
    <input type="button" class="btn btn-default" name="imprimir" value="Imprimir" onclick="window.print();">
</div>
<?php
            $consulta = ("SELECT nome, data, hora, tipo_servico, especialista, queixas, pne FROM cadastro_consulta
                            INNER JOIN cadastro_pessoa
                            ON cadastro_consulta.pessoa_id_fk = cadastro_pessoa.id_pessoa
                            WHERE id_consulta = '$id_consulta'
                            ORDER BY data ASC");
            $conn = $db->query($consulta) or die($mysqli->error);
          while($dado = $conn->fetch_array()){
        ?>
<div class="container">
    <section id="imprimeConsulta">
    <label></label>
    <form class="form-horizontal" action="">
        <div class="form-group">
                <h3><strong>Nome: </strong><?php echo $dado['nome']; ?></h3>
        </div>
        <div class="form-group">
                <h3><strong>Data: </strong><?php echo date("d/m/y", strtotime($dado['data'])); ?></h3>
        </div>
        <div class="form-group">
                <h3><strong>Hora da consulta: </strong><?php echo $dado['hora']; ?> hs</h3>
        </div>
        <div class="form-group">
                <h3><strong>Tipo de serviço: </strong><?php echo $dado['tipo_servico']; ?></h3>
        </div>
        <div class="form-group">
                <h3><strong>Especialista: </strong><?php echo $dado['especialista']; ?></h3>
        </div>
        <div class="form-group">
                <h3><strong>Queixas: </strong><?php echo $dado['queixas']; ?></h3>
        </div>
        <div class="form-group">
                <h3><strong>PNE(Portador de necessidades especiais): </strong><?php echo $dado['pne']; ?></h3>
        </div>
        <?php } ?>
        </div>
    </form>
    </section>
</div>
