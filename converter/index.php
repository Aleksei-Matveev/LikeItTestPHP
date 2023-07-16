<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Конвертер валют</title>
</head>
<body>
<main>
    <div class="container">
        <h2>Онлайн конвертер</h2>
        <span class="description">* официальный курс НБРБ</span>
        <form action="" class="converter" method="post">
            <div class="field">
                <label for="source">USD</label>
                <input id="source" type="text" value="1">
            </div>
            <div class="field">
                <label for="result">BYN</label>
                <input id="result" type="text" name="result" disabled>
            </div>
            <div class="field-submit">
                <input type="submit" value="Конвертировать">
            </div>
        </form>
    </div>
</main>
<script src="js/main.js"></script>
</body>
</html>