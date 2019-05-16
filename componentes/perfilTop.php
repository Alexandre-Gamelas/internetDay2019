<?php
$fotografia;
if(isset($_SESSION['fotografia'])){
    $fotografia = $_SESSION['fotografia'];
} else {
    $fotografia = 'https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png';
}

if($_SESSION['role'] == 'estudante'){
    $nome = $_SESSION['nome'];
    $apelido = $_SESSION['apelido'];
    $curso = $_SESSION['curso'];
    $universidade = $_SESSION['universidade'];
    echo "
        <section class='row justify-content-center'>
            <article class='col-12 text-center' style='max-height: 12.5vh'>
                <img class='userImg' src='$fotografia'>
            </article>
        
            <article class='col-12 text-center user'>
                <p class='userName'>$nome $apelido</p>
                <p class='userCurso'>$curso</p>
                <p class='userUni'>$universidade</p>
            </article>
        </section>
    ";
} else if($_SESSION['role'] == 'scout'){
    $nome = $_SESSION['nome'];
    $apelido = $_SESSION['apelido'];
    $curso = $_SESSION['empresa'];
    $universidade = $_SESSION['cargo'];
    echo "
        <section class='row justify-content-center'>
            <article class='col-12 text-center' style='max-height: 12.5vh'>
                <img class='userImg' src='$fotografia'>
            </article>
        
            <article class='col-12 text-center user'>
                <p class='userName'>$nome $apelido</p>
                <p class='userCurso'>$curso</p>
                <p class='userUni'>$universidade</p>
            </article>
        </section>
     ";
}
?>
