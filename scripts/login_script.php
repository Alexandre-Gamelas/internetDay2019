<?php
session_start();
require_once "../connections/connection.php";

$link = new_db_connection();
$stmt = mysqli_stmt_init($link);
//var_dump($link);
$query = "SELECT id_utilizadores,nome,apelido, pass FROM utilizadores WHERE mail LIKE ? ";
if (mysqli_stmt_prepare($stmt, $query)) {
    mysqli_stmt_bind_param($stmt, 's', $mail);
    $mail = $_POST["mail"];
    $password = $_POST["pass"];
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $id_user, $nome, $apelido, $password_cript);
    if (mysqli_stmt_fetch($stmt)) {
        var_dump($password_cript);
        /*if(password_verify($password, $password_cript)){
            $_SESSION["nome"]=$nome. " ". $apelido;
        $url="../menu.php";}
    }else{
        $url="../index.php";
    }*/}else{
        echo "teste";
    }
    mysqli_stmt_close($stmt);
    mysqli_close($link);

}

//header("location: ".$url);
?>