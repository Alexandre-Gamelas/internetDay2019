<?php

session_start();
include_once "../connections/connection.php";
$link = new_db_connection(); // Create a new DB connection

$stmt = mysqli_stmt_init($link); // create a prepared statement

$query = "INSERT INTO scouts_scans (ref_scouts, ref_estudantes) VALUES (?, ?)"; // Define the query, RELEMRBAR QUE OS IDS TÊM DE EXISTOR


    if (mysqli_stmt_prepare($stmt, $query)) { // Prepare the statement

        mysqli_stmt_bind_param($stmt, "ii", $idScout,$id);
        $idScout = $_SESSION['id'];
        $id = $_GET['id'];
        //var_dump($id);
        //var_dump($idScout);
       if( mysqli_stmt_execute($stmt)){
           header("Location: ../historico.php");
       } else {
           echo "<script>window.alert('merdou".mysqli_stmt_error($stmt)."')</script>";
       } // Execute the prepared statement

        mysqli_stmt_close($stmt);
    } else {
        echo"<p>TESTE23023</p>";
        var_dump($query);
    }
    mysqli_close($link); // Close connection


