<!doctype html>
<html lang="en">

<?php include_once "helpers/header.php";?>
<style>
    <?php include 'css/animate.css'; ?>
</style>

<body>

    <?php include_once "componentes/backgroundC.php"; ?>
    <section class="row justify-content-center" style="padding-top: 25vh">
        <article class="col-12 text-center animated fadeInUp">
            <p class="titulo-1">ENTRAR</p>
        </article>
    </section>

    <section class="row justify-content-center mt-3" id="form_entrada">
        <form method="post" action="menu.php" class="text-center">
            <input class="col-12 animated bounceInUp" type="text" placeholder="Email">
            <br>
            <input class="col-12 mt-3 animated bounceInUp" type="password" placeholder="Password" style="animation-delay: 0.1s">
            <br>
            <input id="submit_entrar" class="col-8 mt-5 pl-1 animated bounceInUp" type="submit" value="ENTRAR" style="animation-delay: 0.15s">
        </form>
    </section>
</body>

</html>