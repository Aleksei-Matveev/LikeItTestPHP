<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Отзывы</title>
</head>
<body>
<main>
    <section class="reviews">
        <div class="container">
            <h2>Отзывы</h2>
            <div class="header-block">
                <div class="sort-block">
                    <label>сортировка: </label><span> нет </span>/<span> по дате</span></div>
                <button id="show_modal" class="review__button">Добавить отзыв</button>
            </div>
            <div class="wrapper">
                <div class="review-card">
                    <p>Производительность для full hd топ. DLSS конечно решает. Без DLSS карта, уровня 1660 super.
                        Но охлаждение храмает, лучше ставить в продуваемый корпус ATX. И делать андервольт.
                        У меня получилось 0.825в, частота 1777 по ядру. По чипу 60, hotspot 80.
                        В стоке, частота 2000, 1.25в. Охлаждение не справляется. По чипу 80, hotspot 110.
                        При этом можно гнать память, + 1000 Мгц.
                    </p>
                    <div class="image-block">
                        <a href="uploads/1/1.jpg" target="_blank">
                            <img src="uploads/1/1.jpg">
                        </a>
                        <a href="uploads/1/2.jpg" target="_blank">
                            <img src="uploads/1/2.jpg">
                        </a>
                        <a href="uploads/1/3.jpg" target="_blank">
                            <img src="uploads/1/3.jpg">
                        </a>
                    </div>
                    <div class="info">
                        <h4>Илья, </h4>
                        <span>22.03.2023 в 13:58</span>
                    </div>
                </div>
                <div class="review-card">
                    <p>Одно из самых ужасных исполнений данной видеокарты. Одна теплотрубка на такой чип это по сути
                        ничего.
                        Два вентилятора, да, нормально. Но толку от них если остальная система охлаждения никакущая.
                        Даже у
                        одновентиляторной той же Асус Феникс их две и она холоднее. Люди, не берите это.
                    </p>
                    <div class="info">
                        <h4>Роман,</h4>
                        <span> 13.07.2022 в 08:22</span>
                    </div>
                </div>
                <div class="review-card">
                    <p>Греется под 75 градусов на 100% оборотах вертушек. Hot spot вообще под 90 градусов. Сделал
                        андервольт
                        через msi afterburner до 0.875. Теперь 60 градусов по чипу и 70 на hot spot. Производители карт
                        вообще не думают о напруге, зашивают максимально стабильный вольтаж с большим запасом под
                        разгон.
                        Из-за чего такие огрызки с ужасным охладом на одной теплотрубке просто плавятся в течении года.
                        На
                        секундочку - одновентиляторная палит stormx имеет 3 теплотрубки и на порядки холоднее этого
                        куска
                        пластика.
                        Достоинства: За такой прайс их нет
                    </p>
                    <div class="image-block">
                        <a href="uploads/3/1.jpg" target="_blank">
                            <img src="uploads/3/1.jpg">
                        </a>
                        <a href="uploads/3/2.jpg" target="_blank">
                            <img src="uploads/3/2.jpg">
                        </a>
                    </div>
                    <div class="info">
                        <h4>Jorik,</h4>
                        <span>03.04.2022 в 13:10 </span>
                    </div>
                </div>
                <div class="review-card">
                    <p>Взял под замену 1070. Справедливости ради, нужно отметить что у меня широкоформатный 2к-монитор.
                        Имейте это ввиду, читая отзыв.

                        По играм:
                        - Киберпанк - сразу мимо. У меня есть подозрение, что он ни на каком железе нормально не будет
                        работать. 50 кадров со включенным DLSS и выключенным RTX. К слову, на 1070 было 40 кадров.
                        - Вольфенштейн - на моём мониторе со включенным RTX тянет 60 кадров. Без RTX - 100.
                        - Танки - тут и ёжику понятно. Максимальные настройки, миллиард кадров/наносек и тп.

                        Прогнал карту тестами. Вот чё получил:
                        - 70-75 градусов на чипе для неё - норма. Не самые большие температуры, но многовато. Тест
                        памяти не
                        запускал
                        - Попробовал выжать кулер на максимум во время теста. Температуру сбрасывает, но как-то совсем
                        медленно и грустно

                        Гнать/капать зефир не пробовал. По шуму - не заметил разницы с 1070

                        Вывод. Карта под игры 2016-2018 года. Вольфенштайн и ведьмак - на максималках. Под 2-4к мониторы
                        и
                        киберпанк нужно что-то по цене машины.
                    </p>
                    <div class="info">
                        <h4>Антон,</h4>
                        <span>31.03.2022 в 23:09</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="modal-review hidden">
        <div class="modal-review__container">
            <button class="modal-review__close">
                <div class="modal-review__close-overlay"></div>
            </button>
            <h3 class="modal-review__title title">Оставить отзыв</h3>
            <form enctype="multipart/form-data" action="" method="post" class="modal-review__form">
                <input class="modal-review__input" type="text" required="" name="first_name" placeholder="Ваше имя">
                <input class="modal-review__input" type="email" required="" name="email" placeholder="Ваше email">
                <textarea class="modal-review__textarea" required="" name="message" placeholder="Ваш отзыв"></textarea>
                <input id="review-files" class="modal-review__input" type="file" name="files[]" placeholder="Ваше email"
                       multiple="multiple" accept="image">
                <div class="files-block">
                    <label class="add__files" for="review-files">Прикрепить изображения</label>
                    <span>изображения не выбраны</span>
                </div>
                <button class="review__button" type="submit">Отправить</button>
            </form>
        </div>
    </section>
    <div class="overlay-modal hidden"></div>
</main>
<script src="js/script.js"></script>
</body>
</html>