<?php 

include_once 'layout/header.php';
include_once 'DB/connection.php';
$n=$_GET['nomeMarcacao'];
?>
<div class="titulos">
    <h2>Marcação de consulta</h2>
</div>
<div class="container">
    <label></label>
    <table class="table">
    <thead>
      <tr>
        <th>Nome</th>
        <th>CPF</th>
      </tr>
    </thead>
    <tbody>
        <?php
            $consulta = ("SELECT id_pessoa, nome, cpf FROM cadastro_pessoa where nome like '%$n%' ORDER BY nome ASC");
            $conn = $db->query($consulta) or die($mysqli->error);
          while($dado = $conn->fetch_array()){
        ?>
        
      <tr>
        <td><a href="formMarcacao.php?nomeMarcacao=<?php echo $dado['nome']; ?>"> <?php echo $dado['nome']; ?></a></td>
        <td><?php echo $dado['cpf'];?></td>
      </tr>
      <?php }?>
    </tbody>
  </table>
</div>
<?php include_once 'layout/footer.php'?>