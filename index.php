<!doctype html>
<html lang="en">

<?php include_once "helpers/header.php";?>
<body>
   <?php include_once "scripts/check_autenticador.php"?>
   <?php include_once "componentes/backgroundC.php"; ?>

    <?php include "componentes/logo.php"; ?>

    <section class="row" id="opcoes_entrada">
        <article class="col-12 text-center animated bounceInUp">
            <a href="entrar.php"><button>ENTRAR</button></a>
        </article>

        <article class="col-12 text-center mt-4 animated bounceInUp" style="animation-delay: 0.1s;">
            <a href="registar.php"><button>REGISTAR</button></a>
        </article>
    </section>
    <section class="row justify-content-center d-none" id="btn">
        <article class="col-6">
            <h1>SACAR APP</h1>
        </article>
    </section>
</body>

</html>