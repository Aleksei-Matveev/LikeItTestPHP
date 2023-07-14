<?php
namespace TestTaskLikeIT;
require_once('classes/Matrix.php');

$matrix = new Matrix();
$res = $matrix->sizeMatrix(5)->getMatrix();
?>
<div class="container">
    <?php
    foreach ($res as $indexRow => $cols) {
        echo '<div class="rows">';
        foreach ($cols as $indexColl => $item) {
            echo "<span>{$item}</span>";
        }
        echo '</div>';
    }


    ?>
</div>
<style>
    .container {
        width: 250px;
        height: 250px;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        border: 4px double black;
        padding: 10px;
        margin: 0 auto;
    }

    .rows {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: space-between;
    }

    .rows span {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
