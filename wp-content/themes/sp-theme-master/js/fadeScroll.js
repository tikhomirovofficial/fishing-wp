$(document).ready(() => {
    $('.fade-scroll').click(function (event) {
        //event.preventDefault(); //опустошим стандартную обработку
        var id  = $(this).attr('href'), //заберем айдишник блока с параметром URL
            top = $(id).offset().top; //определим высоту от начала страницы до якоря
        $('body,html').animate({scrollTop: top}, 1000); //сделаем
    })

});