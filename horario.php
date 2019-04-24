<!doctype html>
<html lang="en">
<?php include_once "helpers/header.php" ?>
<style>
    <?php include 'css/horario.css'; ?>
</style>

<body>
    <?php
    $pagina = "horário";
    include_once "componentes/navbar.php" ?>
    <section class="row justify-content-between align-items-center" style="background-color: #FFDB58;">
        <article class="col-3 text-center">
            <img class="seta esquerda" src="assets/img/horario/seta.png" alt="">
        </article>

        <article class="col-6 text-center">
            <h2 class="p-3">12:00</h2>
        </article>

        <article class="col-3 text-center">
            <img id="right" class="seta direita" src="assets/img/horario/seta.png" alt="">
        </article>
    </section>

   <?php include_once "componentes/entrada_horario.php" ?>


</body>
<script>

    $("#right").click(function() {
        hora = 4;
        console.log(hora);
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#hora" + hora).offset().top
        }, 1000);
    });

</script>
</html>