<?php
require_once('classes/Rainbow.php');
$colors = Rainbow::getColors();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Радуга</title>
</head>
<body>
<main>
    <div class="container">
        <h2>Радуга</h2>
        <div class="wrapper">
            <?php
            foreach ($colors as $color) {
                echo "<div class='item' style='background-color:{$color['HTML']}' data-name='{$color['NAME']}'></div>";
            }
            ?>
        </div>
        <div>
            <span></span>
            <span id="result"></span>
        </div>
    </div>
</main>
<script src="js/main.js"></script>
</body>
</html>


