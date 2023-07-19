<?php
require_once('../Classes/DB.php');
$db = DB::getInstance();

$sth = $db->prepare("SELECT *, (SELECT GROUP_CONCAT(NAME SEPARATOR ';') FROM images AS i WHERE r.id = i.review_id) AS files FROM review AS r, user AS u
WHERE r.author_id = u.id");
$sth->execute();
$array = $sth->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../dist/css/style.css">
    <title>Отзывы</title>
</head>
<body>
<main>
    <section class="reviews">
        <div class="container">
            <h2>Административный раздел</h2>
            <div class="header-block">
                <div class="sort-block">
                    <label>сортировка: </label><span> активне </span>/<span> неактивные</span>/<span> по дате</span>
                </div>
            </div>
            <div class="wrapper">
                <?php
                foreach ($array as $item):?>
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
                                <button class="deactivate-btn">Деактивировать</button>
                            <?php else: ?>
                                <button class="activate-btn">Активировать</button>
                            <?php endif; ?>
                            <button class="delete-btn">Удалить</button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</main>
</body>
</html>