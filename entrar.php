<!doctype html>
<html lang="en">
<?php include_once "helpers/header.php";?>
<body>
    <?php session_start(); //esta página é especial, session start iniciad aqui para podermos saltar a pagina caso ja esteja logged in?>
    <?php include_once "componentes/backgroundC.php"; ?>
    <?php


    if(isset($_SESSION['log'])){
        header("Location: ./menu.php");
    } else {

        echo"
              <section class=\"row justify-content-center\" style=\"padding-top: 25vh\">
                    <article class=\"col-12 text-center animated fadeInUp\">
                        <p class=\"titulo-1\">ENTRAR</p>
                    </article>
               </section>
    
                <section class=\"row justify-content-center mt-3\" id=\"form_entrada\">
                    <form method=\"post\" action=\"scripts/autenticador.php\" class=\"text-center\">
                        <input class=\"col-12 animated bounceInUp form-control inputRegistar\" type=\"text\" placeholder=\"Email\" name=\"mail\">
                        <br>
                        <input class=\"col-12 mt-3 animated bounceInUp form-control inputRegistar\" type=\"password\" name=\"pass\" placeholder=\"Password\" style=\"animation-delay: 0.1s\">
                        <br>
                        <button id=\"submit_entrar\" class=\"col-8 mt-2 pl-1 animated bounceInUp inputRegistar\" type=\"submit\" style=\"animation-delay: 0.15s\">ENTRAR</button>
                    </form>
                </section>
        
        ";
    }

    ?>

</body>

</html>