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

<?php
    if($_SESSION['role'] == 'scout'){
        echo "
           <section id='janelaQr' class=\"row justify-content-center align-items-center animated d-none fadeOutDown\">
                <article id='videoQr' class=\"col-12 position-relative\">
                    <button id=\"qrClose\" type=\"button\" class=\"btn btn-secondary mb-1\" data-dismiss=\"modal\">FECHAR</button>
                    <video class=\"img-fluid\" id=\"preview\"></video>
                </article>
            </section>
        ";
    } else if($_SESSION['role'] == 'estudante'){
        echo "
            <section id='janelaQr' class=\"row justify-content-center align-items-center animated d-none fadeOutDown\">
                <article id='qrcode2' class=\"col-12 text-center bg-white\">
                    <button id=\"qrClose\" type=\"button\" class=\"btn btn-secondary mb-1\" data-dismiss=\"modal\">FECHAR</button>
                </article>
            </section>
        ";
        echo "<p id='qrTexto' class='d-none'>".$_SESSION['id']."</p>";
    }
?>

<section class="row fixed-bottom">
    <article class="col-12 text-right pr-3">
        <a href="scripts/logout.php"><i class="fas fa-times fa-2x pr-3 pb-1" style="color: #FFDB58"></i></a>
    </article>
</section>
