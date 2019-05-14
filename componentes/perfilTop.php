<?php
if($_SESSION['role'] == 'estudante'){
    $nome = $_SESSION['nome'];
    $curso = $_SESSION['curso'];
    $universidade = $_SESSION['universidade'];
    echo "
        <section class='row justify-content-center'>
            <article class='col-12 text-center' style='max-height: 12.5vh'>
                <img src='assets/img/entrada_utilizador/teste.jpg' class='userImg'>
            </article>
        
            <article class='col-12 text-center user'>
                <p class='userName'>$nome</p>
                <p class='userCurso'>$curso</p>
                <p class='userUni'>$universidade</p>
            </article>
        </section>
    ";
} else if($_SESSION['role'] == 'scout'){
    $nome = $_SESSION['nome'];
    $curso = $_SESSION['empresa'];
    $universidade = $_SESSION['cargo'];
    echo "
        <section class='row justify-content-center'>
            <article class='col-12 text-center' style='max-height: 12.5vh'>
                <img src='assets/img/entrada_utilizador/teste.jpg' class='userImg'>
            </article>
        
            <article class='col-12 text-center user'>
                <p class='userName'>$nome</p>
                <p class='userCurso'>$curso</p>
                <p class='userUni'>$universidade</p>
            </article>
        </section>
     ";
}
?>
