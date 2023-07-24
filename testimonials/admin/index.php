<?php
$title = 'Админка';
require(dirname(__DIR__) . "/layouts/header.php");
$reviews = json_decode(file_get_contents('http://likeit.local/testimonials/admin/api/getlist/'), true);
?>
    <section class="reviews">
        <div class="container">
            <h2>Административный раздел</h2>
            <div class="header-block">
            </div>
            <div class="wrapper">
                <?php
                foreach ($reviews as $item):?>
                    <div class="review-card">
                        <div class="status">
                            <?php if ($item['active']): ?>
                                <span style="color: green">Опубликованно</span>
                            <?php else: ?>
                                <span style="color: red">Не опубликованно</span>
                            <?php endif; ?>
                        </div>
                        <p><?= $item['review'] ?></p>
                        <div class=" image-block">
                            <?php if (!empty($item['files'])):
                                $files = explode(';', $item['files']);
                                foreach ($files as $file): ?>
                                    <a href="uploads/1/1.jpg" target="_blank">
                                        <img src="../uploads/<?= $item['id'] ?>/<?= $file ?>">
                                    </a>
                                <?php endforeach;
                            endif;
                            ?>
                        </div>
                        <div class="info">
                            <h4><?= $item['name'] ?>, </h4>
                            <span><?= date('d/m/y в H:i', strtotime($item['date'])) ?></span>
                        </div>
                        <div class="controls-button-block">
                            <?php if ($item['active']): ?>
                                <button class="deactivate-btn status-btn" data-id="<?= $item['id'] ?>">Деактивировать
                                </button>
                            <?php else: ?>
                                <button class="activate-btn status-btn" data-id="<?= $item['id'] ?>">Активировать
                                </button>
                            <?php endif; ?>
                            <button class="delete-btn" data-id="<?= $item['id']?>">Удалить</button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <script src="<?= ROOT ?>/dist/js/admin.js"></script>

<?php require(dirname(__DIR__) . "/layouts/footer.php"); ?>