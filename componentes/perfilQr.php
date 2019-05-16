<?php
include_once "connections/connection.php";
$instituicao;
$nome;
$link = new_db_connection();

$stmt = mysqli_stmt_init($link);

if($_SESSION['role']=='estudante') {
    $query = "  SELECT logotipo FROM universidades
            INNER JOIN cursos
            ON universidades.id_universidades = cursos.ref_universidades
            INNER JOIN estudantes
            ON cursos.id_cursos = estudantes.ref_cursos
            INNER JOIN utilizadores
            ON estudantes.ref_utilizadores = utilizadores.id_utilizadores
            WHERE utilizadores.id_utilizadores = ?";
    $nome = 'Universidade';

} else if($_SESSION['role']=='scout'){
    $query = "  SELECT logotipo, empresas.nome FROM empresas
            INNER JOIN scouts
            ON empresas.id_empresas = scouts.ref_empresas
            INNER JOIN utilizadores
            ON scouts.ref_utilizadores = utilizadores.id_utilizadores
            WHERE utilizadores.id_utilizadores = ?";
}

if (mysqli_stmt_prepare($stmt, $query)) {
    mysqli_stmt_bind_param($stmt, 's', $id);
    $id = $_SESSION['id'];
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_bind_result($stmt, $foto, $nomeEmpresa);
        if (mysqli_stmt_fetch($stmt)) {
            $instituicao = $foto;
            $nome = $nomeEmpresa;
        }
    }
} else {
    echo mysqli_stmt_error($stmt);
}

mysqli_stmt_close($stmt);
mysqli_close($link);


?>
<section class="row justify-content-center mt-5">
    <article class="col-12 text-center">
        <p class="titulo-qr mb-2"><?= $nome ?></p>
    </article>

    <article class="col-9 text-center">
        <img class="img-fluid" src="<?= $instituicao ?>" alt="">
    </article>

    <article class="col-11 text-center mt-3 mb-3">
        <hr style="color: black">
    </article>
</section>