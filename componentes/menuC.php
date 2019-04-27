<?php include 'helpers/header.php'; ?>
<style>
    <?php include 'css/menu.css'; ?>
    <?php include 'css/animate.css'; ?>
</style>
<section class="row justify-content-center">
    <div class="layer_preto_menu"></div>

    <article id="logo" class="mt-5 animated slideInDown">
        <?php include "componentes/logo.php" ?>;
    </article>
</section>

<div class="mae_menu animated flipInY">

    <img id="circulo" class="pointer menuIcon" src="assets/img/menu/circulo.png" alt="">
    <img id="perfil" class="pointer menuIcon" src="assets/img/menu/perfil.png" alt="">
    <a href="horario.php"><img id="horario" class="pointer menuIcon" src="assets/img/menu/horario.png" alt=""></a>
    <img id="mapa" class="pointer menuIcon" src="assets/img/menu/mapa.png" alt="">
    <a href="historico.php"><img id="historico" class="pointer menuIcon" src="assets/img/menu/historico.png" alt=""></a>
    <img id="qrcode" class="pointer" src="assets/img/menu/qrcode.png" alt="">
</div>


<footer class="container-fluid ">
    <section class="row justify-content-center animated slideInUp">
        <article class="col-8 text-center">
            <a href="index.php" class="text-parcerias">PARCERIAS</a>
        </article>
    </section>

</footer>