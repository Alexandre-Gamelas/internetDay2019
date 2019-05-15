<?php
require_once "../connections/connection.php";
if (isset($_GET["role"])) {
    $role = $_GET["role"];
    if ($role == 1) {
        if ((isset($_POST["nome"])) && (isset($_POST["apelido"])) && (isset($_POST["pass"])) && (isset($_POST["mail"])) && (isset($_POST["linkdin"])) && (isset($_POST["nascimento"])) && (isset($_POST["nacionalidade"])) && (isset($_POST["n_aluno"])) && (isset($_POST["curso"]))) {
            $link = new_db_connection();
            $stmt = mysqli_stmt_init($link);
            $query = "SELECT  id_nacionalidades  FROM nacionalidades WHERE nacionalidades.nome LIKE ? ";
            if (mysqli_stmt_prepare($stmt, $query)) {
                mysqli_stmt_bind_param($stmt, 's', $nac);
                $nac = $_POST["nacionalidade"];
                mysqli_stmt_execute($stmt);
                mysqli_stmt_bind_result($stmt, $id);
                while (mysqli_stmt_fetch($stmt)) {
                    $id_nac = $id;
                }
                mysqli_stmt_close($stmt);
            }
            mysqli_close($link);
            $link = new_db_connection();
            $stmt = mysqli_stmt_init($link);
            $query = "SELECT id_cursos FROM cursos WHERE cursos.nome LIKE ? ";
            if (mysqli_stmt_prepare($stmt, $query)) {
                mysqli_stmt_bind_param($stmt, 's', $curso);
                $curso = $_POST["curso"];
                mysqli_stmt_execute($stmt);
                mysqli_stmt_bind_result($stmt, $id);
                while (mysqli_stmt_fetch($stmt)) {
                    $id_curso = $id;
                    mysqli_stmt_close($stmt);
                }
            }
            mysqli_close($link);
            $link = new_db_connection();
            $stmt = mysqli_stmt_init($link);
            $query = "INSERT INTO utilizadores (nome, apelido, pass, mail, linkdin, data_nascimento, ref_nacionalidades, role) VALUES (?, ?, ?, ?, ?, ?, $id_nac, 'estudante')";
            if (mysqli_stmt_prepare($stmt, $query)) {
                mysqli_stmt_bind_param($stmt, 'ssssss', $nome, $apelido, $password_cript, $mail, $linkdin, $nascimento);
                $nome = $_POST["nome"];
                $apelido = $_POST["apelido"];
                $mail = $_POST["mail"];
                $linkdin = $_POST["linkdin"];
                $nascimento = $_POST["nascimento"];
                $password_cript = password_hash($_POST["pass"], PASSWORD_DEFAULT);
                if (mysqli_stmt_execute($stmt)) {
                    echo "o";
                }
                mysqli_stmt_close($stmt);
            }
            mysqli_close($link);
            $link = new_db_connection();
            $stmt = mysqli_stmt_init($link);
            $query = "SELECT id_utilizadores FROM utilizadores WHERE utilizadores.mail = ? ";
            if (mysqli_stmt_prepare($stmt, $query)) {
                mysqli_stmt_bind_param($stmt, 's', $mail);
                $mail = $_POST["mail"];
                mysqli_stmt_execute($stmt);
                mysqli_stmt_bind_result($stmt, $id);
                while (mysqli_stmt_fetch($stmt)) {
                    $id_ut = $id;
                }
                mysqli_stmt_close($stmt);
            }
            mysqli_close($link);
            $link = new_db_connection();
            $stmt = mysqli_stmt_init($link);
            $query = "INSERT INTO estudantes (ref_utilizadores, n_aluno, curriculo, ref_cursos) VALUES ($id_ut, ?, ?, $id_curso)";
            var_dump($id_ut, $id_curso);
            if (mysqli_stmt_prepare($stmt, $query)) {
                mysqli_stmt_bind_param($stmt, 'ss', $n_aluno, $curriculo);
                $n_aluno = $_POST["n_aluno"];
                $curriculo = $_POST["curriculo"];
                var_dump($id_ut, $id_curso);
                if (mysqli_stmt_execute($stmt)) {
                    echo "o estudante tb deu";
                } else {
                    echo "não deu:";
                }
                mysqli_stmt_close($stmt);
            } else {
                echo mysqli_stmt_error($stmt);
            }
            mysqli_close($link);
        }
    }else{
        if($role==2){
            if ((isset($_POST["nome"])) && (isset($_POST["apelido"])) && (isset($_POST["pass"])) && (isset($_POST["mail"])) && (isset($_POST["linkdin"])) && (isset($_POST["nascimento"])) && (isset($_POST["nacionalidade"])) && (isset($_POST["cargo"])) && (isset($_POST["empresa"]))) {
                $link = new_db_connection();
                $stmt = mysqli_stmt_init($link);
                $query = "SELECT  id_nacionalidades  FROM nacionalidades WHERE nacionalidades.nome LIKE ? ";
                if (mysqli_stmt_prepare($stmt, $query)) {
                    mysqli_stmt_bind_param($stmt, 's', $nac);
                    $nac = $_POST["nacionalidade"];
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_bind_result($stmt, $id);
                    while (mysqli_stmt_fetch($stmt)) {
                        $id_nac = $id;
                    }
                    mysqli_stmt_close($stmt);
                }
                mysqli_close($link);
                $link = new_db_connection();
                $stmt = mysqli_stmt_init($link);
                $query = "SELECT  id_cargos  FROM cargos WHERE cargos.nome LIKE ? ";
                if (mysqli_stmt_prepare($stmt, $query)) {
                    mysqli_stmt_bind_param($stmt, 's', $cargo);
                    $cargo = $_POST["cargo"];
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_bind_result($stmt, $id);
                    while (mysqli_stmt_fetch($stmt)) {
                        $id_cargo = $id;
                    }
                    mysqli_stmt_close($stmt);
                }
                mysqli_close($link);
                $link = new_db_connection();
                $stmt = mysqli_stmt_init($link);
                $query = "SELECT  id_empresas  FROM empresas WHERE empresas.nome LIKE ? ";
                if (mysqli_stmt_prepare($stmt, $query)) {
                    mysqli_stmt_bind_param($stmt, 's', $empresa);
                    $empresa = $_POST["empresa"];
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_bind_result($stmt, $id);
                    while (mysqli_stmt_fetch($stmt)) {
                        $id_empresa = $id;
                    }
                    mysqli_stmt_close($stmt);
                }
                mysqli_close($link);
                $link = new_db_connection();
                $stmt = mysqli_stmt_init($link);
                $query = "INSERT INTO utilizadores (nome, apelido, pass, mail, linkdin, data_nascimento, ref_nacionalidades, role) VALUES (?, ?, ?, ?, ?, ?, $id_nac, 'scout')";
                if (mysqli_stmt_prepare($stmt, $query)) {
                    mysqli_stmt_bind_param($stmt, 'ssssss', $nome, $apelido, $password_cript, $mail, $linkdin, $nascimento);
                    $nome = $_POST["nome"];
                    $apelido = $_POST["apelido"];
                    $mail = $_POST["mail"];
                    $linkdin = $_POST["linkdin"];
                    $nascimento = $_POST["nascimento"];
                    $password_cript = password_hash($_POST["pass"], PASSWORD_DEFAULT);
                    if(mysqli_stmt_execute($stmt)){
                        echo "o";
                    }
                    mysqli_stmt_close($stmt);
                }
                mysqli_close($link);
                $link = new_db_connection();
                $stmt = mysqli_stmt_init($link);
                $query = "SELECT id_utilizadores FROM utilizadores WHERE utilizadores.mail = ? ";
                if (mysqli_stmt_prepare($stmt, $query)) {
                    mysqli_stmt_bind_param($stmt, 's', $mail);
                    $mail=$_POST["mail"];
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_bind_result($stmt, $id);
                    while (mysqli_stmt_fetch($stmt)) {
                        $id_ut = $id;
                    }mysqli_stmt_close($stmt);
                }
                mysqli_close($link);
                $link = new_db_connection();
                $stmt = mysqli_stmt_init($link);
                $query = "INSERT INTO scouts (ref_utilizadores, ref_cargos, ref_empresas) VALUES ($id_ut, $id_cargo, $id_empresa)";
                if (mysqli_stmt_prepare($stmt, $query)) {
                    if (mysqli_stmt_execute($stmt)) {
                        echo "o scout tb deu";
                    }
                    mysqli_stmt_close($stmt);
                } else {
                    echo mysqli_stmt_error($stmt);
                }
                mysqli_close($link);
            }
        }
    }
    header("location: ../entrar.php");
}
?>