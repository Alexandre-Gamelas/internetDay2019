<?php

session_start();
include_once "../connections/connection.php";
$link = new_db_connection(); // Create a new DB connection

$stmt = mysqli_stmt_init($link); // create a prepared statement

$query = "INSERT INTO scouts_scans (ref_scouts, ref_estudantes) VALUES ('1', '7')"; // Define the query, RELEMRBAR QUE OS IDS TÊM DE EXISTOR


    if (mysqli_stmt_prepare($stmt, $query)) { // Prepare the statement

        //mysqli_stmt_bind_param($stmt, "ii", $idScout,$id);
        //$id =(int) $_GET['id'];
        //$idScout =(int) $_SESSION['id'];


        mysqli_stmt_execute($stmt); // Execute the prepared statement

        mysqli_stmt_close($stmt);
    } else {
        echo"<p>TESTE23023</p>";
        var_dump($query);
    }
    mysqli_close($link); // Close connection


echo '<p>test3</p>';