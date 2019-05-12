$('#qrcode').click(createQrCode());


function createQrCode()
{
    var userInput = "<?php echo $_SESSION['id'] ?>";

    var qrcode = new QRCode("qr", {
        text: userInput,
        width: 256,
        height: 256,
        colorDark: "black",
        colorLight: "white",
        correctLevel : QRCode.CorrectLevel.H
    });
}