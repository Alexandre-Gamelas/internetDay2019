<?php
include_once "../connections/connection.php";
if($_GET['role'] == 'estudante'){
    $id = $_SESSION['id'];
    $linkdin = $_POST['linkdin'];
    $curriculo = $_POST['curriculo'];
    $fotografia = $_POST['fotografia'];

    $link = new_db_connection();
    $stmt = mysqli_stmt_init($link);
    $query = "UPDATE utilizadores SET linkdin = '$linkdin', fotografia = '$fotografia' WHERE  utilizadores.id_utilizadores = '$id'";
    if (mysqli_stmt_prepare($stmt, $query)) {
        if (mysqli_stmt_execute($stmt)) {
           header('Location: ../editar.php');
        } else {
            echo "<script>alert('Failed')</script>";
        }
    } else {
        echo "<script>alert('Failed 3')</script>";
    }
} else {
    echo "<script>alert('Failed 2')</script>";
}


?>