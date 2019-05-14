<?php
 include_once "connections/connection.php";
    $link = new_db_connection(); // Create a new DB connection
    $stmt = mysqli_stmt_init($link); // create a prepared statement
    $query = "  
                SELECT utilizadores.nome, utilizadores.apelido, utilizadores.linkdin, utilizadores.id_utilizadores, cursos.nome, universidades.nome
                    FROM utilizadores
                    INNER JOIN estudantes
                    ON utilizadores.id_utilizadores = estudantes.ref_utilizadores
                    INNER JOIN cursos
                    ON cursos.id_cursos = estudantes.ref_cursos
                    INNER JOIN universidades
                    ON cursos.ref_universidades = universidades.id_universidades
                    INNER JOIN scouts_scans
                    ON estudantes.ref_utilizadores = scouts_scans.ref_estudantes
                    WHERE scouts_scans.ref_scouts = ?            
              "; // Define the query

    if(mysqli_stmt_prepare($stmt, $query)){
        mysqli_stmt_bind_param($stmt, 's',$idBind);
        $idBind = $_SESSION['id'];

        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $nome, $apelido, $linkdin, $idRetornado, $curso, $universidade); // Bind results
        while(mysqli_stmt_fetch($stmt)){
            renderScanados($nome, $apelido, $linkdin, $curso, $universidade);
        }
    } else {
        echo "erro 1";
    }

    function renderScanados($nome, $apelido, $linkdin, $curso, $universidade){
       echo "
            <section class=\"row align-items-center justify-content-center\">
                <article class=\"col-2 text-center\" style=\"border-radius: 50%; border: 1px solid transparent\">
                    <img class=\"img-fluid\" src=\"assets/img/entrada_utilizador/teste.jpg\" style=\"border-radius: 50%; border: 1px solid transparent\">
                </article>

                <article class=\"col-7\">
                    <p class=\"font-weight-bold mb-0\" style=\"font-size: 3.5vmin\">$universidade, $curso</p>
                    <p class=\"mb-0\" style=\"font-size: 3vmin;\">$nome $apelido</p>
                </article>

                <article class=\"col-2 text-center\">
                    <a href='$linkdin' target='_blank'><img class=\"img-fluid\" src=\"assets/img/entrada_utilizador/mais-s.png\" alt=\"\"></a>
                </article>

                <article class=\"col-12\">
                    <hr>
                </article>
            </section>
       ";
    }
?>

