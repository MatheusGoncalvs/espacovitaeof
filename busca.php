<?php
include_once 'layout/header.php';
include_once 'DB/connection.php';
$n = $_GET['search'];
?>
<div class="titulos">
  <h2><strong>Lista de cadastrados</strong></h2>
</div>
<div class="container">
  <?php
  $consulta = ("SELECT id_pessoa, nome, cpf FROM cadastro_pessoa where nome like '%$n%' ORDER BY nome ASC");
  $conn = $db->query($consulta) or die($mysqli->error);
  //Verifica se o select retornou linhas senao apresenta mensagem de erro.                
  if ($conn->num_rows <= 0) {
    include_once 'mensagens/resultadoNaoEncontrado.php';
  } else {
    ?>
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
        while ($dado = $conn->fetch_array()) {
          ?>
          <tr>
            <td><a href="editarcadastro.php?search=<?php echo $dado['nome']; ?>"> <?php echo $dado['nome']; ?></a></td>
            <td><?php echo $dado['cpf']; ?></td>
          </tr>
        <?php
      }
    }
    ?>
    </tbody>
  </table>
</div>
<?php include_once 'layout/footer.php' ?>