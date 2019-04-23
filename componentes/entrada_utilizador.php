<?php
    //dados para simular BD, será substituido por uma query sql
    //para que este componente seja competivel com varios ecrãs, cada ecrã poderá ter uma variavel onde está guaradada essa query!!!
    $entradas = array(
            array(
                    "assets/img/entrada_utilizador/teste.jpg",
                    "Altice Labs",
                    "Carlos Santos",
                    "RnD"
            ),

            array(
                    "assets/img/entrada_utilizador/teste.jpg",
                    "Portugal Telecom",
                    "Ana Neves",
                    "Recursos Humanos"
            ),

        array(
            "assets/img/entrada_utilizador/teste.jpg",
            "MEO",
            "Rita Antunes",
            "Marketing"
        ),

            array(
                "assets/img/entrada_utilizador/teste.jpg",
                "Vodafone",
                "Paulo Gamelas",
                "Desenvolvimento"
            )
    );

    foreach($entradas as $entrada){
        echo "
            <section class=\"row align-items-center justify-content-center\">
                <article class=\"col-2 text-center\" style=\"border-radius: 50%; border: 1px solid transparent\">
                    <img class=\"img-fluid\" src=$entrada[0] alt=\"\" style=\"border-radius: 50%; border: 1px solid transparent\">
                </article>

                <article class=\"col-7\">
                    <p class=\"font-weight-bold mb-0\" style=\"font-size: 3.5vmin\">$entrada[1]</p>
                    <p class=\"mb-0\" style=\"font-size: 2.8vmin;\">$entrada[2], $entrada[3]</p>
                </article>

                <article class=\"col-2 text-center\">
                    <img class=\"img-fluid\" src=\"assets/img/entrada_utilizador/mais-s.png\" alt=\"\">
                </article>

                <article class=\"col-12\">
                    <hr>
                </article>
            </section>
        ";
    }
?>
