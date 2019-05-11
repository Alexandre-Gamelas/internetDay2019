<!doctype html>
<html lang="en">

<?php include_once "helpers/header.php";?>

<body>
    <?php include_once "scripts/check_autenticador.php"?>
    <?php include_once "componentes/backgroundC.php"; ?>
    <?php include_once "componentes/menuC.php"; ?>
</body>
<script>
    let scanner = new Instascan.Scanner(
        {
            video: document.getElementById('preview')
        }
    );

    $('#qrcode').click(function () {
        scanner.addListener('scan', function(content) {
            alert('scanou o conteudo: ' + content);
            window.open(content, "_blank");
        });
        Instascan.Camera.getCameras().then(cameras =>
        {
            if(cameras.length > 0){
            scanner.start(cameras[0]);
        } else {
            console.error("Não existe câmera no dispositivo!");
        }
    });
    });

    $('#qrClose').click(function () {
        scanner.stop().then(function () {
            console.log("parou");
        })
    });



</script>
</html>