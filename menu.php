<!doctype html>
<html lang="en">

<?php include_once "helpers/header.php";?>
<body>
    <?php
        session_start();
        include_once "scripts/checkin.php"
    ?>
    <?php include_once "componentes/backgroundC.php"; ?>
    <?php include_once "componentes/menuC.php"; ?>
</body>
<?php
    if($_SESSION['role'] == 'scout'){
        echo "<script src='js/myScanner.js'></script>";
    } else {
        echo "<script src='js/myQrgenerator.js'></script>";
    }

?>
</html>