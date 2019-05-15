<?php
 include_once "connections/connection.php";
 if($_SESSION['role'] == "scout"){
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
            renderScanados1($nome, $apelido, $linkdin, $curso, $universidade, $idRetornado);
        }
    } else {
        echo "erro 1";
    }


 } else if($_SESSION['role'] == "estudante"){
     $link = new_db_connection(); // Create a new DB connection
     $stmt = mysqli_stmt_init($link); // create a prepared statement
     $query = "  
                SELECT utilizadores.nome, utilizadores.apelido, utilizadores.linkdin, utilizadores.id_utilizadores, cargos.nome, empresas.nome
                    FROM utilizadores
                    INNER JOIN scouts
                    ON utilizadores.id_utilizadores = scouts.ref_utilizadores
                    INNER JOIN cargos
                    ON cargos.id_cargos = scouts.ref_cargos
                    INNER JOIN empresas
                    ON empresas.id_empresas = scouts.ref_empresas
                    INNER JOIN scouts_scans
                    ON scouts.ref_utilizadores = scouts_scans.ref_scouts
                    WHERE scouts_scans.ref_estudantes = ?
                                
              "; // Define the query

     if(mysqli_stmt_prepare($stmt, $query)){
         mysqli_stmt_bind_param($stmt, 's',$idBind);
         $idBind = $_SESSION['id'];

         mysqli_stmt_execute($stmt);
         mysqli_stmt_bind_result($stmt, $nome, $apelido, $linkdin, $idRetornado, $cargo, $empresa); // Bind results
         while(mysqli_stmt_fetch($stmt)){
             renderScanados2($nome, $apelido, $linkdin, $cargo, $empresa,$idRetornado);
         }
     } else {
         echo "erro 1";
     }


 }

function renderScanados1($nome, $apelido, $linkdin, $curso, $universidade, $id){
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
                    <a href='perfil_detail.php?id=$id' target='_blank'><img class=\"img-fluid\" src=\"assets/img/entrada_utilizador/mais-s.png\" alt=\"\"></a>
                </article>

                <article class=\"col-12\">
                    <hr>
                </article>
            </section>
       ";
}

function renderScanados2($nome, $apelido, $linkdin, $cargo, $empresa, $id){
    echo "
            <section class=\"row align-items-center justify-content-center\">
                <article class=\"col-2 text-center\" style=\"border-radius: 50%; border: 1px solid transparent\">
                    <img class=\"img-fluid\" src=\"assets/img/entrada_utilizador/teste.jpg\" style=\"border-radius: 50%; border: 1px solid transparent\">
                </article>

                <article class=\"col-7\">
                    <p class=\"font-weight-bold mb-0\" style=\"font-size: 3.5vmin\">$empresa, $cargo</p>
                    <p class=\"mb-0\" style=\"font-size: 3vmin;\">$nome $apelido</p>
                </article>

                <article class=\"col-2 text-center\">
                    <a href='perfil_detail.php?id=$id' target='_blank'><img class=\"img-fluid\" src=\"assets/img/entrada_utilizador/mais-s.png\" alt=\"\"></a>
                </article>

                <article class=\"col-12\">
                    <hr>
                </article>
            </section>
       ";
}
?>

