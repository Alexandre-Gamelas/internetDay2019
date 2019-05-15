<?php
require_once "connections/connection.php";
$detail_id;
$detail_nome;
$detail_apelido;
$detail_role;
$detail_linkdin;
$detail_cargo;
$detail_empresa;
$detail_curso;
$detail_universidade;
$detail_foto;
$detail_mail;
$detail_site;


$link = new_db_connection();

$stmt = mysqli_stmt_init($link);

$query = "SELECT role FROM utilizadores WHERE id_utilizadores LIKE ?";

if (mysqli_stmt_prepare($stmt, $query)) {
    mysqli_stmt_bind_param($stmt, 's', $id);
    $id = $detail_id;
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_bind_result($stmt, $role);
        if (mysqli_stmt_fetch($stmt)) {
            $detail_role = $role;
        }
    }
} else {
    echo mysqli_stmt_error($stmt);
}



if($detail_role == "estudante"){

    $stmt = mysqli_stmt_init($link);
//var_dump($link);
    $query = "          SELECT utilizadores.nome, utilizadores.apelido, utilizadores.linkdin, utilizadores.id_utilizadores, utilizadores.role, utilizadores.pass, cursos.nome, universidades.nome, utilizadores.fotografia, utilizadores.mail
                    FROM utilizadores
                    INNER JOIN estudantes
                    ON utilizadores.id_utilizadores = estudantes.ref_utilizadores
                    INNER JOIN cursos
                    ON cursos.id_cursos = estudantes.ref_cursos
                    INNER JOIN universidades
                    ON cursos.ref_universidades = universidades.id_universidades
                    WHERE utilizadores.id_utilizadores = ?
                    ";
    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt, 'i', $id);
        $id = $detail_id;
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $nome, $apelido, $linkdin, $idRetornado, $role,$password, $curso, $universidade, $foto, $mail);
        if (mysqli_stmt_fetch($stmt)) {

                $detail_id = $idRetornado;
                $detail_nome = $nome;
                $detail_apelido = $apelido;
                $detail_role = $role;
                $detail_linkdin = $linkdin;
                $detail_curso = $curso;
                $detail_universidade = $universidade;
                $detail_foto = $foto;
                $detail_mail = $mail;
        }
        mysqli_stmt_close($stmt);
        mysqli_close($link);

    }
} else if($detail_role == "scout"){

    $stmt = mysqli_stmt_init($link);
//var_dump($link);
    $query = "       SELECT utilizadores.nome, utilizadores.apelido, utilizadores.linkdin, utilizadores.id_utilizadores, utilizadores.role, utilizadores.pass, cargos.nome, empresas.nome, utilizadores.fotografia, utilizadores.mail, empresas.website
                    FROM utilizadores
                    INNER JOIN scouts
                    ON utilizadores.id_utilizadores = scouts.ref_utilizadores
                    INNER JOIN cargos
                    ON cargos.id_cargos = scouts.ref_cargos
                    INNER JOIN empresas
                    ON empresas.id_empresas = scouts.ref_empresas
                    WHERE utilizadores.id_utilizadores = ?
                    ";
    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt, 'i', $id);
        $id = $detail_id;
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $nome, $apelido, $linkdin, $idRetornado, $role,$password, $cargo, $empresa, $foto, $mail, $site);
        if (mysqli_stmt_fetch($stmt)) {

                $detail_id = $idRetornado;
                $detail_nome = $nome;
                $detail_apelido = $apelido;
                $detail_role = $role;
                $detail_linkdin = $linkdin;
                $detail_cargo = $cargo;
                $detail_empresa = $empresa;
                $detail_foto = $foto;
                $detail_mail = $mail;
                $detail_site;
        }
        mysqli_stmt_close($stmt);
        mysqli_close($link);

    }

}




if($detail_role == 'estudante'){
    $nome = $detail_nome;
    $curso = $detail_curso;
    $universidade = $detail_universidade;
    echo "
        <section class='row justify-content-center'>
            <article class='col-12 text-center' style='max-height: 12.5vh'>
                <img src='$detail_foto' class='userImg'>
            </article>
        
            <article class='col-12 text-center user'>
                <p class='userName'>$nome</p>
                <p class='userCurso'>$curso</p>
                <p class='userUni'>$universidade</p>
            </article>
        </section>
        
         <section class='row justify-content-center mt-5 align-items-center'>
            <article class='col-2 text-center p-0'>
                <i class='fas fa-envelope fa-3x text-center'></i>
            </article>
            <article class='col-8 text-detail'>$detail_mail</article>
            <article class='col-12'>
                <hr class='img-fluid'>
            </article>
        </section>
        
        <a href='$detail_linkdin' target='blank'>
        <section class='row justify-content-center align-items-center'>
            <article class='col-2 text-center p-0'>
                <i class='fab fa-linkedin fa-3x text-center'></i>
            </article>
            <article class='col-8 text-detail'>Linkedin</article>
            <article class='col-12'>
                <hr class='img-fluid'>
            </article>
        </section>
        </a>
        
         <a href='$detail_mail' target='blank'>
        <section class='row justify-content-center align-items-center'>
            <article class='col-2 text-center p-0'>
                <i class='fas fa-address-card fa-3x text-center'></i>
            </article>
            <article class='col-8 text-detail'>Curriculo</article>
            <article class='col-12'>
                <hr class='img-fluid'>
            </article>
        </section>
        </a>
    ";


} else if($detail_role == 'scout'){
    $nome = $detail_nome;
    $curso = $detail_empresa;
    $universidade = $detail_cargo;
    echo "
        <section class='row justify-content-center'>
            <article class='col-12 text-center' style='max-height: 12.5vh'>
                <img src='$detail_foto' class='userImg'>
            </article>
        
            <article class='col-12 text-center user'>
                <p class='userName'>$nome</p>
                <p class='userCurso'>$curso</p>
                <p class='userUni'>$universidade</p>
            </article>
        </section>
        
        <section class='row justify-content-center mt-5 align-items-center'>
            <article class='col-2 text-center p-0'>
                <i class='fas fa-envelope fa-3x text-center'></i>
            </article>
            <article class='col-8 text-detail'>$detail_mail</article>
            <article class='col-12'>
                <hr class='img-fluid'>
            </article>
        </section>
        
        <a href='$detail_linkdin' target='blank'>
        <section class='row justify-content-center align-items-center'>
            <article class='col-2 text-center p-0'>
                <i class='fab fa-linkedin fa-3x text-center'></i>
            </article>
            <article class='col-8 text-detail'>Linkedin</article>
            <article class='col-12'>
                <hr class='img-fluid'>
            </article>
        </section>
        </a>
        
         <a href='$detail_mail' target='blank'>
        <section class='row justify-content-center align-items-center'>
            <article class='col-2 text-center p-0'>
                <i class='fas fa-address-card fa-3x text-center'></i>
            </article>
            <article class='col-8 text-detail'>Curriculo</article>
            <article class='col-12'>
                <hr class='img-fluid'>
            </article>
        </section>
        </a>
        
         <a href='$detail_site' target='blank'>
        <section class='row justify-content-center align-items-center'>
            <article class='col-2 text-center p-0'>
                <i class='fas fa-wifi fa-3x text-center'></i>
            </article>
            <article class='col-8 text-detail'>Website da $detail_empresa</article>
            <article class='col-12'>
                <hr class='img-fluid'>
            </article>
        </section>
        </a>
     ";
}
?>
