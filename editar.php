<!doctype html>
<html lang="en">
<?php include_once "helpers/header.php" ?>
<body>
<?php session_start(); ?>
<?php $pagina = " "; include_once "componentes/navbar.php" ?>
<?php $detail_id = $_GET['id'];
include_once "componentes/editarForm.php";
?>
</body>
</html>
