<?php
if($_SESSION['role'] == 'estudante'){
    echo "
        <section class=\"row\">
            <article class=\"col-12 text-center\">
                <p class=\"titulo-qr mb-2\">Empresas</p>
            </article>
        
            <article class=\"col-12 text-center\">
                <p class=\"userName text-uppercase\">Que estão de <span><img class=\"olho\" src=\"assets/img/olho.png\" alt=\"\"></span> em ti!</p>
            </article>
        </section>
    ";
} else if ($_SESSION['role'] == 'scout'){
    echo "
        <section class=\"row\">
            <article class=\"col-12 text-center\">
                <p class=\"titulo-qr mb-2\">Scans</p>
            </article>
        
            <article class=\"col-12 text-center\">
                <p class=\"userName text-uppercase\">Eles podem ser uma mais valia</p>
            </article>
        </section>
    ";
}



?>
