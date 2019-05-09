<?php
session_start(); //abre a session para todas as páginas, deve ser o primeiro componente de todas as paginas menos a entrar.php
if(isset($_SESSION['log'])){
    /*
    echo $_SESSION['log'];
    echo "<br>";
    echo $_SESSION['name'];
    echo "<br>";
    echo $_SESSION['mail'];
    echo "<br>";
    echo $_SESSION['role'];
    */

    $userName = $_SESSION['name'];
    $userMail = $_SESSION['mail'];
    $userRole = $_SESSION['role'];
    $isLogged = $_SESSION['log'];
}