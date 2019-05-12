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
    <a href="perfil.php"><img id="perfil" class="pointer menuIcon" src="assets/img/menu/perfil.png" alt=""></a>
    <a href="horario.php"><img id="horario" class="pointer menuIcon" src="assets/img/menu/horario.png" alt=""></a>
    <a href="mapa.php"><img id="mapa" class="pointer menuIcon" src="assets/img/menu/mapa.png" alt=""></a>
    <a href="historico.php"><img id="historico" class="pointer menuIcon" src="assets/img/menu/historico.png" alt=""></a>
    <img id="qrcode" data-toggle="modal" data-target="#qrModal" class="pointer" src="assets/img/menu/qrcode.png" alt="">
</div>


<div class="modal fade bg-transparent" id="qrModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog bg-transparent" role="document">
        <div class="modal-content bg-transparent">
            <div id="qr" class="modal-body bg-transparent text-right row align-items-center justify-content-center">
                <button id="qrClose" type="button" class="btn btn-secondary mb-1" data-dismiss="modal">x</button>
                <video class="img-fluid" id="preview"></video>
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