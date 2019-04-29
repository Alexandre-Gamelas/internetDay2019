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
    <img id="qrcode" data-toggle="modal" data-target="#qrModal" class="pointer" src="assets/img/menu/qrcode.png" alt="">
</div>


<div class="modal fade" id="qrModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <video id="preview"></video>
            </div>
            <div class="modal-footer">
                <button id="qrClose" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<footer class="container-fluid ">
    <section class="row justify-content-center animated slideInUp">
        <article class="col-8 text-center">
            <a href="index.php" class="text-parcerias">PARCERIAS</a>
        </article>
    </section>

</footer>