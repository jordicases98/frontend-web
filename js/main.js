$(function(){
    //alert('Funciona');
    //$('.div ocultar').hide();

    //Lettering
    $('.nombre-sitio').lettering();

    //Menu fijo

    var windowHeight = $(window).height();
    var barraAltura = $('.barra').innerHeight();



    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > windowHeight) {
            $('.barra').addClass('fixed');
            $('body').css({'margin-top' : barraAltura+'px'});
        }
        else {
            $('.barra').removeClass('fixed');
            $('body').css({'margin-top' : '0px'});
        }
        

    });

    // Programa de conferencias
    $('.programa-evento .info-curso:first').show();
    $('.menu-programa a:first').addClass('activo');

    $('.menu-programa a').on('click', function() {
        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        $('.ocultar').hide();
        var enlace = $(this).attr('href');
        $(enlace).fadeIn(1000);
        return false;
    });

    // Animaciones para los números
    $('.resumen-evento li:nth-child(1) p').animateNumber({number:6}, 1200);
    $('.resumen-evento li:nth-child(2) p').animateNumber({number:15}, 1200);
    $('.resumen-evento li:nth-child(3) p').animateNumber({number:9}, 2000);
    $('.resumen-evento li:nth-child(4) p').animateNumber({number:3}, 1500);


    // Cuenta regresiva

    $('.cuenta-regresiva').countdown('2021/12/10 09:00:00', function(event){
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));
    });
});