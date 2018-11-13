$(function () {

    // Custom JS
    $('.slider-wrapper').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fas fa-chevron-left'></i></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><i class='fas fa-chevron-right'></i></button>",
        adaptiveHeight: true
    });
    ymaps.ready(init);
    var myMap;
    var center = [45.040014817322394,38.986450246063235];
    if (window.innerWidth <= 770) {
        center = [45.03890423653294,38.982308915344255];
    } else {
        center = [45.040014817322394,38.986450246063235];
    };

    function init() {
        myMap = new ymaps.Map("map", {
            center: center,
            zoom: 17,
        });
        var myPlacemark = new ymaps.Placemark([45.0404255745826,38.982266000000024], {}, {
            preset: 'islands#redIcon'
        });
        myMap.geoObjects.add(myPlacemark);
        if (window.innerWidth <= 770) {
            myMap.behaviors.disable('drag');
        };
    };
    $('input[name="phone"]').inputmask("+7(999)999-99-99");
    $('[data-fancybox]').fancybox({
        modal: false,
        buttons: ["close"],
        hideScrollbar: true
    });
    $('a[href="mailto:lex@iniure.ru"]').on('click', function (e) {
        e.preventDefault(); //disable defult redirect from href
        var href = $(this).attr('href'); //get href
        window.open(href); //open new window with url
    });
});
