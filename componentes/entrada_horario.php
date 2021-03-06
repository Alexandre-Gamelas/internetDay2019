<?php
include "componentes/fakeData/horario_data.php";

$num = 1;

foreach($entradas as $entrada){
    if($num == 1){
        $ponto = 'assets/img/horario/p-ativo.png';
        $cor_nome= '#FFDB58';
    } else {
        $ponto = 'assets/img/horario/ponto.png';
        $cor_nome = '#9E9E90';
    }

    if($num % 2 == 0){
        $bg = '#CECDBA';
    } else {
        $bg = 'white';
    }
    echo "
           <section id='hora$num' class=\"row\" style='background-color: $bg'>
                <article class=\"col-2\" style=\"border-right: 2px solid #9E9E90;\">
                    <img class=\"m-0 p-0\" src=$ponto alt=\"\" style=\"width: 6vmin; height: auto; position: absolute; top: 50%; left: 100%; transform: translate(-48%, -50%);\">
                </article>
        
                <article class=\"col-9 pt-2 pl-4 ml-2\">
                    <p class=\"mb-1 nome_evento\" style='color: $cor_nome;'>$entrada[0]</p>
                    <p style=\"font-size: 3vmin\" class=\"mb-1\">
                        <i><img style=\"width: 3vmin; height: auto\" src=\"assets/img/horario/relogio.png\" alt=\"\"></i><i id='horaTxt$num' class=\"ml-1\">$entrada[1]</i>
                        <i class=\"ml-2\"><img style=\"width: 3vmin; height: auto\" class=\"img-fluid\" src=\"assets/img/horario/local.png\" alt=\"\"></i><i class=\"ml-1\">$entrada[2]</i>
                    </p>
                    <p style=\"font-size: 3vmin\">com: $entrada[3]</p>
                </article>
           </section>
        ";

    $num++;
}
?>
