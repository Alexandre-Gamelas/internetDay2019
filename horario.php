<!doctype html>
<html lang="en">
<?php include_once "helpers/header.php" ?>
<style>
    <?php include 'css/horario.css'; ?>
    <?php include 'css/animate.css'; ?>
</style>

    <body>

        <?php
        $pagina = "horário";
        include_once "componentes/navbar.php" ?>
        <section class="row justify-content-between align-items-center" style="background-color: #FFDB58;">
            <article class="col-3 text-center">
                <img id="left" class="seta esquerda" src="assets/img/horario/seta.png" alt="">
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
    //guardar a altura original de cada entrada para as animações. Assim é dinamico e responsivo.
    var heightOriginal = $('#hora1').height();
    console.log(heightOriginal);

    //guardar o numero de entradas de forma dinamica também para p fazer os checks.
    var numero_entradas = <?php echo $num ?>;
    console.log(numero_entradas);

    //hora começa a 1 para efeitos de controlo.
    var hora = 1;
    console.log(hora);

    //anim para a direita
        $("#right").click(function () {
            $("#hora" + hora).addClass('animated fadeOutLeft');
            setTimeout(function () {
                $("#hora" + hora).animate({
                    height: 0
                }, 200);

                //async, só depois da animação estar completa é que o contadar da hora avança
                $("#hora" + hora).promise().done(function () {
                    console.log("Começou a", hora);
                    hora++;
                    console.log("Terminou a", hora);
                });

            }, 500)
        });


        $("#left").click(function () {
            console.log("Começou a", hora);
            hora--;
            console.log("Terminou a", hora);
            $("#hora" + hora).animate({
                height: heightOriginal
            }, 200);

            $("#hora" + hora).promise().done(function () {
                $("#hora" + hora).removeClass('fadeOutLeft');
                $("#hora" + hora).addClass('fadeInLeft');
            });


        });

</script>
</html>