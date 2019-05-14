<?php
session_start();
require_once "../connections/connection.php";

$link = new_db_connection();

$stmt = mysqli_stmt_init($link);

$query = "SELECT role FROM utilizadores WHERE mail LIKE ?";

if (mysqli_stmt_prepare($stmt, $query)) {
    mysqli_stmt_bind_param($stmt, 's', $username);
    $username = $_POST['mail'];
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_bind_result($stmt, $role);
        if (mysqli_stmt_fetch($stmt)) {
            $_SESSION['role'] = $role;
        }
    }
}




if($_SESSION['role'] == "estudante"){

    $stmt = mysqli_stmt_init($link);
//var_dump($link);
    $query = "          SELECT utilizadores.nome, utilizadores.apelido, utilizadores.linkdin, utilizadores.id_utilizadores, utilizadores.role, utilizadores.pass, cursos.nome, universidades.nome 
                    FROM utilizadores
                    INNER JOIN estudantes
                    ON utilizadores.id_utilizadores = estudantes.ref_utilizadores
                    INNER JOIN cursos
                    ON cursos.id_cursos = estudantes.ref_cursos
                    INNER JOIN universidades
                    ON cursos.ref_universidades = universidades.id_universidades
                    WHERE utilizadores.mail = ?
                    ";
    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt, 's', $mail);
        $mail = $_POST["mail"];
        $password = $_POST["pass"];
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $nome, $apelido, $linkdin, $idRetornado, $role,$password_hash, $curso, $universidade);
        if (mysqli_stmt_fetch($stmt)) {
            if(password_verify($password, $password_hash)){
                $_SESSION['id'] = $idRetornado;
                $_SESSION['nome'] = $nome;
                $_SESSION['apelido'] = $apelido;
                $_SESSION['role'] = $role;
                $_SESSION['linkdin'] = $linkdin;
                $_SESSION['curso'] = $curso;
                $_SESSION['universidade'] = $universidade;
                //var_dump($_SESSION);
                header("Location: ../menu.php");

            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($link);

    }
} else if($_SESSION['role'] == "scout"){

    $stmt = mysqli_stmt_init($link);
//var_dump($link);
    $query = "       SELECT utilizadores.nome, utilizadores.apelido, utilizadores.linkdin, utilizadores.id_utilizadores, utilizadores.role, utilizadores.pass, cargos.nome, empresas.nome
                    FROM utilizadores
                    INNER JOIN scouts
                    ON utilizadores.id_utilizadores = scouts.ref_utilizadores
                    INNER JOIN cargos
                    ON cargos.id_cargos = scouts.ref_cargos
                    INNER JOIN empresas
                    ON empresas.id_empresas = scouts.ref_empresas
                    WHERE utilizadores.mail = ?
                    ";
    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt, 's', $mail);
        $mail = $_POST["mail"];
        $password = $_POST["pass"];
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $nome, $apelido, $linkdin, $idRetornado, $role,$password_hash, $cargo, $empresa);
        if (mysqli_stmt_fetch($stmt)) {
            if(password_verify($password, $password_hash)){
                $_SESSION['id'] = $idRetornado;
                $_SESSION['nome'] = $nome;
                $_SESSION['apelido'] = $apelido;
                $_SESSION['role'] = $role;
                $_SESSION['linkdin'] = $linkdin;
                $_SESSION['cargo'] = $cargo;
                $_SESSION['empresa'] = $empresa;
                //var_dump($_SESSION);
                header("Location: ../menu.php");

            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($link);

    }

}



//header("location: ".$url);
?>