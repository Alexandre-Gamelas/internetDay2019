<?php
session_start();
$dados = array(
    'paulo' => array(
        'mail' => 'paulo@ua.pt',
        'pass' => 'pass1',
        'role' => 'scout'
    ),

    'alex' => array(
        'mail' => 'alex@ua.pt',
        'pass' => 'pass2',
        'role' => 'estudante',
        'id' => 1
    ),

    'kitty' => array(
        'mail' => 'kitty@ua.pt',
        'pass' => 'pass3',
        'role' => 'estudante',
        'id' => 2
    )
);


/////////////////////////////////////

if (isset($_POST['mail']) && isset($_POST['pass'])) {
    $mailInserido = $_POST['mail'];
    $passInserido = $_POST['pass'];

    $contador = 0;
    foreach ($dados as $nome => $user) {
        if ($mailInserido == $user['mail'] && $passInserido == $user['pass']) {
            $mail = $mailInserido;
            $pass = $passInserido;
            $name = $nome;
            $role = $user['role'];
            $id = $user['id'];
            $isLogged = true;

            $_SESSION['log'] = $isLogged;
            $_SESSION['name'] = $name;
            $_SESSION['mail'] = $mail;
            $_SESSION['role'] = $role;
            $_SESSION['id'] = $id;

            header("Location: ../menu.php");
        }
        $contador++;
        if ($contador == sizeof($dados))
            echo "<h1>ERRO NAS CREDENCIAS</h1>";
    };
}
