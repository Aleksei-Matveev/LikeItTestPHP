<?php
namespace TestTaskLikeIT;
require_once('classes/Matrix.php');

$matrix = new Matrix();
$res = $matrix->calculateSumOfDiagonals()->getMatrix();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Сумма диагоналей матрицы</title>
</head>
<body>
<main>
    <h2>Сумма диагоналей матрицы</h2>
    <div class="container">
        <?php
        foreach ($res->matrix as $indexRow => $cols) {
            echo '<div class="rows">';
            foreach ($cols as $indexColl => $item) {
                echo "<span>{$item}</span>";
            }
            echo '</div>';
        }

        ?>
        <div class="result">
            <span>Сумма левой диагонали: <?php echo $res->sumLeftDiagonal; ?></span>
            <span>Сумма правой диагонали: <?php echo $res->sumRightDiagonal; ?> </span>
        </div>
    </div>
</main>
</body>
</html>
