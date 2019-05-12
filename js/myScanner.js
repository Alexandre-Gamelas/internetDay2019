let scanner = new Instascan.Scanner(
    {
        video: document.getElementById('preview'),
        mirror: false
    }
);

$('#qrcode').click(function () {
    scanner.addListener('scan', function(content) {
        alert('scanou o conteudo: ' + content);
    });

    Instascan.Camera.getCameras().then(cameras =>
    {
        if(cameras.length > 0){
            scanner.start(cameras[1]); //1 para telemovel, 0 para computador
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