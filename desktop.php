<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>FREED</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/webflow.css" rel="stylesheet" type="text/css">
    <link href="css/freed-0e0411.webflow.css" rel="stylesheet" type="text/css">
    <link href="css/jquery.countdown.css" rel="stylesheet" type="text/css"/>
    <link href="fonts/raleway/stylesheet.css" rel="stylesheet" type="text/css">
    <link href="fonts/lato/stylesheet.css" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({
            google: {
                families: ["Roboto:300,regular,500"]
            }
        });</script>

    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('.scrollup').fadeIn();
                } else {
                    $('.scrollup').fadeOut();
                }
            });

            $('.scrollup').click(function () {
                $("html, body").animate({scrollTop: 0}, 600);
                return false;
            });

        });
    </script>
</head>
<body>

<!--Subscribe widget-->
<div class="subscribe-sector" data-status="hidden" data-sd="no" data-idx="0">
    <div class="close">
        <img src="images/freed-close.svg"/>
    </div>

    <div class="mailIcon">
        <img src="images/freed-mail-big-icon.svg"/>
    </div>

    <div class="title">ПОДПИШИСЬ СЕЙЧАС!</div>
    <div class="text">
        Не пропусти обновления. Получай уведомления о новостях проекта.
    </div>
    <div class="ty">
        <div class="titleTy">Спасибо!</div>
    </div>
    <div class="fieldGroup">
        <input type="email" name="email" placeholder="example@gmail.com">
        <input type="text" name="lang" value="ru" hidden>
        <button type="submit" name="subscribe" data-idx="0">
            <img src="images/freed-arrow.svg"/>
        </button>
    </div>
</div>
<div class="subscribe-sector top" data-status="hidden" data-sd="no" data-idx="1">
    <div class="close">
        <span class="close-text">Спрятать это сообщение</span><img src="images/freed-close.svg"/>
    </div>

    <div class="mailIcon">
        <img src="images/freed-mail-big-icon.svg"/>
    </div>

    <div class="ty">
        <div class="titleTy">Спасибо!</div>
    </div>
    <div class="title">ПОДПИШИСЬ СЕЙЧАС!</div>
    <div class="text">
        Не пропусти обновления. Получай уведомления о новосятх проекта.
    </div>
    <div class="fieldGroup">
        <input type="email" name="email" placeholder="example@gmail.com">
        <input type="text" name="lang" value="ru" hidden>
        <button type="submit" name="subscribe" data-idx="1">
            <img src="images/freed-arrow.svg"/>
        </button>
    </div>
</div>
<!--End subscribe widget-->

<div class="hero section std-bg">

    <div class="w-container">
        <div class="section-title-group">

            <div class="logo-holder">
                <img id="logo" class="svg" src="images/logo.svg"/>
            </div>

            <h3 class="centered section-heading">
                Открытая платформа для монетизации неплатящих игроков
            </h3>

            <div class="center section-subheading">
                Зарабатывайте $2 с каждого игрока в месяц
            </div>

        </div>

    </div>

    <div class="img-gold-holder w-row pull-center">
        <img id="gold-img" src="images/gold.png"/>
    </div>

</div>

<div class="steps section">

    <div class="w-container">
        <div class="w-row">
            <div class="w-col w-col-10 rounded-shadowed-box">
                <div class="header">
                    Для разработчиков и издателей игр
                </div>
                <div class="header">
                    &lt; &sol; &gt;
                </div>
                <div class="body">
                    Игровые компьютеры выполняют полезную работу вне сеансов игр,
                    а FREED выплачивает<br/>разработчикам вознаграждение за выполненную работу.
                    Разработчики награждают геймеров<br/>внутрииговыми ценностями за участие
                    в вычислениях.
                </div>
            </div>
        </div>
    </div>

    <div class="steps-holder">

        <h2>
            Три шага до простой монетизации:
        </h2>

        <div class="w-row step step-1">

            <div class="w-container">
                <div class="name">
                    Шаг №1
                </div>
                <div class="text b no-1">
                    Компьютер геймера включается в глобальную систему<br/>распределенных вычислений
                </div>
                <div class="text no-2">
                    Программный агент FREED встраивается разработчиком<br/>
                    в игру через специальный SDK, который доступен на сайте
                    <br/>платформы
                </div>
                <div class="text no-3">
                    Агент можно встроить как в существующие игры, так и в<br/>разрабатываемые проекты
                </div>
                <div class="text no-4">
                    При очередном обновлении игры в игре<br/>
                    появляется специальный раздел, в котором можно<br/>
                    управлять вычислениями и настраивать агент<br/>
                    <a href="#">Посмотреть пример...</a>
                </div>
            </div>

        </div>
        <div class="w-row step step-2">

            <div class="w-container">
                <div class="name">
                    Шаг №2
                </div>
                <div class="text b no-1">
                    Программный агент FREED выполняет полезную<br/>работу вне сеансов игр
                </div>
                <div class="text no-2">
                    Разработчик интегрирует агента таким образом, чтобы игрок<br/>
                    сразу видел выгоду, которую он получит за использование<br/>
                    ресурсов своего компьютера
                </div>
                <div class="text no-3">
                    Решение о предоставлении ресурсов принимает игрок - <br/>
                    он сам включает и настраивает работу агента
                </div>
                <div class="text no-4">
                    FREED использует компьютеры игроков не ради майнинга.<br/>
                    FREED - это платформа высокопроизводительных вычислений<br/>компании TVX Games
                </div>
            </div>

        </div>

        <div class="w-row step step-3">

            <div class="w-container">
                <div class="name">
                    Шаг №3
                </div>
                <div class="text b no-1">
                    FREED выплачивает вознаграждение участникам<br/>системы с помощью токена freedcoin
                </div>
                <div class="text no-2">
                    FREED выплачивает вознаграждение разработчикам в<br/>
                    зависимости от выполнения полезной нагузки внутри<br/>
                    системы. Все расчеты происходят с помощью внутренней<br/>
                    валюты системы - токена freedcoin
                </div>
                <div class="text no-3">
                    Владельцы игры могут делиться токенами с игроками, а<br/>
                    могут награждать их внутриигровыми ценностями в обмен<br/>
                    на предоставляемые вычислительные ресуры
                </div>
                <div class="text no-4">
                    Владельцы игры устанавливают выгодный курс приема токенов,<br/>
                    чтобы игроку доставалось больше ценностей и<br/>
                    игроки были мотивированы участвовать в системе
                </div>
            </div>

        </div>
    </div>

</div>

<div class="register section std-bg">

    <div class="w-container">
        <div class="w-row">
            <div class="w-col w-col-10 rounded-shadowed-box">
                <div class="header">
                    Сколько заработает разработчик или издатель
                </div>
                <div class="header">
                    2$<br/><br/>
                    <span style="text-transform: none; font-size: 20px">На одного игрока в месяц</span>
                </div>
                <div class="body">
                    Мы посчитали на практике, что ели игрок предоставит слабый игровой компьтер (образца 2013 года) на
                    200<br/>
                    часов в месяц, то это принесет владельцуигры два доллара. А для мощного компьютера потребуется<br/>
                    всего 40 часов в месяц. При этом игрок самостоятельно управляет временем и ресурсом, который<br/>
                    он предоставляет.
                </div>
            </div>
        </div>
    </div>

    <div class="w-container motivation">
        <div class="section-title-group">


            <h3 class="centered section-heading">
                Зарегистрируйтесь как партнер - разработчик игр и получите первым<br/>
                доступ к SDK и ряд других стартовых преимуществ:
            </h3>

            <div class="center section-subheading">
                <a href="#" class="button-golden">
                    Регистрация
                </a>
            </div>

        </div>

    </div>

</div>

<div class="appeal section">
    <h3>
        Freed - новый способ монетизации, который может<br/>
        изменить игровую индустрию
    </h3>
    <h2>
        Сделаем игры бесплатными!
    </h2>
</div>

<div class="footer section std-bg">
    <div class="w-container">
        <div class="w-row socials">

            <div class="text">Следите за нами:</div>
            <div class="icons">
                <a href="#" target="_blank">
                    <img src="images/Twitter.svg"/>
                </a>
                <a href="#" target="_blank">
                    <img src="images/Facebook.svg"/>
                </a>
                <a href="#" target="_blank">
                    <img src="images/Instagram.svg"/>
                </a>
                <a href="#" target="_blank">
                    <img src="images/Linkedin.svg"/>
                </a>
                <a href="#" target="_blank">
                    <img src="images/Youtube.svg"/>
                </a>
                <a href="#" target="_blank">
                    <img src="images/Vk.svg"/>
                </a>
                <a href="#" target="_blank">
                    <img src="images/Medium.svg"/>
                </a>
            </div>
        </div>

        <div class="w-row contacts">
            <div class=" w-col w-col-2">
            </div>
            <div class="logo-bot w-col w-col-2">
                <img class="image-3" src="images/logo.svg">
            </div>
            <div class=" w-col w-col-1">
            </div>
            <div class="w-col w-col-2">
                <a href="#">
                    Проект компании<br/>TVX Games
                </a>
            </div>
            <div class="w-col w-col-2 pull-center">
                <a href="#">
                    Вакансии
                </a>
            </div>
            <div class="w-col w-col-2">
                <a href="#">
                    О компании
                </a>
            </div>
        </div>
    </div>
</div>

<a href="#" class="scrollup">Наверх</a>

<script type="text/javascript" src="js/nav.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.countdown.js" type="text/javascript"></script>
<script src="js/coins_config.js" type="text/javascript"></script>
<script src="js/webflow.js" type="text/javascript"></script>

</body>
</html>