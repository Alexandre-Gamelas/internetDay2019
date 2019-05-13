window.onload = function () {
    var texto = document.getElementById('qrTexto').innerHTML;
    jQuery('#qrcode2').qrcode({
        text	: texto
    });
};

$('#qrcode').click(function () {
    $('#janelaQr').removeClass('fadeOutDown');
    $('#janelaQr').removeClass('d-none');
    $('#janelaQr').addClass('fadeInDown');
});

$('#qrClose').click(function () {
    animClose();
    setTimeout(function () {
        scanner.stop()
    }, 450);
});

function animClose() {
    $('#janelaQr').removeClass('fadeInDown');
    $('#janelaQr').addClass('fadeOutDown');
    setTimeout(function () {
        $('#janelaQr').addClass('d-none');
    }, 400)
}
