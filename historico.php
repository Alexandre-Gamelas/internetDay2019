<!doctype html>
<html lang="en">
<?php include_once "helpers/header.php";?>
<body>

    <?php
    $pagina = "histórico";
    include_once "componentes/navbar.php" ?>

    <main>
        <section class="row justify-content-center">
            <article class="col-3 mt-5 mb-5">
                <img class="img-fluid" src="assets/img/entrada_utilizador/olho-s.png" alt="">
            </article>
        </section>
        <?php include_once "componentes/entrada_utilizador.php"?>
    </main>


        <section class="row justify-content-center fixed-bottom">
            <article class="col-12 text-center" style="font-size: 3vmin;">
                <p class="mb-1">Não percas contacto com as empresas!</p>
                <p>Sabe mais sobre elas <img class="img-fluid ml-1" style="width: 15px" src="assets/img/entrada_utilizador/mais-s.png" alt=""></p>
            </article>
        </section>

</body>
</html>