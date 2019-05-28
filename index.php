<?php include_once 'layout/header.php'?>
<div class="titulos">
    <h2><strong>Cadastre um novo usuário</strong></h2>
</div>
<div class="container">
    <label></label>
    <form class="form-horizontal" action="mensagens/confirmacaoCadastroPaciente.php">
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Nome:</label>
            <div class="col-sm-6">
                <input type="name" class="form-control" id="name" placeholder="Informe o Nome" name="name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="rg">RG:</label>
            <div class="col-sm-3">
                <input type="number" class="form-control" id="rg" placeholder="Informe o RG" name="rg">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="cpf">CPF:</label>
            <div class="col-sm-3">
                <input type="number" class="form-control" id="cpf" placeholder="Informe o CPF" name="cpf">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="phone">Celular:</label>
            <div class="col-sm-3">
                <input type="tel" class="form-control" id="phone" placeholder="Informe o Celular" name="phone">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="birthdate">Data nascimento:</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="birthdate" placeholder="Informe a Data de Nascimento"
                    name="birthdate">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="street">Rua:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="street" placeholder="Informe a Rua" name="street">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="housenumber">Número:</label>
            <div class="col-sm-2">
                <input type="number" class="form-control" id="housenumber" placeholder="Informe o Número da casa"
                    name="housenumber">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="district">Bairro:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="district" placeholder="Informe o Bairro" name="district">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="city">Cidade:</label>
            <div class="col-sm-6">
                <input type="text" value="Feira de Santana" class="form-control" id="city"
                    placeholder="Informe a Cidade" name="city">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="sel1">Estado:</label>
            <div class="col-sm-3">
                <select class="form-control" id="sel1">
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
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="gender">Sexo:</label>
            <label class="radio-inline"><input id="gender" name="gender" type="radio">Feminino</label>
            <label class="radio-inline"><input id="gender" name="gender" type="radio">Masculino</label>
            <label class="radio-inline"><input id="gender" name="gender" type="radio">Outros</label>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="comments">Observações:</label>
            <div class="col-sm-6">
                <textarea class="form-control" id="comments" name="comments">
        </textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
                <div class="col-sm-2">
                    <input type="reset" class="btn" value="Limpar formulário">
                </div>
            </div>
        </div>
    </form>
</div>
<?php include_once 'layout/footer.php' ?>