<?php
$title = 'Отзывы';
require(__DIR__ . "/layouts/header.php");
$array = json_decode(file_get_contents('http://likeit.local/testimonials/api/getlist/'), true);
?>

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
                                $files = explode(';', $item['files']);
                                foreach ($files as $file): ?>
                                    <a href="uploads/<?= $item['id'] ?>/<?= $file ?>" target="_blank">
                                        <img src="uploads/<?= $item['id'] ?>/<?= $file ?>">
                                    </a>
                                <?php endforeach;
                            endif;
                            ?>
                        </div>
                        <div class="info">
                            <h4><?= $item['name'] ?>, </h4>
                            <span><?= date('d/m/y в H:i', strtotime($item['date'])) ?></span>
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
            <form enctype="multipart/form-data"  method="post" class="modal-review__form" id="add_review">
                <input class="modal-review__input" type="text"  name="first_name" placeholder="Ваше имя">
                <input class="modal-review__input" type="text"  name="email" placeholder="Ваше email">
                <textarea class="modal-review__textarea"  name="message" placeholder="Ваш отзыв"></textarea>
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
    <script src="<?= ROOT ?>/dist/js/index.js"></script>
<?php require(__DIR__ . "/layouts/footer.php"); ?>