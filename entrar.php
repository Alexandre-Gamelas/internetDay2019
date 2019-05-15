<!doctype html>
<html lang="en">
<?php include_once "helpers/header.php";?>
<body>
    <?php session_start(); //esta página é especial, session start iniciad aqui para podermos saltar a pagina caso ja esteja logged in?>
    <?php include_once "componentes/backgroundC.php"; ?>
    <?php

    include_once "connections/connection.php";
    //new_db_connection();
    if(isset($_GET['msg'])){
        switch ($_GET['msg']){
            case 'erroPass':
                echo "<script>alert('Erro na password!')</script>";
                break;
            case 'erroMail':
                echo "<script>alert('Erro no email!')</script>";
                break;
        }
    }
    if(isset($_SESSION['name'])){
        header("Location: ./menu.php");
    } else {

        echo"
              <section class=\"row justify-content-center\" style=\"padding-top: 25vh\">
                    <article class=\"col-12 text-center animated fadeInUp\">
                        <p class=\"titulo-1\">ENTRAR</p>
                    </article>
               </section>
    
                <section class=\"row justify-content-center mt-3\" id=\"form_entrada\">
                    <form method=\"post\" action=\"scripts/login_script.php\" class=\"text-center\">
                        <input class=\"col-12 animated bounceInUp form-control inputRegistar\" type=\"text\" placeholder=\"Email\" name=\"mail\">
                        <br>
                        <input class=\"col-12 animated bounceInUp form-control inputRegistar\" type=\"password\" name=\"pass\" placeholder=\"Password\" style=\"animation-delay: 0.1s\">
                        <br>
                        <button id=\"submit_entrar\" class=\"col-8 mt-5 p-2 animated bounceInUp inputRegistar\" type=\"submit\" style=\"animation-delay: 0.15s\">ENTRAR</button>
                    </form>
                    
                    <article class='col-8 mt-2 text-center'>
                        <a href='registar.php'><button class='animated bounceInUp inputRegistar p-2 font-italic'>Não tens conta? Regista-te!</button></a>
                    </article>
                    
                </section>
                        
        ";
    }

    ?>

</body>

</html>