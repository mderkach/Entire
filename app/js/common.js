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
    var myMap;
    ymaps.ready(function () {
        myMap = new ymaps.Map("map", {
            center: [55.76, 37.64],
            zoom: 10
        });
    });
});
