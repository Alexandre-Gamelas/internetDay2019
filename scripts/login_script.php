<?php
session_start();
require_once "../connections/connection.php";

$link = new_db_connection();
$stmt = mysqli_stmt_init($link);
//var_dump($link);
$query = "SELECT id_utilizadores,nome,apelido, pass, role FROM utilizadores WHERE mail LIKE ? ";
if (mysqli_stmt_prepare($stmt, $query)) {
    mysqli_stmt_bind_param($stmt, 's', $mail);
    $mail = $_POST["mail"];
    $password = $_POST["pass"];
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $id_user, $nome, $apelido, $password, $role);
    if (mysqli_stmt_fetch($stmt)) {
        if($_POST['pass'] == $password){
            $_SESSION['id'] = $id_user;
            $_SESSION['nome'] = $nome;
            $_SESSION['apelido'] = $apelido;
            $_SESSION['role'] = $role;
            header("Location: ../menu.php");

        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($link);

}

//header("location: ".$url);
?>