$(function () {

    // Custom JS
    $('.slider-wrapper').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fas fa-chevron-left'></i></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><i class='fas fa-chevron-right'></i></button>",
    });
    ymaps.ready(init);
    var myMap;
    var center = [55.65583971319176,37.611263440505965];
    if (window.innerWidth <= 770) {
        center = [55.65474564549715,37.6071435674591];
    } else {
        center = [55.65583971319176,37.611263440505965];
    };

    function init() {
        myMap = new ymaps.Map("map", {
            center: center,
            zoom: 17,
        });
        var myPlacemark = new ymaps.Placemark([55.6558435691071,37.60730449999999], {}, {
            preset: 'islands#redIcon'
        });
        myMap.geoObjects.add(myPlacemark);
        if (window.innerWidth <= 770) {
            myMap.behaviors.disable('drag');
        };
    };
    $('input[name="phone"]').inputmask("+7(999)999-99-99");
    var window_width = $(window).width(),
        window_height = window.innerHeight,
        header_height = $(".default-header").height(),
        header_height_static = $(".site-header.static").outerHeight(),
        fitscreen = window_height - header_height;


    $(".fullscreen").css("height", window_height)
    $(".fitscreen").css("height", fitscreen);
});
