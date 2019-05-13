<?php
require_once "../connections/connection.php";


if(isset($_POST["nome"])&&isset($_POST["apelido"])&&isset($_POST["pass"])&&isset($_POST["mail"])&&isset($_POST["linkdin"])&&isset($_POST["nascimento"])&&isset($_POST["nacionalidade"])) {


    $link = new_db_connection();
    $stmt = mysqli_stmt_init($link);
    $query = "SELECT id_nacionalidades FROM nacionalidades WHERE nacionalidades.nome LIKE 'Portugal' ";

    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_execute($stmt);
        //mysqli_stmt_bind_param($stmt, 's', $nac);
        //$nac = $_POST["nacionalidade"];
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $id);
        while(mysqli_stmt_fetch($stmt)){
        $id_nac = $id;
        var_dump($id_nac);
        mysqli_stmt_close($stmt);}
    }
    mysqli_close($link);
    $link=new_db_connection();
$stmt = mysqli_stmt_init($link);
    $query = "INSERT INTO utilizadores (nome, apelido, pass, mail, linkdin, data_nascimento, ref_nacionalidades) VALUES (?, ?, ?, ?, ?, ?, $id_nac)";

    if(mysqli_stmt_prepare($stmt, $query)){
        mysqli_stmt_bind_param($stmt, 'ssssss', $nome,$apelido,$password_cript,$mail,$linkdin,$nascimento);
        $nome=$_POST["nome"];
        $apelido=$_POST["apelido"];
        $mail=$_POST["mail"];
        $linkdin=$_POST["linkdin"];
        $nascimento=$_POST["nascimento"];
        $password_cript=password_hash($_POST["pass"],PASSWORD_DEFAULT);
        mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
    }
mysqli_close($link);
}
//header ("location: ../entrar.php");
    ?>