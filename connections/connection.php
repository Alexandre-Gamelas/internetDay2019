<?php
function new_db_connection()
{
    // Variables for the database connection
    $hostname = 'mysql-hosting.ua.pt';
    $username = "deca-id19-web";
    $password = "QqKu88DfefZ1XX9D";
    $dbname = "deca-id19";

    // Makes the connection
    $local_link = mysqli_connect($hostname, $username, $password, $dbname);

    // If it fails to connect then die and show errors
    if (!$local_link) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Define charset to avoid special chars errors
    mysqli_set_charset($local_link, "utf8");

    // Return the link
    return $local_link;
}