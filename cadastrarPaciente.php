<?php include_once 'layout/header.php'?>
<div class="titulos">
    <h2>Cadastre um novo paciente</h2>
</div>
<div class="container">
    <div class="container-dois">
    <label></label>
    <form class="form-horizontal" action="cadastrar_usuario.php" id="newUserForm" method="POST">
        <div class="form-group">
            <label class="control-label" for="name">Nome:</label>
                <input type="name" class="form-control input-nome" id="nome" placeholder="Informe o Nome" name="nome" required>
        </div>
        <div class="form-group">
            <label class="control-label" for="rg">RG:</label>
                <input type="number" class="form-control input-rg" id="rg" placeholder="Informe o RG" name="rg"
                width="100px" required>
        </div>
        <div class="form-group">
            <label class="control-label" for="cpf">CPF:</label>
                <input type="text" class="form-control input-cpf" id="cpf" placeholder="Informe o CPF" name="cpf"
                maxlength="14" pattern="[\d.-]{14}" required>
    
           
        </div>
        <div class="form-group">
            <label class="control-label" for="celular">Celular:</label>
                <input type="tel" class="form-control input-celular" id="celular" placeholder="Informe o Celular" name="celular" required>
        </div>
        <div class="form-group">
            <label class="control-label" for="data_nascimento">Data nascimento:</label>
                <input type="date" class="form-control input-data-nascimento" id="data_nascimento" placeholder="Informe a Data de Nascimento"
                    name="data_nascimento" required>
        </div>

        <div class="form-group">
            <label class="control-label" for="rua">Rua:</label>
                <input type="text" class="form-control input-rua" id="rua" placeholder="Informe a Rua" name="rua" required>
        </div>
        <div class="form-group">
            <label class="control-label" for="numero">Número:</label>
                <input type="number" class="form-control input-numero" id="numero" placeholder="Nº casa"
                    name="numero" required>
        </div>
        <div class="form-group">
            <label class="control-label" for="bairro">Bairro:</label>
                <input type="text" class="form-control input-bairro" id="bairro" placeholder="Informe o Bairro" name="bairro" required>
        </div>
        <div class="form-group">
            <label class="control-label" for="cidade">Cidade:</label>
                <input type="text" value="Feira de Santana" class="form-control input-cidade" id="cidade"
                    placeholder="Informe a Cidade" name="cidade" required>
        </div>
        <div class="form-group">
            <label class="control-label" for="estado">Estado:</label>
                <select class="form-control" id="estado" name="estado" width="200px" required>
                    <option value="">Selecione</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA" selected>Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espirito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
        </div>
        <div class="form-group">
            <label class="control-label" for="sexo">Sexo:</label>
            <label class="radio-inline"><input id="sexo" name="sexo" value="F" type="radio">Feminino</label>
            <label class="radio-inline"><input id="sexo" name="sexo" value="M" type="radio">Masculino</label>
            <label class="radio-inline"><input id="sexo" name="sexo" value="O" type="radio">Outros</label>
        </div>
        <div class="form-group text-area-align">
            <label class="control-label" for="observacoes">Observações:</label>
                <textarea class="form-control" id="observacoes" name="observacoes"
                rows="5">
        </textarea>
        </div>
        <div class="form-group">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                    <input type="reset" class="btn" value="Limpar formulário">
        </div>
    </form>
    </div>
</div>
<?php include_once 'layout/footer.php' ?>