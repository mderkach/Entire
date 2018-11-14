<?php session_start();?>
<?php
    $zagolovok1 = '<h1>Получите лицензию на добычу<br> подземных вод с гарантией через 1 месяц</h1>'; 
    $zagolovok2 = '<h2>Последствия добычи подземных вод без лицензии</h2>';
    $result = '<p><span>Результат:</span><br> Вы получаете лицензию – законное право на добычу подземных вод</p>';

    if(isset($_GET['utm_term'])){ 
        if($_GET['utm_term'] == 'voda'){ 
            $zagolovok1 = '<h1>Получите лицензию на добычу<br> подземных вод с гарантией через 1 месяц</h1>'; 
            $zagolovok2 = '<h2>Последствия добычи подземных вод без лицензии</h2>';
            $result = '<p><span>Результат:</span><br> Вы получаете лицензию – законное право на добычу подземных вод</p>';
        }
        if($_GET['utm_term'] == 'skvazhina'){ 
            $zagolovok1 = '<h1>Получите лицензию на скважину<br> с гарантией через 1 месяц</h1>'; 
            $zagolovok2 = '<h2>Последствия эксплуатции скважины без лицензии</h2>';
            $result = '<p><span>Результат:</span><br> Вы получаете лицензию – законное право на эксплуатацию скважины</p>';
        } 
        if($_GET['utm_term'] == 'artezianskaya_skvazhina'){ 
            $zagolovok1 = '<h1>Получите лицензию на артезианскую скважину с гарантией через 1 месяц</h1>'; 
            $zagolovok2 = '<h2>Последствия эксплуатции артезианской скважины без лицензии</h2>';
            $result = '<p><span>Результат:</span><br> Вы получаете лицензию – законное право на эксплуатацию артезианской скважины</p>';
        } 
        if($_GET['utm_term'] == 'burenie_skvazhina'){ 
            $zagolovok1 = '<h1>Получите лицензию на бурение скважины с гарантией через 1 месяц</h1>'; 
            $zagolovok2 = '<h2>Последствия бурения скважины без лицензии</h2>';
            $result = '<p><span>Результат:</span><br> Вы получаете лицензию – законное право на бурение скважины</p>';
        } 
        if($_GET['utm_term'] == 'razreshenie_skvazhina'){ 
            $zagolovok1 = '<h1>Получите разрешение на скважину<br> с гарантией через 1 месяц</h1>'; 
            $zagolovok2 = '<h2>Последствия эксплуатции скважины без разрешения</h2>';
            $result = '<p><span>Результат:</span><br> Вы получаете лицензию – законное разрешение на эксплуатацию скважины</p>';
        } 
    } 
?>
    <!DOCTYPE html>
    <html lang="ru">



    <head>

        <meta charset="utf-8">
        <!-- <base href="/"> -->

        <title>Помощь в получении лицензии на добычу подземных вод</title>
        <meta name="description" content="">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Template Basic Images Start -->
        <meta property="og:image" content="img/logo-main.jpg">
        <link rel="icon" href="img/favicon/favicon.ico">
        <!-- Template Basic Images End -->

        <!-- Custom Browsers Color Start -->
        <meta name="theme-color" content="#eef2f5">
        <!-- Custom Browsers Color End -->
        <link rel="stylesheet" href="css/main.min.css">
         <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function() {
                    try {
                        w.yaCounter41338439 = new Ya.Metrika({
                            id:41338439,
                            clickmap:true,
                            trackLinks:true,
                            accurateTrackBounce:true,
                            webvisor:true
                        });
                    } catch(e) { }
                });

                var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () { n.parentNode.insertBefore(s, n); };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://mc.yandex.ru/metrika/watch.js";

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else { f(); }
            })(document, window, "yandex_metrika_callbacks");
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/41338439" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
    </head>

    <body>

        <!-- Custom HTML -->
        <header>
            <div class="container d-none d-md-block">
                <div class="row align-items-center">
                    <div class="col-4 p-0">
                        <div class="logo-wrapper d-flex align-items-center">
                            <img src="img/logo-main.png" alt="" class="logo-main">
                            <p class="logo-descr">
                                Юридичная помощь<br> в получении лицензии
                            </p>
                        </div>
                    </div>
                    <div class="col p-0">
                        <div class="header-bullit d-flex align-items-start">
                            <img src="img/check.png" alt="" class="check">
                            <p class="header-bullit-descr">
                                Помогаем получать<br> лицензии с 2007 года
                            </p>
                        </div>
                    </div>
                    <div class="col p-0">
                        <div class="header-bullit d-flex align-items-start">
                            <img src="img/check.png" alt="" class="check">
                            <p class="header-bullit-descr">
                                100% выданных<br> лицензий
                            </p>
                        </div>
                    </div>
                    <div class="col p-0">
                        <div class="contacts text-right">
                            <p onclick="location.href='tel:+78612051024'" class="contacts-nubmer">+7 (861) 205-10-24</p>
                            <p onclick="location.href='tel:+79181889177'" class="contacts-nubmer">+7 (918) 188-91-77</p>
                            <a class="mail-consult" href="mailto:lex@iniure.ru">lex@iniure.ru</a>
                            <a href="javascript:;" data-fancybox data-src="#popup-header">Бесплатная консультация</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container d-md-none">
                <div class="row">
                    <div class="col-9">
                        <div class="logo-wrapper d-flex align-items-center">
                            <img src="img/logo-main.png" alt="" class="logo-main">
                            <p class="logo-descr">
                                Юридичная<br> помощь в получении<br> лицензии
                            </p>
                        </div>
                    </div>
                    <div class="col"></div>
                    <a class="button-call d-flex justify-content-center align-items-center" href="tel:+78612051024">
                        <img src="img/icon-phone.png" alt="" class="phone">
                    </a>
                </div>
            </div>
        </header>
        <main class="main-screen screen">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <? echo $zagolovok1; ?>
                    </div>
                </div>
                <div class="row main-bullit-row">
                    <div class="col-12 col-sm-4">
                        <div class="bullit d-flex justify-content-start align-items-start">
                            <img src="img/icon-license.png" alt="" class="bullit-img">
                            <p class="bullit-descr first-child">Получите лицензию<br> или мы работаем<br> бесплатно</p>
                            <img class="dotted-bottom" src="img/dotted-bottom.png" alt="">
                        </div>
                    </div>
                    <div class="w-100 d-block d-sm-none"></div>
                    <div class="col-12 col-sm-4">
                        <div class="bullit d-flex justify-content-start align-items-start">
                            <img src="img/icon-sheet.png" alt="" class="bullit-img">
                            <p class="bullit-descr">От вас только<br> документы. Все этапы<br> работ без вас</p>
                            <img class="dotted-top" src="img/dotted-top.png" alt="">
                        </div>
                    </div>
                    <div class="w-100 d-block d-sm-none"></div>
                    <div class="col-12 col-sm-4">
                        <div class="bullit d-flex justify-content-start align-items-start">
                            <img src="img/icon-bust.png" alt="" class="bullit-img">
                            <p class="bullit-descr">Эксперты с опытом<br> работы более<br> 10 лет</p>
                        </div>
                    </div>
                </div>
                <div class="buttons-wrapper">
                    <div class="row justify-content-center">
                        <button data-fancybox data-src="#popup-main-green" class="col-lg col-sm-12 col-11 green-btn btn">
	                    БЕСПЛАТНАЯ ПОДРОБНАЯ КОНСУЛЬТАЦИЯ
	                </button>
                        <div class="col d-lg-flex d-none"></div>
                        <button data-fancybox data-src="#popup-main-white" class="col-lg col-sm-12 col-11 white-btn btn">
	                    УЗНАТЬ СТОИМОСТЬ И ВАРИАНТЫ ПОЛУЧЕНИЯ ЛИЦЕНЗИИ
	                </button>
                    </div>
                </div>
            </div>
        </main>
        <section class="second-screen screen">
            <div class="container">
                <div class="row">
                    <? echo $zagolovok2; ?>
                </div>
                <div class="row second-bullet-row">
                    <div class="col-lg-4 col-8 b_wrapper">
                        <div class="bullit bullet_item d-flex flex-column justify-content-center align-items-center">
                            <span class="counter align-self-start">1</span>
                            <img src="img/icon-money.png" alt="">
                            <p>Штрафы</p>
                            <p class="sub">До 1 000 000 рублей в соответствии с ч. 1 ст. 7.3 КоАП РФ</p>
                        </div>
                    </div>
                    <div class="w-100 d-block d-lg-none"></div>
                    <div class="col-lg-4 col-8 b_wrapper">
                        <div class="bullit bullet_item d-flex flex-column justify-content-center align-items-center">
                            <span class="counter align-self-start">2</span>
                            <img src="img/icon-chart.png" alt="">
                            <p>Убытки</p>
                            <p class="sub">Возмещение вреда,<br> причиненного недрам, вызванного<br> самовольным пользованием недрами<br> в соответствии со статьей 51 Закона о недрах</p>
                        </div>
                    </div>
                    <div class="w-100 d-block d-lg-none"></div>
                    <div class="col-lg-4 col-8 b_wrapper">
                        <div class="bullit bullet_item d-flex flex-column justify-content-center align-items-center">
                            <span class="counter align-self-start">3</span>
                            <img src="img/icon-judge.png" alt="">
                            <p>Уголовная ответсвенность </p>
                            <p class="sub">Наступает в соответствии со статьей 171 УК РФ</p>
                        </div>
                    </div>
                </div>
                <div class="row warning-wrapper">
                    <div class="warning col-12 d-flex justify-content-start align-items-center">
                        <div class="icon-wrapper">
                            <img src="img/icon-fingerdown.png" alt="">
                        </div>
                        <p>Из-за тонкостей и нюансов вы можете получать лицензию<br> до 1-го года и <span>потратить на процедуры до 1 000 000 р.</span></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="third-screen screen">
            <div class="container">
                <div class="row">
                    <h2>Посмотрите результаты по каждому делу<br> и отзывы о нашей работе</h2>
                </div>
                <div class="slider-wrapper row">
                    <div class="col-12 slider-item">
                        <h3>Указанная документация подготовлена в установленный срок без изменения оговоренной стоимости работ</h3>
                        <div class="d-flex flex-column flex-sm-row">
                            <div class="left-side col-sm-5 col-12">
                                <p><span>Задача:</span> Получить лицензию на право д¬обычи подземных вод для питьевого водоснабжения населенного пункта из имеющейся скважины.</p>
                                <div class="hl line"></div>
                                <p><span>Тонкости/подводные камни:</span> На имеющуюся скважину была действующая лицензия у другого предприятия. Необходимо было одновременно исключить скважину из действующей лицензии и получить лицензию на заказчика так, чтобы не возникало периода безлицензионной добычи.</p>
                                <div class="hl line"></div>
                                <p><span>Срок получения:</span> 30 дней</p>
                                <button data-fancybox data-src="#review_ladoga" class="green-btn btn">Смотреть отзыв</button>
                            </div>
                            <div class="col-sm-1 d-none d-sm-flex">
                                <div class="vl line"></div>
                            </div>
                            <div class="right-side col-sm-6 col-12">
                                <div class="slider-descr">
                                    <p>
                                        Администрация Ладожского сельского поселения выражает благодарность коллективу компании «IN IURE» за высококвалифицированную и оперативную работу по оформлению лицензии на право осуществления добычи подземных вод и подготовку проекта организации зон санитарной охраны источника водоснабжения. Указанная документация подготовлена в установленный срок без изменения оговоренной стоимости работ. Очень приятно сотрудничать с профессионалами своего дела.
                                    </p>
                                </div>
                                <div class="slider-reviewer d-flex align-items-center">
                                    <img src="img/icon-user.png" alt="" class="reviewer-icon">
                                    <div class="reviewer-info">
                                        <p class="reviewer-name">Администрация Ладожского сельского поселения Усть-Лабинского района Краснодарского края.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 slider-item">
                        <h3>Указанная услуга была оказана в срок и на высоком профессиональном уровне.</h3>
                        <div class="d-flex flex-column flex-sm-row">
                            <div class="left-side col-sm-5 col-12">
                                <p><span>Задача:</span> Получить лицензию на право добычи подземных вод для технологического обеспечения водой объекта промышленности</p>
                                <div class="hl line"></div>
                                <p><span>Тонкости/подводные камни:</span> Объем водопотребления превышал 100 м<sup>3</sup>, что влекло для предприятия дополнительные обязанности и расходы по утверждению запасов подземных вод. Необходимо было подтвердить обеспеченность запасами на лицензируемом участке</p>
                                <div class="hl line"></div>
                                <p><span>Срок получения:</span> 30 дней</p>
                                <button data-fancybox data-src="#review_kirpich" class="green-btn btn">Смотреть отзыв</button>
                            </div>
                            <div class="col-sm-1 d-none d-sm-flex">
                                <div class="vl line"></div>
                            </div>
                            <div class="right-side col-sm-6 col-12">
                                <div class="slider-descr">
                                    <p>
                                        Открытое акционерное общество «Славянский кирпич» выражает благодарность компании «IN IURE» за качественно оказанную услугу по сопровождению процедуры переоформления лицензии на право добычи подземных вод в целях водоснабжения производственных объектов нашего предприятия. Указанная услуга была оказана в срок и на высоком профессиональном уровне. Надеемся на дальнейшее сотрудничество.
                                    </p>
                                </div>
                                <div class="slider-reviewer d-flex align-items-center">
                                    <img src="img/icon-user.png" alt="" class="reviewer-icon">
                                    <div class="reviewer-info">
                                        <p class="reviewer-name">ОАО «Славянский кирпич»</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 slider-item">
                        <h3>Процедура оформления и выдачи лицензии была проведена в заявленные сроки при минимальном участии наших сотрудников</h3>
                        <div class="d-flex flex-column flex-sm-row">
                            <div class="left-side col-sm-5 col-12">
                                <p><span>Задача:</span> Получить лицензию на право добычи подземных вод для хозяйственно-бытового водоснабжения винодельческого хозяйства из имеющейся скважины</p>
                                <div class="hl line"></div>
                                <p><span>Тонкости/подводные камни:</span> На скважину отсутствовали документы. До получения лицензии потребовалось провести обследование скважины, восстановить паспорт водозаборного сооружения, зарегистрировать права заказчика на водозаборное сооружение</p>
                                <div class="hl line"></div>
                                <p><span>Срок получения:</span> 30 дней</p>
                                <button data-fancybox data-src="#review_ermitaj" class="green-btn btn">Смотреть отзыв</button>
                            </div>
                            <div class="col-sm-1 d-none d-sm-flex">
                                <div class="vl line"></div>
                            </div>
                            <div class="right-side col-sm-6 col-12">
                                <div class="slider-descr">
                                    <p>
                                        Наша организация воспользовалась услугами компании «IN IURE» в вопросе оформления прав на добычу подземных вод в целях водоснабжения производственного комплекса по переработке винограда.<br> В ходе первого телефонного разговора с сотрудником данной компании нами была получена полная информация относительно процедуры оформления лицензии на недропользование, требований к составу заявочных материалов и вероятных последствий незаконной добычи воды. Следует отметить, что консультация оказывалась на бесплатной основе.<br> После достижения договоренностей относительно дальнейшего сотрудничества специалисты компании «IN IURE» в кратчайшие сроки выехали на объект намечаемых работ.<br> Сама процедура оформления и выдачи лицензии была проведена в заявленные сроки при минимальном участии сотрудников нашей организации в данном процессе. Выражаем благодарность коллективу компании «IN IURE» за качественно проделанную работу и надеемся на дальнейшее сотрудничество.

                                    </p>
                                </div>
                                <div class="slider-reviewer d-flex align-items-center">
                                    <img src="img/icon-user.png" alt="" class="reviewer-icon">
                                    <div class="reviewer-info">
                                        <p class="reviewer-name">ООО «Эрмитаж Вайнери».</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 slider-item">
                        <h3>Кроме «IN IURE» в Краснодарском крае этим никто не занимается</h3>
                        <div class="d-flex flex-column flex-sm-row">
                            <div class="left-side col-sm-5 col-12">
                                <p><span>Задача:</span> Обеспечить получение лицензии на право пользования недрами для добычи известняка</p>
                                <div class="hl line"></div>
                                <p><span>Тонкости/подводные камни:</span> Участок недр не был включен в перечень участков недр местного значения и в план проведения аукционов, что является препятствием для обращения за получением лицензии. Потребовалось обеспечить его включение в перечень и план, собрав необходимый пакет геологической информации и обосновав необходимость его включения</p>
                                <div class="hl line"></div>
                                <p><span>Срок получения:</span> 30 дней</p>
                                <button data-fancybox data-src="#review_mergel" class="green-btn btn">Смотреть отзыв</button>
                            </div>
                            <div class="col-sm-1 d-none d-sm-flex">
                                <div class="vl line"></div>
                            </div>
                            <div class="right-side col-sm-6 col-12">
                                <div class="slider-descr">
                                    <p>
                                        Наша организация выражает благодарность компании «IN IURE» за помощь, оказанную в вопросе подготовки заявочных материалов на участие в аукционе на предоставление права пользования недрами.<br> Так как для нас вопрос получения лицензии на разработку карьера стоял достаточно остро, очень важно было найти специалистов, готовых и самое главное способных сопроводить процедуру нашего участия в аукционе.<br> Такими людьми оказались специалисты компании «IN IURE».<br> Помимо высокой квалификации и профессионализма её сотрудников выбор данной организации объясняется ещё и тем, что на рынке услуг Краснодарского края подобного рода услуги кем-либо ещё не оказываются.<br> Среди основных плюсов сотрудничества с компанией «IN IURE» можно отметить следующее: высокий профессионализм сотрудников компании; отличное знание законодательной базы в сфере недропользования; готовность браться за решение самых сложных вопросов.

                                    </p>
                                </div>
                                <div class="slider-reviewer d-flex align-items-center">
                                    <img src="img/icon-user.png" alt="" class="reviewer-icon">
                                    <div class="reviewer-info">
                                        <p class="reviewer-name">ООО «Мергель»</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="fourth-screen screen">
            <div class="container">
                <div class="row consulting">
                    <div class="consulting-item col-12 d-flex flex-column flex-lg-row justify-content-between align-items-lg-end align-items-center">
                        <p>Ответим на ваши вопросы,<br> расскажем о подводных камнях<br> и тонкостях, опишем этапы<br> получения лицензии</p>
                        <button data-fancybox data-src="#popup-consult-green" class="green-btn btn">БЕСПЛАТНАЯ ПОДРОБНАЯ КОНСУЛЬТАЦИЯ</button>
                    </div>
                    <div class="hl line"></div>
                    <div class="consulting-item col-12 d-flex flex-column flex-lg-row justify-content-between align-items-lg-baseline align-items-center">
                        <p class="align-self-start">Узнайте стоимость и варианты<br> получения лицензии в вашей<br> ситуации
                        </p>
                        <button data-fancybox data-src="#popup-consult-white" class="white-btn btn">УЗНАТЬ СТОИМОСТЬ И ВАРИАНТЫ ПОЛУЧЕНИЯ ЛИЦЕНЗИИ</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="fifth-screen screen">
            <div class="container">
                <div class="row">
                    <div class="blank-descr column col-12 col-md-7">
                        <h2><span>Законно получите лицензию</span><br> с нашей помощью или мы<br> работаем бесплатно</h2>
                        <div class="hl line"></div>
                        <p>Работаем на результат, а не просто<br> готовим документы</p>
                    </div>
                    <button class="green-btn col-md-5 col-10 offset-1 offset-md-0 btn align-self-center" data-fancybox data-src="#blank-popup">СМОТРЕТЬ ДОГОВОР</button>
                </div>
            </div>
        </section>
        <?php /*<section class="sixth-screen screen">
        <div class="container">
            <div class="column">
                <h3>Познакомьтесь с экспертами</h3>
                <p>Бесплатно проконсультируем по каждому вопросу</p>
            </div>
            <div class="row experts justify-content-between">
                <div class="card expert b_wrapper col-lg-4 col-sm-6 col-10">
                    <img class="avatar" src="img/experts/nagatskaya.jpg" alt="">
                    <div class="card-body">
                        <h4 class="expert-name">Нагацкая Нурие</h4>
                        <p class="card-text expert-position">Геолог/гидрогеолог</p>
                        <p class="expert-exp"><img src="img/icon-star.png" alt="">Опыт работы - 7 лет</p>
                    </div>
                </div>
                <div class="w-100 d-block d-lg-none"></div>
                <div class="card expert b_wrapper col-lg-4 col-sm-6 col-10">
                    <img class="avatar" src="img/experts/gigalova.jpg" alt="">
                    <div class="card-body">
                        <h4 class="expert-name">Жигалова Елена</h4>
                        <p class="card-text expert-position">Инденер-эколог</p>
                        <p class="expert-exp"><img src="img/icon-star.png" alt="">Опыт работы - 8 лет</p>
                    </div>
                </div>
                <div class="w-100 d-block d-lg-none"></div>
                <div class="card expert b_wrapper col-lg-4 col-sm-6 col-10">
                    <img class="avatar" src="img/experts/kornienko.jpg" alt="">
                    <div class="card-body">
                        <h4 class="expert-name">Корниенко Алексей</h4>
                        <p class="card-text expert-position">Юрист в сфере природопользования</p>
                        <p class="expert-exp"><img src="img/icon-star.png" alt="">Опыт работы - 10 лет</p>
                    </div>
                </div>
            </div>
        </div>
    </section> */ ?>
        <section class="seventh-screen screen">
            <div class="container">
                <div class="row">
                    <h2 class="steps-header">Посмотрите шаги нашего сотрудничества</h2>
                </div>
                <div class="column steps-wrapper">
                    <div class="steps-item d-flex align-items-center justify-content-start">
                        <div class="step-img d-flex align-items-center">
                            <span class="step-counter">1</span>
                            <img src="img/icon-mail.png" alt="">
                        </div>
                        <div class="step-descr">
                            <p><span style="text-decoration: underline; cursor: pointer" data-fancybox data-src="#zayavka">Оставьте заявку на сайте</span><br> или позвоните нам +7 (861) 205-10-24</p>
                        </div>
                    </div>
                    <div class="steps-item d-flex align-items-center justify-content-start">
                        <div class="step-img d-flex align-items-center">
                            <span class="step-counter">2</span>
                            <img src="img/icon-car.png" alt="">
                        </div>
                        <div class="step-descr">
                            <p><span>Бесплатно выезжаем к вам в день обращения,</span><br> осматриваем участок, скважину, снимаем координаты,<br> помогаем с выбором места размещения скважины
                            </p>
                        </div>
                    </div>
                    <div class="steps-item d-flex align-items-center justify-content-start">
                        <div class="step-img d-flex align-items-center">
                            <span class="step-counter">3</span>
                            <img src="img/icon-user-ask.png" alt="">
                        </div>
                        <div class="step-descr">
                            <p>Знакомимся с документами. <span>Бесплатно консультируем<br> 
                        по вашей ситуации,</span> прорабатываем варианты решений</p>
                        </div>
                    </div>
                    <div class="steps-item d-flex align-items-center justify-content-start">
                        <div class="step-img d-flex align-items-center">
                            <span class="step-counter">4</span>
                            <img src="img/icon-sheet-solo.png" alt="">
                        </div>
                        <div class="step-descr">
                            <p>Готовим заявочные документы, представляем <br> вас в лицензирующем органе.<span> Получаем положительное решение.</span></p>
                        </div>
                    </div>
                    <div class="steps-item d-flex align-items-center justify-content-start">
                        <div class="step-img result d-flex align-items-center">
                            <span class="step-counter">5</span>
                            <img src="img/icon-sheet-result.png" alt="">
                        </div>
                        <div class="step-descr">
                            <? echo $result; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="eighth-screen screen">
            <div id="map" class="map_wrapper">
                <div class="container">
                    <div class="row info-wrapper">
                        <div class="col-lg-5 col-12 offset-lg-6 offset-0 map-info">
                            <div class="addres">
                                <p class="bold-heading">Адрес:</p>
                                <p class="info-descr">350000, Краснодарский край, город Краснодар, улица Седина, дом 191, офис 3</p>
                            </div>
                            <div class="work-info d-flex justify-content-between align-items-center">
                                <div class="call">
                                    <p class="bold-heading">Позвоните нам:</p>
                                    <p class="info-descr">+7 (861) 205-10-24</p>
                                    <p class="info-descr">+7 (918) 188-91-77</p>
                                </div>
                                <div class="working-time">
                                    <p class="bold-heading">Время работы:</p>
                                    <p class="info-descr">Ежедневно: <br class="d-block"> 9:00 - 21:00</p>
                                </div>
                            </div>
                            <div class="column map-btn">
                                <button data-fancybox data-src="#popup-map-green" class="green-btn btn">БЕСПЛАТНАЯ ПОДРОБНАЯ КОНСУЛЬТАЦИЯ</button>
                                <button data-fancybox data-src="#popup-map-white" class="white-btn btn">ОСТАЛИСЬ ВОПРОСЫ?</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container d-none d-md-block">
                <div class="row align-items-center">
                    <div class="col-4 p-0">
                        <div class="logo-wrapper d-flex align-items-center">
                            <img src="img/logo-main.png" alt="" class="logo-main">
                            <p class="logo-descr">
                                Юридичная помощь<br> в получении лицензии
                            </p>
                        </div>
                    </div>
                    <div class="col p-0">
                        <div class="header-bullit d-flex align-items-start">
                            <img src="img/check.png" alt="" class="check">
                            <p class="header-bullit-descr">
                                Помогаем получать<br> лицензии с 2007 года
                            </p>
                        </div>
                    </div>
                    <div class="col p-0">
                        <div class="header-bullit d-flex align-items-start">
                            <img src="img/check.png" alt="" class="check">
                            <p class="header-bullit-descr">
                                100% выданных<br> лицензий
                            </p>
                        </div>
                    </div>
                    <div class="contacts text-right">
                        <p onclick="location.href='tel:+78612051024'" class="contacts-nubmer">+7 (861) 205-10-24</p>
                        <p onclick="location.href='tel:+79181889177'" class="contacts-nubmer">+7 (918) 188-91-77</p>
                        <a href="javascript:;" data-fancybox="" data-src="#popup-header">Бесплатная консультация</a>
                    </div>
                </div>
            </div>
            <div class="container d-md-none">
                <div class="row">
                    <div class="col-9">
                        <div class="logo-wrapper d-flex align-items-center">
                            <img src="img/logo-main.png" alt="" class="logo-main">
                            <p class="logo-descr">
                                Юридичная<br> помощь в получении<br> лицензии
                            </p>
                        </div>
                    </div>
                    <div class="col"></div>
                    <a class="button-call d-flex justify-content-center align-items-center" href="tel:+78612051024">
                        <img src="img/icon-phone.png" alt="" class="phone">
                    </a>
                </div>
            </div>
        </footer>
        <!--  POPUP  -->
        <div class="popup" id="popup-header">
            <h2>Получите бесплатную консультацию</h2>
            <p>Заполните поля ниже сейчас<br> и мы свяжемся с вами в течение 5 минут</p>
            <form action="handlers/data.php" method="post" class="popup-form d-flex flex-column justify-content-center align-items-center">
                <input name="position" value="Бесплатная консультация(шапка)" type="hidden">
                <div class="popup-form-row form-group form-row">
                    <input type="text" class="form-input col-12" name="name" placeholder="Введите ваше имя" onfocus="this.placeholder=''" onblur="this.placeholder='Введите ваше имя'" required>
                </div>
                <div class="popup-form-row form-group form-row">
                    <input type="tel" class="form-input col-12" name="phone" placeholder="Введите телефон" required>
                </div>
                <input type="submit" class="green-btn btn" value="ПОЛУЧИТЬ БЕСПЛАТНУЮ КОНСУЛЬТАЦИЮ">
            </form>
        </div>
        <div class="popup" id="popup-footer">
            <h2>Получите бесплатную консультацию</h2>
            <p>Заполните поля ниже сейчас<br> и мы свяжемся с вами в течение 5 минут</p>
            <form action="handlers/data.php" method="post" class="popup-form d-flex flex-column justify-content-center align-items-center">
                <input name="position" value="Бесплатная консультация(подвал)" type="hidden">
                <div class="popup-form-row form-group form-row">
                    <input type="text" class="form-input col-12" name="name" placeholder="Введите ваше имя" onfocus="this.placeholder=''" onblur="this.placeholder='Введите ваше имя'" required>
                </div>
                <div class="popup-form-row form-group form-row">
                    <input type="tel" class="form-input col-12" name="phone" placeholder="Введите телефон" required>
                </div>
                <input type="submit" class="green-btn btn" value="ПОЛУЧИТЬ БЕСПЛАТНУЮ КОНСУЛЬТАЦИЮ">
            </form>
        </div>
        <div class="popup" id="popup-main-green">
            <h2>Получите бесплатную консультацию</h2>
            <p>Заполните поля ниже сейчас<br> и мы свяжемся с вами в течение 5 минут</p>
            <form action="handlers/data.php" method="post" class="popup-form d-flex flex-column justify-content-center align-items-center">
                <input name="position" value="Бесплатная подробнвя консультация(Главный экран)" type="hidden">
                <div class="popup-form-row form-group form-row">
                    <input type="text" class="form-input col-12" name="name" placeholder="Введите ваше имя" onfocus="this.placeholder=''" onblur="this.placeholder='Введите ваше имя'" required>
                </div>
                <div class="popup-form-row form-group form-row">
                    <input type="tel" class="form-input col-12" name="phone" placeholder="Введите телефон" required>
                </div>
                <input type="submit" class="green-btn btn" value="ПОЛУЧИТЬ БЕСПЛАТНУЮ КОНСУЛЬТАЦИЮ">
            </form>
        </div>
        <div class="popup" id="popup-main-white">
            <h2>Узнайте стоимость и варинты получения лицензии</h2>
            <p>Заполните поля ниже сейчас<br> и мы свяжемся с вами в течение 5 минут</p>
            <form action="handlers/data.php" method="post" class="popup-form d-flex flex-column justify-content-center align-items-center">
                <input name="position" value="Узнать стоимость и варинты получения лицензии(Главный экран)" type="hidden">
                <div class="popup-form-row form-group form-row">
                    <input type="text" class="form-input col-12" name="name" placeholder="Введите ваше имя" onfocus="this.placeholder=''" onblur="this.placeholder='Введите ваше имя'" required>
                </div>
                <div class="popup-form-row form-group form-row">
                    <input type="tel" class="form-input col-12" name="phone" placeholder="Введите телефон" required>
                </div>
                <input type="submit" class="green-btn btn" value="УЗНАТЬ СТОИМОСТЬ И ВАРИАНТЫ">
            </form>
        </div>
        <div class="popup" id="popup-consult-green">
            <h2>Получите бесплатную консультацию</h2>
            <p>Заполните поля ниже сейчас<br> и мы свяжемся с вами в течение 5 минут</p>
            <form action="handlers/data.php" method="post" class="popup-form d-flex flex-column justify-content-center align-items-center">
                <input name="position" value="Бесплатная подробнвя консультация(4й экран)" type="hidden">
                <div class="popup-form-row form-group form-row">
                    <input type="text" class="form-input col-12" name="name" placeholder="Введите ваше имя" onfocus="this.placeholder=''" onblur="this.placeholder='Введите ваше имя'" required>
                </div>
                <div class="popup-form-row form-group form-row">
                    <input type="tel" class="form-input col-12" name="phone" placeholder="Введите телефон" required>
                </div>
                <input type="submit" class="green-btn btn" value="ПОЛУЧИТЬ БЕСПЛАТНУЮ КОНСУЛЬТАЦИЮ">
            </form>
        </div>
        <div class="popup" id="popup-consult-white">
            <h2>Узнайте стоимость и варинты получения лицензии</h2>
            <p>Заполните поля ниже сейчас<br> и мы свяжемся с вами в течение 5 минут</p>
            <form action="handlers/data.php" method="post" class="popup-form d-flex flex-column justify-content-center align-items-center">
                <input name="position" value="Узнать стоимость и варинты получения лицензии(4й экран)" type="hidden">
                <div class="popup-form-row form-group form-row">
                    <input type="text" class="form-input col-12" name="name" placeholder="Введите ваше имя" onfocus="this.placeholder=''" onblur="this.placeholder='Введите ваше имя'" required>
                </div>
                <div class="popup-form-row form-group form-row">
                    <input type="tel" class="form-input col-12" name="phone" placeholder="Введите телефон" required>
                </div>
                <input type="submit" class="green-btn btn" value="УЗНАТЬ СТОИМОСТЬ И ВАРИАНТЫ">
            </form>
        </div>
        <div class="popup" id="popup-map-green">
            <h2>Получите бесплатную консультацию</h2>
            <p>Заполните поля ниже сейчас<br> и мы свяжемся с вами в течение 5 минут</p>
            <form action="handlers/data.php" method="post" class="popup-form d-flex flex-column justify-content-center align-items-center">
                <input name="position" value="Бесплатная подробнвя консультация(карта)" type="hidden">
                <div class="popup-form-row form-group form-row">
                    <input type="text" class="form-input col-12" name="name" placeholder="Введите ваше имя" onfocus="this.placeholder=''" onblur="this.placeholder='Введите ваше имя'" required>
                </div>
                <div class="popup-form-row form-group form-row">
                    <input type="tel" class="form-input col-12" name="phone" placeholder="Введите телефон" required>
                </div>
                <input type="submit" class="green-btn btn" value="ПОЛУЧИТЬ БЕСПЛАТНУЮ КОНСУЛЬТАЦИЮ">
            </form>
        </div>
        <div class="popup" id="popup-map-white">
            <h2>Остались вопросы?</h2>
            <p>Заполните поля ниже сейчас<br> и мы свяжемся с вами в течение 5 минут</p>
            <form action="handlers/data.php" method="post" class="popup-form d-flex flex-column justify-content-center align-items-center">
                <input name="position" value="Остались вопросы(карта)" type="hidden">
                <div class="popup-form-row form-group form-row">
                    <input type="text" class="form-input col-12" name="name" placeholder="Введите ваше имя" onfocus="this.placeholder=''" onblur="this.placeholder='Введите ваше имя'" required>
                </div>
                <div class="popup-form-row form-group form-row">
                    <input type="tel" class="form-input col-12" name="phone" placeholder="Введите телефон" required>
                </div>
                <input type="submit" class="green-btn btn">
            </form>
        </div>
        <div class="popup" id="license">
            <p>Тут будет картинка</p>
        </div>
        <div style="display: none;" id="blank-popup">
            <img class="screenshot" src="img/screen.jpg" alt="">
        </div>
        <div class="popup" id="zayavka">
            <h2>Оставьте заявку</h2>
            <p>Заполните поля ниже сейчас<br> и мы свяжемся с вами в течение 5 минут</p>
            <form action="handlers/data.php" method="post" class="popup-form d-flex flex-column justify-content-center align-items-center">
                <input name="position" value="Бесплатная консультация(шапка)" type="hidden">
                <div class="popup-form-row form-group form-row">
                    <input type="text" class="form-input col-12" name="name" placeholder="Введите ваше имя" onfocus="this.placeholder=''" onblur="this.placeholder='Введите ваше имя'" required>
                </div>
                <div class="popup-form-row form-group form-row">
                    <input type="tel" class="form-input col-12" name="phone" placeholder="Введите телефон" required>
                </div>
                <input type="submit" class="green-btn btn" value="Оставить заявку">
            </form>
        </div>
        <div class="popup review_popup" id="review_ladoga">
            <img src="img/reviews/ladoga.jpg" alt="">
        </div>
        <div class="popup review_popup" id="review_kirpich">
            <img src="img/reviews/kirpich.jpg" alt="">
        </div>
        <div class="popup review_popup" id="review_ermitaj">
            <img src="img/reviews/ermitaj.jpg" alt="">
        </div>
        <div class="popup review_popup" id="review_mergel">
            <img src="img/reviews/mergel'.jpg" alt="">
        </div>
        <!--  POPUP  -->
        <script src="js/scripts.min.js"></script>
        <script src="https://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <div class="mango-callback" data-settings='{"type":"", "id": "MTAwMDQ4Mzc=","autoDial" : "0", "lang" : "ru-ru", "host":"widgets.mango-office.ru/", "errorMessage": "В данный момент наблюдаются технические проблемы и совершение звонка невозможно"}'></div>
        <script>!function(t){function e(){i=document.querySelectorAll(".button-widget-open");for(var e=0;e<i.length;e++)"true"!=i[e].getAttribute("init")&&(options=JSON.parse(i[e].closest('.'+t).getAttribute("data-settings")),i[e].setAttribute("onclick","alert('"+options.errorMessage+"(0000)'); return false;"))}function o(t,e,o,n,i,r){var s=document.createElement(t);for(var a in e)s.setAttribute(a,e[a]);s.readyState?s.onreadystatechange=o:(s.onload=n,s.onerror=i),r(s)}function n(){for(var t=0;t<i.length;t++){var e=i[t];if("true"!=e.getAttribute("init")){options=JSON.parse(e.getAttribute("data-settings"));var o=new MangoWidget({host:window.location.protocol+'//'+options.host,id:options.id,elem:e,message:options.errorMessage});o.initWidget(),e.setAttribute("init","true"),i[t].setAttribute("onclick","")}}}host=window.location.protocol+"//widgets.mango-office.ru/";var i=document.getElementsByClassName(t);o("link",{rel:"stylesheet",type:"text/css",href:host+"css/widget-button.css"},function(){},function(){},e,function(t){document.documentElement.insertBefore(t,document.documentElement.firstChild)}),o("script",{type:"text/javascript",src:host+"widgets/mango-callback.js"},function(){("complete"==this.readyState||"loaded"==this.readyState)&&n()},n,e,function(t){document.documentElement.appendChild(t)})}("mango-callback");</script>
    </body>

    </html>
