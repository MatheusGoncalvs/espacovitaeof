<?php include_once 'layout/header.php'?>
<div class="titulos">
    <h2><strong>Impressão da consulta</strong></h2>

</div>
<div class="container">
    <label></label>
    <form class="form-horizontal" action="">
        <div class="form-group">
                <h3><strong>Nome: </strong>John Moses</h3>
        </div>
        <div class="form-group">
                <h3><strong>Data: </strong>20/05/2019</h3>
        </div>
        <div class="form-group">
                <h3><strong>Hora da consulta: </strong>12:00 hs</h3>
        </div>
        <div class="form-group">
                <h3><strong>Tipo de serviço: </strong>Urulogia</h3>
        </div>
        <div class="form-group">
                <h3><strong>Especialista: </strong>Francisco Pereira</h3>
        </div>
        <div class="form-group">
                <h3><strong>Queixas: </strong>Dor na barriga; E outras coisas; Febre;</h3>
        </div>
        <div class="form-group">
                <h3><strong>PNE(Portador de necessidades especiais): </strong>Não</h3>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="button" class="btn btn-default" name="imprimir" value="Imprimir"
                    onclick="window.print();">
            </div>
        </div>
    </form>
</div>
