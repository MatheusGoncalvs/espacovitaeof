<?php include_once 'layout/header.php'?>
<div class="titulos">
    <h2>Painel do administrador</h2>
</div>
<div class="container">
        <div class="content-painel">
        <div id="carousel" class="owl-carousel carousel">
            <a href="cadastrarPaciente.php">
                <div class="block">
                    <div class="title-block">
                        <h2>Cadastrar um novo paciente</h2>
                    </div>
                    <div class="content-block">
                        <p>Nessa página você deve efetuar o cadastro do paciente para conseguir marcar uma consulta.</p>
                    </div>
                </div>
            </a>
            <a href="formPesquisaUsuario.php">
                <div class="block">
                    <div class="title-block">
                        <h2  class="font-verde">Marcação de consultas</h2>
                    </div>
                    <div class="content-block">
                        <p>Esta é a página que você deve utilizar para marcar uma consulta.</p>
                    </div>
                </div>
            </a>
            <a href="listarConsulta.php">
                <div class="block">
                    <div class="title-block">
                        <h2  class="font-amarela">Consultas</h2>
                    </div>
                    <div class="content-block">
                        <p>Nessa página você pode emitir uma lista das consultas cadastradas e também imprimi-las.</p>
                    </div>
                </div>
            </a>
        </div>
        </div>
</div>
<script>
//Carousel Painel
$('#carousel').owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 6000,
    autoplayHoverPause: true,
    margin: 10,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});
</script>
<?php include_once 'layout/footer.php' ?>