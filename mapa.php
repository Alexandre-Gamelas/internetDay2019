<!doctype html>
<html lang="en">
<?php include_once "helpers/header.php" ?>
<style>
    <?php include 'css/animate.css'; ?>
</style>

<body>
    <?php
    session_start();
    include_once "scripts/checkin.php";

    ?>
    <?php $pagina="mapa" ?>
    <?php include_once "componentes/navbar.php" ?>
    <?php include_once "componentes/sidebarMapa.php" ?>
    <section id="mapaSection">

        <div class="pin animated">
            <img src="assets/img/mapa/localizacao.png" class="img-fluid" alt="">
            <div id="textoPino">
                <p id="actualText">Complexo Ciencias da Comunicação e Imagem</p>
            </div>
        </div>

    </section>
    <script src="js/mapa.js"></script>
</body>
</html>