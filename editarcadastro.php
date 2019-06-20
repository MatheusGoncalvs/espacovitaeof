<?php 
	include_once 'layout/header.php';
	include_once 'DB/connection.php';
	$name = $_GET['search'];
?>

<?php 
    $consulta = ("SELECT * FROM cadastro_pessoa WHERE nome = '$name' ");
    $conn = $db->query($consulta) or die($mysqli->error);
    while($dado = $conn->fetch_array()){
        
?>
<div class="titulos">
    <h2><strong>Confira</strong> ou <strong>Edite</strong> o cadastro da pessoa</h2>
</div>
<div class="container">
    <div class="container-dois">
    <label></label>
    <form class="form-horizontal" action="updateCadastro.php" id="meuForm" method="POST">
        <div class="form-group">
            <label class="control-label" for="name">Nome:</label>
                <input type="name" class="form-control input-nome" id="nome" placeholder="Informe o Nome" name="nome"
                value="<?php echo $dado['nome']; ?>">
        </div>
        <div class="form-group">
            <label class="control-label" for="rg">RG:</label>
                <input type="number" class="form-control input-rg" id="rg" placeholder="Informe o RG" name="rg"
                width="100px" value="<?php echo $dado['rg']; ?>" readonly>
        </div>
        <div class="form-group">
            <label class="control-label" for="cpf">CPF:</label>
                <input type="text" class="form-control input-cpf" id="cpf" placeholder="Informe o CPF" name="cpf"
                maxlength="14" pattern="[\d.-]{14}" value="<?php echo $dado['cpf']; ?>" readonly>
    
           
        </div>
        <div class="form-group">
            <label class="control-label" for="celular">Celular:</label>
                <input type="tel" class="form-control input-celular" id="celular" placeholder="Informe o Celular" name="celular" value="<?php echo $dado['celular']; ?>">
        </div>
        <div class="form-group">
            <label class="control-label" for="data_nascimento">Data nascimento:</label>
                <input type="date" class="form-control input-data-nascimento" id="data_nascimento" placeholder="Informe a Data de Nascimento"
                    name="data_nascimento" value="<?php echo $dado['data_nascimento']; ?>">
        </div>

        <div class="form-group">
            <label class="control-label" for="rua">Rua:</label>
                <input type="text" class="form-control input-rua" id="rua" placeholder="Informe a Rua" name="rua" value="<?php echo $dado['rua']; ?>">
        </div>
        <div class="form-group">
            <label class="control-label" for="numero">Número:</label>
                <input type="number" class="form-control input-numero" id="numero" placeholder="Nº casa"
                    name="numero" value="<?php echo $dado['numero']; ?>">
        </div>
        <div class="form-group">
            <label class="control-label" for="bairro">Bairro:</label>
                <input type="text" class="form-control input-bairro" id="bairro" placeholder="Informe o Bairro" name="bairro" value="<?php echo $dado['bairro']; ?>">
        </div>
        <div class="form-group">
            <label class="control-label" for="cidade">Cidade:</label>
                <input type="text" value="Feira de Santana" class="form-control input-cidade" id="cidade"
                    placeholder="Informe a Cidade" name="cidade" value="<?php echo $dado['cidade']; ?>">
        </div>
        <div class="form-group">
            <label class="control-label" for="estado">Estado:</label>
                <select class="form-control" id="estado" name="estado">
                    <option value="<?php echo $dado['estado']; ?>"><?php echo $dado['estado']; ?></option>
                </select>
        </div>
        <div class="form-group text-area-align">
            <label class="control-label" for="observacoes">Observações:</label>
                <textarea class="form-control" id="observacoes" name="observacoes" rows="5">
                    <?php echo $dado['observacoes']; ?>
                </textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Confirmar edição</button>
        </div>
    </form>
    </div>
</div>
<?php }?>
<?php include_once 'layout/footer.php' ?>