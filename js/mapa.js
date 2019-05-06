$(".sideBar img").click(function () {
    //console.log(this.id);
    movePino(this.id);
});

function movePino(id){
    //console.log(id);
    $(".pin").removeClass('fadeIn');
    $(".pin").addClass('fadeOut');

    setTimeout(function () {
        switch(id){
            case 'cci':
                document.querySelector('.pin').style.left = '70vw';
                document.querySelector('.pin').style.top = '71vh';
                document.querySelector('#actualText').innerHTML = "Complexo Ciencias da Comunicação e Imagem";

                $('#mapaSection').animate({
                    'background-position-x': '-10vw'
                }, 300)
                break
            case 'banco':
                document.querySelector('.pin').style.left = '42vw';
                document.querySelector('.pin').style.top = '57vh';
                document.querySelector('#actualText').innerHTML = "Multibanco";

                $('#mapaSection').animate({
                    'background-position-x': '-10vw'
                }, 300)
                break
            case 'cantina':
                document.querySelector('.pin').style.left = '70vw';
                document.querySelector('.pin').style.top = '55vh';
                document.querySelector('#actualText').innerHTML = "Restaurante Universitário";

                $('#mapaSection').animate({
                    'background-position-x': '-35vw'
                }, 300)
                break
            case 'parque':
                document.querySelector('.pin').style.left = '63vw';
                document.querySelector('.pin').style.top = '78vh';
                document.querySelector('#actualText').innerHTML = "Estacionamento";

                $('#mapaSection').animate({
                    'background-position-x': '-35vw'
                }, 300)
                break
            case 'reitoria':
                document.querySelector('.pin').style.left = '62vw';
                document.querySelector('.pin').style.top = '53vh';
                document.querySelector('#actualText').innerHTML = "Reitoria";

                $('#mapaSection').animate({
                    'background-position-x': '-10vw'
                }, 300)
                break
        }

        $(".pin").removeClass('fadeOut');
        $(".pin").addClass('fadeIn');
    }, 400)

}
