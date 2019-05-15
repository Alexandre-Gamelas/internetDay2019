<!doctype html>
<html lang="en">
<?php include_once "helpers/header.php";?>
<?php
    session_start();
    include_once "scripts/checkin.php";
    $id = $_SESSION['id'];
?>
<body>

    <?php
    $pagina = "histórico";
    include_once "componentes/navbar.php" ;
     if($_SESSION['role'] == 'estudante') {
        $img = "olho-s.png";
     } else if($_SESSION['role'] == 'scout'){
         $img = "lupa-s.png";
     }

    ?>

    <main>
        <section class="row justify-content-center">
            <article class="col-3 mt-5 mb-5">
                <img class="img-fluid" src="assets/img/entrada_utilizador/<?php echo $img ?>" alt="">
            </article>
        </section>
        <?php include_once "componentes/entrada_utilizador.php"?>
    </main>

    <?php
    if($_SESSION['role'] == 'estudante') {
        echo "
         <section class=\"row justify-content-center\">
            <article class=\"col-12 text-center\" style=\"font-size: 3vmin;\">
                <p class=\"mb-1\">Não percas contacto com as empresas!</p>
                <p>Sabe mais sobre elas <img class=\"img-fluid ml-1\" style=\"width: 15px\" src=\"assets/img/entrada_utilizador/mais-s.png\" alt=\"\"></p>
            </article>
        </section>
        ";
    } else if($_SESSION['role'] == 'scout'){
        echo "
         <section class=\"row justify-content-center\">
            <article class=\"col-12 text-center\" style=\"font-size: 3vmin;\">
                <p class=\"mb-1\">Não percas o contacto com os futuros Profissionais!</p>
                <p>Sabe mais sobre eles <img class=\"img-fluid ml-1\" style=\"width: 15px\" src=\"assets/img/entrada_utilizador/mais-s.png\" alt=\"\"></p>
            </article>
        </section>
        ";
    }
    ?>


</body>
</html>