<?php
spl_autoload_register(function ($class_name) {
    include 'app/Repository/' . $class_name . '.php';
});

$repository = new ReviewsRepository();

$array = $repository->getAll();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="dist/css/style.css">
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
                <?php
                foreach ($array as $item):?>
                    <div class="review-card">
                        <p><?= $item['review'] ?></p>
                        <div class="image-block">
                            <?php if (!empty($item['files'])):
                                $files = explode(';',$item['files'] );
                                foreach ($files as $file): ?>
                                    <a href="uploads/1/1.jpg" target="_blank">
                                        <img src="uploads/<?=$item['id']?>/<?= $file?>">
                                    </a>
                                <?php endforeach;
                            endif;
                            ?>
                        </div>
                        <div class="info">
                            <h4><?= $item['name']?>, </h4>
                            <span><?= date('d/m/y в H:i', strtotime($item['date']))?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
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
<script src="dist/js/script.js"></script>
</body>
</html>