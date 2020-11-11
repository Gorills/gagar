global.jquery = global.jQuery = global.$ = require('jquery');

$(document).ready(function() {
    var margin = -200; // переменная для контроля докрутки
    $("a").click(function() { // тут пишите условия, для всех ссылок или для конкретных
        $("html, body").animate({
            scrollTop: $($(this).attr("href")).offset().top+margin+ "px" // .top+margin - ставьте минус, если хотите увеличить отступ
        }, {
            duration: 1600, // тут можно контролировать скорость
            easing: "swing"
        });
        return false;
    });
});

jQuery(document).ready(function($) {
    var url=document.location.href;
    $.each($(".header__link"),function(){
        if(this.href==url){
            $(this).addClass('header__link--active');
        }
    });
});

$(window).scroll(function() {
    var height = $(window).scrollTop();
    var width = $(window).width();
    if((height > 250) & (width > 992)) {
        $('header').css('top', '-250px');

    } else{
        $('header').css('top', '0');
    }


    if(height > 500){
        $('header').addClass('header--fixed');

    } else{

        $('header').removeClass('header--fixed');
    }
});


$(".menu-btn").click(function(e) {
    e.preventDefault();
    $(this).toggleClass('menu-btn_active');
    $(".header").toggleClass('header--active');

})


$('.show__popup').click(function (e){
    e.preventDefault();
    $('.popup').show();
    $('.popup__closer').show();

})
$('.popup__closer').click(function (){
    $('.popup').hide();
    $('.popup__closer').hide();
})
