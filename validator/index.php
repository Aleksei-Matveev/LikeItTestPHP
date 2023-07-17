<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Валидатор</title>
</head>
<body>
<main>
    <h2>Валидатор</h2>
    <div class="container">
        <div class="inputs-block">
        </div>
        <div class="control-block">
            <button onclick="validator.addFieldInputs()">Добавить выражение</button>
            <button onclick="validator.validate()">Проверить</button>
        </div>
    </div>
</main>
<script src="js/main.js"></script>
</body>
</html>