<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Измени название</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma-rtl.min.css">
    <link rel="shortcut icon" href="src/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/src/css/styles.css">
    <link rel="stylesheet" href="/src/css/media.css">
    <script src="src/js/pure.js"></script>
</head>
<body>
<header class="container">
    <div class="bg-1">
        <nav class="menu">
            <span class="hamburger" id="btn-menu" onclick="btnMenu()"></span>
            <ul class="menu-items">
                <li class="menu-item"><a href="#mainId">Главная</a></li>
                <li class="menu-item"><a href="#achivmentId">Достижения</a></li>
                <li class="menu-item"><a href="#resumeId">Резюме</a></li>
                <li class="menu-item"><a href="#recommendationId">Рекомендации</a></li>
                <li class="menu-item"><a href="#contactsId">Контакты</a></li>
            </ul>
        </nav>
        <div class="columns">
            <div class="column is-11">
                <div class="box-title">
                    <h1 class="title-1">Дорогу молодым специалистам!</h1>
                    <a class="about-us" href="#">О нас</a>
                </div>
            </div>
            <div class="column is-1">
                <div class="box-contacts">
                    <span><a href="#url-to-social"><img class="social-header" src="/src/img/facebook.png" alt="Facebook"></a></span>
                    <span><a href="#url-to-social"><img class="social-header" src="/src/img/telegram.png" alt="Telegram"></a></span>
                    <span><a href="#url-to-social"><img class="social-header" src="/src/img/vk.png" alt="VK"></a></span>
                    <span><a href="mailto:volosovczov@gmail.com?subject=С вашего сайта"><img class="social-header" src="/src/img/gmail.png" alt="VK"></a></span>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="container achivment" id="achivmentId">
    <h2 class="title-section">Личные Достижения</h2>
    <div class="columns" style="padding-top: 50px; padding-bottom: 50px;">
        <div class="column">
            <img class="circle" src="src/img/006-balloon.png" alt="balloon"/>
            <p class="little-title">Люблю животных</p>
            <p>Хуй гавно мочаа жопа</p>
        </div>
        <div class="column">
            <img class="circle" src="src/img/010-blackboard.png" alt="blackboard"/>
            <p class="little-title">Окончил школу и колледж</p>
            <p>Учился в МБОУ СОШ №7 и окончил Ставропольский Колледж Связи Имени Петрова</p>
        </div>
        <div class="column">
            <img class="circle" src="src/img/008-blocks.png" alt="blocks"/>
            <p class="little-title">ЯРазработчик</p>
            <p>Занимаюсь самыми разными проектами от создания сайтов и скриптов до мобильных приложений и серверов</p>
        </div>
    </div>
</section>
<section class="container resume" id="resumeId">
    <h3 class="title-section">Резюме</h3>
    <div class="columns" style="padding-top: 50px; padding-bottom: 50px;">
        <div class="column">
            <img class="me-img" src="src/img/045-boy.png" alt="Me">
            <p class="little-title">Здравствуйте, меня зовут Василий, мне 21 год</p>
            <p class="about-me-text">Я родился в городе Ставрополе 9 апреля 1999 года, не помню в каком году окончил учебу в МБОУ СОШ №7.
                После школы ушел учиться в Ставропольский Колледж Связи, там я познакомился с
                людьми которые открыли для меня с программирование, а так же помогли развиваться дальше,
                на 3 курсе я уже выполнял дипломные работы для выпусников, а в начале 4 курса устроился
                на работу backend разработчиком, где я очень много работал с Oracle и PostgreSQL.</p>
        </div>
    </div>
</section>
<section class="container recommendation" id="recommendationId">
    <h3 class="title-section">Рекомендации</h3>
    <div class="columns" style="padding-top: 50px; padding-bottom: 50px;">
        <?php include 'views/recommendation.php' ?>
    </div>
</section>
<section class="container contacts" id="contactsId">
    <div class="columns">
        <div class="column is-half white">
            <h5 class="title-section">Мой адрес</h5>
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae0359e487da9c9ebea41fd2faeaf11196844dce312d0c82e37b5fee5f8ba2b10&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
        <div class="column is-half gray">
            <p class="form-section">Вы можете заказать звонок</p>
            <div class="form">
                <label>
                    <input class="input-text" type="text" placeholder="Ваше имя" name="name">
                </label>
                <label>
                    <input class="input-text" type="text" placeholder="Номер телефона" name="phone">
                </label>
                <button class="btn-submit" onclick="sendMail()">Отправить</button>
            </div>
        </div>
    </div>
</section>
<footer class="container">
    <div class="columns">
        <div class="column is-one-fifth"></div>
        <div class="column is-three-fifths">
            <span><a href="#url-to-social"><img class="social" src="/src/img/facebook.png" alt="Facebook"></a></span>
            <span><a href="#url-to-social"><img class="social" src="/src/img/telegram.png" alt="Telegram"></a></span>
            <span><a href="#url-to-social"><img class="social" src="/src/img/vk.png" alt="VK"></a></span>
            <span><a href="mailto:volosovczov@gmail.com?subject=С вашего сайта"><img class="social" src="/src/img/gmail.png" alt="Gmail"></a></span>
        </div>
        <div class="column is-one-fifth"></div>
    </div>
</footer>
</body>
</html>