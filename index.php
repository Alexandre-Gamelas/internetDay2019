<!doctype html>
<html lang="en">

<?php include_once "helpers/header.php";?>
<body>
    <?php
    session_start();
    if(isset($_GET['msg'])){
        switch($_GET['msg']){
            case 'logout':
                echo "<script>alert('Fez logout com sucesso!')</script>";
                break;
            case 'expirou':
                echo "<script>alert('Sessão expirou ou não está logado!')</script>";
                break;
        }
    }

    ?>

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
    <section id='btn' class="row mt-5 d-none">
        <article class="col-12 text-center ">
            <p class="color_id font-weight-bold mb-0">INSTALAR</p>
        </article>
        <article class="col-12 text-center">
            <i class="fas fa-plus color_id fa-2x"></i>
        </article>
</section>
</body>

</html>