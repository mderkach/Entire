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
    if (window.innerWidth <= 580) {
        center = [55.65583971319176,37.611263440505965];
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
        if (window.innerWidth <= 580) {
            myMap.behaviors.disable('drag');
        };
    };
    
});
